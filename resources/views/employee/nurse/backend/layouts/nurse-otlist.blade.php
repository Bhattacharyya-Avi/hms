@extends('employee.nurse.backend.nurse-master')

@section('content')
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><strong>Nurse/</strong> OT list</h3>
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
                        <th style="width:40%;">Patient's name</th>
                        <th style="width:25%">OT time</th>
                        <th class="d-none d-md-table-cell" style="width:25%">OT Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Varun Thakur</td>
                        <td>3:00pm</td>
                        <td class="d-none d-md-table-cell">June 21, 2020</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>Varun Thakur</td>
                        <td>3:00pm</td>
                        <td class="d-none d-md-table-cell">June 21, 2020</td>
                        <td>Active</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    
    
    
@endsection
