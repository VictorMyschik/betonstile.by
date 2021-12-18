<div class="row no-gutters m-b-15">
  @include('Form.BaseForm.Inputs.textfield', ['name' => 'name', 'item' => $form['name']])
</div>
<hr>
<div class="row no-gutters m-b-10">
  <div class="col-md-12 mr-form-size-1 m-b-10">Наценка для склада.</div>
  <div class="d-inline-block col-md-6 no-gutters">

    @include('Form.BaseForm.Inputs.'.$form['markup']['#type'], ['name' => 'markup', 'item' => $form['markup']])

    <div class="mr-description"><i class="fa fa-info-circle mr-color-green"></i> Наценка Виртуального офиса: безнал {{$stock->getMarkup()?:'-'}} ,
        нал {{$stock->getMarkupCash()?:'-'}}</div>

    <div class="mr-description"><i class="fa fa-info-circle mr-color-green"></i> Оставьте пустым, что бы применить настройку из ВО. </div>
  </div>
  <div class="d-inline-block col-md-6 no-gutters pl-1">
    @include('Form.BaseForm.Inputs.'.$form['markupCash']['#type'], ['name' => 'markupCash', 'item' => $form['markupCash']])
  </div>
</div>
<hr>
@include('Form.BaseForm.Inputs.textarea', ['name' => 'description', 'item' => $form['description']])

<div class="row no-gutters m-t-15">
  @include('Form.BaseForm.Inputs.checkbox', ['name' => 'isActive', 'item' => $form['isActive']])
</div>