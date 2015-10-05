<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Request;

class ArticleController extends Controller
{
    public function index(){

        $articles= \App\Article::all();

        return  view('articles.index',compact('articles'));
    }

    public function create(){

        return view('articles.create');


    }
    public function show($id){

     $article = Article::findOrFail($id);

        return view('articles.show',compact('article'));

    }

    public function store(){


              /*  $input = Request::all();

                $input['published_at'] = Carbon::now();
                $input['created_at'] = Carbon::now();

                Article::create($input);
        */


        $input = Request::all();


        return $input;
    }



}
