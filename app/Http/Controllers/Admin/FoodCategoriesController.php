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

    public function store(Request $request){
        request()->validate([
            'title' => 'required', 'string', 'max:255',
            'description' => 'required', 'string',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $category = new FoodCategory();
        $category->title = request('title');
        $category->image_url = request('image_url');
        $category->description = request('description');

        $filePath = public_path('img');
        //name of the folder in public that you want to input images to

        if ($request->hasfile('image_url')) {

            $file = $request->file('image_url');
            $file_name = $file->getClientOriginalName();
            //has the image file name

            $file->move($filePath, $file_name);
            //moves the file to image folder

            $category->image_url = $file_name;
            //inputs the image file name to image_url so we can use it to display images in HTML
            }

        $category->save(); 
      
        return redirect('/admin/food-categories');

    }

    public function edit($id){

        $category = FoodCategory::find($id);
        return view('admin/food-categories/edit',[
            'category'=>$category
        ]);
    }
    public function update(Request $request, $id)
    {
        $category = FoodCategory::find($id);

        request()->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        
        $category->title = request('title');
        $category->description = request('description');

        $filePath = public_path('img');

        if ($request->hasfile('image_url')) {
            if ($category->image_url && file_exists(public_path('img/' . $category->image_url))) {
                unlink(public_path('img/' . $category->image_url));
            }
            //deletes the previous image 

            $file = $request->file('image_url');
            $file_name = $file->getClientOriginalName();
            $file->move($filePath, $file_name);
            $category->image_url = $file_name;
            }

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






