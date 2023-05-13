<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class categoryController extends Controller
{
    public function index (){

        $categories=category::latest()->paginate(5);

        return view('categories.list',['categories'=> $categories]);
    }
    public function create(){
        return view ('categories.new');
    }

    public function store(Request $request){
    
         //validate data
         $request->validate([
            'title'=>'required|unique:categories|max:200'
         ]);

    $category= new category;
    $category->title=$request->title;
    $category->save();
    return redirect('/')->withsuccess('New Category created');
    }

    public function edit($id){
      $category = category::where('id',$id)->first();
      return view ('categories.edit',['category'=>$category]);
    }
    public function update(Request $request,$id){
        $category = category::where('id',$id)->first();

           $category -> title = $request -> title;
           $category->save();
           return redirect('/')->withsuccess('Updated Category');
      }
      
      public function destroy($id){
        $category = category::where('id',$id)->first();

           $category ->delete();
           return redirect('/')->withsuccess('deleted Category');
      }
      

}


