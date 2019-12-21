@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <stats-card title="Request Result" description="you can request for results here ..."></stats-card>

            <br/>

            <card heading="Student Data">
                <div class="col-md-12">
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
                            <input type="text" class="form-control" placeholder="Enter Student MatricNo" id="matric" required>                         
                        </div>
                        <div class="form-group">
                            <label for="name">Student Name</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" placeholder="Enter Student Name" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="grad">Year of Graduation</label><span class="text-danger">*</span>
                            <input type="text" class="form-control"  placeholder="Enter Year of Graduation" id="grad" required>  
                        </div>
                    </form>
                </div>
            </card><br/>
            <card heading="Result Information">
                <div class="col-md-12">
                    <form role="form">
                        <label for="type">Request Type</label><span class="text-danger">*</span>
                        <Select id="type" class="form-control">
                            <option selected disabled>Request Type</option>
                            <option >1</option>
                            <option >2</option>
                            <option >3</option>
                            <option >4</option>
                        </Select><br>
                        <div class="form-group">
                            <label for="purpose">Purpose of Request</label><span class="text-danger">*</span>
                            <textarea type="text" class="form-control" placeholder="Purpose of Request" id="purpose" required></textarea>                        
                        </div>
                    </form>
                </div>
            </card><br/>
            <card heading="Requester Information">
                <div class="col-md-12">
                    <form role="form">
                    <label for="requester">Choose Requester</label><span class="text-danger">*</span>
                        <Select id="requester" class="form-control">
                            <option selected disabled>Choose Requester</option>
                            <option>Company</option>
                            <option>Institution</option>
                        </Select><br>                        
                        <div class="form-group">
                            <label for="req">Requester Name</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" placeholder="Enter Requester Name" id="req" required/>
                        </div>
                        <div class="form-group">
                            <label for="add">Requester Address</label><span class="text-danger">*</span>
                            <input type="text" class="form-control"  placeholder="Enter Requester Address" id="add" required/>  
                        </div>
                    </form>
                </div>
            </card><br/>
            <card heading="Requester Contact Information">
                <div class="col-md-12">
                    <form role="form">
                        <div class="form-group">
                            <label for="con">Contact Name</label><span class="text-danger">*</span>
                            <input type="text" class="form-control" placeholder="Enter Contact Name" id="con" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="role">Contact Role</label><span class="text-danger">*</span>
                            <input type="text" class="form-control"  placeholder="Enter Contact Role" id="role" required>  
                        </div>
                        <div class="form-group">
                            <label for="email">Contact Email</label><span class="text-danger">*</span>
                            <input type="email" class="form-control"  placeholder="Enter Contact Email" id="email" required>  
                        </div>
                        <div class="form-group">
                            <label for="num">Contact Number</label><span class="text-danger">*</span>
                            <input type="text" class="form-control"  placeholder="Enter Contact Number" id="num" required>  
                        </div>
                        <div class="form-group">
                            <label for="vis">Contact Visibility</label><span class="text-danger">*</span>
                            <input type="calender" class="form-control"  placeholder="Enter Contact Visibility" id="vis" required>  
                        </div>
                    </form>
                </div>
            </card><br/>
            <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-outline-dark">Submit</button>
            </div>
        </div>
    </div>
</div>
@endsection
