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
                           
                            <div class="form-group form-inline">
                                <label for="track" class="">Request Tracking Number<span class="text-danger">*</span></label><br/>
                                <input type="text" class="form-control col-md-10"  placeholder="Enter Request Tracking Number" id="track"/>  
                                <button type="submit" class="btn btn-outline-dark col-md-2">Check</button>
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
