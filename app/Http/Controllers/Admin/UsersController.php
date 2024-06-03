<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    
    public function index(){
        // $users = User::paginate(1);
        $users=User::All();
        return view('admin/users/all',[
            'users'=>$users
        ]);
    }
    public function create(){
        return view('admin/users/create');
    }
    public function store(){

        $user = new User();
        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->save(); 
        $user->roles()->attach(request('role_id'));

        return redirect('/admin/users');

    }
    public function edit($id){

        $user = User::find($id);
    
      $role = $user->roles[0]->pivot->role_id;

    //   return response()->json($user->roles);

        return view('admin/users/edit',[
           'user'=>$user,
           'role'=>$role
       ]);
     }
    
     public function update($id)
    {
        $user = User::find($id);
        
        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->email = request('email');
        $user->password = Hash::make(request('password'));
        $user->save(); 
        $user->roles()->attach(request('role_id'));


        return redirect('/admin/users');
    }

    public function destroy($id)
    {
        $user=User::find($id);

        $user->delete();

        return redirect('/admin/users');
    
    }

}
