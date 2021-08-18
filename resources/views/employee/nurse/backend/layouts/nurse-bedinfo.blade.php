@extends('employee.nurse.backend.nurse-master')

@section('content')

<div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><strong>Nurse/</strong> Bed Information</h3>
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
                        <th style="width:15%;">Bed number</th>
                        <th style="width:15%">Bed type</th>
                        <th style="width:15%">Cost</th>
                        <th class="d-none d-md-table-cell" style="width:35%">Aditional survices</th>
                        <th style="width:20%">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bedsinfo as $bedinfo)
                        <tr>
                            <td>{{$bedinfo->bed_number}}</td>
                            <td>{{$bedinfo->bed_type}}</td>
                            <td>{{$bedinfo->bed_cost}}</td>
                            <td class="d-none d-md-table-cell">{{$bedinfo->bed_description}}</td>
                            <td>{{$bedinfo->bed_status}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
