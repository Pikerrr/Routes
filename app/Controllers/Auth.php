<?php

namespace App\Controllers;

class Auth extends BaseController
{
    private $users = [
        [
            'username' => 'admin',
            'password' => '123',
            'role'     => 'admin'
        ],
        [
            'username' => 'buyer',
            'password' => '123',
            'role'     => 'buyer'
        ]
    ];

    public function login()
    {
        return view('auth/login');
    }

    public function processLogin()
    {
        $session = session();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        foreach ($this->users as $user) {
            if ($user['username'] == $username && $user['password'] == $password) {

                $session->set([
                    'username'   => $user['username'],
                    'role'       => $user['role'],
                    'isLoggedIn' => true
                ]);

                return redirect()->to('/');
            }
        }

        return redirect()->back()->with('error', 'Login gagal');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}