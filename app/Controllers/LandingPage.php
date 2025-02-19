<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class LandingPage extends BaseController
{
    public function index()
    {
        $kategoriModel = new KategoriModel();
        $data['kategori'] = $kategoriModel->findAll();

        return view('landing_page', $data);
    }
}
