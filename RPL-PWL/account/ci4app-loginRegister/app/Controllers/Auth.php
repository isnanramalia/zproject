<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\View\View;

class Auth extends Controller
{
    public function login()
    {
        // Menampilkan halaman login
        return view('login');
    }

    public function register()
    {
        // Menampilkan halaman registrasi
        return view('register');
    }

    public function processLogin()
    {
    }

    public function processRegister()
    {
        // Proses registrasi pengguna
    }
}
