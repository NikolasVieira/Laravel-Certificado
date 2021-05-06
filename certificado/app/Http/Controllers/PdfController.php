<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escola;
use App\Models\Palestra;
use PDF;

class PdfController extends Controller
{
    public function geraPdf()
    {
        $escola = Escola::all();
        $palestra = Palestra::all();
        $pdf = PDF::loadView('pdf.index', compact('escola', 'palestra'));

        return $pdf->setPaper('a4', 'landscape')->stream('certificado.pdf');
    }
    public function show($id)
    {
        $escola = Escola::all();
        $palestra = Palestra::find($id);
        $pdf = PDF::loadView('pdf.show', compact('escola', 'palestra'));
        
        if (isset($palestra)) {
            return $pdf->setPaper('a4', 'landscape')->stream('certificado.pdf');
        }
            return view('palestra.index');
    }
}
