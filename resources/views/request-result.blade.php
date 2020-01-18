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

            <form role="form" action="" method="POST">
                {{ csrf_field() }}

                <card heading="Student Data">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="school">Select School</label> <span class="text-danger">*</span>
                            <Select class="form-control" name="school">
                                @foreach (App\School::all()->sortBy('school_name') as $item)
                                    <option value="{{ $item->id }}">{{ $item->school_name }}</option>
                                @endforeach
                            </Select>
                        </div>

                        <div class="form-group">
                            <label for="matric_number">Student Matric Number</label> <span class="text-danger">*</span>
                            <input type="text" class="form-control" placeholder="Enter Student MatricNo" name="matric_number" required>
                        </div>

                        <div class="form-group">
                            <label for="first_name">Student Name</label> <span class="text-danger">*</span>
                            <input type="text" class="form-control" placeholder="Enter Student First Name" name="first_name" required>
                        </div>

                        <div class="form-group">
                            <label for="last_name">Student Name</label> <span class="text-danger">*</span>
                            <input type="text" class="form-control" placeholder="Enter Student Last Name" name="last_name" required>
                        </div>

                        <div class="form-group">
                            <label for="graduation_year">Graduation Year</label>
                            <input type="text" class="form-control" placeholder="Enter Year of Graduation" name="graduation_year">
                        </div>
                    </div>
                </card>

                <card heading="Result Information">
                    <div class="col-md-12">
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
                            <textarea type="text" class="form-control" placeholder="Purpose of Request" name="purpose"></textarea>
                        </div>
                    </div>
                </card>

                <card heading="Requester Information">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="requester_type">Select Requester Type</label> <span class="text-danger">*</span>
                            <Select name="requester_type" class="form-control">
                                <option selected disabled>Choose Requester</option>
                                <option>COMPANY</option>
                                <option>UNIVERSITY</option>
                            </Select>
                            <small class="text-muted">COMPANY OR UNIVERSITY</small>
                        </div>

                        <div class="form-group">
                            <label for="requester_name">Requester Name</label> <span class="text-danger">*</span>
                            <input type="text" class="form-control" placeholder="Enter Requester Name" name="requester_name" required/>
                            <small class="text-muted">COMPANY OR UNIVERSITY NAME</small>
                        </div>

                        <div class="form-group">
                            <label for="requester_address">Requester Address</label> <span class="text-danger">*</span>
                            <input type="text" class="form-control" placeholder="Enter Requester Address" name="requester_address" required/>
                            <small class="text-muted">COMPANY OR UNIVERSITY ADDRESS</small>
                        </div>
                    </div>
                </card>

                <card heading="Requester Contact Information">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="contact_name">Contact Name</label> <span class="text-danger">*</span>
                            <input type="text" class="form-control" placeholder="Enter Contact Name" name="contact_name" required>
                        </div>

                        <div class="form-group">
                            <label for="contact_role">Contact Role</label>
                            <input type="text" class="form-control" placeholder="Enter Contact Role" name="contact_role" required>
                        </div>

                        <div class="form-group">
                            <label for="contact_email">Contact Email</label> <span class="text-danger">*</span>
                            <input type="email" class="form-control" placeholder="Enter Contact Email" name="contact_email" required>
                        </div>

                        <div class="form-group">
                            <label for="contact_number">Contact Number</label>
                            <input type="text" class="form-control" placeholder="Enter Contact Number" name="contact_number" required>
                        </div>

                        <div class="form-group">
                            <label for="contact_visibility">Contact Visibility</label>
                            <select class="form-control" name="contact_visibility">
                                <option value="false">NO</option>
                                <option value="ture">YES</option>
                            </select>
                        </div>
                    </div>
                </card>

                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-outline-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
