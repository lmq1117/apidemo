<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index(){
        return Article::all();
    }

    public function show(Article $article){
        //return Article::find($id);
        //return response()->json('Not found!',404);
        return $article;
    }

    public function store(Request $request){
        return Article::create($request->all());
    }

    public function update(Request $request, $id){
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return $article;
    }

    public function delete(Request $request, $id){
        $article = Article::findOrFail($id);
        $article->delete();
        return 204;

    }
}
