<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\Address\SaveRequest;
use App\Models\Address;

class AddressController extends Controller
{
    public function index()
    {
        $addresses = Address::all();
        return view('listing')->with (
            [
                'addresses' => $addresses,
            ]
        );
    }

    public function add()
    {
        return view('search');
    }

    public function search(
        Request $request
    ){
        $cep = $request->input(key: 'cep');
        $response = Http::get(url:"viacep.com.br/ws/$cep/json/")->json();

        return view('add')->with(
            [
                'cep' => $request->input('cep'),
                'logradouro' => $response['logradouro'],
                'bairro' => $response['bairro'],
                'cidade' => $response['localidade'],
                'estado' => $response['uf']
            ]
        );    
    }

    public function save (
        SaveRequest $request
    ) {
        $addresses = Address::where('cep', $request->input('cep'))->first();
        
        if(!$addresses) {
            $addresses = Address::create (
                [
                    'cep' => $request->input('cep'),
                    'logradouro' => $request->input('logradouro'),
                    'numero' => $request->input('numero'),
                    'bairro' => $request->input('bairro'),
                    'cidade' => $request->input('cidade'),
                    'estado' => $request->input('estado')
                ]
            );
            return redirect('/')->withSucesso('O endereço foi salvo com sucesso!');
        }
        return redirect('/')->withErro('O endereço já está cadastrado.');
    }

    public function sortingBairro()
    {

        $addresses = Address::orderBy('bairro', 'asc')->get();
        return view('listing')->with (
            [
                'addresses' => $addresses,
            ]
        );
    }

    public function sortingCidade()
    {

        $addresses = Address::orderBy('cidade', 'asc')->get();
        return view('listing')->with (
            [
                'addresses' => $addresses,
            ]
        );
    }

    public function sortingEstado()
    {

        $addresses = Address::orderBy('estado', 'asc')->get();
        return view('listing')->with (
            [
                'addresses' => $addresses,
            ]
        );
    }

    public function sortingBairroDesc()
    {

        $addresses = Address::orderBy('bairro', 'desc')->get();
        return view('listing')->with (
            [
                'addresses' => $addresses,
            ]
        );
    }

    public function sortingCidadeDesc()
    {

        $addresses = Address::orderBy('cidade', 'desc')->get();
        return view('listing')->with (
            [
                'addresses' => $addresses,
            ]
        );
    }

    public function sortingEstadoDesc()
    {

        $addresses = Address::orderBy('estado', 'desc')->get();
        return view('listing')->with (
            [
                'addresses' => $addresses,
            ]
        );
    }


}

