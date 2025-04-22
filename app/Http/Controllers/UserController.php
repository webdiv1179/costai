<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index()
    {
        $User = User::latest()->paginate(25);
        return view('Dashboard.Users.index', compact('User'));
    }


}
