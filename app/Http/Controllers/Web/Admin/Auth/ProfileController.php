<?php

namespace App\Http\Controllers\Web\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Web\Auth\Profile;
use App\Model\Web\Auth\PendingUserRequest;

use Auth;


class ProfileController extends Controller
{

      public function AccountShow()
      {
        $req = Profile::all();
        return view('Web.Admin.Pages.AccountDelete.DeleteAccount')->with('req',$req);
      }

      public function deleteAccount(Request $req)
      {
        Profile::where(['RegistrationNumber'=>$req->delete])->delete();
        return redirect()->route('admin.delete.account');
      }

}
