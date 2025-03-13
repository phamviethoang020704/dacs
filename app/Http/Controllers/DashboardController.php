<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $bookings = $user->bookings;
        return view('dashboard', compact('user', 'bookings'));
    }
    public function userReturn($id)
    {
        $booking = Booking::find($id);
        if($booking->user_give_back == false){
            $booking->user_give_back = true;
            $booking->save();
        }
        return redirect('/dashboard');
    }
}
