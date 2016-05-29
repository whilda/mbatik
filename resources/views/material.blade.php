@extends('layouts.dashboard')

@section('title')
	Material
@endsection

@section('material')
	class="active"
@endsection

@section('content')
        	<h1 class="page-header">Material</h1>
        	<form method="post" action="./material">
        	  <div class="form-group row">
			    <label for="inputPassword3" class="col-sm-2 form-control-label">Material</label>
			    <div class="col-sm-10">			      
			      <input type="text" class="form-control" id="name" name="name" placeholder="Material">
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
        @if ($materials->count())
            @foreach ($materials as $material)
                <tr>
			          <td>{{ $material->id }}</td>
			          <td>{{ $material->name }}</td>
                </tr>
            @endforeach
        @else
    		<tr>
				<td colspan="2">There are no material</td>
            </tr>
		@endif
        </tbody>
    </table>
@endsection

@section('script')

@endsection