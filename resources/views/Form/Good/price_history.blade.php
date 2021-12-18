<h6>История обновляется при каждом сохранении и обновлении любой цены</h6>
<table class="table table-sm">
  <thead>
  <tr>
    <td>№</td>
    <td>Примечание</td>
    <td>Дата</td>
    <td>#</td>
  </tr>
  </thead>
  <tbody>
  @foreach($history as $key=>$price)
    <tr>
      <td>{{$key}}</td>
      <td>{{$price['description']}}</td>
      <td>{!!$price['date']!!}</td>
      <td>
        <mr-p style="text-align: left;" title="Цены в товаре"
              need_reload=false
              route_url="{{route('admin_good_price_story_details', ['good_id' => $good->id(), 'story_id' => $key])}}"
              btn_name=""
              class_arr="btn mr-btn-edit-success btn-sm fa fa-money-bill-wave-alt"
              form_size="w-75">
        </mr-p>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>