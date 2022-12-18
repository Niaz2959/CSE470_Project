<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Cars;

class HomeController extends Controller
{
    public function index()
    {
        // $data=Cars::all();
        // $car=cars::all();
        // return view('home.userpage', compact('car'));
        return view('home.userpage');
    }

    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
        return view ('admin.home');
        }
        else
        {
        return view ('home.userpage');
        }

    }
}
