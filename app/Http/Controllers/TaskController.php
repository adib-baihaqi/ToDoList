<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return view('layouts.app');
    }

    public function create(){
        return view('list');
    }

    public function store(){
        return 'your data was submitted';
    }
}
