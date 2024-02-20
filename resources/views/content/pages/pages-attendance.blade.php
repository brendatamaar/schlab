@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Attendance')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/@form-validation/umd/styles/index.min.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/@form-validation/umd/bundle/popular.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/charts-apex.js')}}"></script>
<script src="{{asset('assets/js/app-user-list.js')}}"></script>
@endsection

@section('content')
<h4 class="mb-4">Attendance Record</h4>

<div class="row mb-4">
    <div class="col-4">
        <div class="card h-100">
            <div class="card-header d-flex align-items-center justify-content-between">
                <div>
                    <h5 class="card-title mb-0">Attendance Overview</h5>
                    <small class="text-muted">Spending on various categories</small>
                </div>
            </div>
            <div class="card-body">
                <div id="donutChart"></div>
            </div>
        </div>
    </div>

    <div class="col-8">
        <div class="card h-100">
            <div class="card-header d-flex justify-content-between">
                <div>
                    <h5 class="card-title mb-0">Attendance Record</h5>
                    <small class="text-muted">Commercial networks & enterprises</small>
                </div>

                <div class="dropdown d-none d-sm-flex">
                    <button type="button" class="btn dropdown-toggle px-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-calendar-month-outline"></i></button>
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
                <div id="lineChart"></div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header border-bottom">
        <h5 class="card-title">Assignment List</h5>
        <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
            <div class="col-md-4 user_role"></div>
            <div class="col-md-4 user_plan"></div>
            <div class="col-md-4 user_status"></div>
        </div>
    </div>
    <div class="card-datatable table-responsive">
        <table class="datatables-users table">
            <thead class="table-light">
                <tr>
                    <th></th>
                    <th></th>
                    <th>User</th>
                    <th>Role</th>
                    <th>Plan</th>
                    <th>Billing</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
        </table>
    </div>
    <!-- Offcanvas to add new user -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add User</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body mx-0 flex-grow-0 h-100">
            <form class="add-new-user pt-0" id="addNewUserForm" onsubmit="return false">
                <div class="form-floating form-floating-outline mb-4">
                    <input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe" name="userFullname" aria-label="John Doe" />
                    <label for="add-user-fullname">Full Name</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <input type="text" id="add-user-email" class="form-control" placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="userEmail" />
                    <label for="add-user-email">Email</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <input type="text" id="add-user-contact" class="form-control phone-mask" placeholder="+1 (609) 988-44-11" aria-label="john.doe@example.com" name="userContact" />
                    <label for="add-user-contact">Contact</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <input type="text" id="add-user-company" class="form-control" placeholder="Web Developer" aria-label="jdoe1" name="companyName" />
                    <label for="add-user-company">Company</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <select id="country" class="select2 form-select">
                        <option value="">Select</option>
                        <option value="Australia">Australia</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Canada">Canada</option>
                        <option value="China">China</option>
                        <option value="France">France</option>
                        <option value="Germany">Germany</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Japan">Japan</option>
                        <option value="Korea">Korea, Republic of</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Russia">Russian Federation</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                    </select>
                    <label for="country">Country</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <select id="user-role" class="form-select">
                        <option value="subscriber">Subscriber</option>
                        <option value="editor">Editor</option>
                        <option value="maintainer">Maintainer</option>
                        <option value="author">Author</option>
                        <option value="admin">Admin</option>
                    </select>
                    <label for="user-role">User Role</label>
                </div>
                <div class="form-floating form-floating-outline mb-4">
                    <select id="user-plan" class="form-select">
                        <option value="basic">Basic</option>
                        <option value="enterprise">Enterprise</option>
                        <option value="company">Company</option>
                        <option value="team">Team</option>
                    </select>
                    <label for="user-plan">Select Plan</label>
                </div>
                <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Cancel</button>
            </form>
        </div>
    </div>
</div>
@endsection