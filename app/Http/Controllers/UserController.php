<?php

namespace App\Http\Controllers;

use App\Http\Requests\SigninRequest;
use App\Http\Requests\SignupRequest;
use App\User;
use Session;

class UserController extends MainController
{

    public function __construct()
    {
        parent::__construct();
        $this->middleware('authuser', ['except' => ['logout']]);

    }

    public function getSignin()
    {

        self::$data['pageTitle'] .= 'Signin Page';
        return view('forms.signin', self::$data);

    }

    public function postSignin(SigninRequest $request)
    {
        if (User::authUser($request['email'], $request['password'])) {

            return redirect('/');
        } else {

            self::$data['pageTitle'] .= 'Signin Page';
            self::$data['auth_error'] = 'Wrong email or password';
            return view('forms.signin', self::$data)->withError('Wrong email or password');

        }
    }

    public function getSignup()
    {
        self::$data['pageTitle'] .= 'Signup Page';
        return view('forms.signup', self::$data);
    }
    public function postSignup(SignupRequest $request)
    {

        User::save_new($request);
        return redirect('/');

    }

    public function logout()
    {
        Session::flush();
        return redirect('user/signin');
    }

}