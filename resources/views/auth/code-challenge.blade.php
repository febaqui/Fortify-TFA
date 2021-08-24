@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Confirm Password') }}</div>

                    <div class="card-body">
                        {{ __('Please confirm enter the factor') }}

                        <form method="POST" action="{{ route('two-factor.login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="code" type="password" class="form-control @error('password') is-invalid @enderror" name="code" required autocomplete="current-code">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Enter Code') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">{{ __('Confirm Password') }}</div>

                    <div class="card-body">
                        {{ __('Please confirm enter the factor') }}

                        <form method="POST" action="{{ route('two-factor.login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="recovery_code" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="recovery_code" type="password" class="form-control @error('password') is-invalid @enderror" name="recovery_code" required autocomplete="current-code">

                                    @error('recovery_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Enter recovery Code') }}
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