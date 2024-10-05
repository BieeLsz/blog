<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postagem;
use App\Models\Categoria;
use App\Models\User;


class FeedController extends Controller
{
    public function welcome(){
        $postagens = Postagem::orderby('id', 'DESC')->get();
        return view('welcome', compact('postagens'));
    }

    public function categoria(){
        $categorias = Categoria::orderby('nome', 'ASC')->get();
        return view('feed.categoria', compact('categorias'));
    }

    public function autor(){
        $autores = User::orderby('name', 'ASC')->get();
        return view('feed.autor', compact('autores'));
    }

    public function categoriaById($id){
        $postagens = Postagem::where('categoria_id', $id)->orderby('titulo', 'DESC')->get();
        return view('feed.categoriaById', compact('postagens'));
    }

    public function autorById($id){
        $postagens = Postagem::where('user_id', $id)->orderby('titulo', 'DESC')->get();
        return view('feed.autorById', compact('postagens'));
    }
}
