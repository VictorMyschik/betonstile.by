<div class="row">
  <div class="col">
    @include('Form.BaseForm.Inputs.textfield', ['name' => 'Period', 'item' => $formData['Period']])
  </div>
  <div class="col">
    @include('Form.BaseForm.Inputs.select', ['name' => 'StockTemplateID', 'item' => $formData['StockTemplateID']])
  </div>
  <div class="col">
    @include('Form.BaseForm.Inputs.textfield', ['name' => 'PageNumber', 'item' => $formData['PageNumber']])
  </div>
</div>

<div class="m-t-10 border-top"><h6 class="mr-bold mr-table-subhead">Настройки источника файла</h6></div>
<div class="row col-md-12 border-bottom">
  <div class="col">
    <div class="row">
      <label>{{ Form::radio('SourceKind', '1', $formData['SourceKind'] == 1) }} URL</label>
    </div>
    <div class="row">
      @include('Form.BaseForm.Inputs.textfield', ['name' => 'Url', 'item' => $formData['Url']])
    </div>
    <div class="m-t-5"><b>Учётные данные</b></div>
    <div class="row">
      @include('Form.BaseForm.Inputs.textfield', ['name' => 'User', 'item' => $formData['User']])
    </div>
    <div class="row">
      @include('Form.BaseForm.Inputs.textfield', ['name' => 'Password', 'item' => $formData['Password']])
    </div>
  </div>

  <div class="col m-l-25">
    <div class="row">
      <label>{{ Form::radio('SourceKind', '2', $formData['SourceKind'] == 2) }} Email</label>
    </div>
    <div class="row">
      @include('Form.BaseForm.Inputs.select', ['name' => 'OfficeEmailID', 'item' => $formData['OfficeEmailID']])
    </div>
    <div class="row">
      @include('Form.BaseForm.Inputs.textfield', ['name' => 'MailAddressFrom', 'item' => $formData['MailAddressFrom']])
    </div>
    <div class="row">
      @include('Form.BaseForm.Inputs.textfield', ['name' => 'MailSubject', 'item' => $formData['MailSubject']])
    </div>
    <div class="row">
      @include('Form.BaseForm.Inputs.textfield', ['name' => 'MailFileName', 'item' => $formData['MailFileName']])
    </div>
  </div>
</div>

<div class="m-t-10 border-top"><h6 class="mr-bold mr-table-subhead">Дополнительне настройки</h6></div>
<div class="row m-t-15">
  @foreach($need_settings as $key => $value)
    <div class="col">
      @include('Form.BaseForm.Inputs.'.$value['#type'], ['name' => $key, 'item' => $value])
    </div>
  @endforeach
</div>
<div class="m-t-15">
  @include('Form.BaseForm.Inputs.textarea', ['name' => 'Description', 'item' => $formData['Description']])
</div>
<div class="m-t-15">
  @include('Form.BaseForm.Inputs.checkbox', ['name' => 'IsActive', 'item' => $formData['IsActive']])
</div>