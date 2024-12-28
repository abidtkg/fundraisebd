@extends('web.layouts.master')
@section('content')
<div class="container py-5 px-5">
    <div class="card" style="width: 20rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Joined {{ date('d M Y - h:i A', strtotime($user->created_at)) }} </h6>
            <h6>Email: {{ $user->email }} </h6>
            <a href="#" class="btn btn-dark btn-sm mt-4">Update Profile</a>
        </div>
    </div>
</div>
@endsection