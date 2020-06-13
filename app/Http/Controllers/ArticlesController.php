<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function index() {

        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article) {
//        $article = Article::findOrFail($id);

        return view('articles.show', ['article' => $article]);
    }

    public function create() {
        return view('articles.create');
    }


    public function store() {

        Article::create($this->validateArticle());

        return redirect(route('/articles.index'));
    }


    public function edit(Article $article) {

        return view('articles.edit', ['article' => $article]);
//        return view('articles.edit', compact('article'));

    }

    public function update(Article $article) {

        $article->update($this->validateArticle());

        return redirect($article->path());

    }

    public function destroy() {

    }

    protected function validateArticle() {

        return request()->validate([
            'title' => ['required', 'min:1', 'max: 50'],
            'excerpt' => ['required', 'min:1', 'max: 100'],
            'body' => ['required', 'min:1', 'max: 5000']
        ]);
    }
}
