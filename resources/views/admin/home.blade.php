@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        <div class="mb-2"><br/></div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-4">
            <card heading="Admin Sidenav" no-padding>
                @includeIf('shared.admin-sidenav', ['activeUrl' => '/admin/home'])
            </card>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6 mb-4">
                <stats-card title="{{ \App\Request::where('status', 'PENDING')->count() }}" description="pending requests"></stats-card>
                </div>
                <div class="col-md-6 mb-4">
                    <stats-card title="{{ \App\Request::count() }}" description="number of requests"></stats-card>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <stats-card title="{{ \App\Requester::count() }}" description="number of requesters"></stats-card>
                </div>
                <div class="col-md-6 mb-4">
                    <stats-card title="{{ \App\Result::count() }}" description="number of results"></stats-card>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <stats-card title="{{ \App\Student::count() }}" description="number of students"></stats-card>
                </div>
                <div class="col-md-6 mb-4">
                    <stats-card title="{{ \App\School::count() }}" description="number of schools"></stats-card>
                </div>
            </div>

            <div class="mb-2"><br/></div>

            <card heading="Dashboard">
                You are logged in!
            </card>
        </div>
    </div>
</div>
@endsection
