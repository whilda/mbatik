@extends('layouts.dashboard')

@section('title')
	Transaction
@endsection

@section('transaction')
	class="active"
@endsection

@section('content')
	<h1 class="page-header">Transaction</h1>
			<form>
        	  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 form-control-label">Date</label>
			    <div class="col-sm-10">			      
			      <input type="date" class="form-control" id="inputEmail3" placeholder="Vendor's Name">
			    </div>
			  </div>
			  
			  <h5 class="sub-header">Item 1</h5>
			  <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-2 form-control-label">Code</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="inputEmail3" placeholder="Item Code">
			    </div>
			  </div>
			   <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 form-control-label">Quantity</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" id="inputPassword3" placeholder="Quantity">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 form-control-label">Price</label>
			    <div class="col-sm-10">
			      <div class="input-group">
					  <span class="input-group-addon">Rp</span>
					  <input type="text" class="form-control" placeholder="Amount">
					</div>
			    </div>
			  </div>

			  <div class="form-group row">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-secondary">Save</button>
			    </div>
			  </div>
			</form>
@endsection