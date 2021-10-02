@extends('employee.employee-master')
@section('content')

    <link rel="stylesheet" href="{{url('/css/table-style.css')}}">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h4><strong>Admin/</strong> Operation name list</h4>
        </div>

        <div class="col-auto ms-auto text-end mt-n1">
        <!-- <a href="{{route('doctor.add_ot_list')}}" class="btn btn-light bg-white me-2">Add</a> -->
            <!-- modal trigger -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add chamber</button>
        </div>
    </div>
    <div class="col-12 col-xl-12">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="card">

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Operation name</th>
                    <th>Operation Description</th>
                    <th>Cost</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($operations as $operation)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$operation->name}}</td>
                        <td>{{$operation->description}}</td>
                        <td>{{$operation->cost}}</td>
                        <td>{{$operation->status}}</td>
                        <td class="table-action">
                            <a href="{{route('admin.operation.edit',$operation->id)}}"><i class="align-middle" data-feather="edit-2"></i></a>
                            <a href="{{route('admin.operation.delete',$operation->id)}}"><i class="align-middle" data-feather="trash"></i></a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add a Operation name</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="{{route('admin.operation.add')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">operation name</label>
                            <input type="text" placeholder="Enter operation name" class="form-control" name="operation_name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Operation Description</label>
                            <textarea class="form-control" placeholder="Enter operation description" rows="1" name="operation_description"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Cost</label>
                            <input type="number" placeholder="Enter operation cost" class="form-control" name="operation_cost" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Activity status</label>
                            <div class="input-group mb-3">
                                <select class="form-select flex-grow-1" name="operation_status" required>
                                    <option>Active </option>
                                    <option>Disabled</option>
                                </select>
                            </div>
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
