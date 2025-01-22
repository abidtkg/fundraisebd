@extends('layouts.web.master')
@section('title', 'Home')
@section('content')
<div class="container">
    <div class="vh-80 d-flex align-items-center">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <h1 class="display-2">Fund Raise BD</h1>
                    <h2 class="h3">
                        "Fund Raise BD" একটি অলাভজনক প্রতিষ্ঠান আমাদের মুল লক্ষ্য হল ডোনর এবং ফান্ড কালেক্টরের মধ্যে একটি সহজ এবং ডিজিটাল সংযোগ স্থাপন করা।
                    </h2>
                    <a href="#" class="btn btn-green">Donate Now</a>
                    <a href="#" class="btn btn-green-outline">Know About Us</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/images/donation.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    <div class="section">
        <div class="row">
            <div class="col-md-3">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/images/demo-donation.jpg') }}" class="img-fluid" alt="">
                    <div class="card-body">
                        <span class="badge text-bg-dark">Medical</span>
                        <p>Fund raising for medial expenses / bills</p>
                        <span style="font-size: small;" class="text-muted">Donation Progress:</span>
                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-success" style="width: 25%">25%</div>
                        </div>
                        <span style="font-size: medium" class="text-muted">Raised: 500 BDT</span>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="btn-group">
                                <button class="btn btn-sm btn-green">Donation</button>
                            </div>
                            {{-- <small class="text-body-secondary">9 mins</small> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection