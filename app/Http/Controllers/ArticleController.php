<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Controllers\Controller;

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

    public function store(Request $request) {
        //$article = new Article();
        //$article->title = $request->title;
        //$article->producer = $request->producer;
        //$article->description = $request->description;    
        //$article->save();   

        $article = Article::create([
            'title' => $request->title,
            'producer' => $request->producer,
            'description' => $request->description,
        ]);

        return redirect(route('homepage'))->with('articleCreated', 'Articolo inserito con successo');
    }
}
