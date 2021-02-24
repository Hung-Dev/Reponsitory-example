<?php
namespace App\Http\Responsitories;

use App\Http\Responsitories\ArticleResInterface;
use App\Models\Article;

class ArticleRes implements ArticleResInterface{

    public function all(){
        $articles = Article::paginate(10);
        return view('articles.seearticles')->with('articles', $articles); 
   
    }
    public function create(){
        return view('articles.createarticle'); 
    }
    public function store($request){
        Article::create([
            'tenbaiviet'=> $request->name,
            'noidung' => $request->main
        ]);
    }
    public function show($id){
    }
    
}