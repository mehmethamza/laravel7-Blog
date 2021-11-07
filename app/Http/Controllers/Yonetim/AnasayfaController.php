<?php

namespace App\Http\Controllers\Yonetim;

use App\Http\Controllers\Controller;
use App\Models\Yonetim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class AnasayfaController extends Controller
{
    public function login(){

        return view("yonetim.login");
    }
    public function loggingg(){
        Yonetim::create([
            "user" => request("username") ,
            "password" => Hash::make(request("password")),
            "yonetici_mi" => true
        ]);
    }

    public function logging(){

        $users = request("username");
        $password = request("password") ;

        if (auth() -> attempt(['user' => $users, 'password' => $password])) {

            request() -> session() -> regenerate();
            return redirect()-> route("panel");
           }
           else
           {
            return back();
           }
    }
}
