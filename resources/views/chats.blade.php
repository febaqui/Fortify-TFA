@extends('layouts.master')
@section('content')
    <chats user="{{auth()->user()}}"></chats>
@endsection
