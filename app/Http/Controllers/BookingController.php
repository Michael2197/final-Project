<?php

namespace App\Http\Controllers;
use App\Models\booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function bookaction(request $request){
        if(auth()->user()){
        $booking= new booking();
        $booking->Date =$request->date;
        $booking->Time =$request->time;
        $booking->Name =$request->name;
        $booking->phone =$request->phone;
        $booking->Total_person =$request->person;
        $booking->user_id=auth()->user()->id;
        $booking->save();

        return view('FOOD project.booking ');
    }else{
        return redirect()->route('login');
    }

        // return $request;


    }
}
