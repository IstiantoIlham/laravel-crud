<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return view('articles.index', [
            'articles' => Article::get(),
        ]);
    }

    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request, Article $article)
    {
        $attributes = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $article->create($attributes);
        return to_route('articles.index', $article);
    }

    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }

    public function update(Request $request, Article $article)
    {
        $attributes = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $article->update($attributes);

        return to_route('articles.index', $article);
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return back();
    }
}
