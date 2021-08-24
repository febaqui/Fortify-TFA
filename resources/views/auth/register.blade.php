@extends('layouts.master')

@section('content')
    <section>
        <form action="{{route('register')}}" method="POST" class="flex-container flex-dir-column" style="width: 50%">
            @csrf
            <input type="text" name="name" placeholder="Write Your Name">
            <input type="email" name="email" placeholder="Write Your Email">
            <input type="password" name="password" placeholder="Write Your Password">
            <button type="submit" class="btn">Submit</button>
        </form>
    </section>
@endsection
