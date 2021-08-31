@extends('employee.admin.backend.admin-master')
@section('content')

    <link rel="stylesheet" href="{{url('/css/table-style.css')}}">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h4><strong>Admin/</strong> Patient Service Details</h4>
        </div>

         <div class="col-auto ms-auto text-end mt-n1">
            <!-- <a href="{{route('doctor.add_ot_list')}}" class="btn btn-light bg-white me-2">Add</a> -->
        </div> 
    </div>
    <div class="col-12 col-xl-12">
        <div class="card">
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>appointment id</th>
                        <th>service id</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($service as $serv)
                    <td>{{$serv->admitpatients_id}}</td>
                    <td>{{$serv->service_id}}</td>
                    @endforeach
                    
                </tbody>
            </table>
            
        </div>
    </div>
@endsection
