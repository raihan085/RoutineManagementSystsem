<?php

namespace App\Http\Controllers\Web\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Web\;

class ProfileController extends Controller
{
      public function index(Request $req)
      {
          $query = array('FullName'=>$req->FullName,'ShortName'=>$req->ShortName,'RegistrationNumber'=>$req->RegistrationNumber,
          'Type'=>$req->Type,'Designation'=>$req->Designation,'Session'=>$req->Session,
          'Section'=>$req->Section,'RoomNumber'=>$req,'PhoneNumber'=>$req->PhoneNumber,
          'Photo'=>$req->Photo,'Email'=>$req->Email,'Password'=>$req->pwd,'RePassword'=>$req->rpwd);

          Profile::insert($query);

      }
}
