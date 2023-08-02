<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datasensor;
use App\Models\Solana;
use App\Models\Chenopodia;
use App\Models\Fabaceae;

class AhpsuburController extends Controller
{
    /**
     * Display the AHP result page.
     */
    public function index()
    {
        // Ambil data sensor dari database
        $data_sensor = Datasensor::select('ph_tanah', 'temperature', 'nilai_stanah', 'nilai_lembab')->get();

        if ($data_sensor->isEmpty()) {
            $errorMessage = "Tidak ada data sensor yang tersedia.";
            return view('ahp.ahpsubur', compact('errorMessage'));
        }

        // Hitung rata-rata nilai sensor
        $ph_tanah_avg = $this->calculateAverage($data_sensor->pluck('ph_tanah')->toArray());
        $temperature_avg = $this->calculateAverage($data_sensor->pluck('temperature')->toArray());
        $nilai_stanah_avg = $this->calculateAverage($data_sensor->pluck('nilai_stanah')->toArray());
        $nilai_lembab_avg = $this->calculateAverage($data_sensor->pluck('nilai_lembab')->toArray());

        // Data bobot kriteria
        $weights = [
            'ph_tanah' => 0.548,
            'nilai_stanah' => 0.256,
            'temperature' => 0.145,
            'nilai_lembab' => 0.052,
        ];

        // Data subkriteria dan bobot prioritas subkriteria
        $subcriteria = [
            'ph_tanah' => [
                ['range' => [5.5, 6, 6.5, 7, 7.5], 'value' => 0.608],
                ['range' => [PHP_INT_MIN, 5.4], 'value' => 0.233],
                ['range' => [7.6, PHP_INT_MAX], 'value' => 0.233],
                ['range' => [PHP_INT_MIN, 4], 'value' => 0.141],
                ['range' => [8, PHP_INT_MAX], 'value' => 0.141],
                ['range' => [PHP_INT_MIN, 2], 'value' => 0.050],
                ['range' => [9, PHP_INT_MAX], 'value' => 0.050],
            ],
            'nilai_stanah' => [
                ['range' => [20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30], 'value' => 0.608],
                ['range' => [PHP_INT_MIN, 18], 'value' => 0.233],
                ['range' => [31, PHP_INT_MAX], 'value' => 0.233],
                ['range' => [PHP_INT_MIN, 15], 'value' => 0.141],
                ['range' => [40, PHP_INT_MAX], 'value' => 0.141],
                ['range' => [PHP_INT_MIN, 10], 'value' =>  0.050],
                ['range' => [45, PHP_INT_MAX], 'value' =>  0.050],
            ],
            'temperature' => [
                ['range' => [20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30], 'value' => 0.608],
                ['range' => [PHP_INT_MIN, 18], 'value' => 0.233],
                ['range' => [31, PHP_INT_MAX], 'value' => 0.233],
                ['range' => [PHP_INT_MIN, 15], 'value' => 0.141],
                ['range' => [40, PHP_INT_MAX], 'value' => 0.141],
                ['range' => [PHP_INT_MIN, 10], 'value' => 0.050],
                ['range' => [45, PHP_INT_MAX], 'value' => 0.050],
            ],
            'nilai_lembab' => [
                ['range' => [50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80], 'value' => 0.608],
                ['range' => [-INF, 54], 'value' => 0.233],
                ['range' => [81, PHP_INT_MAX], 'value' => 0.233],
                ['range' => [-INF, 40], 'value' => 0.141],
                ['range' => [85, PHP_INT_MAX], 'value' => 0.141],
                ['range' => [-INF, 30], 'value' => 0.050],
                ['range' => [90, PHP_INT_MAX], 'value' => 0.050],
            ],
        ];

        // Menentukan alternatif tanaman berdasarkan hasil perhitungan AHP
        $alternatives = array_merge(
            Solana::select('nama', 'ph', 'kelembaban', 'suhu_tanah', 'suhu_udara')->get()->toArray(),
            Chenopodia::select('nama', 'ph', 'kelembaban', 'suhu_tanah', 'suhu_udara')->get()->toArray(),
            Fabaceae::select('nama', 'ph', 'kelembaban', 'suhu_tanah', 'suhu_udara')->get()->toArray()
        );

        // Panggil fungsi perhitungan AHP
        $rankingSubur = $this->calculateAHP($ph_tanah_avg, $temperature_avg, $nilai_stanah_avg, $nilai_lembab_avg, $weights, $subcriteria, $alternatives);

        return view('ahp.ahpsubur', compact('rankingSubur'));
    }


    /**
     * Calculate the average of an array of values.
     */
    private function calculateAverage($values)
    {
        return array_sum($values) / count($values);
    }

    /**
     * Calculate the AHP based on the given data.
     */
    private function calculateAHP($ph_tanah_avg, $temperature_avg, $nilai_stanah_avg, $nilai_lembab_avg, $weights, $subcriteria, $alternatives)
    {
        $rankingSubur = [];
        // Iterasi setiap alternatif tanaman
        foreach ($alternatives as $alternative) {
            // Ambil nama tanaman dari data alternatif
            $namaTanaman = $alternative['nama'];

            // Inisialisasi total prioritas untuk alternatif tanaman
            $totalPrioritas = 0;

            // Iterasi setiap kriteria
            foreach ($weights as $kriteria => $bobot) {
                // Ambil nilai sensor untuk kriteria tertentu
                $nilaiSensor = $this->getSensorValue($kriteria, $alternative);

                // Cari subkriteria yang sesuai dengan nilai sensor
                $prioritasSubkriteria = 0;
                foreach ($subcriteria[$kriteria] as $subkriteria) {
                    $range = $subkriteria['range'];
                    $prioritas = $subkriteria['value'];

                    $rangeCount = count($range);
                    for ($i = 0; $i < $rangeCount - 1; $i++) {
                        if ($nilaiSensor >= $range[$i] && $nilaiSensor < $range[$i + 1]) {
                            $prioritasSubkriteria = $prioritas;
                            break;
                        }
                    }
                }

                // Hitung prioritas kriteria berdasarkan bobot kriteria dan prioritas subkriteria
                $prioritasKriteria = $bobot * $prioritasSubkriteria;

                // Tambahkan prioritas kriteria ke total prioritas alternatif tanaman
                $totalPrioritas += $prioritasKriteria;
            }

            // Tambahkan nama tanaman dan total prioritas ke hasil perankingan
            $rankingSubur[] = [
                'nama_tanaman1' => $namaTanaman,
                'total_prioritas1' => $totalPrioritas,
            ];
        }

        // Urutkan hasil perankingan berdasarkan total prioritas secara descending
        usort($rankingSubur, function ($a, $b) {
            return $b['total_prioritas1'] <=> $a['total_prioritas1'];
        });

        return $rankingSubur;
    }

    private function getSensorValue($criteria, $alternative)
    {
        switch ($criteria) {
            case 'ph_tanah':
                return $alternative['ph'];
            case 'temperature':
                return $alternative['suhu_tanah'];
            case 'nilai_stanah':
                return $alternative['suhu_udara'];
            case 'nilai_lembab':
                return $alternative['kelembaban'];
            default:
                return 0;
        }
    }
}
