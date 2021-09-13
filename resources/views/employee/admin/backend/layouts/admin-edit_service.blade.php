@extends('employee.employee-master')
@section('content')

    <form action="{{route('admin.service.Update',$service->id)}}" method="post">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label class="form-label">Service Number</label>
            <input type="text" placeholder="Enter bed number" class="form-control" name="service_name" value="{{$service->service_name}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Service Description</label>
            <textarea class="form-control" placeholder="Enter bed description" rows="1" name="service_description" >{{$service->service_description}}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Service charge</label>
            <input type="text" placeholder="Enter bed cost" class="form-control" name="service_cost" value="{{$service->service_cost}}">
        </div>


        <div class="modal-footer">
{{--            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection
