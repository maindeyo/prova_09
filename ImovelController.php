<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imovel;

class ImovelController extends Controller
{

    public function index() {
        $imoveis = Imovel::all();
        return view('imovel.show', ['imoveis' => $imoveis]);
    }

    public function create () {
        return view ('imovel.cadastrar');

    }
    
    public function show () {
        return view ('imovel.show');

    }

    public function delete ($id) {
        $imovel = Imovel::find($id);
        if (!$imovel) {
            echo 'errp';
        }else {
            $imovel->delete();
        }
        return redirect()->route('show.imovel');
    }

    public function store (Request $request) {
        $local = $request->post('local');
        $valor = $request->post('valor');
        $nquartos = $request->post('nquartos');
        $piscina = $request->post('piscina');
        $userid=Auth()->user()->id;

        $imovel = new Imovel;
        $imovel->localizacao=$local;
        $imovel->num_quartos=$nquartos;
        $imovel->piscina=$piscina;
        $imovel->valor=$valor;
        $imovel->user_id=$userid;
        
        //aplica INSER INTO
        $imovel->save();
        return redirect(url('/imovel/show')); 
    
}
}
