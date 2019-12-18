@extends('layouts.app'),

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <card heading="Settings" no-padding>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Dashboard</li>
                    <li class="list-group-item">Dashboard</li>
                    <li class="list-group-item">Dashboard</li>
                </ul>
            </card><br>
            <card heading="Billings" no-padding>
            <ul class="list-group list-group-flush">
                    <li class="list-group-item">Dashboard</li>
                    <li class="list-group-item">Dashboard</li>
                    <li class="list-group-item">Dashboard</li>
                </ul>
            </card>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>

            <br/>

            <card heading="Card Heading">
                <div>Card Body</div>
            </card>

            <br/>

            <stats-card title="Stats 01" description="description of stats"></stats-card>
        </div>
    </div>
</div>
@endsection
