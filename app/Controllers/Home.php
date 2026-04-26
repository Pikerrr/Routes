<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
{
    if (!session()->get('isLoggedIn')) {
        header('Location: ' . base_url('login'));
        exit();
    }

    if (session()->get('role') != 'buyer') {
        header('Location: ' . base_url('login'));
        exit();
    }

    return view('/pembeli/v_home');
}
}
