<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }
    public function index(){
        return view('admin.user.all-user');

    }
    public function add(){
        return view('admin.user.add-user');
    }
    public function view(){
        return view('admin.user.view-user');
    }

    public function edit(){
        return view('admin.user.edit-user');

    }

    public function insert(){

    }

    public function update(){

    }

    public function softdelete(){

    }

    public function restore(){

    }

    public function delete(){

    }



}
