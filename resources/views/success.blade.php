@extends('layouts.decoded')

@section('content')

<section class="section-wrap page-404">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-6 col-md-offset-3">
				<h2 class="mb-50">You have successfully submited your entry</h2>
				<p class="mb-20">
                    You can go back to <a href="{{ route('home') }}">Homepage</a>
                </p>
			</div>
		</div>
	</div>
</section>

@endsection
