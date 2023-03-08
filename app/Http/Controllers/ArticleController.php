<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except('articles', 'article_show');
    }

    public function articles() {
        $articles = Article::all();
        //return view('articles', ['articles' => $articles]);
        return view('articles', compact('articles'));
    }

    public function article_show($id) {
    $article = Article::findOrFail($id);
    return view('article-dettaglio', ['article' => $article]);
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
