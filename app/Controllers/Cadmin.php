<?php

namespace App\Controllers;

class Cadmin extends BaseController
{
    public function index()
    {
        return view('admin/v_dashboard_admin.php');
    }
}
