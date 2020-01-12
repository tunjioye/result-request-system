@extends('layouts.app')

@php
    $requests = App\Request::all();
@endphp

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
                @includeIf('shared.admin-sidenav', ['activeUrl' => '/admin/requests'])
            </card>
        </div>

        <div class="col-md-8">
            <card heading="Requests Table" no-padding>
                <div class="table-wrapper">
                    <table class="table table-light table-sm">
                        <thead class="thead-light">
                            <tr>
                                <th style="width: 1rem;">#</th>
                                <th>Tracing No</th>
                                <th>Result Type</th>
                                <th>Year Received</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($requests as $item)
                                <tr>
                                    <td style="width: 1rem;">{{ $loop->iteration }}</td>
                                    <td><code>{{ Str::upper($item->tracking_number) }}</code></td>
                                    <td><kbd>{{ Str::upper($item->result_type) }}</kbd></td>
                                    <td>{{ optional($item)->year_received }}</td>
                                    <td><small class="{{ App\Request::statusClass($item->status) }}">{{ $item->status }}</small></td>
                                    <td><small>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->toDateString() }}</small></td>
                                    <td class="text-right">
                                        <a href="javascript:;">view</a>
                                        <a href="javascript:;">edit</a>
                                        <a href="javascript:;" class="text-danger confirm-action">del</a>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                    @empty($requests->count())
                        <p class="bg-danger text-light text-center mb-3">No Record Found</p>
                    @endempty
                </div>
            </card>
        </div>
    </div>
</div>
@endsection
