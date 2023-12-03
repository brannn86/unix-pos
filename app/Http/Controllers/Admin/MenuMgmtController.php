<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuMgmtController extends Controller
{
    public function menuMgmt() {
        return view('admin.menumgmt');
    }
}
