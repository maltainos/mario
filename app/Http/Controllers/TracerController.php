<?php

namespace App\Http\Controllers;

use App\Models\Direcao;
use App\Models\Expediente;
use Illuminate\Http\Request;

class TracerController extends Controller
{

    public function store(Request $request, string $tracerCode){
        $to = Direcao::find($request->to);
        $from = Direcao::find($request->from);
        $returnValue = Expediente::where('tracer_code', $tracerCode)->first();

        $data = [
            'to' => $request->to,
            'from' => $request->to,
            'expediente_id' => $returnValue->id,
            'subject' => $request->subject,
            'notes' => $request->notes,
            'file' => $request->file
        ];
        $trace = $returnValue->tracer()->create($data);
    }
}
