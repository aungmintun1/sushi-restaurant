<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        $members=Member::All();

        return view('admin/members/all',[
            'members'=>$members
        ]);
    }

    public function destroy($id){
        
        $member=Member::find($id);
        $member->delete();

       return redirect('admin/members');


    }
}
