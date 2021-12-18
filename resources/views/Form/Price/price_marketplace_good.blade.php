<div class="row">
  <div class="col">
    @include("Form.BaseForm.Inputs.{$priceForm['#type']}", ['name' => 'price', 'item' => $priceForm])
  </div>

  <div class="col">
    @include("Form.BaseForm.Inputs.{$stockForm['#type']}", ['name' => 'stock', 'item' => $stockForm])
  </div>
</div>
<hr>
<div class="row no-gutters">
  <div class="col-sm-4 d-inline">
    @include("Form.BaseForm.Inputs.{$vendorCode['#type']}", ['name' => 'vendorCode', 'item' => $vendorCode])
  </div>
  <div class="col-sm-4 d-inline">
    @include("Form.BaseForm.Inputs.{$existence['#type']}", ['name' => 'existence', 'item' => $existence])
  </div>
  <div class="col-sm-4 d-inline">

    <label>
      @include("Form.BaseForm.Inputs.{$guarantee['#type']}", ['name' => 'guarantee', 'item' => $guarantee])
    </label>
    @include("Form.BaseForm.Inputs.{$guaranteeMeasure['#type']}", ['name' => 'guaranteeMeasure', 'item' => $guaranteeMeasure])
  </div>
</div>