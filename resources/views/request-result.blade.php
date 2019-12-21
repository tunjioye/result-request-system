@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <stats-card title="Request Result" description="you can request for results here ..."></stats-card>

            <br/>

            <card heading="Request Result Form">
                <div class="row">
                    <div class="col-md-3">
                        <h5>Student Data</h5>
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
                                <input type="text" class="form-control" placeholder="Enter Student Name" required>
                            </div>
                            <div class="form-group">
                                <input type="calender" class="form-control"  placeholder="Enter Year of Graduation" required>  
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3">
                        <h5>Result Information</h5>
                        <form role="form">
                           <Select id="pay" class="form-control">
                                <option selected disabled>Request Type</option>
                                <option >1</option>
                                <option >2</option>
                                 <option >3</option>
                                <option >4</option>
                            </Select><br>
                             <div class="form-group">
                                <textarea type="text" class="form-control" placeholder="Purpose of Request" required></textarea>                        
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3">
                        <h5>Requester Information</h5>
                        <form role="form">
                            <Select id="pay" class="form-control">
                                <option selected disabled>Choose Requester</option>
                                <option>Company</option>
                                <option>Institution</option>
                            </Select><br>                        
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Requester Name" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Enter Requester Address" required/>  
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3">
                        <h5>Requester Contact Information</h5>
                        <form role="form">
                             <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Contact Name" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Enter Contact Role" required>  
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Enter Contact Email" required>  
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Enter Contact Number" required>  
                            </div>
                            <div class="form-group">
                                <input type="calender" class="form-control"  placeholder="Enter Contact Visibility" required>  
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
