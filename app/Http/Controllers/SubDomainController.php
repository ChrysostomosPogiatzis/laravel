<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubDomainRequest;
use App\Http\Requests\UpdateSubDomainRequest;
use App\Models\SubDomain;

class SubDomainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreSubDomainRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubDomainRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubDomain  $subDomain
     * @return \Illuminate\Http\Response
     */
    public function show(SubDomain $subDomain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubDomain  $subDomain
     * @return \Illuminate\Http\Response
     */
    public function edit(SubDomain $subDomain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubDomainRequest  $request
     * @param  \App\Models\SubDomain  $subDomain
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubDomainRequest $request, SubDomain $subDomain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubDomain  $subDomain
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubDomain $subDomain)
    {
        //
    }
}
