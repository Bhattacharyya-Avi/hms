@extends('employee.employee-master')

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
                    <th style="width:20%;">Patient's name</th>
                    <th style="width:20%;">Patient's email</th>
                    <th style="width:18%;">Doctor's name</th>
                    <th style="width:12%;">Total bill</th>
                    <th style="width:20%;">Action</th>
                    <th style="width:10%;">bill copy</th>

                </tr>
            </thead>
            <tbody>
                @foreach($data as $patient)
                <tr>
                    <td>{{$patient->patient_name}}</td>
                    <td>{{$patient->patient_email}}</td>
                    <td>{{"Dr. ".$patient->user->name}}</td>

                    @php
                    $totalDays;
                    $service_costing;
                    $from = Carbon\Carbon::parse($patient->created_at);
                    $to = Carbon\Carbon::now();
                    $totalDays = $from->diff($to)->format('%a');
                    $totalDays = ($totalDays) == 0 ? 1: $totalDays;
                    $totalDays =($from->diff($to)->format('%h')) >= 1 ? $totalDays+1 : $totalDays;
                    $bed_costing = $patient->bed->bed_cost * $totalDays;
                    $costing = 0;
                    @endphp

                    @foreach($patient->service as $service)
                    @php
                    $costing = $costing + $service->service_cost*$totalDays
                    @endphp
                    @endforeach
                    <td>
                        {{$costing + $bed_costing}}
                    </td>
                    <td class="table-action">
                        <a href="#"><button type="button" class="btn btn-success">Accept</button></a>
                        <a href="#"><button type="button" class="btn btn-danger">Delete</button></a>
                    </td>
                    <td><a href="#"><button type="button" class="btn btn-warning">Download</button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection