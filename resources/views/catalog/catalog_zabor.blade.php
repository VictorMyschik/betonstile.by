@extends('layouts.app')
@section('content')
  <div id="content">
    <div class="container background-white">
      <h1>Каталог железобетонных заборов</h1>
      <p>Армируются проволокой диаметром 4мм. Длина всех панелей 2метра, высота 0,5 и 0,25м. Средний вес панели
        65кг.</p>
      <div class="row margin-vert-30">
        <!-- Side Column -->
        <div class="col-md-3">
          <!-- Recent Posts -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Прайс-лист</h3>
              <h4>8 (029) 871-56-53 МТС</h4>
              <p> {{ $message }} </p>
            </div>
            <div class="panel-body">
              <table class="table table-sm table-hover">
                @foreach($price as $item)
                  <tr class="margin-top-5">
                    <td>
                      <div> {{ $item->getName() .' - '. $item->getValue() }}</div>
                      <div class="mr-description">{{$item->getDescription()}}</div>
                    </td>
                  </tr>
                @endforeach
              </table>
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
        <!-- Заборы -->
        @foreach($files as $img)
          <div class="col-xs-4 portfolio-item margin-bottom-20 video">
            <a href="/images/zabor/{{ $img }}" class="highslide" onclick="return hs.expand(this)">
              <figure style="width: 100%; border-radius: 10px; overflow: hidden">
                <img src="/images/zabor/{{ $img }}" alt="БетонМастерСтрой">
              </figure>
            </a>
          </div>
        @endforeach
      </div>

      <!-- Столбы -->
      @foreach($files_stolb as $img_stolb)
        <div class="col-xs-4 portfolio-item margin-bottom-20 video">
          <a href="/images/zabor/stolb/{{ $img_stolb }}" class="highslide"
             onclick="return hs.expand(this)">
            <figure style="width: 100%;border-radius: 10px; overflow: hidden">
              <img src="/images/zabor/stolb/{{ $img_stolb }}" alt="БетонМастерСтрой">
            </figure>
          </a>
        </div>
      @endforeach
      <h4 class="col-xs-12" style="margin-left: -15px">Размеры столбов изготавливаются индивидуально в соответствии с
        необходимой высотой
        забора</h4>
    </div>
  </div>
  <script type="text/javascript" src="foto/highslide/highslide-with-gallery.js"></script>
  <link rel="stylesheet" type="text/css" href="foto/highslide/highslide.css"/>
@endsection