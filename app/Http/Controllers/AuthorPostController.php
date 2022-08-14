<?php

namespace App\Http\Controllers;

use App\Models\AuthorPost;
use App\Http\Requests\StoreAuthorPostRequest;
use App\Http\Requests\UpdateAuthorPostRequest;

class AuthorPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AuthorPost::paginate();
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
     * @param  \App\Http\Requests\StoreAuthorPostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAuthorPostRequest $request)
    {
        return AuthorPost::create($request->all());

        //Send mail to subscriber------
        Mail::to('test@inisev.com')->send(new NewPostNotif($name));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AuthorPost  $authorPost
     * @return \Illuminate\Http\Response
     */
    public function show(AuthorPost $authorPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AuthorPost  $authorPost
     * @return \Illuminate\Http\Response
     */
    public function edit(AuthorPost $authorPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAuthorPostRequest  $request
     * @param  \App\Models\AuthorPost  $authorPost
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAuthorPostRequest $request, AuthorPost $authorPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AuthorPost  $authorPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuthorPost $authorPost)
    {
        //
    }
}
