<?php

namespace App\Http\Controllers;

use App\Models\kelas_bis;
use App\Http\Requests\Storekelas_bisRequest;
use App\Http\Requests\Updatekelas_bisRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KelasBisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'code' => 200,
            'data' => kelas_bis::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        kelas_bis::create($request->all());

        return response()->json([
            'message' => 'Kelas bis baru berhasil ditambah!',
            'code' => 200,
            'data' => $request->all()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $selected_kelasBis = kelas_bis::find($id);

        return response()->json([
            'code' => 200,
            'data' => $selected_kelasBis
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kelas_bis $kelas_bis): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kelasBis=kelas_bis::find($id);
        $kelasBis->update($request->all());
        return response()->json([
            'message' => "Pengubahan Kelas Bis berhasil!",
            'code' => 200,
            'data' =>$kelasBis
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        kelas_bis::destroy($id);
        return response()->json([
            'message' => "Penghapusan Kelas Bis berhasil!",
            'code' => 200,
        ]);
    }
}
