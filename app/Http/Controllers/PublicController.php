<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request as RequestModel;
use Str;

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

    public function requestResultProcess(Request $request)
    {
        return redirect()->back();
    }

    public function checkRequestStatusProcess(Request $request)
    {
        $requestedRequest = RequestModel::where('tracking_number', $request->tracking_number)->first();

        switch ($requestedRequest->status) {
            case 'REJECTED':
                if (Str::length($requestedRequest->reason) > 0) {
                    session()->flash('error', 'Your Request Status is <strong>REJECTED</strong>. <br/>REASON : ' . $requestedRequest->reason);
                } else {
                    session()->flash('error', 'Your Request Status is <strong>REJECTED</strong>.');
                }
                break;

            case 'SUCCESS':
                session()->flash('success', 'Your Request Status is <strong>SUCCESS</strong>. If you have not received an email with the requested result attached, You can <a href="' . url('/check-result') . '">check the result here</a>');
                break;

            case 'PENDING':
                session()->flash('warning', 'Your Request Status is <strong>PENDING</strong>. Please hold on while we still communicate with the School Involved. And We will definitely send you an email on our findings.');
                break;

            default:
                session()->flash('error', 'Invalid Tracking Number <strong>' . $request->tracking_number . '</strong>');
                break;
        }


        return redirect()->back();
    }

    public function checkResultProcess(Request $request)
    {
        return redirect()->back();
    }
}
