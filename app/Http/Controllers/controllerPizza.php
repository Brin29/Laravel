<?php

namespace App\Http\Controllers;

use App\Models\pizzaa;
use Illuminate\Http\Request;

class controllerPizza extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pizzas = pizzaa::all(); 
        return view('pizzas', compact('pizzas'));
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
    public function show(pizzaa $pizzaa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pizzaa $pizzaa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pizzaa $pizzaa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pizzaa $pizzaa)
    {
        //
    }
}