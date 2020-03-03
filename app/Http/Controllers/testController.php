<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Test;

class testController extends Controller
{
    public function index(Request $req)
    {
      print_r($req->input());
      if ($req->pwd == $req->rpwd) {
        $query = array('FullName'=>$req->FullName,'Email'=>$req->Email,'Password'=>$req->pwd."\n".$req->rpwd,'Title'=>$req->title);
        Test::insert($query);
      }
      else {
        echo "does not match";
        echo "<br>"."EightToNine".
        echo $req->FullName,$req->Email,"<br>",$req->pwd.$req->rpwd," ",$req->title;
      }
    }

    public function test(Request $req)
    {
      print_r($req->input());
    }

    public function delete(Request $req)
    {
        // delete some data
    }

    public function edit(Request $req)
    {
      // edit some data
    }

    public function main($id)
    {
      echo $id;
    }
}
