@extends('front.students.student-master')


@section('title')
    Student Dashboard
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <h1 class="text-center border-bottom pb-2">My Orders</h1>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Order Number</th>
                            <th>Trans Id</th>
                            <th>Total Amount</th>
                            <th>Paid Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->tran_id }}</td>
                                <td>{{ $order->total_amount }}</td>
                                <td>{{ $order->payment_amount }}</td>
                                <td>
                                    {{ $order->status == 0 ? 'Pending' : '' }}
                                    {{ $order->status == 1 ? 'Approved' : '' }}
                                    {{ $order->status == 2 ? 'Canceled' : '' }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
