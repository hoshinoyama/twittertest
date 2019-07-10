<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ListController extends Controller
{
 public function index()
 {
   $users = User::get();
       return view('user.list', ['users' => $users]);
 }
 public function followindex(){
   $follows = Follow::get();
       return view('user.list', ['follows' => $follows]);
 }

}
