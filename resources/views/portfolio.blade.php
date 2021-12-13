@extends('layouts.app')

@section('content')
  <div id="content">
    <div class="container background-white">
      <div class="row margin-vert-5">
        <h3 style="margin-left: 30px">Фото заборов. Все цены указаны в <a href="/catalog/zabor">каталоге</a></h3><br>
        <div class="col-md-12 portfolio-group no-padding">
          @foreach($files as $img)
            <div class="col-xs-6 portfolio-item margin-bottom-10 video">
              <div style="height: 20vw; overflow: hidden">
                <a href="foto/{{ $img }}" class="highslide" onclick="return hs.expand(this)">
                  <figure>
                    <img src="foto/{{ $img }}" alt="БетонМастерСтрой">
                  </figure>
                </a>
              </div>
            </div>
          @endforeach
        </div>
        <h3 style="margin-left: 30px">Все цены указаны в <a href="/catalog/zabor">каталоге</a></h3>
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