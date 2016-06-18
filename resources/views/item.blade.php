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
		    <div style="margin-left:20px;">
			    <table id="jqGrid"></table>
			    <div id="jqGridPager"></div>
			</div>
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
	<script>
	var show = 1;
	$("#h-s").click(function(){
	    if(show == 1){
	    	
	    }
	});
	</script>
	<script>
	$.jgrid.defaults.responsive = true;
	$.jgrid.defaults.styleUI = 'Bootstrap';
    $(document).ready(function () {
		prepareSearchDataGrid();
        setHeaderGrid();
        setSearchButton();
        setWidthGrid();
        fetchGridData();
    });
	var searchValueVendor;
	var searchValueType;
	var searchValueMaterial;
    function prepareSearchDataGrid(){
    	$.ajax({
            url: "./api/vendor",
            success: function (jsonString) {
                searchValueVendor = ':[all]';
            	var result = JSON.parse(jsonString);
                for (var i = 0; i < result.length; i++) {
                    var item = result[i];
                    searchValueVendor += (';' + item.name + ':' + item.name);                         
                }
            },
            async: false
        });

    	$.ajax({
            url: "./api/type",
            success: function (jsonString) {
            	searchValueType = ':[all]';
            	var result = JSON.parse(jsonString);
                for (var i = 0; i < result.length; i++) {
                    var item = result[i];
                    searchValueType += (';' + item.name + ':' + item.name);                         
                }
            },
            async: false
        });

    	$.ajax({
            url: "./api/material",
            success: function (jsonString) {
            	searchValueMaterial = ':[all]';
            	var result = JSON.parse(jsonString);
                for (var i = 0; i < result.length; i++) {
                    var item = result[i];
                    searchValueMaterial += (';' + item.name + ':' + item.name);                         
                }
            },
            async: false
        });
    }

    function setWidthGrid(){
    	var newWidth = $("#jqGrid").closest(".ui-jqgrid").parent().width();
    	$("#jqGrid").jqGrid("setGridWidth", newWidth, true);
    }
    
	function setHeaderGrid() {
		console.log(searchValueVendor);
		// Setting header of the table
        $("#jqGrid").jqGrid({
            colModel: [
                {
					label: 'Code',
                    name: 'Code',
                    width: 150,
                },
                {
					label: 'Vendor',
                    name: 'Vendor',
                    width: 150,
                    stype: "select",
                    searchoptions:{value:searchValueVendor},
                },
                {
					label: 'Type',
                    name: 'Type',
                    width: 150,
                    stype: "select",
                    searchoptions:{value:searchValueType},
                },
                {
					label: 'Material',
                    name: 'Material',
                    width: 150,
                    stype: "select",
                    searchoptions:{value:searchValueMaterial},
                },
                {
					label: 'Note',
                    name: 'Note',
                    width: 150
                },
                {
					label: 'Purchase',
                    name: 'Purchase',
                    width: 150,
                    sorttype:'integer',
					formatter: 'number',
					align: 'right',
                },
                {
					label: 'Sell',
                    name: 'Sell',
                    width: 150,
                    sorttype:'integer',
					formatter: 'number',
					align: 'right',
                },
                {
					label: 'Quantity',
                    name: 'Quantity',
                    width: 150,
                    sorttype:'integer',
					align: 'right',
                }
            ],

            viewrecords: true, // show the current page, data rang and total records on the toolbar
            rowNum: 30,
            height: 500,
			datatype: 'local',
            pager: "#jqGridPager"
        });
	}

	function setSearchButton(){
     	// activate the build in search with multiple option
     	$('#jqGrid').jqGrid('filterToolbar');
        $('#jqGrid').navGrid("#jqGridPager", {                
            search: false, // show search button on the toolbar
            add: false,
            edit: false,
            del: false,
            refresh: true
        },
        {}, // edit options
        {}, // add options
        {}, // delete options
        { multipleSearch: true } // search options - define multiple search
        );
    }
    
    function fetchGridData() {
        var gridArrayData = [];
		// show loading message
		$("#jqGrid")[0].grid.beginReq();
        $.ajax({
            url: "./api/item",
            success: function (jsonString) {
            	var result = JSON.parse(jsonString);
                for (var i = 0; i < result.length; i++) {
                    var item = result[i];
                    gridArrayData.push({
                        Code: item.code,
                        Vendor: item.vendor,
                        Type: item.type,
                        Material: item.material,
                        Note: item.note,
                        Purchase: item.purchase,
                        Sell: item.sell,
                        Quantity: item.quantity,
                    });                            
                }
				// set the new data
				$("#jqGrid").jqGrid('setGridParam', { data: gridArrayData});
				// hide the show message
				$("#jqGrid")[0].grid.endReq();
				// refresh the grid
				$("#jqGrid").trigger('reloadGrid');
            }
        });
    }
	</script>
@endsection