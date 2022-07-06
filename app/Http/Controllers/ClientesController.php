<?php

namespace App\Http\Controllers;

use App\Model\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Cliente $cliente)
    {
        $cliente=Cliente::paginate(5);
        return view('Page.index',[
            'clientes'=>$cliente
        ]);
    }
}
