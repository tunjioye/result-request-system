@extends('layouts.app')

@php
    $students = App\Student::all();
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
                @includeIf('shared.admin-sidenav', ['activeUrl' => '/admin/students'])
            </card>
        </div>

        <div class="col-md-8">
            <card heading="Students Table" no-padding>
                <div class="table-wrapper">
                    <table class="table table-light table-sm">
                        <thead class="thead-light">
                            <tr>
                                <th style="width: 1rem;">#</th>
                                <th>School</th>
                                <th>Matric</th>
                                <th>Full Name</th>
                                <th>Graduation Year</th>
                                <th>Gender</th>
                                {{-- <th>Email Address</th> --}}
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($students as $item)
                                <tr>
                                    <td style="width: 1rem;">{{ $loop->iteration }}</td>
                                    <td><span>{{ optional($item->school)->school_name }}</span></td>
                                    <td><kbd>{{ optional($item)->matric_number }}</kbd></td>
                                    <td><abbr title="{{ optional($item)->matric_number }}">{{ optional($item)->fullName() }}</abbr></td>
                                    <td><span>{{ optional($item)->graduation_year }}</span></td>
                                    <td><small>{{ Str::upper(optional($item)->gender) }}</small></td>
                                    {{-- <td><span><a href="mailto:{{ optional($item)->email_address }}" target="_blank" rel="noreferrer noopener">{{ optional($item)->email_address }}</a></span></td> --}}
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
                    @empty($students->count())
                        <p class="bg-danger text-light text-center mb-3">No Record Found</p>
                    @endempty
                </div>
            </card>
        </div>
    </div>
</div>
@endsection
