<?php
namespace App\Http\Responsitories;

interface ArticleResInterface{

    public function all();
    public function create();
    public function store($request);
    public function show($id);
}
