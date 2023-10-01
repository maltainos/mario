<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\Direcao;
use App\Models\Folder;

class FolderController extends Controller
{

    private $folder;
    public function __construct(Folder $folder){
        $this->folder = $folder;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $direccoes = Direcao::all();
        $folders = $this->folder->paginate(10);
        return view('folders.index', ['folders' => $folders,'direccoes' => $direccoes]);
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
        $direcao = Direcao::find($request->direcaoId);
        $folders = $this->folder->paginate(10);
        $request->validate([
            'folderName' => 'required|string|max:256|min:3'
        ]);
        $alias = str_replace(' ', '-', $request->folderName);
        $alias = strtolower($alias);

        $codigo = 'UNIZA-'.strtoupper(Str::random(3)).$folders->total()+1;
        $data = [
            'codigo' => $codigo,
            'name' => $request->folderName,
            'direcao_id' => $request->direcaoId,
            'alias' => $alias
        ];
        try{
            $folder = $direcao->folders()->create($data);
            return response()->json($data, 201);
        }catch(\Exception $e){
            $message = $e->getMessage();
            return response()->json($message, 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $alias)
    {
        $folder = $this->folder::where("alias", "=", $alias)->first();
        return view('folders.show', ['folder' => $folder]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
