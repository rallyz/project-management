@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div id="layout-wrapper">
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Dashboard</h4>
                        </div>
                    </div>
                </div>
                @include('frontend.dashboard-sum')
                @include('frontend.dashboard-overview')
                <div class="row">
                    <div class="col-xl-7">
                        <div class="card card-height-100">
                            <div class="card-header d-flex align-items-center">
                                <h4 class="card-title flex-grow-1 mb-0">Active Projects</h4>
                                <div class="flex-shrink-0">
                                    <a href="javascript:void(0);" class="btn btn-soft-info btn-sm">Export Report</a>
                                </div>
                            </div><!-- end cardheader -->
                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table table-nowrap table-centered align-middle">
                                        <thead class="bg-light text-muted">
                                            <tr>
                                                <th scope="col">Project Name</th>
                                                <th scope="col">Project Lead</th>
                                                <th scope="col">Progress</th>
                                                <th scope="col">Assignee</th>
                                                <th scope="col">Status</th>
                                                <th scope="col" style="width: 10%;">Due Date</th>
                                            </tr><!-- end tr -->
                                        </thead><!-- thead -->

                                        <tbody>
                                            <tr>
                                                <td class="fw-medium">Brand Logo Design</td>
                                                <td>
                                                    <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" class="avatar-xxs rounded-circle me-1" alt="">
                                                    <a href="javascript: void(0);" class="text-reset">Donald Risher</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-1 text-muted fs-13">53%</div>
                                                        <div class="progress progress-sm  flex-grow-1" style="width: 68%;">
                                                            <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-group flex-nowrap">
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="{{ asset('assets/images/users/avatar-2.jpg') }}"" alt="" class="rounded-circle avatar-xxs">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="{{ asset('assets/images/users/avatar-3.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-soft-warning">Inprogress</span></td>
                                                <td class="text-muted">06 Sep 2021</td>
                                            </tr><!-- end tr -->
                                            <tr>
                                                <td class="fw-medium">Redesign - Landing Page</td>
                                                <td>
                                                    <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" class="avatar-xxs rounded-circle me-1" alt="">
                                                    <a href="javascript: void(0);" class="text-reset">Prezy William</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 text-muted me-1">0%</div>
                                                        <div class="progress progress-sm flex-grow-1" style="width: 68%;">
                                                            <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="{{ asset('assets/images/users/avatar-5.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="{{ asset('assets/images/users/avatar-6.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-soft-danger">Pending</span></td>
                                                <td class="text-muted">13 Nov 2021</td>
                                            </tr><!-- end tr -->
                                            <tr>
                                                <td class="fw-medium">Multipurpose Landing Template</td>
                                                <td>
                                                    <img src="{{ asset('assets/images/users/avatar-3.jpg') }}" class="avatar-xxs rounded-circle me-1" alt="">
                                                    <a href="javascript: void(0);" class="text-reset">Boonie Hoynas</a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 text-muted me-1">100%</div>
                                                        <div class="progress progress-sm flex-grow-1" style="width: 68%;">
                                                            <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="{{ asset('assets/images/users/avatar-7.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                                            </a>
                                                        </div>
                                                        <div class="avatar-group-item">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="{{ asset('assets/images/users/avatar-8.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-soft-success">Completed</span></td>
                                                <td class="text-muted">26 Nov 2021</td>
                                            </tr><!-- end tr -->
                                        </tbody><!-- end tbody -->
                                    </table><!-- end table -->
                                </div>

                                <div class="align-items-center mt-xl-3 mt-4 justify-content-between d-flex">
                                    <div class="flex-shrink-0">
                                        <div class="text-muted">Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">15</span> Results </div>
                                    </div>
                                    <ul class="pagination pagination-separated pagination-sm mb-0">
                                        <li class="page-item disabled">
                                            <a href="#" class="page-link">←</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">→</a>
                                        </li>
                                    </ul>
                                </div>

                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-5">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1 py-1">My Tasks</h4>
                                <div class="flex-shrink-0">
                                    <div class="dropdown card-header-dropdown">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="text-muted">All Tasks <i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">All Tasks</a>
                                            <a class="dropdown-item" href="#">Completed </a>
                                            <a class="dropdown-item" href="#">Inprogress</a>
                                            <a class="dropdown-item" href="#">Pending</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table table-borderless table-nowrap table-centered align-middle mb-0">
                                        <thead class="table-light text-muted">
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Dedline</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Assignee</th>
                                            </tr>
                                        </thead><!-- end thead -->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask1">
                                                        <label class="form-check-label ms-1" for="checkTask1">
                                                            Create new Admin Template
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-muted">03 Nov 2021</td>
                                                <td><span class="badge badge-soft-success">Completed</span></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Mary Stoner">
                                                        <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                                    </a>
                                                </td>
                                            </tr><!-- end -->
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask2">
                                                        <label class="form-check-label ms-1" for="checkTask2">
                                                            Marketing Coordinator
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-muted">17 Nov 2021</td>
                                                <td><span class="badge badge-soft-warning">Progress</span></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Den Davis">
                                                        <img src="{{ asset('assets/images/users/avatar-7.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                                    </a>
                                                </td>
                                            </tr><!-- end -->
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox" value="" id="checkTask4">
                                                        <label class="form-check-label ms-1" for="checkTask4">
                                                            E-commerce Landing Page
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="text-muted">10 Dec 2021</td>
                                                <td><span class="badge badge-soft-danger">Pending</span></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Prezy Morin">
                                                        <img src="{{ asset('assets/images/users/avatar-5.jpg') }}" alt="" class="rounded-circle avatar-xxs">
                                                    </a>
                                                </td>
                                            </tr><!-- end -->
                                        </tbody><!-- end tbody -->
                                    </table><!-- end table -->
                                </div>
                                <div class="mt-3 text-center">
                                    <a href="javascript:void(0);" class="text-muted text-decoration-underline">Load More</a>
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-xxl-4">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Team Members</h4>
                                <div class="flex-shrink-0">
                                    <div class="dropdown card-header-dropdown">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="fw-semibold text-uppercase fs-12">Sort by: </span><span class="text-muted">Last 30 Days<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Yesterday</a>
                                            <a class="dropdown-item" href="#">Last 30 Days</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">

                                <div class="table-responsive table-card">
                                    <table class="table table-borderless table-nowrap align-middle mb-0">
                                        <thead class="table-light text-muted">
                                            <tr>
                                                <th scope="col">Member</th>
                                                <th scope="col">Hours</th>
                                                <th scope="col">Tasks</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="d-flex">
                                                    <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="" class="avatar-xs rounded-3 me-2">
                                                    <div>
                                                        <h5 class="fs-13 mb-0">Donald Risher</h5>
                                                        <p class="fs-12 mb-0 text-muted">Product Manager</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <h6 class="mb-0">110h : <span class="text-muted">150h</span></h6>
                                                </td>
                                                <td>
                                                    258
                                                </td>
                                                <td style="width:5%;">
                                                    <div id="radialBar_chart_1" data-colors='["--vz-primary"]' data-chart-series="50" class="apex-charts" dir="ltr"></div>
                                                </td>
                                            </tr><!-- end tr -->
                                        </tbody><!-- end tbody -->
                                    </table><!-- end table -->
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    @include('frontend.dashboard-status')

                    <!-- end card header -->
                    @endsection

    @section('scripts')
    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- projects js -->
    <script src="{{ asset('assets/js/pages/dashboard-projects.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    @endsection