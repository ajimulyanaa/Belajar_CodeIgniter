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
        return view('pages/home',$data);
        
    }
    public function about()
    {
        // return view('pages/about');
        // untuk mengirimkan data pada title
        $data=[
            'title'=>'About Me'
        ];
        return view('pages/about',$data);
        
    }
    public function contact()
    {
        // return view('pages/about');
        // untuk mengirimkan data pada title
        $data=[
            'title'=>'Contact Me',
            'alamat'=>[
                [
                    'tipe'=>'Rumah',
                    'alamat'=>'Jl.kedong no.20',
                ]
                ,
                [
                    'tipe'=>'Kantor',
                    'alamat'=>'Jl.bandara no.20',
                ],
                [
                    'tipe'=>'Kosan',
                    'alamat'=>'Jl.jagakarsa no.501',
                ]
            ]
        ];
        return view('pages/contact',$data);
        
    }

    
}