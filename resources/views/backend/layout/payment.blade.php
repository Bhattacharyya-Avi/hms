@extends('backend.master')
@section('content')

    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><strong>User/</strong> Payment History</h3>
        </div>

        <!-- <div class="col-auto ms-auto text-end mt-n1">
            <a href="#" class="btn btn-light bg-white me-2">Invite a Friend</a>
            <a href="#" class="btn btn-primary">New Project</a>
        </div> -->
    </div>

<div class="col-12 col-xl-12">
    <div class="card">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Doctor's Name</th>
                    <th class="d-none d-md-table-cell">Appointment Date</th>
                    <th>Appointment time</th>
                    <th>Amount</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($payment as $pay)
                <tr>
                    <td>{{$pay->doctor_name}}</td>
                    <td>{{$pay->appointment_date}}</td>
                    <td>{{$pay->appointment_time}}</td>
                    <td>{{$pay->total_amount}}</td>
                    <td>{{$pay->payment_status}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
