<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public function projectList()
    {
        return view('frontend.project-list');
    }

    public function projectCreate()
    {
        return view('frontend.project-create');
    }

    public function taskList()
    {
        return view('frontend.task-list');
    }

    public function taskDetails()
    {
        return view('frontend.task-details');
    }

    public function chat()
    {
        return view('frontend.chat');
    }

    public function timeline()
    {
        return view('frontend.timeline');
    }
}

