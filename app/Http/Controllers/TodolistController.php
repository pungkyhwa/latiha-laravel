<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Todolist::get();
        // foreach($data as $row){
        //     echo $row->id ."<br>";
        //     echo $row->kegiatan."<br>";
        //     echo $row->tanggal."<br>";
        //     echo $row->waktu."<br>";
        //     echo $row->keterangan."<br>";
        //     echo $row->status."<br>";
        // }
        return view('show', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kegiatan = $request->input('kegiatan');
        $tanggal = $request->input('tanggal');
        $waktu = $request->input('waktu');
        $keterangan = $request->input('keterangan');
        $status = $request->input('status');

        $save = new Todolist([
            'kegiatan' => $kegiatan,
            'tanggal' => $tanggal,
            'waktu' => $waktu,
            'keterangan' => $keterangan,
            'status' => $status,
        ]);
        $save->save();
        return redirect()->route('todolist');  
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
