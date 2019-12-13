<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function requestResult()
    {
        return view('request-result');
    }

    public function checkRequestStatus()
    {
        return view('check-request-status');
    }

    public function checkResult()
    {
        return view('check-result');
    }
}
