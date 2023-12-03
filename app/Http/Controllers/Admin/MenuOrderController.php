<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuOrderController extends Controller
{
    public function menuOrder() {
        return view('admin.menuorder');
    }
}
