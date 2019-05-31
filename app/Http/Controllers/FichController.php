<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\admin ;
use PDF;
use App\Http\Controllers\Controller;
use session;

use Illuminate\Support\Facades\DB;

class FichController extends Controller
{
    public function pdf (){
       $PDF=PDF::loadView('fich');
        return  $PDF->download('fich.pdf');

    }
}
