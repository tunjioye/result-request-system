@php
    $activeUrl = $activeUrl ?? '/admin/home';
@endphp
<ul class="list-group admin-sidenav">
    <a class="list-group-item border-0{{ ($activeUrl == '/admin/home') ? ' sidenav-active' : ''}}" href="{{ url('/admin/home') }}">
        Dashboard
    </a>
    <a class="list-group-item border-0{{ ($activeUrl == '/admin/profile') ? ' sidenav-active' : ''}}" href="{{ url('/admin/profile') }}">
        Profile
    </a>
    <a class="list-group-item border-0{{ ($activeUrl == '/admin/requests') ? ' sidenav-active' : ''}}" href="{{ url('/admin/requests')  }}">
        Requests
    </a>
    <a class="list-group-item border-0{{ ($activeUrl == '/admin/requesters') ? ' sidenav-active' : ''}}" href="{{ url('/admin/requesters') }}">
        Requesters
    </a>
    <a class="list-group-item border-0{{ ($activeUrl == '/admin/results') ? ' sidenav-active' : ''}}" href="{{ url('/admin/results') }}">
        Results
    </a>
    <a class="list-group-item border-0{{ ($activeUrl == '/admin/students') ? ' sidenav-active' : ''}}" href="{{ url('/admin/students') }}">
        Students
    </a>
    <a class="list-group-item border-0{{ ($activeUrl == '/admin/schools') ? ' sidenav-active' : ''}}" href="{{ url('/admin/schools') }}">
        Schools
    </a>
</ul>
