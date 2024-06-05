<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard(){
        // $user = Auth::user();
        // return response()->json($user->roles);
        
        return view('admin/dashboard');
    }
}
