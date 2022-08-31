<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccountContactRequest;
use App\Http\Requests\UpdateAccountContactRequest;
use App\Models\AccountContact;

class AccountContactController extends Controller
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
     * @param  \App\Http\Requests\StoreAccountContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAccountContactRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AccountContact  $accountContact
     * @return \Illuminate\Http\Response
     */
    public function show(AccountContact $accountContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AccountContact  $accountContact
     * @return \Illuminate\Http\Response
     */
    public function edit(AccountContact $accountContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAccountContactRequest  $request
     * @param  \App\Models\AccountContact  $accountContact
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAccountContactRequest $request, AccountContact $accountContact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AccountContact  $accountContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(AccountContact $accountContact)
    {
        //
    }
}
