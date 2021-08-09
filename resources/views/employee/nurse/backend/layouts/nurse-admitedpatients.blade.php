@extends('employee.nurse.backend.nurse-master')

@section('content')
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><strong>Nurse/</strong> Admited Patients</h3>
        </div>

        <!-- <div class="col-auto ms-auto text-end mt-n1">
            <a href="#" class="btn btn-light bg-white me-2">Invite a Friend</a>
            <a href="#" class="btn btn-primary">New Project</a>
        </div> -->
    </div>
    <div class="col-12 col-xl-12">
        <div class="card">
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width:25%;">Patient's name</th>
                        <th style="width:15%">Bed id</th>
                        <th style="width:25%">Admition date</th>
                        <th class="d-none d-md-table-cell" style="width:25%">Release date</th>
                        <th class="table-action" style="width:10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Varun Thakur</td>
                        <td>101</td>
                        <td class="d-none d-md-table-cell">June 21, 2020</td>
                        <td class="d-none d-md-table-cell">July 21, 2020</td>
                        <td class="table-action">
                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                            <i class="align-middle" data-feather="trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Varun Thakur</td>
                        <td>101</td>
                        <td class="d-none d-md-table-cell">June 21, 2020</td>
                        <td class="d-none d-md-table-cell">July 21, 2020</td>
                        <td class="table-action">
                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                            <i class="align-middle" data-feather="trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    
    
    
@endsection
