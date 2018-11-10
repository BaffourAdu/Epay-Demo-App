@extends('layouts.app')

@section('content')
<div class="main-page">
        <div class="space-20"></div>

        <div class="section">
            <div class="container">

                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-1 col-sm-12"></div>

                    <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1 col-md-8 offset-md-2 mt-5 text-center">
                                    <h2> Which programs would you like to sponsor ?</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">

                                    <!--Card begins-->
                                    <div class="card mt-3 shadow">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xl-3 col-lg-3 col-sm-12">
                                                    <div class="card-body">
                                                        <img class="card-img-bottom" src="{{ asset('images/log.jpg') }}" alt="Card image cap">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-sm-12">
                                                    <div class="card-body">
                                                        <h3 class="card-title"> <b>Businesses Building</b> </h3>
                                                        <p class="card-text">December 2018</p>
                                                        <h4 class="card-text"> <b>₵ 100.00</b> </h4>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-sm-12">
                                                    <div class="card-body">
                                                        <p class="card-text"><a href="https://epaygh.com/pay/st-sponsorship-demo-app-business" class="btn btn-primary shadow-sm">Sponsor</a></p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="space-10"></div>

                                    <div class="card mt-3 shadow">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-12">
                                                    <div class="card-body">
                                                        <img class="card-img-bottom" src="{{ asset('images/log.jpg') }}" alt="Card image cap">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <div class="card-body">
                                                        <h3 class="card-title"> <b>Data Security</b> </h3>
                                                        <p class="card-text">December 2018</p>
                                                        <h4 class="card-text"> <b>₵ 200.00</b> </h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="card-body">
                                                        <a href="https://epaygh.com/pay/st-sponsorship-demo-app-security" class="btn btn-primary shadow-sm">Sponsor</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="space-10"></div>

                                    <div class="card mt-3 shadow">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-3 col-sm-12">
                                                    <div class="card-body">
                                                        <img class="card-img-bottom" src="{{ asset('images/log.jpg') }}" alt="Card image cap">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <div class="card-body">
                                                        <h3 class="card-title"> <b>Risk Management</b> </h3>
                                                        <p class="card-text">December 2018</p>
                                                        <h4 class="card-text"> <b>₵ 100.00 - ₵ 1,000.00</b> </h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="card-body">
                                                        <p class="card-text"><a href="https://epaygh.com/pay/st-sponsorship-demo-app-risk" class="btn btn-primary shadow-sm">Sponsor</a></p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <!--Card ends-->

                                    </div>
                                    <div class="space-20"></div>

                                </div>
                            </div>

                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-1 col-sm-12"></div>
                    </div>
                </div>

            </div>
        </div>
@endsection