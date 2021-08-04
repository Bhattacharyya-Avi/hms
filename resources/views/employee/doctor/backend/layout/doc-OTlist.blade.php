@extends('employee.doctor.backend.doctor-master')

@section('content')
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="{{url('/css/table-style.css')}}">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h4><strong>Doctor/</strong> OT List</h4>
        </div>

         <div class="col-auto ms-auto text-end mt-n1">
            <a href="{{route('doctor.add_ot_list')}}" class="btn btn-light bg-white me-2">Add</a>
            
        </div> 
    </div>
    <div class="col-12 col-xl-12">
        <div class="card">
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width:30%;">Patient's name</th>
                        <th style="width:25%">OT time</th>
                        <th class="d-none d-md-table-cell" style="width:25%">OT Date</th>
                        <th>Status</th>
                        <th style="width:10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Varun Thakur</td>
                        <td>3:00pm</td>
                        <td class="d-none d-md-table-cell">June 21, 2020</td>
                        <td>Active</td>
                        <td class="table-action">
                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Varun Thakur</td>
                        <td>3:00pm</td>
                        <td class="d-none d-md-table-cell">June 21, 2020</td>
                        <td>Active</td>
                        <td class="table-action">
                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Varun Thakur</td>
                        <td>3:00pm</td>
                        <td class="d-none d-md-table-cell">June 21, 2020</td>
                        <td>Active</td>
                        <td class="table-action">
                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Varun Thakur</td>
                        <td>3:00pm</td>
                        <td class="d-none d-md-table-cell">June 21, 2020</td>
                        <td>Active</td>
                        <td class="table-action">
                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Varun Thakur</td>
                        <td>3:00pm</td>
                        <td class="d-none d-md-table-cell">June 21, 2020</td>
                        <td>Active</td>
                        <td class="table-action">
                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Varun Thakur</td>
                        <td>3:00pm</td>
                        <td class="d-none d-md-table-cell">June 21, 2020</td>
                        <td>Active</td>
                        <td class="table-action">
                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Varun Thakur</td>
                        <td>3:00pm</td>
                        <td class="d-none d-md-table-cell">June 21, 2020</td>
                        <td>Active</td>
                        <td class="table-action">
                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Varun Thakur</td>
                        <td>3:00pm</td>
                        <td class="d-none d-md-table-cell">June 21, 2020</td>
                        <td>Active</td>
                        <td class="table-action">
                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Varun Thakur</td>
                        <td>3:00pm</td>
                        <td class="d-none d-md-table-cell">June 21, 2020</td>
                        <td>Active</td>
                        <td class="table-action">
                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Varun Thakur</td>
                        <td>3:00pm</td>
                        <td class="d-none d-md-table-cell">June 21, 2020</td>
                        <td>Active</td>
                        <td class="table-action">
                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Varun Thakur</td>
                        <td>3:00pm</td>
                        <td class="d-none d-md-table-cell">June 21, 2020</td>
                        <td>Active</td>
                        <td class="table-action">
                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
@endsection
