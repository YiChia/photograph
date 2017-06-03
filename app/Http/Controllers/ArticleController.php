<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    //
     public function index()
    {
        
       $query=Article::all();
       return view('Article.index',compact('query'));
    }
    public function edit($id)
    {
       $query=Article::find($id);       
       return view('Article.edit',compact('query'));
    }
    public function update(Request $request,$id)
    {
        
        Article::where('id',$id)->update([
            'title'=>$request->get('title'),
            'content'=>$request->get('content'),
            ]);
        return redirect('Article');
    }
   public function create()
    {  
       return view('Article.create');
    }
     public function store(ArticleRequest $request)
    {

       Article::create($request->all());
     
       return redirect('Article');
      
        
       return view('Article.index');
    }
    
    public function destroy($id)
    {
        $query=Article::find($id);
       // $query=Article::destroy($id);
        $query->delete();
       return redirect('Article');
    }
     public function show()
    {

       
       // return "welcome to Laravel";
        
       return view('Article.index');
    }
     public function __construct()
    {
        $this->middleware('auth');
    }
    
}
