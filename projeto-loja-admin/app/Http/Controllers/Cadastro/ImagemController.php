<?php

namespace App\Http\Controllers\Cadastro;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImagemRequest;
use App\Models\Categoria;
use App\Models\Imagem;
use App\Models\ImagemProduto;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage as FacadesStorage;
use Storage;

class ImagemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados["lista"]         = Imagem::get();
        $dados["categorias"]    = Categoria::get();
        $dados["produtoJs"]     = true;
        $dados["categoriaJs"]   = true;
        return view("Cadastro.Imagem.Index", $dados);
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
        try {
            $img = new \stdClass();
            $img->categoria_id = request()->categoria_id;
            $img->titulo = request()->titulo;

            if (request()->hasFile('imagem') && request()->imagem->isValid()) {
                $file = request()->file("imagem");
                $img->imagem = $file->store("upload/imagens");
            }else{
                throw new Exception("Selecione um imagem primeiramente");
            }
            Imagem::create(objToArray($img));

            return redirect()->route("imagem.index")->with("msg_sucesso", "Registro Inserido com Sucesso");
        } catch (\Exception $e) {
            return redirect()->back()->with(['msg_erro' => 'Erro ao inserir imagem: ' . $e->getMessage()]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        try {
            $imagem = Imagem::find($id);
            if($imagem){
               if($imagem->delete()){
                 if(Storage::disk('public')->exists( $imagem->imagem )){
                    Storage::disk('public')->delete($imagem->imagem);
                 }
                 return redirect()->route("imagem.index")->with("msg_sucesso", "Registro Excluido com Sucesso");
               }
            }else{
                return redirect()->route("imagem.index")->with("msg_erro", "Registro não encontrado");
            }
        }catch (\Throwable $th) {
            return redirect()->back()->with("msg_erro", "Erro: " . $th->getMessage());
        }
    }
}
