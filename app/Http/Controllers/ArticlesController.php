<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\models\Tag;

class ArticlesController extends Controller
{
    public function show(Article $article)
    {
        //Finn 1 spessifik fra databasen.
        
        return view('articles.show', ['article' => $article]);
    }

    public function index()
    {
        //Finn alle fra databasen.
        if (request('tag'))
         {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
         } 
         else 
         {
            $articles = Article::latest()->get();
         }

        return view('articles.index', ['articles' => $articles]);
    }

    public function create()
    {
        //Vise et view med en "form" som har en "lage ny" side.
        return view('articles.create');
    }

    public function store()
    {

        $validatedAttributes = request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        Article::create($validatedAttributes);

        return redirect(route('articles.index'));

    }

    public function edit(Article $article)
    {
        //Vise et view med en "form" som har en "edit" side.

        return  view('articles.edit', ['article' => $article]);
    }

    public function update(Article $article)
    {
        //Lagre endringen i databasen.

        $validatedAttributes = request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        $article->update($validatedAttributes);
        
        return redirect(route('articles.show', $article->id));
    }

    public function destroy()
    {
        //Slette fra databasen.

    }
}
