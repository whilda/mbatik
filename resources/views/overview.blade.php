@extends('layouts.dashboard')

@section('title')
	Overview
@endsection

@section('overview')
	class="active"
@endsection

@section('content')
          <h1 class="page-header">Dashboard</h1>
          <div id="container" style="height: 400px; min-width: 310px"></div>
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
            <table class="table table-striped">
		        <thead>
		            <tr>
				        <th>Code</th>
				        <th>Tag</th>
				        <th>Vendor</th>
				        <th>Purchase</th>
				        <th>Sell</th>
				        <th>Quantity</th>
				        <th>Note</th>
		            </tr>
		        </thead>
		        <tbody>
		        @if ($items->count())
		            @foreach ($items as $item)
		                <tr>
					          <td>{{ $item->code }}</td>
					          <td>{{ $item->tagsView() }}</td>
					          <td>{{ $item->vendor->name }}</td>
					          <td>{{ $item->purchase_price }}</td>
					          <td>{{ $item->sell_price }}</td>
					          <td>{{ $item->quantity }}</td>
					          <td>{{ $item->note }}</td>
		                </tr>
		            @endforeach
		        @else
		    		<tr>
						<td colspan="7">Stock is safe</td>
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
