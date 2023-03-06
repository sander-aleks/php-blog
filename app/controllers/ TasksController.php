<?php

namespace App\Controllers;

use App\Core\App;
use PDO;

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

   
    public function delete(){
        $id=$_POST['id'];

        App::get('database')->delete('tasks',"id = $id");
        header('Location: /tasks');
    }


    public function edit(){
        $id=$_POST['id'];
        $title=$_POST['title'];
        $description=$_POST['description'];
        $name=$_POST['name'];
        App::get('database')->update('tasks','title', "$title" ,"id = $id",);
        App::get('database')->update('tasks','description', "$description" ,"id = $id",);
        App::get('database')->update('tasks','name', "$name" ,"id = $id",);
        

        return redirect('tasks');
    }
    
}