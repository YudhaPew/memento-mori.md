<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $desa = Desa::all();
        return response()->json($desa);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $desa = new Desa;
        $desa->code = $request->code;
        $desa->district_code = $request->district_code;
        $desa->name = $request->name;
        return response()->json($desa);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $desa = Desa::findOrFail($id);
        return response()->json($desa);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $desa = Desa::find($request->id);
        $desa->name = $request->name;
        $desa->save();
        return response()->json($desa);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $desa = Desa::findOrFail($id);
        $desa->delete();
        return response()->json($desa);
    }
}
