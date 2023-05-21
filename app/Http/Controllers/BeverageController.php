<?php

namespace App\Http\Controllers;

use App\Models\Beverage;
use Illuminate\Http\Request;

class BeverageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Beverage::all();
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
        $beverage = new Beverage($request->all());
        $beverage->save();
        return $beverage;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Beverage::query()->where('id', $id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $beverage = Beverage::query()->where('id', $id)->first();
        $beverage->update($request->all());
        return $beverage;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Beverage::query()->where('id', $id)->first()->delete();
        return ["success" => true];
    }
}
