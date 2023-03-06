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


    public function update(){
        $id=$_POST['id'];
        $textupdate=$_POST['textupdate'];
        App::get('database')->update('tasks','description', "$textupdate" ,"id = $id",);
        
        App::get('database')->update('tasks','modified', "1" ,"id = $id",);

        header('Location: /tasks');
    }
}