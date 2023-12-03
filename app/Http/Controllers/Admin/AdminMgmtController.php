<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminMgmtController extends Controller
{
    public function adminMgmt() {
        return view('admin.adminmgmt');
    }
}
