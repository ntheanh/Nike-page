<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        echo view('admin.home',[
            'title'=> 'Trang Quan Tri Admin'
        ]);
    }
}