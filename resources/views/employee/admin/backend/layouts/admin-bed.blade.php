@extends('employee.employee-master')
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
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <input type="text" class="form-control form-control-sm bg-light rounded-2 border-0" style="width: 100px;" placeholder="Search..">
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th >Bed number</th>
                        <th>Bed type</th>
                        <th class="d-none d-md-table-cell">Status</th>
                        <th >Cost</th>
                        <th >Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bedsinfo as $bedinfo)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$bedinfo->bed_number}}</td>
                        <td>{{$bedinfo->bed_type}}</td>
                        <td class="d-none d-md-table-cell">{{$bedinfo->bed_status}}</td>
                        <td>{{$bedinfo->bed_cost}}</td>
                        <td>{{$bedinfo->bed_description}}</td>
                        <td class="table-action">
                            <a href="{{route('admin.edit.bed',$bedinfo->id)}}"><i class="align-middle" data-feather="edit-2"></i></a>
                            <a href="{{route('admin.delete.bed',$bedinfo->id)}}"><i class="align-middle" data-feather="trash"></i></a>
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
                <input type="text" placeholder="Enter bed number" class="form-control" name="bed_number" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Bed type</label>
                <div class="input-group mb-3">
                <select class="form-select flex-grow-1" name="bed_type" required>
                    <option>Click to select </option>
                    <option>General </option>
                    <option>Single Cabin </option>
                    <option>Double Cabin(Non-AC)</option>
                    <option>Double Cabin(AC)</option>
                </select>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Bed status</label>
                <div class="input-group mb-3">
                <select class="form-select flex-grow-1" name="status" required>
                    <option value="Available">Available </option>
                    <option value="Booked">Booked</option>
                </select>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Bed Description</label>
                <textarea class="form-control" placeholder="Enter bed description" rows="1" name="bed_description"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Bed Cost</label>
                <input type="number" placeholder="Enter bed cost" class="form-control" name="bed_cost" required>
            </div>


        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
        </form>
        </div>
    </div>
    </div>

@endsection
