<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    // public function index()
    // {
    //     $users = User::orderBy('id', 'desc')->with('profile')->get();
    //     return $users;
    // }
    public function index()
    {
        $users = User::orderBy('id', 'desc')->with(['profile', 'posts'])
        ->whereHas('profile', function($query){
            // $query->where('name', 'like', '%a%');
            $query->where('id',2);
        })->first();
        // ->get();
        //get ប្រើចាប់ពី២តំលៃ
        //first ប្រើបានតែ1តំលៃ
        return $users;
    }
}
