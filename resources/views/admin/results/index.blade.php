@extends('layouts.app')

@php
    $results = App\Result::all();
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
                @includeIf('shared.admin-sidenav', ['activeUrl' => '/admin/results'])
            </card>
        </div>

        <div class="col-md-8">
            <card heading="Results Table" no-padding>
                <div class="table-wrapper">
                    <table class="table table-light table-sm">
                        <thead class="thead-light">
                            <tr>
                                <th style="width: 1rem;">#</th>
                                <th>School</th>
                                <th>Student</th>
                                <th>Result Type</th>
                                <th>Year Received</th>
                                <th>File</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($results as $item)
                                <tr>
                                    <td style="width: 1rem;">{{ $loop->iteration }}</td>
                                    <td><span>{{ optional($item->school)->school_name }}</span></td>
                                    <td><abbr title="{{ optional($item->student)->matric_number }}">{{ optional($item->student)->fullName() }}</abbr></td>
                                    <td><kbd>{{ Str::upper($item->result_type) }}</kbd></td>
                                    <td><span>{{ $item->year_received }}</span></td>
                                    <td><span><a href="{{ asset($item->file) }}" target="_blank" rel="noreferrer noopener">preview file</a></span></td>
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
                    @empty($results->count())
                        <p class="bg-danger text-light text-center mb-3">No Record Found</p>
                    @endempty
                </div>
            </card>
        </div>
    </div>
</div>
@endsection
