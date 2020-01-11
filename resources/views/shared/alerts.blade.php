@if(session()->has('warning'))
	<div class="alert alert-warning alert-dismissible fade show mb-4" role="alert">
		{!! session('warning') !!}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
@endif
@if(session()->has('success'))
	<div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
		{!! session('success') !!}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
@endif
@if(session()->has('error'))
	<div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
		{!! session('error') !!}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
@endif
@if( session()->has('errors') )
	<div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
		@foreach(session('errors')->all() as $error)
			<div>{{ $error }}</div>
		@endforeach
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
@endif
