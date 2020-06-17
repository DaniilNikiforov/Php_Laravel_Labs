<?php

namespace App\Http\Controllers;

use App\registration;
use Illuminate\Http\Request;

class controller_registration extends Controller
{
    public function get_registration(){
        return view('view_registration');
    }

    public function get_result(){
        $obj = new registration($_POST['email'], $_POST['login'], $_POST['password']);
        return view('view_registration_result', ['result' => $obj]);
    }
}
