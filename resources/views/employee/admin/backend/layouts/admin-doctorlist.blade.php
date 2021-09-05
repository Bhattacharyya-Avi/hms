@extends('employee.admin.backend.admin-master')
@section('content')
    <link rel="stylesheet" href="{{url('/css/table-style.css')}}">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h4><strong>Admin/</strong> Appointment details</h4>
        </div>

    <!-- <div class="col-auto ms-auto text-end mt-n1">
            <a href="{{route('doctor.add_ot_list')}}" class="btn btn-light bg-white me-2">Add</a>
        </div>  -->
    </div>
    <div class="col-12 col-xl-12">
        <div class="card">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Doctor Name</th>
                    <th>Doctor's Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($doctors as $key=>$list)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$list->name}}</td>
                            <td>{{$list->email}}</td>
                            <td>
                                <a href="{{route('appointlist',$list->id)}}" type="button" class="btn btn-info">view</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
{{--            {{$otlist->links('pagination::bootstrap-4')}}--}}
        </div>
    </div>
@endsection
