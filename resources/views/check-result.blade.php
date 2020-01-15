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
                        <label for="school">Select School</label> <span class="text-danger">*</span>
                        <Select class="form-control" name="school" required>
                            <option value="">Select School</option>
                            @foreach (App\School::has('students', '>' , 1)->with('students')->get()->sortBy('school_name') as $item)
                                <option value="{{ $item->id }}">{{ $item->school_name }}</option>
                            @endforeach
                        </Select>
                        <small class="text-muted">showing only schools with registered students</small>
                    </div>

                    <div class="form-group">
                        <label for="student">Select Student</label> <span class="text-danger">*</span>
                        <Select class="form-control" name="student" required>
                            <option value="">Select Student</option>
                        </Select>
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
                        <input type="text" class="form-control" placeholder="Enter Year Received" name="year_received" autocomplete="off">
                        <small class="text-muted">you can leave it empty if you are not sure</small>
                    </div>

                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-outline-dark">Submit</button>
                    </div>
                </form>

            </card>
        </div>
    </div>
</div>
@endsection

@section('page_scripts')
<script type="text/javascript">
    $('select[name="school"]').change(function () {
		// Get School Students
        let apiUrl = '/api/school/' + $(this).val() + '/students';

		$.ajax({
			headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url: apiUrl,
			type: 'GET',
			dataType: 'json'
		})
		.done(function(response) {
			$('select[name="student"]').html('');
            response.forEach(function (student) {
                $('select[name="student"]').append('<option value="' + student.id + '">' + student.full_name + '</option>');
            });
		})
		.fail(function() {
			$('select[name="student"]').html('');
		});
	});
</script>
@endsection
