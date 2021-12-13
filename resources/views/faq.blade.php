@extends('layouts.app')

@section('content')
  <div id="content">
    <div class="container background-white">
      <div class="row margin-vert-30">
        <div class="col-md-12">
          <h2>F.A.Q (часто задаваемые вопросы)</h2>
          <p>Здесь собраны наиболее популярные вопросы по заказам ЖБИ изделий.</p>
          <hr class="margin-vert-40">
          <div class="row">
            <div class="col-md-8">
              <div class="tab-content">
                <div class="tab-pane active in fade" id="faq">
                  <div class="panel-group" id="accordion">
                    <!-- FAQ Item -->
                    @foreach($list as $row)
                      <div class="panel panel-default panel-faq">
                        <div class="panel-heading">
                          <a data-toggle="collapse" data-parent="#accordion" href="#faq-sub_{{$row->id()}}">
                            <h4 class="panel-title">
                              {{  $row->getQuery() }}
                              <span class="pull-right">
                                <i class="glyphicon glyphicon-plus"></i>
                              </span>
                            </h4>
                          </a>
                        </div>
                        <div id="faq-sub_{{ $row->id() }}" class="panel-collapse collapse">
                          <div class="panel-body">
                            {{$row->getResponse()}}
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <h3 class="margin-bottom-10">Не нашли ответ на свой вопрос?</h3>
              <p>Заполните форму обратной связи мы в кратчайшие сроки Вам ответим</p>
              <a href="{{route('contact_page')}}" type="button" class="btn btn-primary btn-sm">Задать вопрос</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection