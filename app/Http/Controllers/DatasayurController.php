<?php

namespace App\Http\Controllers;

use App\Models\chenopodia;
use App\Models\fabaceae;
use App\Models\solana;
use Illuminate\Http\Request;

class DatasayurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_sayur_solana = solana::all();
        $data_sayur_fabaceae = fabaceae::all();
        $data_sayur_chenopodia = chenopodia::all();

        $count_solana = count($data_sayur_solana);
        $count_fabaceae = count($data_sayur_fabaceae);
        $count_chenopodia = count($data_sayur_chenopodia);

        return view('tanamansayuran.datasayuran', compact('data_sayur_solana', 'data_sayur_fabaceae', 'data_sayur_chenopodia', 'count_solana', 'count_fabaceae', 'count_chenopodia'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createsolana()
    {
        return view('tanamansayuran.tambahsolana');
    }

    public function createfabaceae()
    {
        return view('tanamansayuran.tambahfabaceae');
    }

    public function createchenopodia()
    {
        return view('tanamansayuran.tambahchenopodia');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storesolana(Request $request)
    {
        Solana::create([
            'nama' => $request->input('nama'),
            'ph' => $request->input('ph'),
            'kelembaban' => $request->input('kelembaban'),
            'suhu_tanah' => $request->input('suhu_tanah'),
            'suhu_udara' => $request->input('suhu_udara'),
        ]);

        return redirect('datasayuran')->with('success', 'Data berhasil ditambahkan.');
    }

    public function storefabaceae(Request $request)
    {
        fabaceae::create([
            'nama' => $request->input('nama'),
            'ph' => $request->input('ph'),
            'kelembaban' => $request->input('kelembaban'),
            'suhu_tanah' => $request->input('suhu_tanah'),
            'suhu_udara' => $request->input('suhu_udara'),
        ]);

        return redirect('datasayuran')->with('success', 'Data berhasil ditambahkan.');
    }

    public function storechenopodia(Request $request)
    {
        chenopodia::create([
            'nama' => $request->input('nama'),
            'ph' => $request->input('ph'),
            'kelembaban' => $request->input('kelembaban'),
            'suhu_tanah' => $request->input('suhu_tanah'),
            'suhu_udara' => $request->input('suhu_udara'),
        ]);

        return redirect('datasayuran')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editsolana($id)
    {
        $data_sayur_solana = solana::find($id);
        return view('tanamansayuran.editsolana', compact('data_sayur_solana'));
    }

    public function editfabaceae($id)
    {
        $data_sayur_fabaceae = fabaceae::find($id);
        return view('tanamansayuran.editfabaceae', compact('data_sayur_fabaceae'));
    }

    public function editchenopodia($id)
    {
        $data_sayur_chenopodia = chenopodia::find($id);
        return view('tanamansayuran.editchenopodia', compact('data_sayur_chenopodia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatesolana(Request $request, $id)
    {
        $data_sayur_solana = Solana::find($id);
        $data_sayur_solana->update($request->all());
        return redirect('datasayuran')->with('success', 'Data berhasil diupdate.');
    }

    public function updatefabaceae(Request $request, $id)
    {
        $data_sayur_fabaceae = fabaceae::find($id);
        $data_sayur_fabaceae->update($request->all());
        return redirect('datasayuran')->with('success', 'Data berhasil diupdate.');
    }

    public function updatechenopodia(Request $request, $id)
    {
        $data_sayur_chenopodia = chenopodia::find($id);
        $data_sayur_chenopodia->update($request->all());
        return redirect('datasayuran')->with('success', 'Data berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroysolana($id)
    {
        $data_sayur_solana = Solana::find($id);
        $data_sayur_solana->delete();
        return redirect('datasayuran')->with('success', 'Data berhasil dihapus.');
    }

    public function destroyfabaceae($id)
    {
        $data_sayur_fabaceae = fabaceae::find($id);
        $data_sayur_fabaceae->delete();
        return redirect('datasayuran')->with('success', 'Data berhasil dihapus.');
    }

    public function destroychenopodia($id)
    {
        $data_sayur_chenopodia = chenopodia::find($id);
        $data_sayur_chenopodia->delete();
        return redirect('datasayuran')->with('success', 'Data berhasil dihapus.');
    }
}
