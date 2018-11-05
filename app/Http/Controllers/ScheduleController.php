<?php

namespace App\Http\Controllers;

//require __DIR__ . '/vendor/autoload.php';

use Illuminate\Http\Request;
//use Spatie\GoogleCalendar\Event;

class ScheduleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //$events = Event::get();



        return view('auth.calendar.index');

        // $clientInstance = getClient();



        // return view('calendar.index');
    }
}
