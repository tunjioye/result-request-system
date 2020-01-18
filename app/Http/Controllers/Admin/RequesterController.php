<?php

namespace App\Http\Controllers\Admin;

use App\Requester;
use Illuminate\Http\Request;

class RequesterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.requesters.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Requester  $requester
     * @return \Illuminate\Http\Response
     */
    public function show(Requester $requester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Requester  $requester
     * @return \Illuminate\Http\Response
     */
    public function edit(Requester $requester)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Requester  $requester
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requester $requester)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Requester  $requester
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requester $requester)
    {
        //
    }
}
