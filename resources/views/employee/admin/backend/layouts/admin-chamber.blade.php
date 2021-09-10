@extends('employee.admin.backend.admin-master')
@section('content')

    <link rel="stylesheet" href="{{url('/css/table-style.css')}}">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h4><strong>Admin/</strong> Chamber list</h4>
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
                        <th>Chamber number</th>
                        <th>Chamber Descriptione</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($chambers as $chamber)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$chamber->chamber_number}}</td>
                        <td>{{$chamber->chamber_discription}}</td>
                        <td>{{$chamber->chamber_status}}</td>
                        <td class="table-action">
                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                            <a href="{{route('chamber.delete',$chamber->id)}}"><i class="align-middle" data-feather="trash"></i></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{$chambers->links('pagination::bootstrap-4')}}
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

            <form action="{{route('chamberadd')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Chamber number</label>
                    <input type="text" placeholder="Enter service name" class="form-control" name="chamber_number">
                </div>

                <div class="mb-3">
                    <label class="form-label">Chamber Descriptione</label>
                    <textarea class="form-control" placeholder="Enter service description" rows="1" name="chamber_description"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Bed status</label>
                    <div class="input-group mb-3">
                        <select class="form-select flex-grow-1" name="chamber_status">
                            <option>Available </option>
                            <option>Reserved</option>
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
