<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datasensor;
use App\Models\datasensor2;
use Illuminate\Support\Facades\DB;

class tbasahController extends Controller
{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');

        $data_sensor2 = datasensor2::all();
        
        return view('hasiltanah.tbasah', compact('data_sensor2'));
    }

    public function deleteAll()
    {
        DB::table('datasensor2')->truncate();

        return redirect()->route('tbasah')->with('success', 'Semua data berhasil dihapus.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
