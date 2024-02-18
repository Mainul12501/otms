@extends('admin.master')

@section('title', 'Change order status')

@section('body')
    <div class="row py-5">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Change Order Status</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('orders.update-status', ['id' => $order->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row mt-4">
                            <label for="" class="col-md-4">Category Name*</label>
                            <div class="col-md-8 form-group">
                                <select name="status" required id="" class="form-control select2-show-search">
                                    <option value="" disabled selected>Update Status</option>
                                    <option value="0" {{ isset($order) && $order->status == 0 ? 'selected' : '' }}>Pending</option>
                                    <option value="1" {{ isset($order) && $order->status == 1 ? 'selected' : '' }}>Approved</option>
                                    <option value="2" {{ isset($order) && $order->status == 2 ? 'selected' : '' }}>Canceled</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-success" value="Update Status" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
