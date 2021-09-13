@extends('employee.employee-master')
@section('content')

    <form action="{{route('admin.slot.update',$slot->id)}}" method="post">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label class="form-label">Slot name</label>
            <input type="text" placeholder="Enter Full name" class="form-control" name="slot_name" value="{{$slot->slot_name}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Slot starting time</label>
            <input type="time" class="form-control" name="start_time" value="{{$slot->slot_start}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Slot ending time</label>
            <input type="time" class="form-control" name="End_time" value="{{$slot->slot_end}}">
        </div>
        <!-- <input type="submit" class="btn btn-primary" value="Submit" > -->
        <div class="modal-footer">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>
@endsection
