<?php

namespace App\Controllers;

use App\Core\App;

class TasksController {

    public function index () {

        $tasks = App::get('database')->selectAll('tasks');

        return view('tasks', ['tasks' => $tasks]);        

    }

    public function store () {

        App::get('database')->insert('tasks', [
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'time' => $_POST['time'],
            'name' => $_POST['name'],
        ]);
        
        return redirect('tasks');

    }

}