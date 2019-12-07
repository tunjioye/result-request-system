@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <card heading="Card Heading">
                <div>Card Body</div>
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
