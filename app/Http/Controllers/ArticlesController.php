<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Articles;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index() {
        $articles = Articles::latest()->paginate(3);

        return view('articles', [
            'articles' => $articles
        ]);
    }

    public function show(Articles $article) {
        return view('articles.show', compact('article'));
    }

    public function create() {
        return view('articles.create'); 
    }

    public function store() {
        Articles::create($this->validateArticle());

        return redirect(route('articles.index'));
    }

    public function edit(Articles $article) {
        return view('articles.edit', compact('article'));   
    }

    public function update(Articles $article) {
        $article->update($this->validateArticle());

        return redirect(route('articles.show', $article));
    }

    protected function validateArticle() {
        return request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
