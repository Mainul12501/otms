@extends('admin.master')

@section('title', 'Manage Orders')

@section('body')
    <div class="row py-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3 class="">Manage Orders</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                        <table class="table" id="file-datatable">
                            <thead>
                            <tr>
                                <td>#</td>
                                <td>St. Name</td>
                                <td>St. Mobile</td>
                                <td>Txt Id</td>
                                <td>Total Amount</td>
                                <td>Payment Amount</td>
                                <td>Val Id</td>
                                <td>Bank Txt Id</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $order->user->name }}</td>
                                    <td>{{ $order->user->mobile }}</td>
                                    <td>{{ $order->tran_id }}</td>
                                    <td>{{ $order->total_amount }}</td>
                                    <td>{{ $order->payment_amount }}</td>
                                    <td>{{ $order->ssl_val_id }}</td>
                                    <td>{{ $order->bank_tran_id }}</td>
                                    <td>
                                        {{ $order->status == 0 ? 'Pending' : '' }}
                                        {{ $order->status == 1 ? 'Approved' : '' }}
                                        {{ $order->status == 2 ? 'Canceled' : '' }}
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{ route('orders.change-status', ['id' => $order->id]) }}" class="btn btn-sm btn-secondary ms-1"><i class="fa fa-edit"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
