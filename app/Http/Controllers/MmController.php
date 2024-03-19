<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MmController extends Controller
{
    public function viewprod(){
        return'view product';
    }


    public function editprod(){
        return 'edit product';
    }


    public function singleprod(){
        return 'single product';
    }
}
