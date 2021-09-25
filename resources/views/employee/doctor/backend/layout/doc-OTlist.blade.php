@extends('employee.employee-master')

@section('content')
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="{{url('/css/table-style.css')}}">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h4><strong>Doctor/</strong> OT List</h4>
        </div>

         <div class="col-auto ms-auto text-end mt-n1">
            <a href="{{route('doctor.add_ot_list')}}" class="btn btn-light bg-white me-2">Add a schedule</a>

        </div>
    </div>
    <div class="col-12 col-xl-12">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <input type="text" class="form-control form-control-sm bg-light rounded-2 border-0" style="width: 100px;"
                    placeholder="Search..">
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Patient's name</th>
                        <th>OT name</th>
                        <th>OT time</th>
                        <th class="d-none d-md-table-cell" >OT Date</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($otlists as $otlist)
                    <tr>
                        <td>{{$otlist->Patient_name}}</td>
                        <td>{{$otlist->operation->name}}</td>
                        <td>{{$otlist->time}}</td>
                        <td class="d-none d-md-table-cell">{{$otlist->date}}</td>
                        <td>{{$otlist->status}}</td>
                        <td class="table-action">
                            <a href="{{route('doctor.edit.ot',$otlist->id)}}"><i class="align-middle" data-feather="edit-2"></i></a>
                            <a href="{{route('doctor.delete.ot',$otlist->id)}}"><i class="align-middle" data-feather="trash"></i></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{$otlists->links('pagination::bootstrap-4')}}
        </div>
    </div>

@endsection
