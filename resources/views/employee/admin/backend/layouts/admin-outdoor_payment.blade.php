@extends('employee.admin.backend.admin-master')
@section('content')
    <div class="col-12 col-xl-12">
        <div class="card">
            <!-- <div class="card-header">
                <h5 class="card-title">Hoverable Rows</h5>
                <h6 class="card-subtitle text-muted">Add <code>.table-hover</code> to enable a hover state on table rows within a
                    <code>&lt;tbody&gt;</code>.</h6>
            </div> -->
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Patient's name</th>
                        <th>Patient's email</th>
                        <th>Doctor's name</th>
                        <th>Total bill</th>
                        <th>Action</th>
                        <th>bill copy</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>1</td>
                        <td>Vanessa Tucker</td>
                        <td>Tucker@gmail.com</td>
                        <td>Harris William</td>
                        <td>1200</td>
                        <td class="table-action">
                            <a href="#"><button type="button" class="btn btn-success">Accept</button></a>
                            <a href="#"><button type="button" class="btn btn-danger">Delete</button></a>
                        </td>
                        <td><a href="#"><button type="button" class="btn btn-warning">Download</button></a></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
@endsection