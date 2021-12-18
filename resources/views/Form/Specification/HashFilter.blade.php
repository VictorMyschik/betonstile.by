<div class="row no-gutters">
	<div class="d-inline col-md-6">
		@include('Form.BaseForm.Inputs.select', ['name' => 'KindID', 'item' => $KindID])
	</div>
	<div class="d-inline col-md-6">
		@include('Form.BaseForm.Inputs.select', ['name' => 'StockID', 'item' => $StockID])
	</div>
</div>
<div class="row no-gutters">
	<div class="d-inline col-md-2">
		@include('Form.BaseForm.Inputs.textfield', ['name' => 'Name', 'item' => $Name])
	</div>
	<div class="d-inline col-md-2">
		@include('Form.BaseForm.Inputs.textfield', ['name' => 'GoodID', 'item' => $GoodID])
	</div>
	<div class="d-inline col-md-2">
		@include('Form.BaseForm.Inputs.textfield', ['name' => 'RowHash', 'item' => $RowHash])
	</div>
</div>