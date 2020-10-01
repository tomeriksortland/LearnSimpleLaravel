<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;


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
        $tags = Tag::all();
        return view('articles.create', ['tags' => $tags]);
    }

    public function store(Request $request)
    {

         $article = new Article();
         $article->title = $request->title;
         $article->excerpt = $request->excerpt;
         $article->body = $request->body;
         $article->user_id = 2;
         $article->save();
        
         $article->tags()->attach($request->tags);

         return redirect(route('articles.index'));

    }

    public function edit(Article $article)
    {
        //Vise et view med en "form" som har en "edit" side.

        return  view('articles.edit', ['article' => $article]);
    }

    public function update(Request $request, Article $article)
    {
        // dd($request);

        $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        $article->update([
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body
        ]);
        
        return redirect(route('articles.show', $article->id));
    }

    public function destroy()
    {
        //Slette fra databasen.

    }

    public function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags,id'
        ]);
    }
}
