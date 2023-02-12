@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-danger text-capitalize">Welcome at work! Have a nice shift</div>

                <div class="card-body text-secondary fs-5">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! <br>
                    Now just control the orders and start prepare something delicious! <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
