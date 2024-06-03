<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FoodCategory;
use App\Models\FoodItem;
use Illuminate\Http\Request;

class FoodItemsController extends Controller
{
    
    public function index(){
        $items=FoodItem::All();
       
        return view('admin/food-items/all',[
            'items'=>$items,
        ]);
    }
    public function create(){
        $categories=FoodCategory::All();

        return view('admin/food-items/create',[
            'categories'=>$categories
        ]);
    }
    public function store(){
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'price' => ['required', 'string'],
            'category_id' => ['required', 'integer'],
        ]);

        $item = new FoodItem();
        $item->title = request('title');
        $item->description = request('description');
        $item->price = request('price');
        $item->category_id = request('category_id');
      
        $item->save(); 
      

        return redirect('/admin/food-items');

    }
    public function edit($id){

        $categories=FoodCategory::All();
        $item = FoodItem::find($id);

        return view('admin/food-items/edit',[
            'categories'=>$categories,
            'item'=>$item
        ]);
    }

    
    public function update($id)
    {
        $item = FoodItem::find($id);

        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'price' => ['required', 'string'],
            'category_id' => ['required', 'integer'],
        ]);

        $item->title = request('title');
        $item->description = request('description');
        $item->price = request('price');
        $item->category_id = request('category_id');
      
        $item->save(); 

        return redirect('/admin/food-items');
    }

    
    public function destroy($id)
    {
        $item=FoodItem::find($id);

        $item->delete();

        return redirect('/admin/food-items');
    
    }
}
