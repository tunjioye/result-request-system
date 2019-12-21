@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <stats-card title="Check Result" description="you can check for results here ..."></stats-card>

            <br/>

            <card heading="Check Result Form">
                <div class="row ">
                    <div class="col-md-6 offset-md-3">
                        <h5 class="text-center">Check Result</h5>                    
                        <form role="form">
                            <Select class="form-control">
                                <option  selected disabled>Choose Institution</option>
                                <option >University of Ilorin</option>
                                <option >University of Ibadan</option>
                                    <option >University of Osun</option>
                                <option >University of Lagos</option>
                                </Select><br>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Student MatricNo" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Enter Student Name" required>  
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Enter Result Type" required>  
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Enter Year Received" required>  
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-outline-dark">Submit</button>
                    </div>
                </div>
            </card>
        </div>
    </div>
</div>
@endsection
