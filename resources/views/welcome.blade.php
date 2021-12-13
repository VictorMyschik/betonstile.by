@extends('layouts.app')

@section('content')
  <div id="slideshow" class="bottom-border-shadow">
    <div class="container no-padding background-white bottom-border">
      <div class="row">
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example" data-slide-to="1"></li>
            <li data-target="#carousel-example" data-slide-to="2"></li>
          </ol>
          <div class="clearfix"></div>
          <div class="carousel-inner">
            <div class="item active"
                 style="height: 422px; background-image: url(img/1.jpg); overflow: hidden"></div>
            <div class="item"
                 style="height: 422px; background-image: url(img/2.jpg); overflow: hidden"></div>
            <div class="item"
                 style="height: 422px; background-image: url(img/3.jpg); overflow: hidden"></div>
          </div>
          <a class="left carousel-control" href="#carousel-example" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="container background-white"><br>
    <h3><b>Мы изготавливаем только качественные изделия из армированного бетона.</b></h3>
    <div class="col-lg-6 fa-border margin-top-10" style="overflow: hidden;">
      <a href="{{route('zabor_page')}}"><h3 class="margin-10"><b>Заборы</b></h3>
        <div style="width: 250px; overflow: hidden; float: right; margin: 5px; border-radius: 5px">
          <img src="foto/20.gif" alt="foto">
        </div>
        <p>Материал, который используется в качестве основы для такого забора, говорит сам за себя: сочетание
          металлической арматуры и бетона.</p>
        <p> В совокупности получается прочная конструкция, которую невозможно повредить простым
          инструментом.</p>
      </a>
      <b><a href="{{route('zabor_page')}}">Наш каталог</a></b>
    </div>

    <div class="col-lg-6 fa-border margin-top-10" style="overflow: hidden;">
      <a href="{{route('block_page')}}"><h3 align="right" class="margin-10" style="text-align: center"><b>Блоки
            бетонные</b></h3>
        <div style="width: 250px; overflow: hidden; float: left; margin: 5px; border-radius: 5px">
          <img src="img/blok.jpg">
        </div>
        <p>Декоративные блоки для столбов забора используются все чаще.</p>
        <p>Они служат не только надежным основанием, но
          и настоящим украшением. Их структура и расцветка поверхности, нередко имитируют натуральный камень,
          кирпич или гладкую штукатурку.</p>
      </a>
      <b><a href="{{route('block_page')}}">Наш каталог</a></b>
    </div>
    <div class="col-lg-12 fa-border margin-top-10" style="position: relative; overflow: hidden;">
      <a href="{{route('forms_page')}}"><h3 align="right" class="margin-10" style="text-align: center"><b>Балясины и
            архитектурные формы</b></h3>

        <div style="width:100%;display:flex;">
          <div style="-webkit-flex: 1;flex: 1;">
            <img src="images/index_page/5.jpg" alt="img">
          </div>


          <div style="-webkit-flex: 1;flex: 1;">
            <img src="images/index_page/1.jpg">
          </div>

          <div style="-webkit-flex: 1;flex: 1;">
            <img src="images/index_page/3.jpg">
          </div>

          <div style="-webkit-flex: 1;flex: 1;">
            <img src="images/index_page/4.jpg">
          </div>
          <div style="-webkit-flex: 1;flex: 1;">
            <img src="images/index_page/2.jpg">
          </div>

        </div>

      </a>
    </div>
  </div>
  <div id="content" class="bottom-border-shadow">
    <div class="container background-white bottom-border">
      <div class="row margin-vert-30">
        <!-- Main Text -->
        <div class="col-md-6">
          <h3><b>ООО “БетонМастерСрой“</b></h3>
          <p>Компания, динамично развивающаяся в Лидском регионе. Работают в ней люди, желающие помочь
            клиентам и
            удовлетворить их потребности. И они по-настоящему являются специалистами в сфере своей работы.
          </p>
          <p>
            Бетонные заборы не требуют устройства фундамента, просты в установке и обслуживании, долговечны
            в
            использовании. Каждый проект уникален и подбирается индивидуально. Вы сами выбираете как будет
            выглядеть забор.
          </p>
          <p>Если вы растерялись в выборе, посмотрите примеры на нашем сайте. Они подскажут, какой вариант
            будет
            самым приемлемым для вас.</p>
        </div>
        <!-- End Main Text -->
        <div class="col-md-6">
          <h3 class="padding-vert-10">Почему мы?</h3>
          <ul class="tick animate fadeInRight">
            <li>Опыт в отрасли более 8 лет</li>
            <li>Применение только качественного сырья</li>
            <li>Индивидуальный подход к каждому клиенту</li>
            <li>Помощь в расчётах и замерах участка</li>
            <li>Гарантия качества</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Portfolio -->
  <div id="portfolio" class="bottom-border-shadow">
    <div class="container">
      <div class="row padding-top-40">
        <a href="{{route('portfolio_page')}}"><h3 class="margin-bottom-15">Фотоальбом</h3></a>
        <ul class="portfolio-group">
          <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
            <a href="foto/1.gif" class="highslide" onclick="return hs.expand(this)">
              <figure class="animate fadeInLeft highslide-gallery"
                      style="overflow: hidden; border-radius: 15px;">
                <img alt="БетонМастерСтрой" src="foto/1.gif">
              </figure>
            </a>
          </li>
          <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
            <a href="foto/8.gif" class="highslide" onclick="return hs.expand(this)">
              <figure class="animate fadeInLeft highslide-gallery"
                      style="overflow: hidden; border-radius: 15px;">
                <img alt="БетонМастерСтрой" src="foto/8.gif">
              </figure>
            </a>
          </li>
          <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
            <a href="foto/15.gif" class="highslide" onclick="return hs.expand(this)">
              <figure class="animate fadeInLeft highslide-gallery"
                      style="overflow: hidden; border-radius: 15px;">
                <img alt="БетонМастерСтрой" src="foto/15.gif">
              </figure>
            </a>
          </li>
          <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
            <a href="foto/4.gif" class="highslide" onclick="return hs.expand(this)">
              <figure class="animate fadeInLeft highslide-gallery"
                      style=" overflow: hidden; border-radius: 15px;">
                <img alt="БетонМастерСтрой" src="foto/4.gif">
                <figcaption>
                  <h3>Дерево и бетон</h3>
                  <span>Бетонные заборы великолепно сочетаются с другими материалами.</span>
                </figcaption>
              </figure>
            </a>
          </li>
          <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
            <a href="foto/3.gif" class="highslide" onclick="return hs.expand(this)">
              <figure class="animate fadeInLeft highslide-gallery"
                      style="overflow: hidden; border-radius: 15px;">
                <img alt="БетонМастерСтрой" src="foto/3.gif">
                <figcaption>
                  <h3>Первое место по выбору покупателей.</h3>
                  <span>Массивно, надёжно, долговечно.</span>
                </figcaption>
              </figure>
            </a>
          </li>
          <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
            <a href="foto/2.gif" class="highslide" onclick="return hs.expand(this)">
              <figure class="animate fadeInLeft highslide-gallery"
                      style="overflow: hidden; border-radius: 15px;">
                <img alt="БетонМастерСтрой" src="/foto/2.gif">
                <figcaption>
                  <h3>Ворота и калитки</h3>
                  <span>прекрасное сочетание с железобетонным забором.</span>
                </figcaption>
              </figure>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <script type="text/javascript" src="/foto/highslide/highslide-with-gallery.js"></script>
    <link rel="stylesheet" type="text/css" href="/foto/highslide/highslide.css"/>
    <script type="text/javascript">
      hs.graphicsDir = '/foto/highslide/graphics/';
      hs.align = 'center';
      hs.transitions = ['expand', 'crossfade'];
      hs.outlineType = 'glossy-dark';
      hs.wrapperClassName = 'dark';
      hs.fadeInOut = true;
      if (hs.addSlideshow) hs.addSlideshow({
        //slideshowGroup: 'group1',
        interval: 5000,
        repeat: false,
        useControls: true,
        fixedControls: 'fit',
        overlayOptions: {
          opacity: .6,
          position: 'bottom center',
          hideOnMouseOut: true
        }
      });
    </script>
@endsection