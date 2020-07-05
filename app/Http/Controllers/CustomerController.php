<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer; 

class CustomerController extends Controller
{
 
        public function index()
        {
            $registros = Customer::all();
            return view('index', compact('registros'));
        }
    
        
        public function add()
        {
            return view ('add'); 
        }

        public function salvar (Request $req)
        {
            $dados = $req->all();
            $novoDado = new Customer();
            $novoDado->fill($dados);
            $novoDado->save();

            return redirect()->back();        
         }
}



