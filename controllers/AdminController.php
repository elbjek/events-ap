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
        return view('admin.createVenue');
    }
    public function storeVenue()
    {
        App::get('database')->addNew('venues', $_POST);
        return redirect('/admin/events');
    }

    public function createEvent()
    {
             $seatings = App::get('database')->getAll('seatings');
             $venues = App::get('database')->getAll('venues');
             $prices = App::get('database')->getAll('prices');
             return view('admin.createEvent',compact('seatings','venues', 'prices'));
    }

    public function storeEvent()
    {
        $this->handleUpload();
        App::get('database')->addNew('events', $_POST);
        return redirect('/admin/events');
    }
    public function createPrice()
    {
             return view('admin.createPrice');
    }
    public function storePrice()
    {

        App::get('database')->addNew('prices', $_POST);
        return redirect('/admin/events');
    }

    public function createSeating()
    {
             return view('admin.createSeating');
    }
    public function storeSeating()
    {
        App::get('database')->addNew('seatings', $_POST);
        return redirect('/admin/events');
    }

    public function edit()
    {
        $events = App::get('database')->getOne('events', $_GET['id']);
        $seatings = App::get('database')->getAll('seatings');
        $venues = App::get('database')->getAll('venues');
        $prices = App::get('database')->getAll('prices');
        return view('admin.edit', compact('events', 'seatings','venues', 'prices'));
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
            // dd( getcwd()."/storage/".$newName);
        }
    }
       
    public function getUser()
    {
        return view('admin.partials.profile', compact('users'));
    }
    public function allOfOne()
    {
        $events = App::get('database')->getAllOfEach('events', $_GET['id'] );
        return view('admin.show', compact('events','event'));
    }

}