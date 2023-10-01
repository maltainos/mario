<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use App\Models\Direcao;
use Illuminate\Http\Request;

class DireccaoController extends Controller
{
    private $direcao;
    public function __construct(Direcao $direcao){
        $this->direcao = $direcao;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $direcao = new Direcao;
        $direcao->name = $request->name;
        $direcao->alias = str_replace(' ', '-',$request->name);
        $direcao->alias = strtolower($direcao->alias);
        $savedDirecao = $direcao->save();
        return redirect()->route('settings')->with('success', 'Direcao has bean add successfully');
    }

     /**
     * Display the specified resource.
     */
    public function showApi($alias)
    {
        $direcao = Direcao::where("alias", "=", $alias)->first();
        return $direcao->folders;
    }

    /**
     * Display the specified resource.
     */
    public function show($alias)
    {
        $direcao = Direcao::where("alias", "=", $alias)->first();
        return view('direcao.show', ['direcao' => $direcao]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($direcao)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Direcao $direcao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Direcao $direcao)
    {
        //
    }
}
