<?php

namespace App\Http\Controllers;
use App\Models\FoodCategory;
use App\Models\FoodItem;
use App\Models\Member;
use App\Models\Reservation;
use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home(){
        $categories = FoodCategory::All();

        
        return view('home',[
            'categories'=>$categories,
        ]);
    }
    public function about(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');;
    }
    public function reservations(){
        return view('pages.reservations');
    }
    public function saveReservation(){
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'guests_total' => ['required', 'string'],
            'time' => ['required', 'string']
        ]);
        $reservation = new Reservation();
        $reservation->fname = request('fname');
        $reservation->lname = request('lname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->guests_total = request('guests_total');
        $reservation->time = request('time');
        $reservation->save();

       
        return redirect('/reservations/thank-you');
    }

    public function offers(){
        return view('pages.offers');
    }

    public function registerMember(){
        request()->validate([
            'fname' => ['required', 'string'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string']
        ]);

        $member = new Member();
        $member->fname = request('fname');
        $member->lname = request('lname');
        $member->email = request('email');
        $member->phone_number = request('phone_number');
        $member->save();

       
        return redirect('/offers/thank-you');
    }

    public function thankYou(){
        return view('pages.thank-you');
    }
    public function menu(){

        $categories = FoodCategory::with('food_items')->get();
     
        // return response()->json($categories);

        return view('menu.all-categories',[
            'categories'=>$categories,
        ]);

    }

    public function singleMenu($slug){

        $category = FoodCategory::where('title', $slug)->with('food_items')->first();

        // return response()->json($category);
        return view('menu.single-menu',[
            'category'=>$category,
        ]);
    }

}

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/about', function () {
//     return view('pages.about');
// });
// Route::get('/contact', function () {
//     return view('pages.contact');
// });
// Route::get('/reservations', function () {
//     return view('pages.reservations');
// });
// Route::get('/offers', function () {
//     return view('pages.offers');
// });

// Route::get('/menu', function () {
//     return view('menu.all-categories');
// });
// Route::get('/menu/{slug}', function () {
//     return view('menu.single-menu');
// });