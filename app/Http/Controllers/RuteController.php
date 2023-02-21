<?php

namespace App\Http\Controllers;

use App\Models\Rute;
use App\Http\Requests\StoreRuteRequest;
use App\Http\Requests\UpdateRuteRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RuteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'code' => 200,
            'data' => Rute::all()
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
        Rute::create($request->all());

        return response()->json([
            'message' => 'Rute baru berhasil ditambah!',
            'code' => 200,
            'data' => $request->all()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $selected_rute = Rute::find($id);

        return response()->json([
            'code' => 200,
            'data' => $selected_rute
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rute $rute): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rute=Rute::find($id);
        $rute->update($request->all());
        return response()->json([
            'message' => "Pengubahan Rute berhasil!",
            'code' => 200,
            'data' =>$rute
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Rute::destroy($id);
        return response()->json([
            'message' => "Penghapusan Rute berhasil!",
            'code' => 200,
        ]);
    }
}
