@extends('layouts.master')

@section('content')
    <section class="login">
        <div class="grid-container">
            <div class="grid-x">
                <auth-component>
                    <form action="{{route('login')}}" method="POST" class="flex-container flex-dir-column">
                        <div class="input-container">
                            <label for="email">Your Email</label>
                            <input type="text" name="email" id="email" placeholder="Enter your email">
                            <span class="error-message">This field is required</span>
                        </div>
                        <div class="input-container">
                            <label for="password">Your Password</label>
                            <input type="text" name="password" id="password" placeholder="Enter your password">
                            <span class="error-message">This field is required</span>
                        </div>
                    </form>
                </auth-component>
            </div>
        </div>
    </section>
@endsection
