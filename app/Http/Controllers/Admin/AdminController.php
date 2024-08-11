<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Member;
use App\Models\Reservation;
use App\Models\User;


class AdminController extends Controller
{
    public function dashboard(){

        // $user = Auth::user();
        // return response()->json($user->roles);
        $estimated_income_last_30 = DB::table('reservations')
        ->select(DB::raw('SUM(guests_total) * 27 AS total'))
        // ->whereBetween('created_at', [now()->subDays(30), now()])
        ->first();

        $total_customers_last_30 = DB::table('reservations')
        ->select(DB::raw('SUM(guests_total) AS total'))
        // ->whereBetween('created_at', [now()->subDays(30), now()])
        ->first();
        
        $total_customers_last_30 = DB::table('reservations')
        ->select(DB::raw('count(*) AS total'))
        // ->whereBetween('created_at', [now()->subDays(30), now()])
        ->first();

        $total_employees = DB::table('users')
        ->join('role_user', 'role_user.user_id', '=', 'users.id')
        ->join('roles', 'roles.id', '=', 'role_user.role_id')
        ->where('roles.id', 2)
        ->count();
        
        // in the table users we use the role_user table as a pivot table 
        // connecting users and roles tables.
        // We then substitute role id and user id columns with the id's of the respective tables.
        // Now user->roles->id will give us the id of the role and we only want users that are employee which is 2
        // last we count

        //note that i commented out the whereBetween last 30 days because if data hasn't been changed in the last 30 days nothing will show, only 0

        $total_income = $estimated_income_last_30->total ?? 0;
        $total_customers= $total_customers_last_30->total ?? 0;
        $total_reservations= $total_customers_last_30->total ?? 0;
        $latestReservations = Reservation::where('guests_total', '>', 0)->limit(5)->orderBy('created_at', 'desc')->get();


        // return response()->json($latestReservations);
        return view('admin/dashboard',[

            'total_income'=>$total_income,
            'total_customers'=>$total_customers,
            'total_reservations'=>$total_reservations,
            'latestReservations'=>$latestReservations,
            'total_employees'=>$total_employees
        ]);

        
    }

    
    public function dailyRevenueLast30(){

        return $estimated_income_daily_data = DB::table('reservations')
            ->select(
                DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d") as x'),
                DB::raw('(sum(guests_total) * 27) as y')
            )
            ->groupBy(DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d")'))
            ->orderByDesc(DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d")'))
            ->get();
        
        //for the total revenue chart
        // x is the date and y is total number of guests multplied by $27(the average order)
        //we do a get request to this for the chart in adminTemp/assets/lib/js/dashboard-ecommerce.js
        //we then put the json data in the data property        


        
    }
}
