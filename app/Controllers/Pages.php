<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        // return view('pages/home');
        // untuk mengirimkan data pada title
        $data=[
            'title'=>'Home'
        ];
        echo view('layout/header',$data);
        echo view('layout/navigation');
        echo view('pages/home');
        echo view('layout/footer');
        
    }
    public function about()
    {
        // return view('pages/about');
        // untuk mengirimkan data pada title
        $data=[
            'title'=>'About Me'
        ];
        echo view('layout/header',$data);
        echo view('layout/navigation');
        echo view('pages/about');
        echo view('layout/footer');
        
    }

    
}