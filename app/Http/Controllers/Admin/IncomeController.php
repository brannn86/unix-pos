<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function income() {
        return view('admin.pendapatan');
    }
}
