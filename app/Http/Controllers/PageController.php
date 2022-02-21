<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        echo "Hi! Selamat Datang";
        }
    public function about() {
        echo "Nama : Cintya Aprila Fandini <br>
        Nim : 2041720049"
        ;
    }
    public function articlepage($id) {
        return "Halaman Articles dengan ID" . $id;
        }
}
