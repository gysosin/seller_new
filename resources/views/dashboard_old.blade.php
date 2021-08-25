@extends('layout.master')
@section('title', 'dashboard')

<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/colors/palette-gradient.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/charts/apexcharts.css')}}">




@section('body')

<!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">
    <div class="row">

        <div class="col-lg-6 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-success p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-credit-card text-success font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1">97.5k</h2>
                    <p class="mb-0">Revenue Generated</p>
                </div>
                <div class="card-content">
                    <div id="line-area-chart-2"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-warning p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-package text-warning font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1">97.5K</h2>
                    <p class="mb-0">Orders Received</p>
                </div>
                <div class="card-content">
                    <div id="line-area-chart-4"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-end">
                    <h4 class="card-title">Revenue</h4>
                    <p class="font-medium-5 mb-0"><i class="feather icon-settings text-muted cursor-pointer"></i></p>
                </div>
                <div class="card-content">
                    <div class="card-body pb-0">
                        <div class="d-flex justify-content-start">
                            <div class="mr-2">
                                <p class="mb-50 text-bold-600">This Month</p>
                                <h2 class="text-bold-400">
                                    <sup class="font-medium-1">$</sup>
                                    <span class="text-success">86,589</span>
                                </h2>
                            </div>
                            <div>
                                <p class="mb-50 text-bold-600">Last Month</p>
                                <h2 class="text-bold-400">
                                    <sup class="font-medium-1">$</sup>
                                    <span>73,683</span>
                                </h2>
                            </div>

                        </div>
                        <div id="revenue-chart"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row pb-50">
                            <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2">
                                <div>
                                    <h2 class="text-bold-700 mb-25">2.7K</h2>
                                    <p class="text-bold-500 mb-75">Avg Sessions</p>
                                    <h5 class="font-medium-2">
                                        <span class="text-success">+5.2% </span>
                                        <span>vs last 7 days</span>
                                    </h5>
                                </div>
                                <a href="#" class="btn btn-primary shadow">View Details <i class="feather icon-chevrons-right"></i></a>
                            </div>
                            <div class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">
                                <div class="dropdown chart-dropdown">
                                    <button class="btn btn-sm border-0 dropdown-toggle p-50" type="button" id="dropdownItem5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Last 7 Days
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem5">
                                        <a class="dropdown-item" href="#">Last 28 Days</a>
                                        <a class="dropdown-item" href="#">Last Month</a>
                                        <a class="dropdown-item" href="#">Last Year</a>
                                    </div>
                                </div>
                                <div id="avg-session-chart"></div>
                            </div>
                        </div>
                        <hr />
                        <div class="row avg-sessions pt-50">
                            <div class="col-6">
                                <small>Goal: $100000</small>
                                <div class="progress progress-bar-primary mt-25">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100" style="width:50%"></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <small>Users: 100K</small>
                                <div class="progress progress-bar-warning mt-25">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="100" style="width:60%"></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <small>Retention: 90%</small>
                                <div class="progress progress-bar-danger mt-25">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="70" aria-valuemax="100" style="width:70%"></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <small>Duration: 1yr</small>
                                <div class="progress progress-bar-success mt-25">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="90" aria-valuemax="100" style="width:90%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">

      
     
</section>


@section('js')
<script src="{{asset('/app-assets/js/scripts/charts/chart-apex.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
@stop
@endsection()