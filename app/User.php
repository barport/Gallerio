<?php

namespace App;

use DB;
use Hash;
use Illuminate\Database\Eloquent\Model;
use Session;

class User extends Model
{

    public static function authUser($email, $password)
    {

        $auth = false;

        $user = DB::table('users AS u')
            ->join('users_roles AS ur', 'u.id', '=', 'ur.uid')->where('u.email', '=', $email)
            ->first();

        if ($user) {

            if (Hash::check($password, $user->password)) {
                $auth = true;
                if ($user->rid == 6) {
                    Session::put('is_admin', true);
                }
                Session::put('user_name', $user->name);
                Session::put('user_id', $user->id);
                Session::flash('sm', $user->name . ', Welcome Back!');
                Session::flash('toastrpos', 'toast-top-center');
            }

        }

        return $auth;
    }
    public static function save_new($request)
    {

        $user = new self();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->save();
        $uid = $user->id;
        DB::insert("INSERT INTO users_roles VALUES($uid,7)");
        Session::put('user_name', $user->name);
        Session::put('user_id', $user->id);
        Session::flash('sm', $user->name . ', You registered successfully');
        Session::flash('toastrpos', 'toast-top-center');
    }

}