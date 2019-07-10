<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ListController extends Controller
{
 public function index()
 {
   $users = User::get();
       return view('users.list', ['users' => $users]);
 }


}
