@extends('layouts.app')

@section('title', 'User Profile - Point of Sales')

@section('content')
<div class="container content-padding">
  <h1>User Profile</h1>
  <p>User ID: {{ $id }}</p>
  <p>Name: {{ $name }}</p>
</div>
@endsection