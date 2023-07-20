<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use AuthenticatesUsers;


class AuthController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function faq()
    {
        return view('faq');
    }
    public function offers()
    {
        return view('offers');
    }
    public function brand()
    {
        return view('brand');
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function shop()
    {
        return view('shop');
    }
    public function tipsNadvice()
    {
        return view('tipsNadvice');
    }
    public function a1()
    {
        return view('a1');
    }
    public function a2()
    {
        return view('a2');
    }
    public function a3()
    {
        return view('a3');
    }
}
