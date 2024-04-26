@extends('layouts.main')

@section('content')
<h1 class="h1">Hello, {{auth()->user()->name}}!</h1>
<hr>
<form action="{{ route('logout') }}" method="POST">
@csrf
<button class="btn btn-danger" type="submit">LOGOUT</button>
</form>

@endsection
