<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $config = config('Auth');

        return view($config->views['login'], [
            'config' => $config,
        ]);
    }
    public function register()
    {
        return view('auth/register');
    }
    public function user()
    {
        return view('user/index');
    }
}
