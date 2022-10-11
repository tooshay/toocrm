<?php

namespace App\Http\Controllers;

class DownloadFeeProposalController extends Controller
{
    public function makePDF($models)
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadView('pdf.fee_proposal', compact('models'));
        dd($pdf);
        $id = uniqid();
        $path = '/storage/tmp/fee_proposals/' . $id . '.pdf';
        $d = $pdf->save(public_path($path));
        ray($d);
        return $path;
    }
}
