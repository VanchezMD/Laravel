<?php

namespace App\Http\Controllers;

use App\Models\Pasager;
use Illuminate\Http\Request;

class PasagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nume' => 'required|max:255',
            'prenume' => 'required',]);
        Pasager::create($request->all());
        return redirect()->back()->with('succes', 'Pasager adaugat cu succes!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasager  $pasager
     * @return \Illuminate\Http\Response
     */
    public function show(Pasager $pasager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasager  $pasager
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasager $pasager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pasager  $pasager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasager $pasager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasager  $pasager
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasager $pasager)
    {
        //
    }
}
