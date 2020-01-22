<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function academy()
    {
        $recentEvents = Event::where('event_date', '<', date("Y-m-d"))->orderBy('event_date','DESC')->paginate(8);
        $upcomingEvents = Event::where('event_date', '>=', date("Y-m-d"))->orderBy('event_date','ASC')->get();
        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'academy';
        return view('events.academy',compact('recentEvents','upcomingEvents','page_title','body_class'))
            ->with('i', (request()->input('page', 1) - 1) * 8);
    }

    public function academyDetails($id)
    {
        $event = Event::find($id);
        $page_title = 'Vaibhav - A Unit of 28 South Ventures';
        $body_class = 'academy-detail';
        return view('events.academy-detail',compact('event','page_title','body_class'))
            ->with('i', (request()->input('page', 1) - 1) * 8);
    }
}
