@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <stats-card title="Check Request Ststus" description="you can check the status of your requested results here ..."></stats-card>

            <br/>

            <card heading="Check Request Status Form">
              <div class="row ">
                    <div class="col-md-6 offset-md-3">
                        <form role="form" action="" method="POST">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="track" class="">Request Tracking Number <span class="text-danger">*</span></label><br/>
                                <div class="input-group">
                                    <input type="text" class="form-control"  placeholder="Enter Request Tracking Number" id="track" name="tracking_number" />
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-outline-dark">Check Status</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </card>
        </div>
    </div>
    <style>
    </style>
</div>
@endsection
