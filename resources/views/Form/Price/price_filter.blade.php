<div class="row no-gutters">
  <div class="col">
    @include('Form.BaseForm.Inputs.textfield', ['name' => 'Name', 'item' => $id])
  </div>
  <div class="col">
    @include('Form.BaseForm.Inputs.textfield', ['name' => 'Name', 'item' => $Name])
  </div>
  <div class="col">
    @include('Form.BaseForm.Inputs.select', ['name' => 'KindID', 'item' => $KindID])
  </div>
  <div class="col">
    @include('Form.BaseForm.Inputs.select', ['name' => 'KindID', 'item' => $ManufacturerID])
  </div>
</div>