<?php

namespace App\Controllers;

use App\Core\App;

class AdminController
{
    public function index()
    {
        $events = App::get('database')->getAll('events',$_GET['id']);
        return view('admin.index', compact('events'));
    }

    public function createVenue()
    {
        // $categories = App::get('database')->getAll("categories");
        return view('admin.createVenue');
    }
    public function storeVenue()
    {
        App::get('database')->addNew('venues', $_POST);
        return redirect('/admin/events');
    }

    public function storeEvent()
    {
        App::get('database')->addNew('events', $_POST);
        return redirect('/admin/events');
    }
    
    public function createEvent()
    {
             $venues = App::get('database')->getAll("venues");
             return view('admin.createEvent', compact('venues'));
    }
        public function createTicket()
    {
            $seatings = App::get('database')->getAll("seatings");
             $venues = App::get('database')->getAll("venues");
             return view('admin.ticket', compact('seatings','venues') );
    }
    public function storeTicket()
    {
            App::get('database')->addNew('venue_seating', $_POST);
            return redirect('/admin/events');
    }

    public function show()
    {
        $events = App::get('database')->getAllTickets($_GET['id']); //ako hoces da dobijes sve moras da mu napravis query koji nece traziti id 
        return view('admin.show', compact('events'));
    }

    public function edit()
    {
        $events = App::get('database')->getOne('events', $_GET['id']);
        $tickets = App::get('database')->getOne('tickets', $_GET['id']);
        return view('admin.edit', compact('events', 'tickets'));
    }

    public function update()
    {
        App::get('database')->update('events', $_POST);
        return redirect('/admin/events');
    }
    public function destroy()
    {
        App::get('database')->destroy('events', $_POST['id']);
        return redirect('/admin/events');
    }

    private function handleUpload()
    {
        if($_FILES['image']['error'] != 4) {
            $newName = "images/".time()."_".$_FILES['image']['name'];
            $_POST['image'] = $newName;
            move_uploaded_file($_FILES['image']['tmp_name'], getcwd()."/storage/".$newName);
        }
    }
       
    public function getUser()
    {
        return view('admin.partials.profile', compact('users'));
    }

}