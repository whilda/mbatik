@extends('layouts.dashboard')

@section('title')
	Stock
@endsection

@section('stock')
	class="active"
@endsection

@section('content')
        	<h1 class="page-header">Stock</h1>
        	@if ($errors->any())
			    <ul class="alert alert-danger" style="padding-left: 2em;">
			        @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
			    </ul>
			@endif
			@if (isset($success))
			    <div class="alert alert-success" style="padding-left: 2em;">
			        Data has been saved successfully
			    </div>
			@endif
        	<form method="post" action="./stock" onsubmit="return confirm('Are you sure you want to submit?');">
			  <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-2 form-control-label">Item Code</label>
			    <div class="col-sm-10">
					<select class="form-control" id="item_id" name="item_id">
					  	<option value="-">-</option>
					  	@if ($items->count())
				            @foreach ($items as $item)
				                <option 
				                @if($errors->any())
				                	@if($inputs['item_id'] == $item->id)
				                		selected='selected'
				                	@endif	
				                @endif 
				                
				                value="{{ $item->id }}">{{ $item->code }}</option>
				            @endforeach
						@endif
					</select>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 form-control-label">Vendor</label>
			    <div class="col-sm-10">
			      <input type="text" value='' class="form-control" id="vendor" name="vendor" placeholder="-" disabled>  
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 form-control-label">Type</label>
			    <div class="col-sm-10">
			      <input type="text" value='' class="form-control" id="type" name="type" placeholder="-" disabled>  
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 form-control-label">Material</label>
			    <div class="col-sm-10">
			      <input type="text" value='' class="form-control" id="material" name="material" placeholder="-" disabled>  
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 form-control-label">Note</label>
			    <div class="col-sm-10">
			      <input type="text" value='' class="form-control" id="note" name="note" placeholder="-" disabled>  
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 form-control-label">Purchase Price</label>
			    <div class="col-sm-10">
			      <div class="input-group">
					  <span class="input-group-addon">Rp</span>
					  <input type="number" value='@if ($errors->any()){{ $inputs['purchase_price'] }}@endif' class="form-control" id="purchase_price" name="purchase_price" placeholder="Amount">
					</div>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 form-control-label">Sell Price</label>
			    <div class="col-sm-10">
			      <div class="input-group">
					  <span class="input-group-addon">Rp</span>
					  <input type="number" value='@if ($errors->any()){{ $inputs['sell_price'] }}@endif' class="form-control" id="sell_price" name="sell_price" placeholder="Amount">
					</div>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 form-control-label">Old Quantity</label>
			    <div class="col-sm-10">
			      <input type="number" value='' class="form-control" id="old_quantity" name="old_quantity" placeholder="-" disabled>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 form-control-label">Quantity</label>
			    <div class="col-sm-10">
			      <input type="number" value='@if ($errors->any()){{ $inputs['quantity'] }}@endif' class="form-control" id="quantity" name="quantity" placeholder="Quantity">
			    </div>
			  </div>
			  <div class="form-group row">
			    <div class="col-sm-offset-2 col-sm-10">
			      <input type="hidden" name="_token" value="{{ csrf_token() }}">
			      <button type="submit" class="btn btn-secondary">Save</button>
			    </div>
			  </div>
			</form>
@endsection

@section('script')
	<script type="text/javascript">
	$("#item_id").change(function(){
		$id = $("#item_id").val();
		if($id != "-")
			SetData();
		else {
			$("#vendor").val("-");
			$("#type").val("-");
			$("#material").val("-");
			$("#note").val("-");
			$("#purchase_price").val("");
			$("#sell_price").val("");
			$("#old_quantity").val("");
			$("#quantity").val("");
		}
	});
	function SetData(){
		$id = $("#item_id").val();
		$.getJSON( "./item/"+$id, function( data ) {
  			$("#vendor").val(data.vendor);
			$("#type").val(data.type);
			$("#material").val(data.material);
			$("#note").val(data.note);
			$("#purchase_price").val(data.purchase_price);
			$("#sell_price").val(data.sell_price);
			$("#old_quantity").val(data.quantity);
			$("#quantity").val("");	
		});
	}
	</script>
@endsection