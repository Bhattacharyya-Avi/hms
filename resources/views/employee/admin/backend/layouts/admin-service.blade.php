@extends('employee.admin.backend.admin-master')
@section('content')

    <link rel="stylesheet" href="{{url('/css/table-style.css')}}">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h4><strong>Admin/</strong> Bed Services</h4>
        </div>

         <div class="col-auto ms-auto text-end mt-n1">
            <!-- <a href="{{route('doctor.add_ot_list')}}" class="btn btn-light bg-white me-2">Add</a> -->
            <!-- modal trigger -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add services</button>
        </div> 
    </div>
    <div class="col-12 col-xl-12">
        <div class="card">
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>name</th>
                        <th>Descriptione</th>
                        <th>Charge</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service )
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$service->service_name}}</td>
                        <td>{{$service->service_description}}</td>
                        <td>{{$service->service_cost}}</td>
                        <td class="table-action">
                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
            {{$services->links('pagination::bootstrap-4')}}
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add a Service</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
        <form action="{{route('admin.serviceadd')}}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Service name</label>
                <input type="text" placeholder="Enter service name" class="form-control" name="service_name">
            </div>

            <div class="mb-3">
                <label class="form-label">Service Description</label>
                <textarea class="form-control" placeholder="Enter service description" rows="1" name="service_description"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Service charge</label>
                <input type="number" placeholder="Enter service cost" class="form-control" name="service_cost">
            </div>

            
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
        </div>
    </div>
    </div>

@endsection
