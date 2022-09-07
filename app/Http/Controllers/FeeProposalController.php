<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeeProposalRequest;
use App\Http\Requests\UpdateFeeProposalRequest;
use App\Models\FeeProposal;

class FeeProposalController extends Controller
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
     * @param  \App\Http\Requests\StoreFeeProposalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFeeProposalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeeProposal  $feeProposal
     * @return \Illuminate\Http\Response
     */
    public function show(FeeProposal $feeProposal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeeProposal  $feeProposal
     * @return \Illuminate\Http\Response
     */
    public function edit(FeeProposal $feeProposal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFeeProposalRequest  $request
     * @param  \App\Models\FeeProposal  $feeProposal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFeeProposalRequest $request, FeeProposal $feeProposal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeeProposal  $feeProposal
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeeProposal $feeProposal)
    {
        //
    }
}
