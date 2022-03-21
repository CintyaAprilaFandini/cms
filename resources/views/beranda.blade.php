@extends('layouts.masterLayout')

@section('header')
<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

{{ __('You are logged in!')}}

<table class="table table-responsive">
    <tr><th>Username</th><td>:</th><td>{{ $user->username }}</td></tr>
    <tr><th>Name</th><td>:</th><td>{{ $user->name }}</td></tr>
    <tr><th>Email</th><td>:</th><td>{{ $user->email }}</td></tr>
    <tr><th>Created</th><td>:</th><td>{{ $user->created_at }}</td></tr>
</table>
</div>