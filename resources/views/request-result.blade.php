@extends('layouts.app')

@php
    $result_types = App\Result::getResultTypes();
@endphp

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <stats-card title="Request Result" description="you can request for results here ..."></stats-card>

            <br/>

            <card heading="Student Data">
                <div class="col-md-12">
                    <form role="form" action="" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="select">Select School</label> <span class="text-danger">*</span>
                            <Select class="form-control" name="school_name">
                                @foreach (App\School::all()->sortBy('school_name') as $item)
                                    <option value="{{ $item->school_name }}">{{ $item->school_name }}</option>
                                @endforeach
                            </Select>
                        </div>

                        <div class="form-group">
                          <label for="matric">Student Matric Number</label> <span class="text-danger">*</span>
                            <input type="text" class="form-control" placeholder="Enter Student MatricNo" name="matric" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Student Name</label> <span class="text-danger">*</span>
                            <input type="text" class="form-control" placeholder="Enter Student Name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="grad">Year of Graduation</label> <span class="text-danger">*</span>
                            <input type="text" class="form-control" placeholder="Enter Year of Graduation" name="grad" required>
                        </div>
                    </form>
                </div>
            </card>

            <card heading="Result Information">
                <div class="col-md-12">
                    <form role="form">
                        <div class="form-group">
                            <label for="type">Result Type</label> <span class="text-danger">*</span>
                            <Select class="form-control" name="result_type">
                                @foreach (collect($result_types)->sort() as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </Select>
                        </div>

                        <div class="form-group">
                            <label for="purpose">Purpose</label>
                            <textarea type="text" class="form-control" placeholder="Purpose of Request" name="purpose" required></textarea>
                        </div>
                    </form>
                </div>
            </card>

            <card heading="Requester Information">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="requester">Choose Requester</label> <span class="text-danger">*</span>
                        <Select name="requester" class="form-control">
                            <option selected disabled>Choose Requester</option>
                            <option>COMPANY</option>
                            <option>UNIVERSITY</option>
                        </Select>
                    </div>

                    <div class="form-group">
                        <label for="req">Requester Name</label> <span class="text-danger">*</span>
                        <input type="text" class="form-control" placeholder="Enter Requester Name" name="req" required/>
                    </div>

                    <div class="form-group">
                        <label for="add">Requester Address</label> <span class="text-danger">*</span>
                        <input type="text" class="form-control" placeholder="Enter Requester Address" name="add" required/>
                    </div>
                </div>
            </card>

            <card heading="Requester Contact Information">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="con">Contact Name</label> <span class="text-danger">*</span>
                        <input type="text" class="form-control" placeholder="Enter Contact Name" name="con" required>
                    </div>

                    <div class="form-group">
                        <label for="role">Contact Role</label>
                        <input type="text" class="form-control" placeholder="Enter Contact Role" name="role" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Contact Email</label> <span class="text-danger">*</span>
                        <input type="email" class="form-control" placeholder="Enter Contact Email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="num">Contact Number</label>
                        <input type="text" class="form-control" placeholder="Enter Contact Number" name="num" required>
                    </div>

                    <div class="form-group">
                        <label for="vis">Contact Visibility</label> <span class="text-danger">*</span>
                        <input type="calender" class="form-control" placeholder="Enter Contact Visibility" name="vis" required>
                    </div>
                </div>
            </card>

            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-outline-dark">Submit</button>
            </div>
        </div>
    </div>
</div>
@endsection
