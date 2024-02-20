@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'DataTables - Tables')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<!-- Row Group CSS -->
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css')}}">
<!-- Form Validation -->
<link rel="stylesheet" href="{{asset('assets/vendor/libs/@form-validation/umd/styles/index.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/chartjs/chartjs.js')}}"></script>
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

<!-- Flat Picker -->
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<!-- Form Validation -->
<script src="{{asset('assets/vendor/libs/@form-validation/umd/bundle/popular.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js')}}"></script>
@endsection

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/cards-statistics.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/cards-analytics.css')}}">
@endsection

@section('page-script')
<script src="{{asset('assets/js/tables-datatables-basic.js')}}"></script>
<script src="{{asset('assets/js/charts-chartjs.js')}}"></script>
<script src="{{asset('assets/js/cards-statistics.js')}}"></script>
<script src="{{asset('assets/js/cards-analytics.js')}}"></script>
@endsection

@section('content')
<h4 class="mb-4">
  Class Information
</h4>


<div class="row mb-4">
  <div class="col-3">
    <div class="card h-100">
      <div class="card-header bg-primary">
        <h3 class="card-title text-white">Class 8A</h3>
        <p class="card-text">
          <small class="text-white">2023 / 2024 Academic Year</small>
        </p>
      </div>
      <div class="card-body text-center">
        <div class="mx-auto mb-2">
          <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar Image" class="rounded-circle w-px-100" />
        </div>
        <span>Guardian Teacher</span>
        <h5 class="mb-4">Mr. Mark Gilbert</h5>
        <div class="d-flex align-items-center justify-content-center mt-4">
          <a href="javascript:;" class="btn btn-primary d-flex align-items-center me-3"><i class="mdi mdi-account-check-outline me-1"></i>View Profile</a>
          <a href="javascript:;" class="btn btn-outline-secondary btn-icon"><i class="mdi mdi-email-outline lh-sm"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-9">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2 mb-1">Class Attendance</h5>
          <p class="text-body mb-0">Attendance rate this month: 98%</p>
        </div>
        <div class="dropdown">
          <button type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">January</button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="javascript:void(0);">January</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">February</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">March</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">April</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">May</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">June</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">July</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">August</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">September</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">October</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">November</a></li>
            <li><a class="dropdown-item" href="javascript:void(0);">December</a></li>
          </ul>
        </div>
      </div>
      <div class="card-body">
        <div id="shipmentStatisticsChart"></div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-widget-separator-wrapper">
        <div class="card-body card-widget-separator">
          <div class="row gy-4 gy-sm-1">
            <div class="col-6">
              <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                <div>
                  <h3 class="mb-1">36</h3>
                  <p class="mb-0">Students</p>
                </div>
                <div class="avatar me-sm-4">
                  <span class="avatar-initial rounded bg-label-primary">
                    <i class="mdi mdi-account-outline text-heading bg-label-primary mdi-20px"></i>
                  </span>
                </div>
              </div>
              <hr class="d-none d-sm-block d-lg-none me-4">
            </div>
            <div class="col-6">
              <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                <div>
                  <h3 class="mb-1">15</h3>
                  <p class="mb-0">Subjects</p>
                </div>
                <div class="avatar me-lg-4">
                  <span class="avatar-initial rounded bg-label-primary">
                    <i class="mdi mdi-book text-heading bg-label-primary mdi-20px"></i>
                  </span>
                </div>
              </div>
              <hr class="d-none d-sm-block d-lg-none">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<hr class="my-4">

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
<div class="offcanvas offcanvas-end" id="add-new-record">
  <div class="offcanvas-header border-bottom">
    <h5 class="offcanvas-title" id="exampleModalLabel">New Record</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body flex-grow-1">
    <form class="add-new-record pt-0 row g-3" id="form-add-new-record" onsubmit="return false">
      <div class="col-sm-12">
        <div class="input-group input-group-merge">
          <span id="basicFullname2" class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
          <div class="form-floating form-floating-outline">
            <input type="text" id="basicFullname" class="form-control dt-full-name" name="basicFullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
            <label for="basicFullname">Full Name</label>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="input-group input-group-merge">
          <span id="basicPost2" class="input-group-text"><i class='mdi mdi-briefcase-outline'></i></span>
          <div class="form-floating form-floating-outline">
            <input type="text" id="basicPost" name="basicPost" class="form-control dt-post" placeholder="Web Developer" aria-label="Web Developer" aria-describedby="basicPost2" />
            <label for="basicPost">Post</label>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="input-group input-group-merge">
          <span class="input-group-text"><i class="mdi mdi-email-outline"></i></span>
          <div class="form-floating form-floating-outline">
            <input type="text" id="basicEmail" name="basicEmail" class="form-control dt-email" placeholder="john.doe@example.com" aria-label="john.doe@example.com" />
            <label for="basicEmail">Email</label>
          </div>
        </div>
        <div class="form-text">
          You can use letters, numbers & periods
        </div>
      </div>
      <div class="col-sm-12">
        <div class="input-group input-group-merge">
          <span id="basicDate2" class="input-group-text"><i class='mdi mdi-calendar-month-outline'></i></span>
          <div class="form-floating form-floating-outline">
            <input type="text" class="form-control dt-date" id="basicDate" name="basicDate" aria-describedby="basicDate2" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
            <label for="basicDate">Joining Date</label>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="input-group input-group-merge">
          <span id="basicSalary2" class="input-group-text"><i class='mdi mdi-currency-usd'></i></span>
          <div class="form-floating form-floating-outline">
            <input type="number" id="basicSalary" name="basicSalary" class="form-control dt-salary" placeholder="12000" aria-label="12000" aria-describedby="basicSalary2" />
            <label for="basicSalary">Salary</label>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <button type="submit" class="btn btn-primary data-submit me-sm-3 me-1">Submit</button>
        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Cancel</button>
      </div>
    </form>

  </div>
</div>
<!--/ DataTable with Buttons -->

<hr class="my-5">

<!-- Row grouping -->
<div class="card">
  <h5 class="card-header">Course Schedule</h5>
  <div class="card-datatable table-responsive">
    <table class="dt-row-grouping table table-bordered">
      <thead>
        <tr>
          <th></th>
          <th>Name</th>
          <th>Position</th>
          <th>Email</th>
          <th>City</th>
          <th>Date</th>
          <th>Salary</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th></th>
          <th>Name</th>
          <th>Position</th>
          <th>Email</th>
          <th>City</th>
          <th>Date</th>
          <th>Salary</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
<!--/ Row grouping -->

@endsection