<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Postagem;


class PostagemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postagens = Postagem::orderby('ID', 'ASC')->get();
        return view('postagem.postagem_index', compact('postagens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('postagem.postagem_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'nome' => 'required|min:5',
        ]);

        $postagem = New Postagem();
        $postagem->nome = $request->nome;
        $postagem->save();

        return  redirect()->route('postagem.index')->with('mensagem', 'Postagem cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //dd('show: ' . $id);
        $postagem = Postagem::find($id);
        return view('postagem.postagem_show', compact('postagem'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $postagem = Postagem::find($id);
        return view('postagem.postagem_edit', compact('postagem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nome' => 'required|min:5',
        ]);

        $postagem = Postagem::find($id);
        $postagem->nome = $request->nome;
        $postagem->save();

        return  redirect()->route('postagem.index')->with('mensagem', 'Postagem alterada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $postagem = Postagem::find($id);
        $postagem->delete();

        return  redirect()->route('postagem.index')->with('exclusao', 'Postagem EXCLUÍDA com sucesso!');

    }
}
