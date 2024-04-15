<?php

namespace App\Http\Controllers;

use App\Models\Compare;
use Illuminate\Http\Request;

class CompareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function viewpage()
    {
        return view('frontend.compare');
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
    public function show(Compare $compare)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Compare $compare)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Compare $compare)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Compare $compare)
    {
        //
    }
}
