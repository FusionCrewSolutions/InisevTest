<?php

namespace App\Http\Controllers;

use App\Models\items;
use App\Http\Requests\StoreitemsRequest;
use App\Http\Requests\UpdateitemsRequest;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return items::paginate();
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
     * @param  \App\Http\Requests\StoreitemsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreitemsRequest $request)
    {
        return items::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\items  $items
     * @return \Illuminate\Http\Response
     */
    public function show(items $item)
    {
        return $item;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\items  $items
     * @return \Illuminate\Http\Response
     */
    public function edit(items $items)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateitemsRequest  $request
     * @param  \App\Models\items  $items
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateitemsRequest $request, items $item)
    {
        $item->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\items  $items
     * @return \Illuminate\Http\Response
     */
    public function destroy(items $items)
    {
        //
    }
}
