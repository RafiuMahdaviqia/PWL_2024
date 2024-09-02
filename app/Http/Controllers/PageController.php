<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function hi() { 
        return 'Selamat Datang'; 
    }

    public function about(){
        return 'Nama : Rafiu Mahdaviqia <br> NIM : 2241760133';
    }

    public function articles($id){
        return 'Halaman Artikel dengan ID : ' .$id;
    }
}
