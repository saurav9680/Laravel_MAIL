<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
   function showform(Request $req)
    {
        print_r($req->input());
    }
}
