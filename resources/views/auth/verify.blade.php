@extends('layouts.app')

<style>

    body { 
    width: 100%;
    height:100%;
    font-family: 'Open Sans', sans-serif;
    background-image: linear-gradient(to right top, #ff5b67, #e45490, #b45daa, #7a65b1, #3e67a3, #4367a4, #4868a4, #4d68a5, #8f66ae, #ca5e9e, #f2607b, #fe784c);
    }
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
