<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\CreateArticleRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Requests;


class ArticleController extends Controller
{
    /**Display All Articles DESCENDING->latest where published at is less or equal with now
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $articles = Article::latest()->get();

        return view('articles.index', compact('articles'));
    }


    /**Display Cilicked Article and return to each article template
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('articles.show', compact('article'));
    }


    /**Send us to the Create Article Template
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('articles.create');
    }


    /**Create article send tho the model check and display to the Articles list
     * @param CreateArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function store(CreateArticleRequest $request)
    {
        //  $input = Request::all();
        //  Article::create($input);

        Article::create($request->all());    /*this is the same as above but more clean*/

        return redirect('articles');
    }


    /**send us to the article update template , and forms contain all values of article
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('articles.edit',compact('article'));
    }


    /**
     * @param $id
     */
    public function update($id, Request $request){

        $article = Article::findOrFail($id);

        $article->update($request->all());

        return redirect('articles');
    }


}
