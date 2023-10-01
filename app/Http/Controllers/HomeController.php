<?php

namespace App\Http\Controllers;

use App\Models\Tracer;
use App\Models\Direcao;
use App\Models\Expediente;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private $direcao;
    public function __construct(Direcao $direcao){
        $this->direcao = $direcao;
    }

    public function index(){
        $alias = Auth::user()->role;
        $direcoes = $this->direcao->all();
        $files = Expediente::all();
        if($alias != 'Admin'){
            $direcao = Direcao::where('alias', $alias)->first();
            $tracerSend = Tracer::where('from', $direcao->id)->get();
            $tracerReceive = Tracer::where('to', $direcao->id)->get();
            return view('welcome', ['direcoes' => $direcoes, 'files' => $files, 'tracerSend' => $tracerSend, 'tracerReceive' => $tracerReceive]);
        }

        return view('welcome', ['direcoes' => $direcoes, 'files' => $files]);
    }

    public function tracer()
    {
        return view('tracer');
    }
    public function search(Request $request)
    {
        $email = $request->email;
        $phone = $request->phone;
        $code =$request->code;
        $returnValue = Expediente::where('email', '=',$email)
                ->where('phone', '=',$phone)
                ->where('tracer_code','=',$code)->get();

        $title = (count($returnValue) == 0) ? 'FACA UMA BUSCA' : 'Resultado da sua busca';

        return view('tracer-result', ['searchResult' => $returnValue, 'email' => $email, 'code' => $code, 'phone' => $phone, 'title' => $title]);
    }

}
