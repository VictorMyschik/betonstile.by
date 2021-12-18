@extends('Admin.app')
@section('content')
  <div class="mr-main-div">
    @include('Admin.nav_bar')
    <div class="container m-t-10">
      <h4>Прайс для заборов</h4>
      {!! MrBtn::loadForm('admin_price_form_edit', ['kind'=>1, 'price_id' => '0'], 'Новый', ['btn', 'btn-success', 'btn-sm'],'w-50') !!}
      {!! $table !!}
    </div>
  </div>
@endsection