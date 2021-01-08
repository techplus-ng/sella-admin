@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">
          {{-- {{trans('lang.product_plural')}} --}}
          Reports
          <small class="ml-3 mr-3">|</small>
          <small>transactions</small>
        </h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right small">
          <li class="breadcrumb-item">
            <a href="{{url('/reports')}}"> Reports</a>
          </li>
          <li class="breadcrumb-item">
            <a href="{{url('/reports/clusters')}}"> By Clusters</a>
          </li>
          <li class="breadcrumb-item">
            <a href="{{url('/reports/orders')}}"> By Products Sales</a>
          </li>
          <li class="breadcrumb-item">
            <a href="{{url('/reports/transactions')}}"> By Transactions</a>
          </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="content">
  <div class="clearfix"></div>
  @include('flash::message')
  <div class="card">
    <div class="card-header">
      All transactions
    </div>
    <div class="card-body">
      <table class="table small" id="datatable">
        <thead>
          <tr>
            <th>S/N</th>
            <th>Customer</th>
            <th>Amount(&#8358;)</th>
            <th>Order ID</th>
            <th>Product</th>
            <th>Qty</th>
            <th>Payment Status</th>
            <th>Date</th>
            <th>Location</th>
          </tr>
        </thead>
        <tbody>
          @foreach($order_box as $transaction)
            <tr>
              <td>{{ $transaction->id }}</td>
              <td>{{ $transaction->customer[0]->name ?? 'No name found!' }}</td>
              <td>{{ $transaction->price }}</td>
              <td>{{ $transaction->order_id }}</td>
              <td>{{ $transaction->product[0]->name }}</td>
              <td>{{ $transaction->quantity }}</td>
              <td>
                {{ $transaction->payment[0]->status }}
              </td>
              <td>{{ $transaction->created_at }}</td>
              <td>Mowe Pilot</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
@endsection

@push('css_lib')
@include('layouts.datatables_css')
@endpush

{{-- {!! $dataTable->table(['width' => '100%']) !!} --}}

@push('scripts_lib')
@include('layouts.datatables_js')
{{-- {!! $dataTable->scripts() !!} --}}
@endpush


