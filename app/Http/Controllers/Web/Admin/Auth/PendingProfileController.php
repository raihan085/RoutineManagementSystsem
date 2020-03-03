<?php

namespace App\Http\Controllers\Web\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Web\PendingUserRequest;

class PendingProfileController extends Controller
{
    public function index(Request $req)
    {
      if ($req->pwd == $req->rpwd && $req->TAC == true) {
        $query = array('FullName'=>$req->FullName,'ShortName'=>$req->ShortName,'RegistrationNumber'=>$req->RegistrationNumber,
        'Type'=>$req->Type,'Designation'=>$req->Designation,'Session'=>$req->Session,
        'Section'=>$req->Section,'RoomNumber'=>$req,'PhoneNumber'=>$req->PhoneNumber,
        'Photo'=>$req->Photo,'Email'=>$req->Email,'Password'=>$req->pwd,'RePassword'=>$req->rpwd);

        //PendingUserRequest::insert($query);
        print_r($req->input());
        //print_r($query);
        return view('Web.Auth.Pages.requestSignIn');
      }
      elseif($req->pwd == $req->rpwd) {

            // redirect route and error message
      }
      else {

      }
    }
}
