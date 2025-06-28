<?php

namespace App\Http\Controllers;

use App\Models\golongan;
use Illuminate\Http\Request;

class GolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('view.welcome');
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
    public function show(golongan $golongan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(golongan $golongan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, golongan $golongan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(golongan $golongan)
    {
        //
    }
}
