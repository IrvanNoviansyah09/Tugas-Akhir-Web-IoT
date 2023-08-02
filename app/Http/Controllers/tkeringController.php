<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datasensor;
use App\Models\datasensor3;
use Illuminate\Support\Facades\DB;

class TkeringController extends Controller
{
    public function index()
    {
        $data_sensor3 = datasensor3::all();
        return view('hasiltanah.tkering', compact('data_sensor3'));
    }

    public function deleteAll()
    {
        DB::table('datasensor3')->truncate();

        return redirect()->route('tkering')->with('success', 'Semua data berhasil dihapus.');
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
