@extends('layouts.dashboard')

@section('title')
	Vendor
@endsection

@section('vendor')
	class="active"
@endsection

@section('content')
        	<h1 class="page-header">Vendor</h1>
        	<form method="post" action="./vendor">
        	  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 form-control-label">Vendor</label>
			    <div class="col-sm-10">			      
			      <input type="text" class="form-control" id="name" name="name" placeholder="Vendor">
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
		        <th>ID</th>
		        <th>Name</th>
            </tr>
        </thead>
        <tbody>
        @if ($vendors->count())
            @foreach ($vendors as $vendor)
                <tr>
			          <td>{{ $vendor->id }}</td>
			          <td>{{ $vendor->name }}</td>
                </tr>
            @endforeach
        @else
    		<tr>
				<td colspan="2">There are no vendor</td>
            </tr>
		@endif
        </tbody>
    </table>
@endsection

@section('script')

@endsection