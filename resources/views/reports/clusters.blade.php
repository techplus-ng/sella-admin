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
          <small>Clusters</small>
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
      
    </div>
    <div class="card-body">
      <div class="clearfix"></div>
    </div>
  </div>
</div>
@endsection

