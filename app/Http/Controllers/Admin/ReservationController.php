<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(){
        $reservations=Reservation::All();

        return view('admin/reservations/all',[
            'reservations'=>$reservations
        ]);
    }

    public function destroy($id){
        
        $reservation=Reservation::find($id);
        $reservation->delete();

       return redirect('admin/reservations');


    }
}
