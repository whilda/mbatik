@extends('layouts.dashboard')

@section('title')
	Item
@endsection

@section('item')
	class="active"
@endsection

@section('content')
        	<h1 class="page-header">Item Input</h1>
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
        	<form method="post" action="./item" onsubmit="return confirm('Are you sure you want to submit?');">
			  <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-2 form-control-label">Code</label>
			    <div class="col-sm-10">
			      <input type="text" value='@if($errors->any()){{ $inputs['code'] }}@endif' class="form-control" id="code" name="code" readonly="readonly">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 form-control-label">Vendor</label>
			    <div class="col-sm-10">			      
			      	<select class="form-control" id="vendor_id" name="vendor_id">
					  	<option value="-">-</option>
					  	@if ($vendors->count())
				            @foreach ($vendors as $vendor)
				                <option 
				                @if($errors->any())
				                	@if($inputs['vendor_id'] == $vendor->id)
				                		selected='selected'
				                	@endif	
				                @endif 
				                
				                value="{{ $vendor->id }}">{{ $vendor->name }}</option>
				            @endforeach
						@endif
					</select>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 form-control-label">Type</label>
			    <div class="col-sm-10">			      
			      	<select class="form-control" id="type_id" name="type_id">
					  	<option value="-">-</option>
					  	@if ($types->count())
				            @foreach ($types as $type)
				                <option 
				                @if($errors->any())
				                	@if($inputs['type_id'] == $type->id)
				                		selected='selected'
				                	@endif	
				                @endif 
				                
				                value="{{ $type->id }}">{{ $type->name }}</option>
				            @endforeach
						@endif
					</select>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 form-control-label">Material</label>
			    <div class="col-sm-10">			      
			      	<select class="form-control" id="material_id" name="material_id">
					  	<option value="-">-</option>
					  	@if ($materials->count())
				            @foreach ($materials as $material)
				                <option 
				                @if($errors->any())
				                	@if($inputs['material_id'] == $material->id)
				                		selected='selected'
				                	@endif	
				                @endif 
				                
				                value="{{ $material->id }}">{{ $material->name }}</option>
				            @endforeach
						@endif
					</select>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 form-control-label">Note</label>
			    <div class="col-sm-10">
			      <input type="text" value='@if ($errors->any()){{ $inputs['note'] }}@endif' class="form-control" id="note" name="note" placeholder="Note">  
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
						<td colspan="7">There are no item</td>
		            </tr>
				@endif
		        </tbody>
		    </table>
@endsection

@section('script')
	<script type="text/javascript">
	    $("#vendor_id").change(function(){
		    makeCode();
		});
	    $("#type_id").change(function(){
		    makeCode();
		});
	    $("#material_id").change(function(){
		    makeCode();
		});
	    $("#note").keyup(function(){
		    makeCode();
		});
		function makeCode(){
			$vendor_id = $("#vendor_id").val();
			$type_id = $("#type_id").val();
			$material_id = $("#material_id").val();
			$note = $("#note").val();
			$("#code").val($vendor_id+"-"+$type_id+"-"+$material_id+"-"+$note);
		}
	</script>
@endsection