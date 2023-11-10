<?php

namespace App\Http\Controllers;

use App\Models\tbbarang;
use App\Http\Requests\StoretbbarangRequest;
use App\Http\Requests\UpdatetbbarangRequest;
use GuzzleHttp\Psr7\Response;

class TbbarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tbbarangs.data')->with([
            'tbbarangs'=> tbbarang::all()
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
    public function store(StoretbbarangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(tbbarang $tbbarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tbbarang $tbbarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetbbarangRequest $request, tbbarang $tbbarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tbbarang $tbbarang)
    {
        //
    }
}
