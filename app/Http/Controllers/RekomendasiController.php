<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datasensor;
use App\Models\datasensor2;
use App\Models\datasensor3;
use App\Models\Solana;
use App\Models\Chenopodia;
use App\Models\Fabaceae;

class RekomendasiController extends Controller
{
    /**
     * Display the AHP result page.
     */
    public function index(Request $request)
    {
        $rankingSubur = $request->session()->get('rankingSubur');
        $rankingKering = $request->session()->get('rankingKering');
        $rankingBasah = $request->session()->get('rankingBasah');

        return view('ahp.rekomendasi', compact('rankingSubur', 'rankingKering', 'rankingBasah'));
    }

    public function showRekomendasi(Request $request)
    {
        // ...
        
        $request->session()->put('rankingSubur', $rankingSubur);
        $request->session()->put('rankingKering', $rankingKering);
        $request->session()->put('rankingBasah', $rankingBasah);

        return redirect()->route('rekomendasi');
    }
}
