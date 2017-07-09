@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default intro">
                <div class="panel-heading">
                    <h3 class="panel-title">Fill in the form below</h3>
                </div>

                <div class="panel-body">
                        <form method="post" action={{ route('submit') }}>
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Full Name</label>
                                        <input type="text" name="full_name" value="{{ old('full_name') }}" placeholder="full name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Email Address</label>
                                        <input type="email" name="email" value="{{ old('email') }}" placeholder="email address" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Phone Number</label>
                                        <input type="text" name="phone" value="{{ old('phone') }}" placeholder="phone number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Song Link</label>
                                        <input type="text" name="link" value="{{ old('link') }}" placeholder="song link (soundcloud)" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Account Number</label>
                                        <input type="text" name="account_no" value="{{ old('account_no') }}" placeholder="account no (diamond bank)" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">BVN</label>
                                        <input type="text" name="bvn" value="{{ old('bvn') }}" placeholder="yout bvn" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <input type="submit" value="submit" class="btn btn-success btn-lg btn-block">
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection
