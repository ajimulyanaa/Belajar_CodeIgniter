<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
        // echo "hello world";
        
    }

    public function hello($nama)
    {
        
        echo "hello world ";
        
    }
}
