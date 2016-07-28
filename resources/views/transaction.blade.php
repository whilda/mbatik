@extends('layouts.dashboard')

@section('title')
	Transaction
@endsection

@section('transaction')
	class="active"
@endsection

@section('content')
		@if (isset($success))
			<div class="alert alert-success" style="padding-left: 2em;">
	        Data has been saved successfully
	    </div>
		@endif
      <form action="#" method="post" id="sign-up_area" role="form" onsubmit="return confirm('Are you sure you want to submit?');">
        <legend>Transaction</legend>
        <!-- Text input-->
        <div class="form-group">
          <label class="label_fn control-label" >Customer :</label>
          <input id="cust_name" name="cust_name" type="text" placeholder="" class="input_fn form-control" required="">
        </div>
        <!-- Date input-->
        <div class="form-group">
          <label class="label_fn control-label" >Date :</label>
          <input id="trans_date" name="trans_date" type="date" value="<?php echo date("Y-m-d") ?>" placeholder="" class="input_fn form-control" required="">
        </div>
        <!-- Header Table -->
        <div class="row">
	        <div align="center" class="form-group col-md-1">
	          <label style="padding-top: 5px;font-size: large;">No</label>
	        </div>
	        <div align="center" class="form-group col-md-3">
	          <label style="padding-top: 5px;font-size: large;">Item</label>
	        </div>
	        <div align="center" class="form-group col-md-2">
	          <label style="padding-top: 5px;font-size: large;">Unit</label>
	        </div>
	       	<div align="center" class="form-group col-md-2">
	          <label style="padding-top: 5px;font-size: large;">Note</label>
	        </div>
	        <div align="center" class="form-group col-md-2">
	          <label style="padding-top: 5px;font-size: large;">Unit Price</label>
	        </div>
	        <div align="center" class="form-group col-md-2">
	          <label style="padding-top: 5px;font-size: large;">Sum</label>
	        </div>
        </div> <!-- End of header table -->
        
        <!-- Entry -->
        <div id="entry1" class="clonedInput">
          <fieldset style="border:none;">
          
      	<!-- Text input-->
      	<div class="form-group col-md-1">
          <label id="reference" name="reference" class="heading-reference" style="padding-top: 5px;font-size: large;">1</label>
        </div>
        
        <!-- Select Basic -->
        <div class="form-group col-md-3">
            <select class="select_item form-control" name="ID1_item" id="ID1_item" onchange="set_price(1)">
              <option value="" selected="selected" disabled="disabled">Select item code</option>
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

		<!-- Number -->
        <div class="form-group col-md-2">
          <input id="ID1_qty" name="ID1_qty" type="number" class="input_qty form-control" required="" onchange="calc_total()" onkeyup="calc_total()">
        </div>
        
        <!-- Text input-->
        <div class="form-group col-md-2">
          <input id="ID1_note" name="ID1_note" type="text" class="input_note form-control">
        </div>
        
        <!-- Number -->
        <div class="form-group col-md-2">
          <input id="ID1_unit_price" name="ID1_unit_price" type="number" class="input_unit_price form-control" required="" onchange="calc_total()" onkeyup="calc_total()">
        </div>

		<!-- Number -->
        <div class="form-group col-md-2">
          <input id="ID1_sum" name="ID1_sum" type="number" class="input_sum form-control" readonly="readonly">
        </div>
        </div><!-- end #entry1 -->
        <div class="row" align="right">
       		<label class="control-label col-md-10" style="font-size: large;">Total : Rp </label>
       		<label id="trans_total" name="trans_total" class="control-label col-md-2" style="font-size: large;margin-left: -15px;">0</label>
        </div>
        
        <!-- Hidden Input -->
        <input type="hidden" id="num" name="num" val="1">
        <input type="hidden" id="total" name="total">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        <!-- Button -->
        <p>
        <button class="btn btn-primary">Submit</button>
        <button type="button" id="btnAdd" name="btnAdd" class="btn btn-info">+</button>
        <button type="button" id="btnDel" name="btnDel" class="btn btn-danger">-</button>
        </p>

        </fieldset>
        </form>
        <table id="dg" style="width:100%;height:750px"
			url="../php/datagrid22_getdata.php" 
			title="Transactions"
			singleSelect="true" fitColumns="true">
		<thead>
			<tr>
				<th field="id" width="80">Transaction</th>
				<th field="customer" width="100">Customer</th>
				<th field="trans_date" align="right" width="80">Date</th>
				<th field="profit" align="right" width="80">Profit</th>
				<th field="total" width="220">Total</th>
			</tr>
		</thead>
	</table>
@endsection

@section('script')
	<script type="text/javascript">
	function calc_total(){
		var num     = $('.clonedInput').length;
		var total = 0;
		for (var i = 1; i <= num; i++) {
			var qty = $('#ID'+i+'_qty').val();
			var unit = $('#ID'+i+'_unit_price').val();
			var sum = qty*unit;
			total += sum;
			$('#ID'+i+'_sum').val(sum);
		}
		var formatted = parseFloat((""+total).replace(/,/g, ""))
					        //.toFixed(2)
					        .toString()
					        .replace(/\B(?=(\d{3})+(?!\d))/g, ".");
		$('#trans_total').text(formatted);
		$('#total').val(total);
		$('#num').val(num);
	}
	function set_price(i){
		$id = $("#ID"+i+"_item").val();
		$.getJSON( "./item/"+$id, function( data ) {
			$("#ID"+i+"_unit_price").val(data.sell_price);
			calc_total()
		});
	}
	$(function(){
		$('#dg').datagrid({
			view: detailview,
			detailFormatter:function(index,row){
				return '<div style="padding:2px"><table id="ddv-' + index + '"></table></div>';
			},
			onExpandRow: function(index,row){
				$('#ddv-'+index).datagrid({
					url:'../php/datagrid22_getdetail.php?transaction_id='+row.id,
					fitColumns:true,
					singleSelect:true,
					rownumbers:true,
					loadMsg:'',
					height:'auto',
					columns:[[
						{field:'item_id',title:'Item',width:'10%'},
						{field:'qty',title:'Quantity',align:'right',width:'20%'},
						{field:'note',title:'Note',align:'right',width:'20%'},
						{field:'unit_price',title:'Unit Price',align:'right',width:'10%'},
						{field:'unit_profit',title:'Unit Profit',align:'right',width:'10%'},
						{field:'sum_price',title:'Sum Price',align:'right',width:'15%'},
						{field:'sum_profit',title:'Sum Profit',align:'right',width:'15%',}
					]],
					onResize:function(){
						$('#dg').datagrid('fixDetailRowHeight',index);
					},
					onLoadSuccess:function(){
						setTimeout(function(){
							$('#dg').datagrid('fixDetailRowHeight',index);
						},0);
					}
				});
				$('#dg').datagrid('fixDetailRowHeight',index);
			}
		});
	});
	</script>
@endsection