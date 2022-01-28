<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileSettingController extends Controller
{
    public function profile()
    {
        return view('Profile/profilesetting');
    }
    
}
