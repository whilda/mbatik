@extends('layouts.dashboard')

@section('title')
	Item
@endsection

@section('item')
	class="active"
@endsection

@section('content')
        	<h1 class="page-header">Item Input</h1>
        	<form method="post" action="./item">
        	  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 form-control-label">Vendor</label>
			    <div class="col-sm-10">			      
			      	<select class="form-control" id="vendor_id" name="vendor_id">
					  	@if ($vendors->count())
				            @foreach ($vendors as $vendor)
				                <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
				            @endforeach
				        @else
				    		<option value="-">-</option>
						@endif
					</select>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-2 form-control-label">Code</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="code" name="code" placeholder="Item Code">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 form-control-label">Purchase Price</label>
			    <div class="col-sm-10">
			      <div class="input-group">
					  <span class="input-group-addon">Rp</span>
					  <input type="text" class="form-control" id="purchase_price" name="purchase_price" placeholder="Amount">
					</div>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 form-control-label">Sell Price</label>
			    <div class="col-sm-10">
			      <div class="input-group">
					  <span class="input-group-addon">Rp</span>
					  <input type="text" class="form-control" id="sell_price" name="sell_price" placeholder="Amount">
					</div>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 form-control-label">Quantity</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantity">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 form-control-label">Tag</label>
			    <div class="col-sm-10">
			    <ul id=tag name="tag"></ul>
			    <input type="hidden" id="tag-result" name="tag-result" value="">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 form-control-label">Note</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="note" name="note" placeholder="Note">
			    </div>
			  </div>
			  <div class="form-group row">
			    <div class="col-sm-offset-2 col-sm-10">
			      <input type="hidden" name="_token" value="{{ csrf_token() }}">
			      <button type="submit" class="btn btn-secondary">Save</button>
			    </div>
			  </div>
			</form>
			
			@if ($errors->any())
			    <ul>
			        @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
			    </ul>
			@endif
			<table class="table table-striped table-bordered">
		        <thead>
		            <tr>
				        <th>Code</th>
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
					          <td>{{ $item->vendor->name }}</td>
					          <td>{{ $item->purchase_price }}</td>
					          <td>{{ $item->sell_price }}</td>
					          <td>{{ $item->quantity }}</td>
					          <td>{{ $item->note }}</td>
		                </tr>
		            @endforeach
		        @else
		    		<tr>
				        <td>-</td>
						<td>There are no Vendor</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
		            </tr>
				@endif
		        </tbody>
		    </table>
@endsection

@section('script')
	<script type="text/javascript">
	    $(document).ready(function() {
	        $("#tag").tagit({
	        	availableTags: ["c++", "java", "php", "javascript", "ruby", "python", "c"],
	        	autocomplete: {delay: 0, minLength: 0},
	        	afterTagAdded: function(evt, ui) {
                    $var = $(".tagit-label").map(function() { return $(this).html();}).get();
                    $("#tag-result").val(JSON.stringify($var));
                },
                afterTagRemoved: function(evt, ui) {
                	$var = $(".tagit-label").map(function() { return $(this).html();}).get();
                    $("#tag-result").val(JSON.stringify($var));
                },
	        });
	    });
	</script>
@endsection