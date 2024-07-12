<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $postingan = Postingan::with('user')->get(); 
        // dd($postingan);// Jika ada relasi user
        return view('welcome',compact('postingan'));
    }
}
