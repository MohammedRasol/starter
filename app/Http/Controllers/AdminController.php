<?php

namespace  App\Http\Controllers;
use App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function  __construct(){
    $this->middleware("auth")->except("show_");
}
public function show_(){
         return "Show Function";
}


}
