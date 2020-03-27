<?php

namespace App\Http\Controllers\Web\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;


use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Model\Web\Auth\Profile;
use App\Model\Web\Auth\PendingUserRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:profile');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'FullName' => ['required', 'string', 'max:255'],
            'Email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'Type' => ['required','string'],
            'RegistrationNumber' => ['required','string'],
            'PhoneNumber' => ['required','string'],
            'Password' => ['required', 'string','confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Model\Web\Auth\PendingUserRequest
     */
    protected function create(Request $req)
    {

      if(PendingUserRequest::where(['RegistrationNumber'=>$req->RegistrationNumber])->exists() ||  Profile::where(['RegistrationNumber'=>$req->RegistrationNumber])->exists())
        {
            return redirect()->route('login');
        }
        else {
            PendingUserRequest::create([
              'FullName' => $req->FullName,
              'Email' => $req->Email,
              'PhoneNumber' => $req->PhoneNumber,
              'Type' => $req->Type,
              'ShortName' => $req->ShortName,
              'Photo' => $req->Photo,
              'RoomNumber' => $req->RoomNumber,
              'RegistrationNumber' => $req->RegistrationNumber,
              'Session' => $req->Session,
              'Section' => $req->Section,
              'Designation' => $req->Designation,
              'Password' => Hash::make($req->pwd),
          ]);
          return redirect()->route('user.index.request');
        }
    }
}
