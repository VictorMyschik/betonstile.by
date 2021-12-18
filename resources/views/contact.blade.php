@extends('layouts.app')

@section('content')

  <div id="content">
    <div class="container background-white">
      <div class="row margin-vert-30">
        <!-- Main Column -->
        <div class="col-md-9">
          <!-- Main Content -->
          <div class="headline">
            <h2>Обратная связь и наши контакты</h2>
          </div>
          <p>Если у Вас остались вопросы, хотите сделать заявку заполните форму ниже и в кратчайшие сроки мы с
            Вами свяжемся.</p>
          @if($status)
            <h2 class="color-green">{{ $status }}</h2>
        @endif
        <!-- Contact Form -->
          <form action="{{route('feedback')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label>Ваше имя</label>
            <div class="row margin-bottom-20">
              <div class="col-md-6 col-md-offset-0">
                <input class="form-control" required name="name" type="text">
              </div>
            </div>
            <label>Email или телефон
              <span class="color-red">*</span>
            </label>
            <div class="row margin-bottom-20">
              <div class="col-md-6 col-md-offset-0">
                <input class="form-control" required name="email" type="text">
              </div>
            </div>
            <label>Сообщение</label>
            <div class="row margin-bottom-20">
              <div class="col-md-8 col-md-offset-0">
                            <textarea rows="8" name="text" required class="form-control"
                                      title="Текст сообщения"></textarea>
              </div>
            </div>
            <p>
              <button type="submit" class="btn btn-primary">Отправить</button>
            </p>
          </form>
        </div>
        <div class="col-md-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Наши контакты</h3>
            </div>
            <div class="panel-body">
              <ul class="list-unstyled">
                <li>
                  <i class="fa-phone color-primary"></i>+375 (29) 871-56-53
                </li>
                <li>
                  <i class="fa-envelope color-primary"></i>zaborlida2010@yandex.ru
                </li>
                <li>
                  <i class="fa-home color-primary"></i>http://www.betonstile.by
                </li>
              </ul>
              <ul class="list-unstyled">
                <li><strong class="color-primary">Работаем без выходных</strong></li>
              </ul>
            </div>
          </div>
          <!-- End recent Posts -->
          <!-- About -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">О нас</h3>
            </div>
            <div class="panel-body">
              Мы изготавливаем железобетонные заборы и малые архитектурные формы в г.Лида и Лидском регионе.
            </div>
          </div>
          <!-- End About -->
        </div>
        <!-- End Side Column -->
      </div>
    </div>
  </div>

@endsection