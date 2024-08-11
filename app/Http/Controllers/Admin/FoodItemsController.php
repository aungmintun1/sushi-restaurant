<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FoodCategory;
use App\Models\FoodItem;
use Illuminate\Http\Request;

class FoodItemsController extends Controller
{
    
    public function index(){
        //$items=FoodItem::All();
        $items = FoodItem::paginate(15);
        return view('admin/food-items/all',[
            'items'=>$items,
        ]);
    }

    public function search(Request $request)
    {
        // Validate the input
        $request->validate([
            'name' => 'nullable|string|max:255',
            'min_price' => 'nullable|numeric|min:0',
            'max_price' => 'nullable|numeric|min:0',
        ]);

        // Get the inputs from the request
        $name = $request->input('name');
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');

        // Query the food items within the price range
        // make a query variable so you can continously check and add more search conditions

        $query = FoodItem::query();

        if ($name) {
            $query->where('title', 'LIKE', '%' . $name . '%');
        }

        // $query->whereBetween('price', [$minPrice, $maxPrice]);
        // finds price between inputted minimum and max price

        if ($minPrice !== null && $maxPrice !== null) {
            $query->whereBetween('price', [$minPrice, $maxPrice]);
        } elseif ($minPrice !== null) {
            $query->where('price', '>=', $minPrice);
        } elseif ($maxPrice !== null) {
            $query->where('price', '<=', $maxPrice);
        }

        $foodItems = $query->orderBy('price', 'asc')->get();

        // Return the search results view with the food items
        return view('admin/food-items/results', [
            'foodItems'=>$foodItems
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
