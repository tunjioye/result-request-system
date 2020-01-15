@extends('layouts.app')

@php
    $result_types = App\Result::getResultTypes();
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
                        <Select class="form-control" name="school_id">
                            @foreach (App\School::all()->sortBy('school_name') as $item)
                                <option value="{{ $item->id }}">{{ $item->school_name }}</option>
                            @endforeach
                        </Select>
                    </div>

                    <div class="form-group">
                        <label for="matric">Select Student</label> <span class="text-danger">*</span>
                        <input type="text" class="form-control" placeholder="Enter Student" name="student_id" required>
                    </div>

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
