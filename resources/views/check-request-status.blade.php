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
                        <h5 class="text-center">Check Result Request Status</h5>                    
                        <form role="form">
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Enter Request Tracking Number" required>  
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-outline-dark">Check</button>
                    </div>
                </div>
            </card>
        </div>
    </div>
</div>
@endsection
