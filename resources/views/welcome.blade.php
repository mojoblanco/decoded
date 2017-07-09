@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default intro">
                <div class="panel-body">
                    <div class="text-center">
                        <p>Want to become the first <span class="outline">DECODED</span> act?</p>
                        <p>Simply download the <span class="outline">ALAT</span> app and sign up.</p

                        <ul>
                            <li>Option 1 - Download app</li>
                            <li>Option 2 - Submit Entry</li>
                        </ul>

                    <a href="{{ route('form') }}" class="btn btn-primary btn-lg">Submit Entry</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
