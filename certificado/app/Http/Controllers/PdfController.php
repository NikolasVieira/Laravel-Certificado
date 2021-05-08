<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escola;
use App\Models\Palestra;
use PDF;

class PdfController extends Controller
{
    public function index()
    {
        $palestra = Palestra::All();
        return view('certificado.index', compact('palestra'));
    }

    public function show($id)
    {
        $escola = Escola::all();
        $palestra = Palestra::find($id);

        $pdf = PDF::loadView('certificado.show', compact('escola', 'palestra'));

        return $pdf->setPaper('a4', 'landscape')->stream('certificado.pdf');
    }
}
