<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Palestra;

class PalestraController extends Controller
{
    public function index()
    {
        $palestra = Palestra::All();
        return view('palestra.index', compact('palestra'));
    }

    public function create()
    {
        $palestra = Palestra::All();
        return view('palestra.create', compact('palestra'));
    }

    public function store(Request $request)
    {
        $palestra = new Palestra();
        $palestra->nome_palestra = $request->input('nome_palestra');
        $palestra->responsavel = $request->input('responsavel');
        $palestra->funcao_resp = $request->input('funcao_resp');

        $palestra->save();
        return redirect()->route('palestra.index', compact('palestra'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $palestra = Palestra::find($id);
        if(isset($palestra)){
            return view('palestra.edit', compact('palestra'));
        }
            return view('palestra.index');
    }

    public function update(Request $request, $id)
    {
        $palestra = Palestra::find($id);
        if (isset($palestra)) {
            $palestra->nome_palestra = $request->input('nome_palestra');
            $palestra->responsavel = $request->input('responsavel');
            $palestra->funcao_resp = $request->input('funcao_resp');
            $palestra->save();
        }
            return redirect()->route('palestra.index', compact('palestra'));
    }

    public function destroy($id)
    {
        $palestra = Palestra::find($id);
        if (isset($palestra)) {
            $palestra->delete();
        }
            return redirect()->route('palestra.index');
    }
}
