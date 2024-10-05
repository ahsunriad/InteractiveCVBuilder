@extends('layouts.body')
@section('title', Auth::user()->userDetail->name . ' | Profile')
@section('content')
    <h2>User Profile</h2>
    <div class="profile-section">
        <img src="{{ Auth::user()->userDetail->profile_photo }}" alt="Profile Photo" class="profile-img rounded-circle mb-3">
        <p><strong>Name:</strong> {{ Auth::user()->userDetail->name }}</p>
        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
        <p><strong>Phone:</strong> {{ Auth::user()->userDetail->phone }}</p>
        <p><strong>LinkedIn:</strong> {{ Auth::user()->userDetail->linkedin ?? 'N/A'}}</p>
        <p><strong>GitHub:</strong> {{ Auth::user()->userDetail->github ?? 'N/A'}}</p>
        <p><strong>Summary:</strong> {{ Auth::user()->userDetail->summary ?? 'N/A'}}</p>
        
    </div>
@endsection

