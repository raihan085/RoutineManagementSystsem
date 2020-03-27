<?php

namespace App\Http\Controllers\Web\Admin\Auth;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

use Illuminate\Foundation\Auth\AuthenticatesUsers;


use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Hash;
use App\Model\Web\Auth\PendingUserRequest;
use App\Model\Web\Auth\Profile;

class PendingProfileController extends Controller
{
    use AuthenticatesUsers;

    //protected $redirectTo = '/user/index/request';

    protected $guard = 'profile';
    //protected $redirectPath = '/admin/dashborad';

    public function __construct()
    {
        $this->middleware('guest:profile')->except('logout');
    }

    public function logout()
    {
      Auth::guard('profile')->logout();
      return redirect()->route('user.index');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('Email', 'password');

          if(Auth::guard('profile')->attempt(['Email'=>$request->email,'password'=>$request->pwd]))
          {
            $user = Auth::guard('profile')->user();
            return redirect()->route($user->Type);
          }
          /*
          elseif(Auth::guard('pending')->attempt(['Email'=>$requst->email],'password'=>$request->pwd]))
          {
            $user = Auth::guard('pending')->user();
            return redirect()->route($user->Type);
          }
          */
            return redirect()->route('user.index');
    }

    public function pendingUserRequest(Request $req)
    {

      // validation
      //$this->profilePhotoValidation();


      if ($req->pwd == $req->rpwd && $req->TAC == true && $req->pwd != null) {

        if($req->Type == 'Student')
        {
          $studentQuery = array('FullName'=>$req->FullName,'RegistrationNumber'=>$req->RegistrationNumber,'Type'=>$req->Type,'Designation'=>$req->Designation,'Session'=>$req->Session,'Section'=>$req->Section,'PhoneNumber'=>$req->PhoneNumber,'Photo'=>$req->Photo,'Email'=>$req->Email,'Password'=>$req->pwd);

          if(PendingUserRequest::where(['RegistrationNumber'=>$req->RegistrationNumber])->exists() ||  Profile::where(['RegistrationNumber'=>$req->RegistrationNumber])->exists())
            {
                return redirect()->route('user.login');
            }
            else {

              PendingUserRequest::insert($studentQuery);
            }

        }
        elseif($req->Type == 'Teacher')
        {
          $teacherQuery = array('FullName'=>$req->FullName,'RegistrationNumber'=>$req->RegistrationNumber,'Type'=>$req->Type,'Designation'=>$req->Designation,'ShortName'=>$req->ShortName,'PhoneNumber'=>$req->PhoneNumber,'Photo'=>$req->Photo,'Email'=>$req->Email,'Password'=>$req->pwd);
          if(PendingUserRequest::where(['RegistrationNumber'=>$req->RegistrationNumber])->exists() || Profile::where(['RegistrationNumber'=>$req->RegistrationNumber])->exists())
            {
                return redirect()->route('user.login');
            }
            else {
              PendingUserRequest::insert($teacherQuery);
            }

        }
        else {
          $staffQuery = array('FullName'=>$req->FullName,'RegistrationNumber'=>$req->RegistrationNumber,'Type'=>$req->Type,'Designation'=>$req->Designation,'RoomNumber'=>$req->RoomNumber,'PhoneNumber'=>$req->PhoneNumber,'Photo'=>$req->Photo,'Email'=>$req->Email,'Password'=>$req->pwd);
          if(PendingUserRequest::where(['RegistrationNumber'=>$req->RegistrationNumber])->exists() || Profile::where(['RegistrationNumber'=>$req->RegistrationNumber])->exists())
            {
                return redirect()->route('user.longin');
            }
            else {
              PendingUserRequest::insert($staffQuery);
            }

        }
        return redirect()->route('request');
      }
      elseif($req->pwd != $req->rpwd) {

            // redirect route and error message
            return redirect()->route("user.join.us","['Message'=>'Password and Re-Password does not match']");
      }
      else {
          return redirect()->route('user.join.us');
      }

    }

    private function profilePhotoValidation()
    {

      return tap(request()->validate([
        'FullName' => 'required',
        'RegistrationNumber'=>'required',
        'Type'=>'required',
        'PhoneNumber'=>'required',
        'Email'=>'required',
        'Password'=>'required',
      ]),function(){
        if(request()->hasFile('image')){
          request()->validate([
            'Photo'=> 'file|image|max:5000',
          ]);
      }});

      }

    public function show_request()
    {
      $req = PendingUserRequest::all();
      return view('Web.Admin.Pages.Request.RequestAccepted')->with('req',$req);
    }

    public function accept_request(Request $req)
    {
      $all = PendingUserRequest::where(['RegistrationNumber'=>$req->accept])->get();

      foreach($all as $t)
      {
        $FullName = $t->FullName;
        $RegistrationNumber = $t->RegistrationNumber;
        $Type = $t->Type;
        $Designation = $t->Designation;
        $Session = $t->Session;
        $Section = $t->Section;
        $PhoneNumber = $t->PhoneNumber;
        $Email = $t->Email;
        $pwd = $t->password;
        $Photo = $t->Photo;
        $ShortName = $t->ShortName;
        $RoomNumber = $t->RoomNumber;
      }

      if($Type == 'Student')
      {
        $studentQuery = array('FullName'=>$FullName,'RegistrationNumber'=>$RegistrationNumber,'Type'=>$Type,'Designation'=>$Designation,'Session'=>$Session,'Section'=>$Section,'PhoneNumber'=>$PhoneNumber,'Photo'=>$Photo,'Email'=>$Email,'password'=>$pwd);

        Profile::insert($studentQuery);

      }
      elseif($Type == 'Teacher')
      {
        $teacherQuery = array('FullName'=>$FullName,'RegistrationNumber'=>$RegistrationNumber,'Type'=>$Type,'Designation'=>$Designation,'ShortName'=>$ShortName,'PhoneNumber'=>$PhoneNumber,'Photo'=>$Photo,'Email'=>$Email,'password'=>$pwd);
        Profile::insert($teacherQuery);
      }
      else {
        $staffQuery = array('FullName'=>$FullName,'RegistrationNumber'=>$RegistrationNumber,'Type'=>$Type,'Designation'=>$Designation,'RoomNumber'=>$RoomNumber,'PhoneNumber'=>$PhoneNumber,'Photo'=>$Photo,'Email'=>$Email,'password'=>$pwd);
        Profile::insert($staffQuery);
        }

        PendingUserRequest::where(['RegistrationNumber'=>$req->accept])->delete();

        return redirect()->route('admin.user.request');
      }

    public function delete_request($registrationNumber)
    {
      PendingUserRequest::where(['RegistrationNumber'=>$registrationNumber])->delete();
      return redirect()->route('admin.user.request');
    }
  }
