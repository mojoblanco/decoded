@extends('layouts.decoded')

@section('content')

<section class="section-wrap">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<h2 class="mb-30">Submit your entry</h2>
				<p class="text-3">
                    Win a whopping N500,000 and also get to feature a top artiste in exactly 4 weeks. Get DECODED
                </p>
			</div>

			<div class="col-md-7 mt-mdm-50 text-center">
                <form method="post" action={{ route('submit') }}>
	                <input type="hidden" name="_token" value="{!! csrf_token() !!}">

					<div class="row row-12">
						<div class="col-md-6">
							<input name="name" id="name" type="text" placeholder="Full Name*" required>
						</div>

						<div class="col-md-6">
							<input name="email" id="email" type="email" placeholder="E-mail*" required>
						</div>

						<div class="col-md-6">
							<input name="phone" id="phone" type="text" placeholder="Phone Number*" required>
						</div>

						<div class="col-md-6">
							<input name="link" id="link" type="url" placeholder="Song Link (Soundcloud)*" required>
						</div>

						<div class="col-md-6">
							<input name="alat_no" id="alat_no" type="number" placeholder="Account Number (ALAT)*" required>
						</div>
					</div>

					<input type="submit" class="btn mt-20 btn-submit btn-alt btn-block" value="Submit">

					<div id="msg" class="message"></div>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection
