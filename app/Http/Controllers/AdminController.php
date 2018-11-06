<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('isAdmin');
    }

    public function index(){
        return "You are an administrator";
    }
}
