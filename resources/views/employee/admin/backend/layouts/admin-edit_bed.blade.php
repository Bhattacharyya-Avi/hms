@extends('employee.employee-master')
@section('content')

    <form action="{{route('admin.update.bed',$bed->id)}}" method="post">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label class="form-label">Bed Number</label>
            <input type="text" placeholder="Enter bed number" class="form-control" name="bed_number" value="{{$bed->bed_number}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Bed type</label>
            <input readonly type="text" placeholder="bed type" class="form-control" name="bed_type" value="{{$bed->bed_type}}">
        </div>

{{--        <div class="mb-3">--}}
{{--            <label class="form-label">Bed type</label>--}}
{{--            <div class="input-group mb-3">--}}
{{--                <select class="form-select flex-grow-1" name="bed_type" >--}}
{{--                    <option @if($bed->bed_type=='Cabin') selected @endif>Cabin</option>--}}
{{--                    <option @if($bed->bed_type=='General') selected @endif>General </option>--}}
{{--                    <option @if($bed->bed_type=='ICU') selected @endif>ICU </option>--}}


{{--                </select>--}}
{{--            </div>--}}
{{--        </div>--}}

        <div class="mb-3">
            <label class="form-label">Bed status</label>
            <div class="input-group mb-3">
                <select class="form-select flex-grow-1" name="status">
                    <option @if($bed->bed_status=='Available') selected @endif>Available </option>
                    <option @if($bed->bed_status=='Booked') selected @endif>Booked</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Bed Description</label>
            <textarea class="form-control" placeholder="Enter bed description" rows="1" name="bed_description" >{{$bed->bed_description}}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Bed Cost</label>
            <input type="number" placeholder="Enter bed cost" class="form-control" name="bed_cost" value="{{$bed->bed_cost}}">
        </div>


        <div class="modal-footer">
{{--            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>--}}
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection
