@extends('employee.doctor.backend.doctor-master')

@section('content')
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Doctor/</strong> Dashboard</h3>
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
                                        <a href="{{route('doctor.profile')}}" class="btn btn-primary">View</a> 
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card">
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
                                    <h3 class="mt-1 mb-3">My profile</h3>
                                    <div class="mb-0">
                                    <a href="/profile" class="btn btn-primary">View</a>
                                    </div>
                                </div>
                            </div> -->
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
                                    <h3 class="mt-1 mb-3">Appointments </h3>
                                    <div class="mb-0">
                                        <a href="{{route('doctor.appointmentlist')}}" class="btn btn-primary">View</a>
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

            <div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-1">
                <div class="card flex-fill ">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-end">
                                <form class="row g-2">
                                    <div class="col-auto">
                                        <!-- <input type="text" class="form-control form-control-sm bg-light rounded-2 border-0" style="width: 100px;"
                                            placeholder="Search.."> -->
                                    </div>
                                </form>
                            </div>
                            <h5 class="card-title mb-0">Oparation list</h5>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Patient's name</th>
                                    <th>OT time</th>
                                    <th class="d-none d-md-table-cell" >OT Date</th>
                                    
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ots as $ot)
                                <tr>
                                    <td>{{$ot->doctor_name}}</td>
                                    <td>{{$ot->time}}</td>
                                    <td class="d-none d-md-table-cell">{{$ot->date}}</td>
                                    <!-- <td>Active</td> -->
                                    <td class="table-action">
                                        <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                        <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$ots->links('pagination::bootstrap-4')}}
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