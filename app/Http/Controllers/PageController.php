<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return 'Selamat Datang';
    }

    public function about() {
        return 'Bangkit Maulana Caniago / 2141762143';
    }
    
    
}
