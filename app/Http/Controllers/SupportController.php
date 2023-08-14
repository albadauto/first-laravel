<?php

namespace App\Http\Controllers;

use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(){
        $supports = Support::all();
        return view('admin/supports/index', compact('supports'));
    }
}
