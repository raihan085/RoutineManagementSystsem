<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Profile;

class ProfileController extends Controller
{
    public function index(Request $req)
    {
      print_r($req->input());
    }

    public function profile_insert(Request $req)
    {

    }
}
