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
                <form action="{{ url('/admin/profile') }}" method="POST">
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
                <form action="{{ url('/admin/password') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="current_password">Current Password: <span class="text-danger">*</span></label>
                        <input class="form-control" placeholder="Your Current Password" type="password" name="current_password" required>
                    </div>

                    <div class="form-group">
                        <label for="new_password">New Password: <span class="text-danger">*</span></label>
                        <input class="form-control" placeholder="Your New Password" type="password" name="new_password" required>
                    </div>

                    <div class="form-group">
                        <label for="new_password_confirmation">Confirm New Password: <span class="text-danger">*</span></label>
                        <input class="form-control" placeholder="Confirm New Password" type="password" name="new_password_confirmation" required>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                </form>
            </card>
        </div>
    </div>
</div>
@endsection
