@extends('employee.admin.backend.admin-master')
@section('content')
    <link rel="stylesheet" href="{{url('/css/table-style.css')}}">
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h4><strong>Admin/</strong> Slot List</h4>
        </div>

        <div class="col-auto ms-auto text-end mt-n1">
            <!-- modal trigger -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Slot</button>
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
                    <th>ID</th>
                    <th>Slot Name</th>
                    <th class="d-none d-md-table-cell">Start Time</th>
                    <th>End Time</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($slots as $slot)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$slot->slot_name}}</td>
                        <td class="d-none d-md-table-cell">{{$slot->slot_start}}</td>
                        <td>{{$slot->slot_end}}</td>
                        <td class="table-action">
                            <a href="{{route('admin.slot.edit',$slot->id)}}"><i class="align-middle" data-feather="edit-2"></i></a>
                            <a href="{{route('admin.slot.delete', $slot->id)}}"><i class="align-middle" data-feather="trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$slots->links('pagination::bootstrap-4')}}
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add an employee</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="{{route('admin.slotadd')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Slot name</label>
                            <input type="text" placeholder="Enter Full name" class="form-control" name="slot_name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Slot starting time</label>
                            <input type="time" class="form-control" name="start_time">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Slot ending time</label>
                            <input type="time" class="form-control" name="End_time">
                        </div>
                        <!-- <input type="submit" class="btn btn-primary" value="Submit" > -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Add slot</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection
