@extends('layouts.auth')

@section('content')
<style>
    body {
    background-color: #829EC2; /* Ganti dengan warna yang diinginkan menggunakan kode HEX atau nama warna CSS */
    }
    .card {
    background-color: #f0f0f0; 
    }
    .card-header {
        background-color: #003F92; /* Ganti dengan warna yang diinginkan */
    }
    .images {
    width: 100px;
    height: 100px;
    margin-top: -50px;
    }
    .btn1 {
        background-color: #003F92;
        padding: 14px 40px;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 2px;
        cursor: pointer;
        border-radius: 10px;
        border: 2px dashed #003F92;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
        transition: .4s;
        }

        .btn1 span:last-child {
        display: none;
        }

        .btn1:hover {
        transition: .4s;
        border: 2px dashed #003F92;
        background-color: #fff;
        color: #003F92;
        }

        .btn1:active {
        background-color: #87dbd0;
        }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <img class="images" src="images/Logo.png" alt="Logo">
            <div class="card">
                <div class="card-header text-light">{{ __('Login') }}</div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn1 btn-primary""> 
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
