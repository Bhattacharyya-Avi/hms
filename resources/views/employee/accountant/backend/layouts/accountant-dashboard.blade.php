@extends('employee.employee-master')

@section('content')
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Accountant/</strong> Dashboard</h3>
            </div>

            <!-- <div class="col-auto ms-auto text-end mt-n1">
                <a href="#" class="btn btn-light bg-white me-2">Invite a Friend</a>
                <a href="#" class="btn btn-primary">New Project</a>
            </div> -->
        </div>
        <div class="row">
            <div class="col-xl-6 col-xxl-5 d-flex">
                <div class="w-100">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                        <div class="row">
                                        <!--  <div class="col mt-0">
                                            <h5 class="card-title">Sales</h5>
                                        </div>-->

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="mt-1 mb-3">My Information </h3>
                                    <div class="mb-0">
                                        <a href="{{route('accountant.profile')}}" class="btn btn-primary">View</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                     <div class="row">
                                       <div class="col-auto">
                                            <h5 class="card-title">Visitors</h5>
                                        </div>

                                        <div class="col mt-0">
                                            <div class="stat text-primary">
                                                <i class="material-icons">format_list_bulleted</i>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="mt-1 mb-3">Outdoor payment</h3>
                                    <div class="mb-0">
                                    <a href="{{route('accountant.outdoorpay')}}" class="btn btn-primary">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <!-- <div class="col mt-0">
                                            <h5 class="card-title">Earnings</h5>
                                        </div> -->

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="material-icons">format_list_bulleted</i>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="mt-1 mb-3">Indoor Payment </h3>
                                    <div class="mb-0">
                                        <a href="{{route('accountant.indoorpay')}}" class="btn btn-primary">View</a>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Orders</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="material-icons">payment</i>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="mt-1 mb-3">Payment</h3>
                                    <div class="mb-0">
                                    <a href="/payment" class="btn btn-primary">View</a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row">


            <div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-1">
                <div class="card flex-fill">
                    <div class="card-header">
                        <div class="card-actions float-end">
                            <div class="dropdown show">
                                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                    <i class="align-middle" data-feather="more-horizontal"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h5 class="card-title mb-0">Calendar</h5>
                    </div>
                    <div class="card-body d-flex">
                        <div class="align-self-center w-100">
                            <div class="chart">
                                <div id="datetimepicker-dashboard"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
@endsection
