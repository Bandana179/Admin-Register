<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    public function register(){
        return view('registration');
    }
    public function insertdata(Request $request){
        $admin=new Register;
        $admin->name=$request['name'];
        $admin->email=$request['email'];
        $admin->password=sha1($request['password']);
        $admin->save();
        return redirect('/register');
    }
}
