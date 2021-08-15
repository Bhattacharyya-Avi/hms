@extends('employee.admin.backend.admin-master')
@section('content')

    <link rel="stylesheet" href="{{url('/css/table-style.css')}}">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h4><strong>Admin/</strong> Bed List</h4>
        </div>

         <div class="col-auto ms-auto text-end mt-n1">
            <!-- <a href="{{route('doctor.add_ot_list')}}" class="btn btn-light bg-white me-2">Add</a> -->
            <!-- modal trigger -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add bed</button>
        </div> 
    </div>
    <div class="col-12 col-xl-12">
        <div class="card">
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width:15%;">Bed number</th>
                        <th style="width:15%">Bed type</th>
                        <th class="d-none d-md-table-cell" style="width:15%">Status</th>
                        <th style="width:10%;">Cost</th>
                        <th style="width:35%;">Services</th>
                        <th style="width:10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bedsinfo as $bedinfo)
                    <tr>
                        <td>{{$bedinfo->bed_number}}</td>
                        <td>{{$bedinfo->bed_type}}</td>
                        <td class="d-none d-md-table-cell">{{$bedinfo->bed_status}}</td>
                        <td>{{$bedinfo->bed_cost}}</td>
                        <td>{{$bedinfo->bed_description}}</td>
                        <td class="table-action">
                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$bedsinfo->links('pagination::bootstrap-4')}}
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add a bed</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
        <form action="{{route('admin.addbed')}}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Bed Number</label>
                <input type="text" placeholder="Enter bed number" class="form-control" name="bed_number">
            </div>

            <div class="mb-3">
                <label class="form-label">Bed type</label>
                <div class="input-group mb-3">
                <select class="form-select flex-grow-1" name="bed_type">
                    <option>General </option>
                    <option>ICU</option>
                    <option>Cabin</option>
                </select>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Bed status</label>
                <div class="input-group mb-3">
                <select class="form-select flex-grow-1" name="bed_status">
                    <option>Avilable </option>
                    <option>Booked</option>
                </select>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Bed Description</label>
                <textarea class="form-control" placeholder="Enter bed description" rows="1" name="bed_description"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Bed Cost</label>
                <input type="number" placeholder="Enter bed cost" class="form-control" name="bed_cost">
            </div>

            
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
        </div>
    </div>
    </div>

@endsection
