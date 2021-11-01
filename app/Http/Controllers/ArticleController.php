<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends Controller
{
    public function index()
    {
        return Article::all();
    }

    public function show($id)
    {
        return $article;
    }

    public function store(Request $request)
    {
        $article = Article::create($request->all());
        return response()->json($article,201);
    }

    public function update(Request $request,$id)
    {
        $post = Article::find($id);
        $post->update($request->all());
        return response()->json($post,201);
    }

    public function delete($id)
    {
        return Article::destroy($id);
    }
}
