<?php

namespace App\Controllers;

use App\Models\Usermodel;

class Auth extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmit()
    {
        $model = new Usermodel();

        // Ambil data username dan password
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set('user_id', $user['id']);
            return redirect()->to('/');
        } else {
            return redirect()->to('/login')->with('error', 'Invalid credentials');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
