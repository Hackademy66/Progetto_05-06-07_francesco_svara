<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function articles() {
        $articles = Article::all();
        //return view('articles', ['articles' => $articles]);
        return view('articles', compact('articles'));
    }
    
    public function create() {
        return view('article.create');
    }
    
    public function store(ArticleRequest $request) {
        //$article = new Article();
        //$article->title = $request->title;
        //$article->producer = $request->producer;
        //$article->description = $request->description;    
        //$article->save();   
        $article = Article::create([
            'title' => $request->title,
            'producer' => $request->producer,
            'cover' => $request->cover ? $request->file('cover')->store('public/cover') : null,
            'description' => $request->description,
        ]);
        
        
        
        return redirect(route('homepage'))->with('articleCreated', 'Articolo inserito con successo');
    }
}
