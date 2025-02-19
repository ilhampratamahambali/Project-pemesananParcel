<?php

namespace App\Controllers;

use App\Models\PenggunaModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    
}
