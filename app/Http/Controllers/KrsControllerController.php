<?php

namespace App\Http\Controllers;

use App\Models\KrsController;
use Illuminate\Http\Request;

class KrsControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // echo "<h1>Krs Mahasiswa</h1>";
        return response()->json('krs mahasiswa');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        return response()->json($request);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KrsController  $krsController
     * @return \Illuminate\Http\Response
     */
    public function show(KrsController $krsController)
    {
        //
        return response()->json("menampilkan 1 mahasiswa");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KrsController  $krsController
     * @return \Illuminate\Http\Response
     */
    public function edit(KrsController $krsController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KrsController  $krsController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KrsController $krsController)
    {
        //
        return response()->json("Krs mahasiswa $krsController");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KrsController  $krsController
     * @return \Illuminate\Http\Response
     */
    public function destroy(KrsController $krsController)
    {
        //
        return response()->json("Krs mahasiswa $krsController");
    }
}
