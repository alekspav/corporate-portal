<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        /*if (!Auth::user()->idAdmin){
            redirect(404);
        }*/
    }

    public function test(){
        $user = User::all();
        dd($user);
    }

}