@extends('layouts.app')

@php
    $schools = App\School::all();
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
                @includeIf('shared.admin-sidenav', ['activeUrl' => '/admin/schools'])
            </card>
        </div>

        <div class="col-md-8">
            <card heading="Schools Table" no-padding>
                <div class="table-wrapper">
                    <table class="table table-light table-sm">
                        <thead class="thead-light">
                            <tr>
                                <th style="width: 1rem;">#</th>
                                <th>School Name</th>
                                <th>Students</th>
                                <th>Contact Name</th>
                                <th>Contact Email</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($schools as $item)
                                <tr>
                                    <td style="width: 1rem;">{{ $loop->iteration }}</td>
                                    <td><span>{{ $item->school_name }}</span></td>
                                    <td><span>{{ optional($item)->students->count() }}</span></td>
                                    <td><span>{{ $item->contact_name }}</span></td>
                                    <td><span><a href="mailto:{{ $item->contact_email }}" target="_blank" rel="noreferrer noopener">{{ $item->contact_email }}</a></span></td>
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
                    @empty($schools->count())
                        <p class="bg-danger text-light text-center mb-3">No Record Found</p>
                    @endempty
                </div>
            </card>
        </div>
    </div>
</div>
@endsection
