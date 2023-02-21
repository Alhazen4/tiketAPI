<?php

namespace App\Http\Controllers;

use App\Models\pesanan;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'code' => 200,
            'data' => pesanan::all()
        ]);
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
        pesanan::create($request->all());

        return response()->json([
            'message' => 'Transaksi Anda berhasil!',
            'code' => 200,
            'data' => $request->all()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $selected_pesanan = pesanan::find($id);

        return response()->json([
            'code' => 200,
            'data' => $selected_pesanan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pesanan $pesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pesanan=pesanan::find($id);
        $pesanan->update($request->all());
        return response()->json([
            'message' => "Pengubahan Pesanan berhasil!",
            'code' => 200,
            'data' =>$pesanan
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        pesanan::destroy($id);
        return response()->json([
            'message' => "Penghapusan Pesanan berhasil!",
            'code' => 200,
        ]);
    }
}
