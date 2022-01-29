<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function detail()
    {
        return view('frontend.job_detail');
    }
    public function apply()
    {
        return view('frontend.job_apply');
    }
}
