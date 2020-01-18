<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Requester;
use App\Request as RequestModel;
use Faker;
use Str;
use App\Result;

class PublicController extends Controller
{
    /**
     * requestResult
     *
     * @return void
     */
    public function requestResult()
    {
        return view('request-result');
    }

    /**
     * checkRequestStatus
     *
     * @return void
     */
    public function checkRequestStatus()
    {
        return view('check-request-status');
    }

    /**
     * checkResult
     *
     * @return void
     */
    public function checkResult()
    {
        return view('check-result');
    }

    /**
     * requestResultProcess
     *
     * @param Request $request
     * @return void
     */
    public function requestResultProcess(Request $request)
    {
        $request->validate([
            'school' => 'required|exists:schools,id',
            'matric_number' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'graduation_year' => 'nullable|date_format:Y',
            'result_type' => 'required|string',
            'purpose' => 'nullable|string',
            'requester_type' => 'required|string|in:COMPANY,UNIVERSITY',
            'requester_name' => 'required|string',
            'requester_address' => 'required|string',
            'contact_name' => 'required|string',
            'contact_role' => 'nullable|string',
            'contact_email' => 'required|string|email',
            'contact_number' => 'required|string',
            'contact_visibility' => 'nullable|string'
        ]);

        $faker = Faker\Factory::create();
        $request['school_id'] = $request['school'];
        $request['year_received'] = $request['graduation_year'];
        $request['tracking_number'] = Str::substr($faker->md5, 0, 12);

        // Save Student if not exist
        $student = Student::where('school_id', $request['school_id'])
            ->where('matric_number', $request['matric_number'])
            ->whereOr('graduation_year', $request['graduation_year'])
            ->first();
        if ($student == null) {
            $student = new Student($request->all());
            $student->save();
        }
        $request['student_id'] = $student['id'];

        // Save Requester if not exist
        $requester = Requester::where('requester_type', $request['requester_type'])
            ->where('requester_name', $request['requester_name'])
            ->whereOr('requester_address', $request['requester_address'])
            ->first();
        if ($requester == null) {
            $requester = new Requester($request->all());
            $requester->save();
        }
        $request['requester_id'] = $requester['id'];

        // Save Request if not exist
        $actualRequest = RequestModel::where('school_id', $request['school_id'])
            ->where('student_id', $request['student_id'])
            ->where('requester_id', $request['requester_id'])
            ->where('result_type', $request['result_type'])
            ->first();
        if ($actualRequest == null) {
            $actualRequest = new RequestModel($request->all());
            $actualRequest->save();

            session()->flash('success', 'Your Request has been received. <br/>Your Request Tracking Number is <strong>' . $request['tracking_number'] . '</strong>. <br/>You can check your request status anytime at our <a href="' . url('/check-request-status') . '" target="_blank" rel="noreferrer noopener">check request status page</a>');
        } else {
            session()->flash('error', 'A similar request has alredy been received. <br/>With Tracking Number <strong>' . $request['tracking_number'] . '</strong>. <br/>You can check your request status anytime at our <a href="' . url('/check-request-status') . '" target="_blank" rel="noreferrer noopener">check request status page</a>');
        }

        return redirect()->back();
    }

    /**
     * checkRequestStatusProcess
     *
     * @param Request $request
     * @return void
     */
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

    /**
     * checkResultProcess
     *
     * @param Request $request
     * @return void
     */
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
