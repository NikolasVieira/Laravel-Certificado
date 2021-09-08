<?php

namespace App\Http\Controllers;

use App\Models\Escola;
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
        $escola = Escola::All();
        $palestra = Palestra::All();
        return view('palestra.create', compact('palestra', 'escola'));
    }

    public function store(Request $request)
    {
        $palestra = new Palestra();
        $palestra->escola_id = $request->input('escola_id');
        $palestra->palestrante = $request->input('palestrante');
        $palestra->tema = $request->input('tema');
        $palestra->periodo = $request->input('periodo');
        $palestra->cidade = $request->input('cidade');
        $palestra->horas = $request->input('horas');

        $palestra->save();
        return redirect()->route('palestra.index', compact('palestra'));
    }

    public function show($id)
    {
        $escola = Escola::All();
        $palestra = Palestra::find($id);

        if(isset($palestra)){
            return view('palestra.show', compact('palestra', 'escola'));
        }
            return view('palestra.index');

    }

    public function edit($id)
    {
        $escola = Escola::All();
        $palestra = Palestra::find($id);
        if(isset($palestra)){
            return view('palestra.edit', compact('palestra', 'escola'));
        }
            return view('palestra.index');
    }

    public function update(Request $request, $id)
    {
        $palestra = Palestra::find($id);
        if (isset($palestra)) {
            $palestra->escola_id    = $request->input('escola_id');
            $palestra->palestrante  = $request->input('palestrante');
            $palestra->tema         = $request->input('tema');
            $palestra->periodo      = $request->input('periodo');
            $palestra->cidade       = $request->input('cidade');
            $palestra->horas        = $request->input('horas');
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
