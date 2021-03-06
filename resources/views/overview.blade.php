@extends('layouts.dashboard')

@section('title')
	Overview
@endsection

@section('overview')
	class="active"
@endsection

@section('content')
          <h1 class="page-header">Dashboard</h1>
		  <div class="col-lg-3 col-md-16">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <span class="glyphicon glyphicon-usd" aria-hidden="true" style="font-size: 60px">
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div style="font-size: 35px">Rp {{ number_format($asset) }}</div>
                                        <div>Today's asset!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Asset</span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
       <div id="container" style="min-width: 310px"></div>
          <br />
          <div id="dualaxis" style="height: 400px; min-width: 310px"></div>
          <br />
          <div class="row placeholders">
            <div class="col-xs-8 col-sm-4 placeholder">
              <div id="pie" class="img-responsive"></div>
            </div>
            <div class="col-xs-8 col-sm-4 placeholder">
              <div id="speedo" class="img-responsive"></div>
            </div>
            <div class="col-xs-8 col-sm-4 placeholder">
               <div id="spider" class="img-responsive"></div>
            </div>
          </div>

          <h2 class="sub-header">Low Stock</h2>
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
		        <thead>
		            <tr>
				        <th>Code</th>
				        <th>Vendor</th>
				        <th>Type</th>
				        <th>Material</th>
				        <th>Note</th>
				        <th>Purchase</th>
				        <th>Sell</th>
				        <th>Quantity</th>
		            </tr>
		        </thead>
		        <tbody>
		        @if ($items->count())
		            @foreach ($items as $item)
		                <tr>
					          <td>{{ $item->code }}</td>
					          <td>{{ $item->vendor->name }}</td>
					          <td>{{ $item->type->name }}</td>
					          <td>{{ $item->material->name }}</td>
					          <td>{{ $item->note }}</td>
					          <td>{{ $item->purchase_price }}</td>
					          <td>{{ $item->sell_price }}</td>
					          <td>{{ $item->quantity }}</td>
		                </tr>
		            @endforeach
		        @else
		    		<tr>
						<td colspan="8">There are no item</td>
		            </tr>
				@endif
		        </tbody>
		    </table>
          </div>
@endsection

@section('script')
	<script src="https://code.highcharts.com/stock/highstock.js"></script>
	<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/highcharts-more.js"></script>
	<script src="../resources/assets/js/overview.js"></script>
@endsection
