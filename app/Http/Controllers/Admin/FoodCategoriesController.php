<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FoodCategory;
use Illuminate\Http\Request;

class FoodCategoriesController extends Controller
{
    public function index(){
        $categories=FoodCategory::All();
       
        return view('admin/food-categories/all',[
            'categories'=>$categories
        ]);
    }
    public function create(){
        return view('admin/food-categories/create');
    }

    public function store(){
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url' => ['required', 'string']
        ]);

        $category = new FoodCategory();
        $category->title = request('title');
        $category->image_url = request('image_url');
        $category->description = request('description');
        $category->save(); 
      

        return redirect('/admin/food-categories');

    }

    public function edit($id){

        $category = FoodCategory::find($id);
        return view('admin/food-categories/edit',[
            'category'=>$category
        ]);
    }
    public function update($id)
    {
        $category = FoodCategory::find($id);

        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url' => ['required', 'string']
        ]);
        
        $category->title = request('title');
        $category->image_url = request('image_url');

        $category->save(); 
      


        return redirect('/admin/food-categories');
    }

    
    public function destroy($id)
    {
        $category=FoodCategory::find($id);

        $category->delete();

        return redirect('/admin/food-categories');
    
    }

}






