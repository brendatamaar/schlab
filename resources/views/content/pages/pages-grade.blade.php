@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Grade')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/app-academy-dashboard.js')}}"></script>
<script src="{{asset('assets/js/charts-apex.js')}}"></script>
<script src="{{asset('assets/js/tables-datatables-basic.js')}}"></script>
@endsection

@section('content')
<h4 class="mb-4">Your Grade Analytics</h4>

<div class="row mb-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-md-center align-items-start">
                <h5 class="card-title mb-0">Grade Overview</h5>
                <div class="dropdown">
                    <button type="button" class="btn dropdown-toggle p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-calendar-month-outline"></i></button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a></li>
                        <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Yesterday</a></li>
                        <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7 Days</a></li>
                        <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30 Days</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current Month</a></li>
                        <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last Month</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div id="barChart"></div>
            </div>
        </div>
    </div>
</div>
<div class="row mb-4">
    <div class="col-7">
        <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title mb-0">Top subjects you are interested in</h5>

            </div>
            <div class="card-body row g-3">
                <div class="col-md-6">
                    <div id="horizontalBarChart" class=""></div>
                </div>
                <div class="col-md-6 d-flex justify-content-around align-items-center">
                    <div>
                        <div class="d-flex align-items-baseline">
                            <span class="text-primary me-2"><i class='mdi mdi-circle mdi-14px'></i></span>
                            <div>
                                <p class="mb-1">Math</p>
                                <h5>35%</h5>
                            </div>
                        </div>
                        <div class="d-flex align-items-baseline my-3">
                            <span class="text-success me-2"><i class='mdi mdi-circle mdi-14px'></i></span>
                            <div>
                                <p class="mb-1">Biology</p>
                                <h5>14%</h5>
                            </div>
                        </div>
                        <div class="d-flex align-items-baseline">
                            <span class="text-danger me-2"><i class='mdi mdi-circle mdi-14px'></i></span>
                            <div>
                                <p class="mb-1">Physic</p>
                                <h5>10%</h5>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="d-flex align-items-baseline">
                            <span class="text-info me-2"><i class='mdi mdi-circle mdi-14px'></i></span>
                            <div>
                                <p class="mb-1">Chemistry</p>
                                <h5>20%</h5>
                            </div>
                        </div>
                        <div class="d-flex align-items-baseline my-3">
                            <span class="text-secondary me-2"><i class='mdi mdi-circle mdi-14px'></i></span>
                            <div>
                                <p class="mb-1">Art & Culture</p>
                                <h5>12%</h5>
                            </div>
                        </div>
                        <div class="d-flex align-items-baseline">
                            <span class="text-warning me-2"><i class='mdi mdi-circle mdi-14px'></i></span>
                            <div>
                                <p class="mb-1">English Language</p>
                                <h5>9%</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Your Performance</h5>
                <div class="dropdown">
                    <button class="btn px-0" type="button" id="heatChartDd1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="heatChartDd1">
                        <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                        <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                        <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="radarChart"></div>
            </div>
        </div>
    </div>
</div>

<hr class="my-4">

<div class="row mb-4">
    <div class="col-12">
        <!-- DataTable with Buttons -->
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <table class="datatables-basic table table-bordered">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Salary</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <!-- Modal to add new record -->
    </div>
</div>
@endsection