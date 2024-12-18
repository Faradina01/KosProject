<?php

namespace App\Http\Controllers;

use App\Models\Pengelola;
use Illuminate\Http\Request;

class PengelolaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(view:'Pengelola_index');
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
    public function show(Pengelola $pengelola)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengelola $pengelola)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengelola $pengelola)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengelola $pengelola)
    {
        //
    }
}
