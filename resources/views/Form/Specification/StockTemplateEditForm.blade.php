<div>
	<h5>Поля для поиска товара</h5>
	<div class="row no-gutters">
		<div class="col d-inline">
			<label>Onliner Id
				<input class="form-control form-control-sm" type="text" name="OnlinerId" value="{{$template->getOnlinerId()}}">
			</label>
		</div>
		<div class="col d-inline">
			<label>Наименования (через запятую)
				<input class="form-control form-control-sm" type="text" name="Names" value="{{$template->getNames()}}">
			</label>
		</div>
		<div class="col d-inline">
			<label>Артикул на складе
				<input class="form-control form-control-sm" type="text" name="StockUniqueVendorCode"
				       value="{{$template->getStockUniqueVendorCode()}}">
			</label>
		</div>
	</div>
	<hr>
	<div class="row no-gutters">
		<div class="col-sm-6 padding-horizontal">
			<h5>Безналичный расчёт</h5>
			<div class="row col-sm-12">
				@foreach($price as $key => $items)
					<span
							class="d-inline m-l-5">@include("Form.BaseForm.Inputs.{$items['#type']}", ['name' => $key, 'item' => $items])</span>
				@endforeach
			</div>
			<div class="row col-sm-12">
				@foreach($price_coeff as $key => $items)
					<span
							class="d-inline m-l-5">@include("Form.BaseForm.Inputs.{$items['#type']}", ['name' => $key, 'item' => $items])</span>
				@endforeach
			</div>
		</div>
		<div class="col-sm-6 no-gutters padding-horizontal">
			<h5>Наличный расчёт <i class="fa fa-money-bill-wave mr-color-green"></i></h5>
			<div class="row col-sm-12">
				@foreach($cash as $key_cash => $items_cash)
					<div
							class="d-inline m-l-5">@include("Form.BaseForm.Inputs.{$items_cash['#type']}", ['name' => $key_cash, 'item' => $items_cash])</div>
				@endforeach
			</div>

			<div class="row col-sm-12">
				@foreach($price_cash_coeff as $key_cash => $items_cash)
					<div
							class="d-inline m-l-5">@include("Form.BaseForm.Inputs.{$items_cash['#type']}", ['name' => $key_cash, 'item' => $items_cash])</div>
				@endforeach
			</div>
			<hr>
			<div class="row col-sm-12">
				@foreach($cashRec as $key_cash => $items_cash)
					<div
							class="d-inline m-l-5">@include("Form.BaseForm.Inputs.{$items_cash['#type']}", ['name' => $key_cash, 'item' => $items_cash])</div>
				@endforeach
			</div>
		</div>
	</div>
	<hr>

	<div class="row no-gutters">
		<div class="col-sm-12 padding-horizontal">
			<h5>Наличие товара</h5>
			@foreach($existence as $key_cash => $items_cash)
				<div class="float-left m-l-5">@include("Form.BaseForm.Inputs.{$items_cash['#type']}", ['name' => $key_cash,
      'item' => $items_cash])</div>
			@endforeach
		</div>
	</div>

	<hr>
	<h5>Прочее</h5>
	<div class="row no-gutters">
		<div class="col-sm-12 no-gutters padding-horizontal">
			<div class="d-inline col-sm-6 no-gutters">
				<label><b>Гарантия</b>
					<input class="form-control form-control-sm" type="text" name="Guarantee"
					       value="{{$template->getGuarantee()}}">
				</label>
			</div>
			<div class="d-inline col-sm-6 no-gutters">
				<label for="def">Сделать по умолчанию для склада {{$stock->getName()}}</label>
				<input id="def" type="checkbox" name="DefaultTemplate" value="1" @if($def) checked="checked" @endif>
			</div>
		</div>
	</div>
</div>