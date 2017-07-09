@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default intro">
                <div class="panel-heading">
                    <h3 class="panel-title">Fill in the form below</h3>
                </div>

                <div class="panel-body">
                    <div class="text-center">
                        <form method="post" action={{ route('submit') }}>
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                            <div class="form-group">
                                <input type="text" name="full_name" value="{{ old('full_name') }}" placeholder="full name" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="email address" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="text" name="phone" value="{{ old('phone') }}" placeholder="phone number" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="text" name="link" value="{{ old('link') }}" placeholder="song link (soundcloud)" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="text" name="account_no" value="{{ old('account_no') }}" placeholder="account no (diamond bank)" class="form-control">
                            </div>

                            <input type="submit" value="submit" class="btn btn-success btn-lg btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
