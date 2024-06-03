<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home(){
        return view('home');
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
    public function offers(){
        return view('pages.offers');
    }
    public function menu(){
        return view('menu.all-categories');
    }

    public function singleMenu(){
        return view('menu.single-menu');
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