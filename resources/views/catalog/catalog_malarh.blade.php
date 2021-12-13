@extends('layouts.app')

@section('content')

<div id="content">
    <div class="container background-white">
        <h1>Каталог малых архитектурных форм</h1>
        <h3 class="margin-bottom-10">Уточняйте наличие. Также возможно изготовление под заказ.</h3>
        <div class="row margin-vert-30">

            <div class="col-md-4 portfolio-item margin-bottom-20 video">
                <a href="/public/images/malarh/1.gif" class="highslide" onclick="return hs.expand(this)">
                    <figure style="width: 100%; height: 200px;border-radius: 10px; overflow: hidden">
                        <img src="/public/images/malarh/1.gif" alt="БетонМастерСтрой">
                    </figure>
                </a>
                <h3 class="margin-bottom-0">Крышка на столб (большая)</h3>
                <li>Размер: 0,45*0,45м</li>
                <li>Цена 4.5 руб</li>
            </div>

            <div class="col-md-4 portfolio-item margin-bottom-20 video">
                <a href="/public/images/malarh/2.gif" class="highslide" onclick="return hs.expand(this)">
                    <figure style="width: 100%; border-radius: 10px; overflow: hidden">
                        <img src="/public/images/malarh/2.gif" alt="БетонМастерСтрой">
                    </figure>
                </a>
                <h3 class="margin-bottom-0">Шар</h3>
                <li>Размер: 0,45*0,45м</li>
                <li>Цена 4 руб</li>
            </div>

            <div class="col-md-4 portfolio-item margin-bottom-20 video">
                <a href="/public/images/malarh/3.gif" class="highslide" onclick="return hs.expand(this)">
                    <figure style="width: 100%; border-radius: 10px; overflow: hidden">
                        <img src="/public/images/malarh/3.gif" alt="БетонМастерСтрой">
                    </figure>
                </a>
                <h3 class="margin-bottom-0">Лев</h3>
                <li>Размер: h = 0,4м</li>
                <li>Цена 15 руб</li>
            </div>

            <div class="col-md-4 portfolio-item margin-bottom-20 video">
                <a href="/public/images/malarh/4.gif" class="highslide" onclick="return hs.expand(this)">
                    <figure style="width: 100%;  border-radius: 10px; overflow: hidden">
                        <img src="/public/images/malarh/4.gif" alt="БетонМастерСтрой">
                    </figure>
                </a>
                <h3 class="margin-bottom-0">Крышка на забор</h3>
                <li>Размер: 1,92 м х 0,19 м</li>
                <li>Цена 8 руб</li>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/public/foto/highslide/highslide-with-gallery.js"></script>
<link rel="stylesheet" type="text/css" href="/public/foto/highslide/highslide.css"/>
<script type="text/javascript">
    hs.graphicsDir = '/public/foto/highslide/graphics/';
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