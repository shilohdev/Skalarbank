<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('template/header/header')
            . view('template/header/bar/navbar')
            . view('template/header/bar/sidebar')
            . view('template/pages/home')
            . view('template/footer/footer');
    }
}
