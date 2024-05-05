<?php

namespace App\Controllers;

class Komik extends BaseController
{
    public function index(): string
    {
        $data=[
            'title'=>'Daftar Komik',
        ];
        return view('komik/index',$data);
        // echo "hello world";
        
    }

}