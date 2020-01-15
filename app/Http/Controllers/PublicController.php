<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request as RequestModel;
use Str;
use App\Result;

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
        $request->validate([
            'tracking_number' => 'required|string'
        ]);

        $requestedRequest = RequestModel::where('tracking_number', $request->tracking_number)->first();
        $requestStatus = optional($requestedRequest)->status ?? '';

        switch ($requestStatus) {
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
        $request->validate([
            'school' => 'required',
            'student' => 'required',
            'result_type' => 'required|string',
            'year_received' => 'nullable|date_format:Y'
        ]);

        $requestedResult = [];

        if (isset($request->year_received)) {
            $requestedResult = Result::where('student_id', $request->student)
                ->where('result_type', $request->result_type)
                ->where('year_received', $request->year_received)
                ->first();
        } else {
            $requestedResult = Result::where('student_id', $request->student)
                ->where('result_type', $request->result_type)
                ->first();
        }

        $resultFile = optional($requestedResult)->file ?? '';

        if ($resultFile) {
            session()->flash('success', 'The Result you requested is <strong>FOUND</strong>. <a href="' . asset($resultFile) . '" target="_blank" rel="noreferrer noopener">preview result</a>');
        } else {
            session()->flash('error', 'The Result you requested was <strong>NOT FOUND</strong>. If you like, you can <a href="' . url('/request-result') . '">request for thr result here</a>');
        }

        return redirect()->back();
    }
}
