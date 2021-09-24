@extends('employee.employee-master')
@section('content')

    <form action="{{route('admin.operation.update',$operation->id)}}" method="post">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label class="form-label">operation name</label>
            <input type="text" placeholder="Enter operation name" class="form-control" name="operation_name" value="{{$operation->name}}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Operation Description</label>
            <textarea class="form-control" placeholder="Enter operation description" rows="1" name="operation_description">{{$operation->description}}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Cost</label>
            <input type="number" placeholder="Enter operation cost" class="form-control" name="operation_cost" value="{{$operation->cost}}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Activity status</label>
            <div class="input-group mb-3">
                <select class="form-select flex-grow-1" name="operation_status" required>
                    <option @if($operation->status=='Active') selected @endif>Active </option>
                    <option @if($operation->status=='Disabled') selected @endif>Disabled</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
