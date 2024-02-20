@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')


@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/plyr/plyr.css')}}" />
@endsection

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/cards-statistics.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/app-academy.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
<script src="{{asset('assets/vendor/libs/plyr/plyr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/chartjs/chartjs.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/cards-statistics.js')}}"></script>
<script src="{{asset('assets/js/app-academy-course.js')}}"></script>
<script src="{{asset('assets/js/charts-chartjs.js')}}"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-8">
        <div class="row">
            <div class="col-12">
                <!-- Hero card -->
                <div class="card bg-primary text-white mb-4">
                    <div class="d-flex align-items-start row">
                        <div class="col-md-6 order-2 order-md-1">
                            <div class="card-body">
                                <h4 class="card-title text-white pb-xl-2">Welcome Back, John!👋</h4>
                                <p class="mb-0">Your progress this week is Awesome!</p>
                                <p>Keep it up and improve your result!</p>

                                <a href="javascript:;" class="btn btn-white text-primary">View Profile</a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center text-md-end order-1 order-md-2">
                            <div class="card-body pb-0 px-0 px-md-4 ps-0">
                                <img src="{{asset('assets/img/illustrations/illustration-john-'.$configData['style'].'.png')}}" height="186" alt="View Profile" data-app-light-img="illustrations/illustration-john-light.png" data-app-dark-img="illustrations/illustration-john-dark.png">
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Hero card -->

            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card card-border-shadow-primary mb-4">
                    <div class="card-header header-elements">
                        <div>
                            <h5 class="card-title mb-0">Grade Overview</h5>
                            <small class="text-muted">Your average grades by month</small>
                        </div>
                        <div class="card-header-elements ms-auto py-0">
                            <span class="badge bg-label-secondary rounded-pill me-1">
                                <i class='mdi mdi-arrow-up mdi-14px text-success'></i>
                                <span class="align-middle">37%</span>
                            </span>
                        </div>
                    </div>
                    <div class="card-body" style="margin-top: -50px;">
                        <canvas id="lineChart" class="chartjs" data-height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-1">Assignment Status</h5>
                        <small class="text-muted">2 out of 5 assignments is completed</small>
                    </div>
                    <div class="card-body">
                        <table class="w-100 table-responsive text-nowrap table mb-2">
                            <thead>
                                <tr>
                                    <th>Assignments</th>
                                    <th>Due Date</th>
                                    <th>Course</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td><i class="mdi mdi-presentation-play mdi-20px text-danger me-2"></i><span class="fw-medium">Presentation about Currency History</span></td>
                                    <td>08 Dec 2021</td>
                                    <td>Economy</td>
                                    <td><span class="badge rounded-pill bg-label-danger me-1">Must be submitted</span></td>
                                </tr>
                                <tr>
                                    <td><i class="mdi mdi-artboard mdi-20px text-warning me-2"></i><span class="fw-medium">Object drawing</span></td>
                                    <td>10 Dec 2021</td>
                                    <td>Arts & Culture</td>
                                    <td><span class="badge rounded-pill bg-label-warning me-1">In progress</span></td>
                                </tr>
                                <tr>
                                    <td><i class="mdi mdi-pencil-outline mdi-20px text-info me-2"></i><span class="fw-medium">Homework Page 18</span></td>
                                    <td>07 Dec 2021</td>
                                    <td>Math</td>
                                    <td><span class="badge rounded-pill bg-label-info me-1">Under review</span></td>
                                </tr>
                                <tr>
                                    <td><i class="mdi mdi-book-edit-outline mdi-20px text-success me-2"></i><span class="fw-medium">Essay about Greenhouse Effect</span></td>
                                    <td>07 Dec 2021</td>
                                    <td>Chemistry</td>
                                    <td><span class="badge rounded-pill bg-label-success me-1">Completed</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="javascript:void(0)" class="btn btn-primary">View all assignments</a>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center flex-wrap gap-2">
                            <div class="avatar me-2">
                                <div class="avatar-initial bg-label-warning rounded">
                                    <i class="mdi mdi-clock-alert mdi-24px">
                                    </i>
                                </div>
                            </div>
                            <div class="card-info">
                                <div class="d-flex align-items-center">
                                    <h4 class="mb-0">2%</h4>
                                    <i class="mdi mdi-chevron-down text-success mdi-24px"></i>
                                    <small class="text-success me-1">12.1%</small>
                                    <small class="text-muted">than last month</small>
                                </div>
                                <small>Late Rate</small>
                            </div>
                            <div id="sessions"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center flex-wrap gap-2">
                            <div class="avatar me-2">
                                <div class="avatar-initial bg-label-danger rounded">
                                    <i class="mdi mdi-archive-clock mdi-24px">
                                    </i>
                                </div>
                            </div>
                            <div class="card-info">
                                <div class="d-flex align-items-center">
                                    <h4 class="mb-0">92%</h4>
                                    <i class="mdi mdi-chevron-down text-success mdi-24px"></i>
                                    <small class="text-success me-1">2.1%</small>
                                    <small class="text-muted">than last month</small>
                                </div>
                                <small>Attendance Rate</small>
                            </div>
                            <div id="totalGrowthChart"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <h4 class="py-2 mb-2">Latest News
        </h4>

        <div class="row">
            <div class="col-4">
                <div class="card h-100">
                    <img class="card-img-top h-px-150" style="object-fit: cover;" src="{{asset('assets/img/elements/2.jpg')}}" alt="2">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex">
                                <div class="badge bg-label-success rounded-pill me-3">Academic</div>
                            </div>
                        </div>
                        <h6 class="mb-0 fw-medium">Strategies for Success as Exams Approach</h6>
                        <small>20 Dec 2022</small>
                        <div class="mt-3">
                            <button class="btn btn-outline-primary">Read More</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card h-100">
                    <img class="card-img-top h-px-150" style="object-fit: cover;" src="{{asset('assets/img/elements/iPhone-bg.png')}}" alt="iPhone-bg">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex">
                                <div class="badge bg-label-success rounded-pill me-3">Development</div>
                            </div>
                        </div>
                        <h6 class="mb-0 fw-medium">How Technology is Enhancing the Study Experience</h6>
                        <small>20 Dec 2022</small>
                        <div class="mt-3 float">
                            <button class="btn btn-outline-primary">Read More</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card h-100">
                    <img class="card-img-top h-px-150" style="object-fit: cover;" src="{{asset('assets/img/elements/activity-timeline.png')}}" alt="activity-timeline">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <div class="d-flex">
                                <div class="badge bg-label-info rounded-pill me-3">Event</div>
                            </div>
                        </div>
                        <h6 class="mb-0 fw-medium">Webinar Frontend Architecture React Native Web</h6>
                        <small>20 Dec 2022</small>
                        <div class="mt-3">
                            <button class="btn btn-outline-primary">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <h5 class="card-title mb-1">Today Schedule</h5>
                        <p class="text-body mb-0">Tuesday, 13 Feb 2024</p>
                    </div>
                    <div class="card-body">
                        <ul class="p-0 mb-4">
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{asset('assets/img/avatars/3.png')}}" alt="avatar" class="rounded">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Biology</h6>
                                        <small>
                                            <i class="mdi mdi-account-outline mdi-14px"></i>
                                            <span>Mr. Budi</span>
                                        </small>
                                    </div>
                                    <small>
                                        <i class="mdi mdi-clock-outline mdi-14px"></i>
                                        <span>07:20 - 10:30</span>
                                    </small>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{asset('assets/img/avatars/5.png')}}" alt="avatar" class="rounded">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">English Language</h6>
                                        <small>
                                            <i class="mdi mdi-account-outline mdi-14px"></i>
                                            <span>Mr. Yudi</span>
                                        </small>
                                    </div>
                                    <small>
                                        <i class="mdi mdi-clock-outline mdi-14px"></i>
                                        <span>10:30 - 12:00</span>
                                    </small>
                                </div>
                            </li>
                            <li class="d-flex mb-4 pb-1">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{asset('assets/img/avatars/4.png')}}" alt="avatar" class="rounded">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Chemistry</h6>
                                        <small>
                                            <i class="mdi mdi-account-outline mdi-14px"></i>
                                            <span>Mrs. Susi</span>
                                        </small>
                                    </div>
                                    <small>
                                        <i class="mdi mdi-clock-outline mdi-14px"></i>
                                        <span>12:30 - 14:00</span>
                                    </small>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{asset('assets/img/avatars/14.png')}}" alt="avatar" class="rounded">
                                </div>
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <div class="me-2">
                                        <h6 class="mb-0">Art & Culture</h6>
                                        <small>
                                            <i class="mdi mdi-account-outline mdi-14px"></i>
                                            <span>Mrs. Ani</span>
                                        </small>
                                    </div>
                                    <small>
                                        <i class="mdi mdi-clock-outline mdi-14px"></i>
                                        <span>14:00 - 15:00</span>
                                    </small>
                                </div>
                            </li>

                        </ul>
                        <a href="javascript:void(0)" class="btn btn-primary">View all schedules</a>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="mb-3">Upcoming Event</h5>
                        <div class="bg-label-info rounded-3 text-center mb-2 pb-1 ">
                            <img class="img-fluid" src="{{asset('assets/img/illustrations/card-ratings-illustration.png')}}" alt="Boy card image" width="130" />
                        </div>
                        <p>Webinar Next Generation Frontend Architecture Using Layout Engine And React Native Web.</p>
                        <div class="row mb-3 g-3">
                            <div class="col-6">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 me-2">
                                        <span class="avatar-initial rounded bg-label-primary"><i class="mdi mdi-calendar-alert mdi-24px"></i></span>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 text-nowrap">17 Nov 23</h6>
                                        <small>Date</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex">
                                    <div class="avatar flex-shrink-0 me-2">
                                        <span class="avatar-initial rounded bg-label-primary">
                                            <i class="mdi mdi-map-marker-outline mdi-24px"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 text-wrap">Hall Room</h6>
                                        <small>Place</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <a href="javascript:void(0);" class="btn btn-outline-primary w-100 d-grid">See all events</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="mb-4">Notice Board</h4>
                        <ul class="timeline card-timeline mb-0">
                            <li class="timeline-item timeline-item-transparent">
                                <span class="timeline-point timeline-point-danger"></span>
                                <div class="timeline-event">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-0">Midterm is around the corner!</h6>
                                        <small class="text-muted">Wednesday</small>
                                    </div>
                                    <p class="mb-2">Don't forget to prepare yourself by studying material for the midterm.</p>
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="avatar avatar-sm me-3">
                                            <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle" />
                                        </div>
                                        <h6 class="mb-0 text-body">Headmaster John Doe</h6>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item timeline-item-transparent">
                                <span class="timeline-point timeline-point-primary"></span>
                                <div class="timeline-event">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-0">Timeline for midterm🌟
                                        </h6>
                                        <small class="text-muted">April, 18</small>
                                    </div>
                                    <p class="mb-2">Note important dates for this midterm.</p>

                                    <div class="d-flex">
                                        <a href="javascript:void(0)" class="me-3">
                                            <img src="{{asset('assets/img/icons/misc/pdf.png')}}" alt="PDF image" width="15" class="me-2">
                                            <span class="fw-medium">timeline.pdf</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item timeline-item-transparent border-transparent">
                                <span class="timeline-point timeline-point-info"></span>
                                <div class="timeline-event pb-1">
                                    <div class="timeline-header mb-1">
                                        <h6 class="mb-0"> Prepare for midterm</h6>
                                        <small class="text-muted">Jan, 10</small>
                                    </div>
                                    <p class="mb-2">As your guardian teacher, I encourage you to prepare and studying midterm material. Good luck for your exam😊</p>
                                    <div class="d-flex justify-content-start flex-wrap">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <div class="avatar avatar-sm me-3">
                                                <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle" />
                                            </div>
                                            <hr />
                                            <div>
                                                <p class="mb-0 text-sm">Mrs. Tari</p>
                                                <span class="text-muted">Math Teacher</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="col-12 text-center">
                            <a href="javascript:void(0);" class="btn btn-outline-primary w-100 d-grid">See all notifications</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card shadow-none bg-label-primary mb-4">
                    <div class="card-body d-flex justify-content-between flex-wrap-reverse">
                        <div class="mb-0 w-60 app-academy-sm-60 d-flex flex-column justify-content-between text-center text-sm-start">
                            <div class="card-title">
                                <h5 class="text-primary mb-2">Need help?</h5>
                                <p class="text-heading w-sm-80 app-academy-xl-100">
                                    Consult with your teacher about academics stuff, career paths, or other problems.
                                </p>
                            </div>
                            <div class="mb-0"><button class="btn btn-primary">Get help</button></div>
                        </div>
                        <div class="w-40 app-academy-sm-40 d-flex justify-content-center justify-content-sm-end h-px-150 mb-3 mb-sm-0">
                            <img class="img-fluid scaleX-n1-rtl" src="{{asset('assets/img/illustrations/bulb-'.$configData['style'].'.png')}}" alt="View Profile" data-app-light-img="illustrations/bulb-light.png" data-app-dark-img="illustrations/bulb-dark.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection