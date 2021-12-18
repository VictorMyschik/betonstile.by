<div class="row no-gutters">
	<div class="col-sm-6 padding-horizontal d-inline">
		<h5>Безналичный расчёт</h5>
		@foreach($price_form as $key => $items)
			<div class="float-left m-l-5">@include("Form.BaseForm.Inputs.{$items['#type']}", ['name' => $key, 'item' =>
      $items])</div>
		@endforeach
	</div>
	<div class="col-sm-6 padding-horizontal d-inline">
		<h5>Наличный расчёт <i class="fa fa-money-bill-wave mr-color-green"></i></h5>
		@foreach($price_form_cash as $key_cash => $items_cash)
			<div class="float-left m-l-5">@include("Form.BaseForm.Inputs.{$items_cash['#type']}", ['name' => $key_cash,
      'item' => $items_cash])</div>
		@endforeach
	</div>
</div>


<h5 class="col-sm-12 btn-panel mr-bg-light-3">Прочее</h5>
<div class="row no-gutters">
	<div class="col-sm-4 d-inline">
		<label><b>Артикул</b>
			<input class="form-control form-control-sm" type="text" name="Code" value="{{$price ? $price->getCode() : null}}">
		</label>
	</div>
	<div class="col-sm-4 d-inline">
		@foreach($existence as $key_cash => $items_cash)
			<div class="float-left m-l-5">@include("Form.BaseForm.Inputs.{$items_cash['#type']}", ['name' => $key_cash,
      'item' => $items_cash])</div>
		@endforeach
	</div>
	<div class="col-sm-4 d-inline">
		<label><b>срок</b>
			<input class="form-control form-control-sm" type="text" name="Guarantee" style="max-width: 70px;"
			       value="{{$price ? $price->getGuarantee() : null}}">
		</label>
		@foreach($guarantee_measure as $key_guarantee_measure => $items_guarantee_measure)
			<div class="float-left m-l-5">@include("Form.BaseForm.Inputs.{$items_guarantee_measure['#type']}", ['name' => $key_guarantee_measure,
      'item' => $items_guarantee_measure])</div>
		@endforeach
	</div>
</div>
