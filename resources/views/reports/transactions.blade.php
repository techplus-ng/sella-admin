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
    <div class="container">
      <div class="row">
        <div class="col-md-12 small px-4 py-4">
          <h3 class="text-success small">Transactions from (<b>{{ $start_date }}</b> till <b>{{ $end_date }}</b>)</h3>
          <form method="GET" action="">
              <div class="row">
                  <div class="col-md-5">
                      <div class="form-group">
                          <label for="start_date">Start Date</label>
                          <input type="date" onchange="refereshDate()" class="form-control" value="{{ $start_date }}" id="start_date" name="start_date">
                      </div>
                  </div>
                  <div class="col-md-5">
                      <div class="form-group">
                          <label for="end_date">End Date</label>
                          <input type="date" onchange="refereshDate()" class="form-control" value="{{ $end_date }}" id="end_date" name="end_date">
                      </div>
                  </div>
                  <div class="col-md-2">
                      <div class="form-group">
                          <label for="end_date" style="opacity: 0;">Fetch</label>
                          <button class="btn primary-info col-md-12">
                              Fetch
                          </button>
                      </div>
                  </div>
              </div>
          </form>
        </div>
      </div>
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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
@endpush

{{-- {!! $dataTable->table(['width' => '100%']) !!} --}}

@push('scripts_lib')
  {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
  
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
  <script src="https://momentjs.com/downloads/moment.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      // initDefaultDate();

      $('#datatable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
      });
    });

    function initDefaultDate() {
        dateTo = moment().format('YYYY-MM-DD');
        dateFrom = moment().subtract(7,'d').format('YYYY-MM-DD');

        $("#start_date").val(dateFrom);
        $("#end_date").val(dateTo);
        $("#date-preview").html(`(<i><b>${dateFrom}</b></i>) to <i>(<b>${dateTo}</b></i>)`);
    }

    function refereshDate() {
        // var start_date = $("#start_date").val();
        // var end_date = $("#end_date").val();
        // $("#date-preview").html(`(<i><b>${start_date}</b></i>) to <i>(<b>${end_date}</b></i>)`);
    }
  </script>
@endpush


