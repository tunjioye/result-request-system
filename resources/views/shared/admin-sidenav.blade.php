@php
    $activeUrl = $activeUrl ?? '/admin/home';
@endphp
<ul class="list-group admin-sidenav">
    <a class="list-group-item border-0{{ ($activeUrl == '/admin/home') ? ' font-weight-bold' : ''}}" href="{{ url('/admin/home') }}">
        Dashboard
    </a>
    <a class="list-group-item border-0{{ ($activeUrl == '/admin/profile') ? ' font-weight-bold' : ''}}" href="{{ url('/admin/profile') }}">
        Profile
    </a>
    <a class="list-group-item border-0{{ ($activeUrl == '/admin/requests') ? ' font-weight-bold' : ''}}" href="{{ url('/admin/requests')  }}">
        Requests
    </a>
    <a class="list-group-item border-0{{ ($activeUrl == '/admin/requesters') ? ' font-weight-bold' : ''}}" href="{{ url('/admin/requesters') }}">
        Requesters
    </a>
    <a class="list-group-item border-0{{ ($activeUrl == '/admin/results') ? ' font-weight-bold' : ''}}" href="{{ url('/admin/results') }}">
        Results
    </a>
    <a class="list-group-item border-0{{ ($activeUrl == '/admin/students') ? ' font-weight-bold' : ''}}" href="{{ url('/admin/students') }}">
        Students
    </a>
    <a class="list-group-item border-0{{ ($activeUrl == '/admin/schools') ? ' font-weight-bold' : ''}}" href="{{ url('/admin/schools') }}">
        Schools
    </a>
</ul>
