<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{
    public function home()
    {
        $events = App::get('database')->getAll("events");
        return view('index', compact('events'));
    }

    public function singleevent()
    {
        $events = App::get('database')->getOne('events', $_GET['id']);
        return view('singleevent', compact('events'));
    }
    
    public function ticket()
    {
        $events = App::get('database')->getAllOfEach('events', $_GET['id'] );
        return view('ticket', compact('events'));
    }

    public function apiEvents()
    {
        // $tickets = App::get('database')->getAllTickets( $_GET['id'] );
        $events = App::get('database')->getAll('events', $_GET['id'] );
        echo json_encode($events);
    }
}