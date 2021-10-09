@extends('employee.employee-master')

@section('content')
    <div class="col-12 col-xl-12">


        <div class="card">
            <!-- <div class="card-header">
                <h5 class="card-title">Hoverable Rows</h5>
                <h6 class="card-subtitle text-muted">Add <code>.table-hover</code> to enable a hover state on table rows within a
                    <code>&lt;tbody&gt;</code>.</h6>
            </div> -->
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Patient's name</th>
                        <th>Doctor's name</th>
                        <th>Appointment time</th>
                        <th>Appointment date</th>
                        <th>Payment Status</th>
                        <th>Total</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($payments as $data)

                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data-> user_name}}</td>
                        <td>{{$data->user->name ?? ''}}</td>
                        <td>{{$data->appointment_time}}</td>
                        <td>{{$data->appointment_date}}</td>
                        <td>{{$data->payment_status}}</td>
                        <td>{{$data->total_amount}}</td>
                        <td class="table-action">
                            <a href="{{route('accountant.outdoorpay.accept',$data->id)}}"><i class="material-icons">check</i></a>
                            <a href="{{route('accountant.outdoorpay.bill',$data->id)}}"><i class="material-icons">file_download</i></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
