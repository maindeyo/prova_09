<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Automovel;
use Illuminate\Support\Facades\Auth;

class AutomovelController extends Controller
{

    public function create () {
        return view ('automovel.cadastrar');
    }

    // public function edit ($id) {
    //     $automovel = Automovel::find($id);
    //     return view ('automovel.edit' , ['automovel' => $automovel]);
    // }

    public function update(Request $request, $id) {   
    $automovel = Automovel::find($id);
    $automovel->modelo= $request->input('modelo');
    $automovel->ano= $request->input('ano');
    $automovel->fabricante= $request->input('fabricante');
    $automovel->quilometragem= $request->input('quilometragem');

    $automovel->save();

    return redirect()->route('automovel.show')->with('success', 'Informações atualizadas com sucesso.');
}


    public function delete ($id) {
        $automovel = Automovel::find($id);
        if (!$automovel) {
            echo 'erro';
        }else {
            $automovel->delete();
        }
        return redirect()->route('show.automovel');

    }


    public function index() {
        $automoveis = Automovel::all();
        return view('automovel.show', ['automoveis' => $automoveis]);
    }


    public function store (Request $request) {
        $modelo = $request->post('modelo');
        $ano = $request->post('ano');
        $fabricantes = $request->post('fabricantes');
        $quilometragem = $request->post('quilometragem');

        $automovel = new Automovel();
        $automovel->modelo=$modelo;
        $automovel->ano=$ano;
        $automovel->fabricante=$fabricantes;
        $automovel->quilometragem=$quilometragem;
        $automovel->user_id=Auth::id();
        
        //aplica INSER INTO
        $automovel->save();
        return redirect(url('/automovel/show')); 
}
}
