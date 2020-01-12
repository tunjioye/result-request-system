@extends('layouts.app')

@php
    $result_types = [
        'MSc DEGREE', 'BEd DEGREE', 'BSc DEGREE', 'BA DEGREE',
        'WAEC', 'NECO', 'NABTEB', 'WAEC GCE', 'NECO GCE'
    ];
@endphp

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <stats-card title="Check Result" description="you can check for results here ..."></stats-card>

            <br/>

            <card heading="Check Result Form">
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
                        <label for="matric">Student MatricNo</label> <span class="text-danger">*</span>
                        <input type="text" class="form-control" placeholder="Enter Student MatricNo" name="matric_number" required>
                    </div>

                    {{-- <div class="form-group">
                        <label for="name">Student First Name</label> <span class="text-danger">*</span>
                        <input type="text" class="form-control" placeholder="Enter Student First Name" name="first_name" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Student Last Name</label> <span class="text-danger">*</span>
                        <input type="text" class="form-control" placeholder="Enter Student Last Name" name="last_name" required>
                    </div> --}}

                    <div class="form-group">
                        <label for="type">Result Type</label> <span class="text-danger">*</span>
                        <Select class="form-control" name="result_type">
                            @foreach (collect($result_types)->sort() as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </Select>
                    </div>

                    <div class="form-group">
                        <label for="year">Year Received</label>
                        <input type="text" class="form-control" placeholder="Enter Year Received" name="year_recived" required>
                    </div>
                </form>

            </card>

            <br/>

            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-outline-dark">Submit</button>
            </div>
        </div>
    </div>
</div>
@endsection
