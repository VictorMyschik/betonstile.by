@extends('layouts.app')

@section('content')

<div id="content">
    <div class="container background-white">
        <h1>Ворота и колитки</h1>
        <h3 class="margin-bottom-10">Уточняйте наличие. Также возможно изготовление под заказ.</h3>
        <div class="row margin-vert-30">
            @foreach($files as $img)
            <div class="col-md-4 portfolio-item margin-bottom-20 video">

                <a href="/images/vorota/{{ $img }}" class="highslide" onclick="return hs.expand(this)">
                    <figure style="width: 100%; height: 200px;border-radius: 10px; overflow: hidden">
                        <img src="/images/vorota/{{ $img }}" alt="БетонМастерСтрой">
                    </figure>
                </a>
            </div>
            @endforeach
            <p>Изготовление также возможно по Вашим предпочтениям.</p>
        </div>
        <h3>Больше примеров смотрите в разделе <a href="/portfolio">ФОТО</a></h3>
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