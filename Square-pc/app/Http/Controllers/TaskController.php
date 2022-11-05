<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return view('main');
    }
    public function info(){
        return view('info');
    }
    public function project(){
        return view('project');
    }
}
