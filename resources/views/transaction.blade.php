@extends('layouts.dashboard')

@section('title')
	Transaction
@endsection

@section('transaction')
	class="active"
@endsection

@section('content')
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
	        <div align="center" class="form-group col-md-2">
	          <label style="padding-top: 5px;font-size: large;">Unit</label>
	        </div>
	        <div align="center" class="form-group col-md-3">
	          <label style="padding-top: 5px;font-size: large;">Item</label>
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
        
        <!-- Number -->
        <div class="form-group col-md-2">
          <input id="ID1_qty" name="ID1_qty" type="number" class="input_qty form-control" required="" onkeyup="calc_total()">
        </div>
        
        <!-- Select Basic -->
        <div class="form-group col-md-3">
            <select class="select_item form-control" name="ID1_item" id="ID1_item">
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

        <!-- Text input-->
        <div class="form-group col-md-2">
          <input id="ID1_note" name="ID1_note" type="text" class="input_note form-control">
        </div>
        
        <!-- Number -->
        <div class="form-group col-md-2">
          <input id="ID1_unit_price" name="ID1_unit_price" type="number" class="input_unit_price form-control" onkeyup="calc_total()">
        </div>

		<!-- Number -->
        <div class="form-group col-md-2">
          <input id="ID1_sum" name="ID1_sum" type="number" class="input_sum form-control" readonly="readonly">
        </div>
        </div><!-- end #entry1 -->
        <div class="row" align="right">
       		<label class="control-label col-md-10" style="font-size: large;">Total :</label>
       		<label id="trans_total" name="trans_total" class="control-label col-md-2" style="font-size: large;margin-left: -15px;">0</label>
        </div>
        
        <!-- Button -->
        <p>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button class="btn btn-primary">Submit</button>
        <button type="button" id="btnAdd" name="btnAdd" class="btn btn-info">+</button>
        <button type="button" id="btnDel" name="btnDel" class="btn btn-danger">-</button>
        </p>

        </fieldset>
        </form>
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
		$('#trans_total').text(total);
	}
	</script>
@endsection