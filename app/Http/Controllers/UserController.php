<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserController extends Controller
{
    public function index(){
       $user = UserModel::where('username','manager')->firstOrFail();
       return view('user',['data' => $user]);
       }
    }

