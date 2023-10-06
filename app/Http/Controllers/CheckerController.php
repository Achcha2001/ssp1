<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checker;

class CheckerController extends Controller
{
    public function index()
    {
        return view('checker.checker');
    }
}
