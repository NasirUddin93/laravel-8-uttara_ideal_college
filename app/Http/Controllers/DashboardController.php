<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if (Auth::user()->hasRole('admin')) {
            return view('admindashboard');
        } elseif(Auth::user()->hasRole('principal')) {
            return view('principaldashboard');
        }elseif(Auth::user()->hasRole('teacher')) {
            return view('teacherdashboard');
        }elseif(Auth::user()->hasRole('accountant')) {
            return view('accountantdashboard');
        }elseif(Auth::user()->hasRole('student')) {
            return view('studentdashboard');
        }       
        else{
            return "Nothing is found";
        }       
    } 
    public function myprofile()
    {
        return view('myprofile');
    }

    public function postcreate()
    {
        return view('postcreate');
    }
}
