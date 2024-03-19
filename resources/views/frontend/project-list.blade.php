@extends('layouts.app')

@section('title', 'Project List')

@section('content')
<div id="layout-wrapper">
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Project List</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                                        <li class="breadcrumb-item active">Project List</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
<div class="row g-4 mb-3">
    <div class="col-sm-auto">
        <div>
            <a href="apps-projects-create.html" class="btn btn-success"><i class="ri-add-line align-bottom me-1"></i> Add New</a>
        </div>
    </div>
    <div class="col-sm">
        <div class="d-flex justify-content-sm-end gap-2">
            <div class="search-box ms-2">
                <input type="text" class="form-control" placeholder="Search...">
                <i class="ri-search-line search-icon"></i>
            </div>

            <select class="form-control w-md" data-choices data-choices-search-false>
                <option value="All">All</option>
                <option value="Today">Today</option>
                <option value="Yesterday" selected>Yesterday</option>
                <option value="Last 7 Days">Last 7 Days</option>
                <option value="Last 30 Days">Last 30 Days</option>
                <option value="This Month">This Month</option>
                <option value="Last Year">Last Year</option>
            </select>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xxl-3 col-sm-6 project-card">
        <div class="card card-height-100">
            <div class="card-body">
                <div class="d-flex flex-column h-100">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted mb-4">Updated 3hrs ago</p>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="d-flex gap-1 align-items-center">
                                <button type="button" class="btn avatar-xs mt-n1 p-0 favourite-btn">
                                    <span class="avatar-title bg-transparent fs-15">
                                        <i class="ri-star-fill"></i>
                                    </span>
                                </button>
                                <div class="dropdown">
                                    <button class="btn btn-link text-muted p-1 mt-n2 py-0 text-decoration-none fs-15" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i data-feather="more-horizontal" class="icon-sm"></i>
                                    </button>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="apps-projects-overview.html"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a>
                                        <a class="dropdown-item" href="apps-projects-create.html"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#removeProjectModal"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mb-2">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar-sm">
                                <span class="avatar-title bg-soft-warning rounded p-2">
                                    <img src="{{ asset('assets/images/brands/slack.png') }}" alt="" class="img-fluid p-1">
                                </span>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-1 fs-15"><a href="apps-projects-overview.html" class="text-dark">Slack brand logo design</a></h5>
                            <p class="text-muted text-truncate-two-lines mb-3">Create a Brand logo design for a velzon admin.</p>
                        </div>
                    </div>
                    <div class="mt-auto">
                        <div class="d-flex mb-2">
                            <div class="flex-grow-1">
                                <div>Tasks</div>
                            </div>
                            <div class="flex-shrink-0">
                                <div><i class="ri-list-check align-bottom me-1 text-muted"></i> 18/42</div>
                            </div>
                        </div>
                        <div class="progress progress-sm animated-progress">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: 34%;"></div><!-- /.progress-bar -->
                        </div><!-- /.progress -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- removeProjectModal -->
    <div id="removeProjectModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Are you Sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Project ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger" id="remove-project">Yes, Delete It!</button>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
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
