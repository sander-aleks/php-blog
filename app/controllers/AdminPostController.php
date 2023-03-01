<?php

namespace App\Controllers;

use App\Core\App;
use Illuminate\Request;
 
class AdminPostController extends controller {
    
    public function index () {

        $tasks = App::get('database')->selectAll('tasks');

        return view('tasks', ['tasks' => $tasks]);        

    }

    public function index(){
    }
    return redirect('tasks', [
        'posts' => Post::Paginate(50) 
    ]);
}