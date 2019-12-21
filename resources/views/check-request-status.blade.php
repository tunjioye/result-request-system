@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <stats-card title="Check Request Ststus" description="you can check the status of your result requests here ..."></stats-card>

            <br/>

            <card heading="Check Request Status Form">
              <div class="row ">
                    <div class="col-md-6 offset-md-3">                   
                        <form role="form">
                            <label for="track" style="width:100%">Request Tracking Number<span class="text-danger">*</span></label>
                            <div class="form-group" style="display:flex;">
                                <input type="text" class="form-control"  placeholder="Enter Request Tracking Number" id="track"/>  
                                <button type="submit" class="btn btn-outline-dark">Check</button>
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
