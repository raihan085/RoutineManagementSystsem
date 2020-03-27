<?php

namespace App\Http\Controllers\Web\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Web\Auth\Contact;

class UserContactController extends Controller
{
    public function addContact(Request $req)
    {
      $query = array('FullName'=>$req->Name,'Email'=>$req->Email,'Type'=>$req->type,'Message'=>$req->Message);

        Contact::insert($query);
      if(url()->current() == ('user/request/contact'))
        return redirect()->route('user.index.request');
      else {
          return redirect()->route('user.index');
        }
    }

    public function showContact()
    {
      $users = Contact::all();
      return view('Web.Admin.Pages.Inbox.inbox')->with('users',$users);
    }

    public function deleteContact(Request $req)
    {
      //echo $req->Email;
      Contact::where(['Email'=>$req->Email])->delete();
      return redirect()->route('admin.inbox');
    }
}
