@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 mt-5 text-center">
            <img src="https://epaygh.com/images/logo2.png" alt="Epay Logo" width="200">
            <h1>Demo Applications</h1>
            <p>Please select a sample application to try it out</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 offset-lg-2 col-md-6 col-12 mt-5">
            <div class="card">
                <h5 class="card-header">Demo Application</h5>
                <div class="card-body">
                    <h5 class="card-title">Online Bookshop</h5>
                    <p class="card-text">An example application which seeks to show how an online bookshop can integrate Epay.</p>
                    <a href="#" class="btn btn-primary">Try Demo App</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mt-5">
            <div class="card">
                <h5 class="card-header">Demo Application</h5>
                <div class="card-body">
                    <h5 class="card-title">Event Registration</h5>
                    <p class="card-text">An example application which seeks to show how businesses can use Epay for Events.</p>
                    <a href="https://epaygh.com/pay/st-event-demo-app" class="btn btn-primary">Try Demo App</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 offset-lg-2 col-md-6 col-12 mt-5 mb-5">
            <div class="card">
                <h5 class="card-header">Demo Application</h5>
                <div class="card-body">
                    <h5 class="card-title">Sponsorship Purchase</h5>
                    <p class="card-text">An exmaple application demonstrating how a business can use Epay to take subscriptions.</p>
                    <a href="#" class="btn btn-primary">Try Demo App</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mt-5 mb-5">
            <div class="card">
                <h5 class="card-header">Featured Production Application</h5>
                <div class="card-body">
                    <h5 class="card-title">Online Bookshop</h5>
                    <p class="card-text">An example application currently in production by a client who sells marraige books online.</p>
                    <a href="http://mkshop.cdsportals.com/" class="btn btn-primary">Try App</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection