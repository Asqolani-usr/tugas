<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        // Jika sudah login, redirect ke dashboard
        if (session()->get('isLoggedIn')) {
            return redirect()->to('dashboard');
        }
        return view('auth/login');
    }

    public function process()
    {
        $users = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $user = $users->getUserByUsername($username);

        if ($user) {
            // Ganti dengan password_verify di aplikasi nyata
            if ($password === $user['password']) { // HANYA UNTUK DEMO, GUNAKAN HASH
                $sessionData = [
                    'user_id'  => $user['id'],
                    'username' => $user['username'],
                    'isLoggedIn' => TRUE
                ];
                session()->set($sessionData);
                return redirect()->to('dashboard');
            } else {
                session()->setFlashdata('error', 'Password salah');
                return redirect()->to('login');
            }
        } else {
            session()->setFlashdata('error', 'Username tidak ditemukan');
            return redirect()->to('login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
