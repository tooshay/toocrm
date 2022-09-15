<?php

namespace App\Http\Controllers;

class DownloadFeeProposalController extends Controller
{
    public function makePDF($invoices)
    {
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadView('invoices.invoice', compact('invoices'));
        $id = uniqid();
        $path = '/storage/tmp/invoices/'.$id.'.pdf';
        $pdf->save(public_path($path));

        return $path;
    }
}
