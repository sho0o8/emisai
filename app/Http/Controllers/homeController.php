<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class homeController extends Controller
{
    public function home(){
        return view ('home');
    }
    public function about(){
        return view ('about');
    }
    public function point(){
        return view ('point');
    }
    public function seat(){
        return view ('seat');
    }
    public function menu(){
        return view ('menu');
    }
    public function access(){
        return view ('access');
    }
}
