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

    public function concert()
    {
        $events = App::get('database')->getOne('events', $_GET['id']);
        return view('concert', compact('events'));
    }
    
    public function ticket()
    {
        $tickets = App::get('database')->getAllTickets($_GET['id'] );

        return view('ticket', compact('tickets'));
    }

    public function apiEvents()
    {
        // $tickets = App::get('database')->getAllTickets( $_GET['id'] );
        $events = App::get('database')->getAll('events', $_GET['id'] );
        echo json_encode($events);
    }
}