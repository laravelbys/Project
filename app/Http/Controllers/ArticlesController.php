<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\CreateArticle;


class ArticlesController extends Controller
{
    public function index() {
        $articles = Article::latest()->published()->get();

        return view('articles.index', compact('articles'));
    }

    public function show($id) {
        $article = Article::findOrFail($id);

        dd($article->created_at->addDays(8)->diffForHumans());

        return view('articles.show', compact('article'));
    }

    public function create() {
        return view('articles.create');
    }

    public function store(CreateArticle $request) {

        $validated = $request->validated();

        Article::create($request -> all());

        return redirect('articles');
    }

    public function edit($id) {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update($id,CreateArticle $request) {
        $article = Article::findOrFail($id);

        $request -> validated();

        $article -> update($request->all());
        return redirect('articles');
    }

}
