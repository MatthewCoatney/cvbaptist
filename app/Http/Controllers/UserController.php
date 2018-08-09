<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function store(request $request){
      $name = $request->input('name');
      $email = $request->input('email');
      $password = $request->input('password');

      //password 1 & 2 matches?

      //password conforms to rules?

      //email is valid?

      //not malicious code?

      DB::insert('insert into users(id,name,email,password) values(?,?,?,?)',[null,$name,$email,$password]);
    }

    public function logs(request $request){




      $email = $request->input('email');
      $password = $request->input('password');

      //password 1 & 2 matches?

      //password conforms to rules?

      //email is valid?

      //not malicious code?

     $data = DB::select('select name from users where email=? and password=?',[$email,$password]);



       if(count($data) == 1){
           echo 'Welcome, ' + $data;
       }
       else{
           echo "Login failed.";
       }
    }
}
