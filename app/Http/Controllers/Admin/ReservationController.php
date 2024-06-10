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

    public function create(){

        return view('admin/reservations/create');
    }

    public function store(){

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

        
        return redirect('admin/reservations');
    }

    public function destroy($id){
        
        $reservation=Reservation::find($id);
        $reservation->delete();

       return redirect('admin/reservations');


    }
}
