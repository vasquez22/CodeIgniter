<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('login'); //editado
    }
    public function inicio2()
    {
        return view('home'); //editado
    }
    public function roles()
    {
        return view('home'); //editado
    }
}