@extends('layouts.app')

@section('content')
<div class="container">
    <h1>User Dashboard</h1>
    <p>Welcome, {{ Auth::user()->name }}!</p>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">My Profile</h5>
                    <p class="card-text">View and edit your personal information.</p>
                    <a href="{{ route('profile.show') }}" class="btn btn-primary">Go to Profile</a>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection