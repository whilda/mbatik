@extends('layouts.dashboard')

@section('title')
	Type
@endsection

@section('type')
	class="active"
@endsection

@section('content')
        	<h1 class="page-header">Type</h1>
        	<form method="post" action="./type">
        	  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 form-control-label">Type</label>
			    <div class="col-sm-10">			      
			      <input type="text" class="form-control" id="name" name="name" placeholder="Type">
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
        @if ($types->count())
            @foreach ($types as $type)
                <tr>
			          <td>{{ $type->id }}</td>
			          <td>{{ $type->name }}</td>
                </tr>
            @endforeach
        @else
    		<tr>
				<td colspan="2">There are no type</td>
            </tr>
		@endif
        </tbody>
    </table>
@endsection

@section('script')

@endsection