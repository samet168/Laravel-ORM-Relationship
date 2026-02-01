<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index(){
        $profiles = Profile::orderBy('id', 'desc')->with('user')->get();
        return $profiles;
    }
}
