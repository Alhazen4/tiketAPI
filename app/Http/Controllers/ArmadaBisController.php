<?php

namespace App\Http\Controllers;

use App\Models\armada_bis;
use App\Http\Requests\Updatearmada_bisRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ArmadaBisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'code' => 200,
            'data' => armada_bis::all()
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
        armada_bis::create($request->all());

        return response()->json([
            'message' => 'Bis baru berhasil ditambah!',
            'code' => 200,
            'data' => $request->all()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $selected_armadaBis= armada_bis::find($id);

        return response()->json([
            'code' => 200,
            'data' => $selected_armadaBis
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(armada_bis $armada_bis): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $armadaBis=armada_bis::find($id);
        $armadaBis->update($request->all());
        return response()->json([
            'message' => "Pengubahan Armada Bis berhasil!",
            'code' => 200,
            'data' =>$armadaBis
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        armada_bis::destroy($id);
        return response()->json([
            'message' => "Penghapusan Armada Bis berhasil!",
            'code' => 200,
        ]);
    }
}
