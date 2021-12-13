@extends('layouts.app')

@section('content')
  <div id="content">
    <div class="container background-white">
      <h1>Каталог бетонных блоков</h1>
      <h3 class="margin-bottom-10">Уточняйте наличие. Также возможно изготовление под заказ.</h3>
      <div class="row margin-vert-10 margin-horiz-10">
        <p>Бетонные декоративные блоки для забора разных размеров используется для изготовления фактурных столбов
          заборов вокруг участков, домов и коттеджей.</p>

        <div class="row">
          <div class="col-md-4 col-sm-12 portfolio-item video">
            <h3 class="margin-bottom-0">Блок "Скала"</h3>
            <a href="/images/blok/1.gif" class="highslide" onclick="return hs.expand(this)">
              <figure style="min-height: 164px; max-height: 164px; width: 100%; border-radius: 10px; overflow: hidden">
                <img src="/images/blok/1.gif" alt="БетонМастерСтрой" style="min-height: 164px; max-height: 164px;">
              </figure>
            </a>

            <li>Размер: 0,2*0,4*0,2м</li>
            <li>Цена 6 руб</li>
          </div>

          <div class="col-md-4 col-sm-12 portfolio-item video">
            <h3 class="margin-bottom-0">Блок "Керпич"</h3>
            <a href="/images/blok/2.gif" class="highslide" onclick="return hs.expand(this)">
              <figure style="min-height: 164px; max-height: 164px; width: 100%; border-radius: 10px; overflow: hidden">
                <img src="/images/blok/2.gif" alt="БетонМастерСтрой" style="min-height: 164px; max-height: 164px;">
              </figure>
              <li>Размер: 0,43*0,43*0,2м</li>
              <li>Цена 7.5 руб</li>
            </a>


          </div>

          <div class="col-md-4 col-sm-12 portfolio-item video">
            <h3 class="margin-bottom-0">Блок "Рваный камень"</h3>
            <a href="/images/blok/3.jpg" class="highslide" onclick="return hs.expand(this)">
              <figure style="max-height: 164px;width: 100%; border-radius: 10px; overflow: hidden">
                <img src="/images/blok/3.jpg" alt="БетонМастерСтрой">
              </figure>
            </a>

            <li>Размер: 0,3*0,3*0,2м</li>
            <li>Цена 6 руб</li>
          </div>
        </div>

        <h5>Имеют внутреннюю полость для размещения в них арматуры и заливки бетона. Цветовой
          выбор разнообразный, покрасив краской поверхности акриловыми фасадными красками уже после завершения монтажа
          декоративных бетонных столбов для забора.</h5>

        <div class="col-xs-6" style="float: left;">
          <a href="/images/blok/4.jpg" class="highslide" onclick="return hs.expand(this)">
            <figure style="width: 25vw">
              <img src="/images/blok/4.jpg" alt="БетонМастерСтрой">
            </figure>
          </a>
        </div>

        <div class="col-xs-6">
          <a href="/images/blok/465.jpg" class="highslide" onclick="return hs.expand(this)">
            <figure style="width: 25vw">
              <img src="/images/blok/465.jpg" alt="БетонМастерСтрой">
            </figure>
          </a>
        </div>


        <h3>Больше примеров смотрите в разделе <a href="{{route('portfolio_page')}}" class="mr-bold">ФОТО</a></h3>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="/foto/highslide/highslide-with-gallery.js"></script>
  <link rel="stylesheet" type="text/css" href="/foto/highslide/highslide.css"/>
  <script type="text/javascript">
    hs.graphicsDir = '/foto/highslide/graphics/';
    hs.align = 'center';
    hs.transitions = ['expand', 'crossfade'];
    hs.outlineType = 'glossy-dark';
    // hs.wrapperClassName = 'dark';
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
