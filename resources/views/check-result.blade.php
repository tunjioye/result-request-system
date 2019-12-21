@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <stats-card title="Check Result" description="you can check for results here ..."></stats-card>

            <br/>

            <card heading="Check Result Form">                
                <form role="form">
                    <label for="select">Choose Institution</label><span class="text-danger">*</span>
                    <Select class="form-control" id="select">
                        <option  selected disabled>Choose Institution</option>
                        <option >University of Ilorin</option>
                        <option >University of Ibadan</option>
                        <option >University of Osun</option>
                        <option >University of Lagos</option>
                        </Select><br>
                    <div class="form-group">
                        <label for="matric">Student MatricNo</label><span class="text-danger">*</span>
                        <input type="text" class="form-control" placeholder="Enter Student MatricNo" id="matric" Required>
                    </div>
                    
                    <div class="form-group">
                        <label for="name">Student Name</label><span class="text-danger">*</span>
                        <input type="text" class="form-control"  placeholder="Enter Student Name" id="name" Required>  
                    </div>
                    <div class="form-group">
                        <label for="type">Result Type</label><span class="text-danger">*</span>
                        <input type="email" class="form-control"  placeholder="Enter Result Type" id="type" Required>  
                    </div>
                    <div class="form-group">
                        <label for="year">Year Received</label><span class="text-danger">*</span>
                        <input type="text" class="form-control"  placeholder="Enter Year Received" id="year" Required>
                    </div>
                </form>
               
            </card><br/>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-outline-dark">Submit</button>
            </div>
        </div>
    </div>
</div>
@endsection
