<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Folder;
use App\Models\Direcao;
use App\Models\Expediente;

class IncomeController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $direcoes = Direcao::all();
        return view('incomes\income_form', ['direcoes' => $direcoes]);
    }

    public function success()
    {
        return view('success');
    }

    public function store(Request $request){
        $expediente = Expediente::all();
        $request->validate([
            'code' => 'required|string|max:256|min:3',
            'firstName' => 'required|string|max:256|min:3',
            'lastName' => 'required|string|max:256|min:3',
            'email' => 'email|required|string|max:256|min:3',
            'phone' => 'required|string|max:18|min:9',
            'name' => 'required|string|max:256|min:3'
        ]);
        $tracerCode = 'UNIZA-'.strtoupper(Str::random(3)).$expediente->count();
        $data = [
            'tracer_code' => $tracerCode,
            'code' => $request->code,
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'name' => $request->name,
            'email' => $request->email,
            'course' => $request->course,
            'period' => $request->period,
            'phone' => $request->phone,
            'file' => $request->file,
            'period' => $request->period,
            'folder_id' => $request->folderId,
            'notes' => $request->notes
        ];
        $folder = Folder::find($request->folderId);
        try{
            $folder->expedientes()->create($data);
            return redirect()->route('success')->with('success', 'Expediente enviado com sucesso..! #TRACER CODE: '.$tracerCode);
        }catch(\Exception $e){
            return redirect()->route('income')->with('error', 'Falha ao enviar Expediente..!'.$e);
        }
    }

    public function show(string $tracerCode)
    {
        $returnValue = Expediente::where('tracer_code', $tracerCode)->get();
        return view('incomes.income', ['searchResult' => $returnValue, 'title' => '#Tracer ID: '.$tracerCode]);
    }

    public function send(string $tracerCode)
    {
        $departaments = Direcao::all();
        $returnValue = Expediente::where('tracer_code', $tracerCode)->get();

        return view('incomes.income_send', ['searchResult' => $returnValue, 'title' => '#Encaminhar ID: '.$tracerCode, 'departaments' => $departaments]);
    }
}
