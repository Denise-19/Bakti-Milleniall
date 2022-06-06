<?php

namespace App\Controllers;

class Chome extends BaseController
{
    public function index()
    {
        return view('frontend/v_home.php');
    }

    public function login()
    {
        return view('frontend/v_login');
    }

}
