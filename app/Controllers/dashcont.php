<?php

namespace App\Controllers;

class dashcont extends BaseController
{
    public function index()
    {
        return view('dash'); // Pastikan Anda memiliki view tentang_kami.php di app/Views
    }
}
