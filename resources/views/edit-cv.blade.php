@extends('layouts.body')
@section('title', Auth::user()->userDetail->name . ' | Edit CV')
@section('content')
    <h1 class="mt-4">Welcome to Your Edit CV</h1>
    <!-- Additional content can be added here -->
@endsection