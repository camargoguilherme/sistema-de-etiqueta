<?php

namespace App\Http\Controllers\Etiqueta;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('layout.default');
    }

    public function impressora(){
        return ''.  printer_list(PRINTER_ENUM_LOCAL | PRINTER_ENUM_SHARED);
    }
}
