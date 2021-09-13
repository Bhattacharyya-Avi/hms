@extends('employee.employee-master')
@section('content')

    <form action="{{route('chamber.update',$chamber->id)}}" method="post">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label class="form-label">Chamber Number</label>
            <input type="text" placeholder="Enter bed number" class="form-control" name="chamber_number" value="{{$chamber->chamber_number}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Chamber Description</label>
            <textarea class="form-control" placeholder="Enter bed description" rows="1" name="chamber_discription" >{{$chamber->Chamber_discription}}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Chamber_status</label>
            <input type="text" placeholder="Enter bed cost" class="form-control" name="chamber_status" value="{{$chamber->chamber_status}}">
        </div>


        <div class="modal-footer">
{{--            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection
