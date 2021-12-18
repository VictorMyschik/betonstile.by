<mr-good-search-form></mr-good-search-form>
<div>
  <h5>Активный</h5>
  @if($specification_row->getGood())
    <label>
      <input type="radio" name="select" checked value="{{$specification_row->getGood()->id()}}"
             class="m-r-10">{{$specification_row->getGood()->getFullName()}}
    </label>
    {!! MrLink::AddPrimaryBtn('admin_good_details_page', ['good_id' => $specification_row->getGood()->id()], '', 'fa-eye', 'Подробно',['target'=>'_blank']) !!}
  @endif
</div>


<table class="table table-hover table-sm mr-middle">
  <thead class="font-weight-bold mr-bg-light">
  <tr>
    <td>Выбрать</td>
    <td>Каталог</td>
    <td>Onliner</td>
    <td>Тип</td>
    <td>Наименование</td>
    <td>Производитель</td>
    <td>#</td>
  </tr>
  </thead>
  @if($specification_row->getGood())
  <tr class="mr-bg-light-4 mr_cert_status_1">
    <td>
      <label style="width: 100%;" title="Поменять товар">
        <input type="radio" name="select" value="{{$specification_row->getGood()->id()}}">
      </label>
    </td>
    <td>{!! \App\Helpers\System\MrLink::open('admin_good_details_page',['good_id'=>$specification_row->getGood()->id()], $specification_row->getGood()->id(),'', 'открыть в новом окне', ['target'=>'_blank']) !!}</td>
    <td><a href="{{$specification_row->getGood()->GetSourceOnliner()->getLink()}}" target="_blank">{{ $specification_row->getGood()->GetOnlinerIntId() }}</a></td>
    <td>{{$specification_row->getGood()->getKind()->getName()}}</td>
    <td>{{$specification_row->getGood()->getFullName()}}</td>
    <td>{{$specification_row->getGood()->getManufacturer()?$specification_row->getGood()->getManufacturer()->getName():null}}</td>
    <td>#</td>
  </tr>
  @endif
  @foreach($specification_row->GetGoodFromIds() as $good)
    @if($specification_row->getGood() && $good->id() == $specification_row->getGood()->id())
      @continue
    @endif
    <tr>
      <td>
        <label style="width: 100%;" title="Поменять товар">
          <input type="radio" name="select" value="{{$good->id()}}">
        </label>
      </td>
      <td>{!! \App\Helpers\System\MrLink::open('admin_good_details_page',['good_id'=>$good->id()], $good->id(),'', 'открыть в новом окне', ['target'=>'_blank']) !!}</td>
      <td><a href="{{$good->GetSourceOnliner()->getLink()}}" target="_blank">{{ $good->GetOnlinerIntId() }}</a></td>
      <td>{{$good->getKind()->getName()}}</td>
      <td>{{$good->getFullName()}}</td>
      <td>{{$good->getManufacturer()?$good->getManufacturer()->getName():null}}</td>
      <td>#</td>
    </tr>
  @endforeach
</table>

<hr>
<h5>Строка спецификации</h5>
<table class="table table-sm mr-middle">
  <thead class="font-weight-bold mr-bg-light">
  <tr>
    @foreach($specification_row->GetHasValuesHeader() as $header)
      <td>{{$header}}</td>
    @endforeach
  </tr>
  </thead>
  <tbody class="mr-small">
  <tr>
    @foreach($specification_row->GetHasValuesBody() as $key=>$row)
      <td>
        {{$row}}
      </td>
    @endforeach
  </tr>
  </tbody>
</table>

<div class="row">
  <label class="col-sm-12"><b>Примечание</b>
    <textarea class="form-control" name="Description" rows="3">{{$specification_row->getDescription()}}</textarea>
  </label>
</div>