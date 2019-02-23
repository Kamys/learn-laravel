<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home()
    {
        return view('welcome');
    }

    public function myTask()
    {
        $tasks = [
            'Task 1',
            'Task 2',
            'Task 3',
        ];

        return view('myTask')
            ->withTasks($tasks);
    }

    public function about()
    {
        return 'about';
    }

    public function contact()
    {
        return 'contact';
    }
}
