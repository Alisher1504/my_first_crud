@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 text-center mt-5">
        <a href="{{ url('/crud') }}" class="btn btn-primary">Add crud</a>
        <a href="{{ url('/store') }}" class="btn btn-danger">View Store</a>
    </div>

</div>
@endsection
