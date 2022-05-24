<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appController extends Controller
{
        //halaman home
    public function home() {

        return view('home');
    }
        //halaman about
    public function about() {
        return view('about');
    }

        //halaman kontak
    public function kontak() {
        return view('kontak');
    }

        //halaman pengalaman
    public function pengalaman() {
        return view('pengalaman');
    }

        //halaman skill

    public function skill() {
        return view('skill');
    }
        //halaman portofolio

    public function porto() {
        return view('porto');
    }
}
