<?php

namespace App\Controllers;
// conect database-2 dan 3
use App\Models\KomikModel;

class Komik extends BaseController
{
    //conect database-3
    protected $komikModel;
    public function __construct(){
        $this->komikModel = new KomikModel();
    }
    public function index(): string
    {
        $data=[
            'title'=>'Daftar Komik',
        ];
        
    // conect database-1
    // $komikModel = new \App\Models\KomikModel();
    //connect database-2
    // $komikModel = new KomikModel();
    // database -2 tampil
    // $komik= komikModel->getKomik();

    //data base-3 untuk tampil
    $   $komik = $this->komikModel->findAll();
        return view('komik/index',$data);
        // echo "hello world";
        
    }

}