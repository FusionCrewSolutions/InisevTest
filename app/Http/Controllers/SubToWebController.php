<?php

namespace App\Http\Controllers;

use App\Models\SubToWeb;
use App\Http\Requests\StoreSubToWebRequest;
use App\Http\Requests\UpdateSubToWebRequest;

class SubToWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SubToWeb::paginate();
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
     * @param  \App\Http\Requests\StoreSubToWebRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubToWebRequest $request)
    {
        return SubToWeb::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubToWeb  $subToWeb
     * @return \Illuminate\Http\Response
     */
    public function show(SubToWeb $subToWeb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubToWeb  $subToWeb
     * @return \Illuminate\Http\Response
     */
    public function edit(SubToWeb $subToWeb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubToWebRequest  $request
     * @param  \App\Models\SubToWeb  $subToWeb
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubToWebRequest $request, SubToWeb $subToWeb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubToWeb  $subToWeb
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubToWeb $subToWeb)
    {
        //
    }
}
