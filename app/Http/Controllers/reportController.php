<?php

namespace App\Http\Controllers;

use App\Models\job;
use Dompdf\Adapter\PDFLib;
use Illuminate\Support\Facades\App;

// use Barryvdh\DomPDF\Facade\Pdf;
use PDF;
class reportController extends Controller
{
    public function generatePdf($id)
    {

        $job=job::find($id);


        $pdf =PDF::loadView('pdf',compact('job'));

        return $pdf->stream();

    }
}
