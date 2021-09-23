@extends('backend.master')
@section('content')

    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><strong>User/</strong> Appointment History</h3>
        </div>

        <!-- <div class="col-auto ms-auto text-end mt-n1">
            <a href="#" class="btn btn-light bg-white me-2">Invite a Friend</a>
            <a href="#" class="btn btn-primary">New Project</a>
        </div> -->
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
                    <th>Doctor Name</th>
                    <th>Appointment time</th>
                    <th class="d-none d-md-table-cell">Appointment Date</th>
                    <th>Appointment Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($appointment as $info)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$info->user->name}}</td>
                    <td>{{$info->Slot->slot_start}} - {{$info->Slot->slot_end}}</td>
                    <td class="d-none d-md-table-cell">{{$info->date}}</td>
                    <td>{{$info->status}}</td>
                    <td class="table-action">
                        <!-- <a href="#"><i class="align-middle" data-feather="edit-2"></i></a> -->
                        <a href="{{route('user.appointment.delete',$info->id)}}"><i class="material-icons">close</i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
