<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $data;
    public $imagePath;
    public $imageName;

    public function dashboard()
    {
        return view('admin.pages.dashboard');
    }
    public function profile()
    {
        return view('admin.pages.profile');
    }
    public function logout()
    {
        session()->flush();
        return redirect()->route('home');
    }
}
