@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <card heading="Admin Sidenav" no-padding>
                @includeIf('shared.admin-sidenav', ['activeUrl' => '/admin/profile'])
            </card>
        </div>
        <div class="col-md-8">
            <card heading="Update Profile">
                <form action="{{ url('/admin/profile/update') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Name: <span class="text-danger">*</span></label>
                        <input class="form-control" placeholder="Your Name" type="text" name="name" value="{{ old('name', Auth::user()->name) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email: <span class="text-danger">*</span></label>
                        <input class="form-control" placeholder="Your Email" type="email" name="email" value="{{ old('email', Auth::user()->email) }}">
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </div>
                </form>
            </card>

            <card heading="Change Password">
                You are logged in!
            </card>
        </div>
    </div>
</div>
@endsection
