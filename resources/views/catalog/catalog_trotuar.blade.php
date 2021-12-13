@extends('layouts.app')

@section('content')

<div id="content">
    <div class="container background-white">
        <h1>Тротуарная плитка</h1>
        <h3 class="margin-bottom-10">Уточняйте наличие. Также возможно изготовление под заказ.</h3>
        <div class="row margin-vert-30">
            <div class="col-md-4 portfolio-item margin-bottom-20 video">
                <a href="/images/plitka/1.gif" class="highslide" onclick="return hs.expand(this)">
                    <figure style="width: 100%; height: 200px;border-radius: 10px; overflow: hidden">
                        <img src="/images/plitka/1.gif" alt="БетонМастерСтрой">
                    </figure>
                </a>
                <h3 class="margin-bottom-0">Клевер</h3>
                <li>Размер: h = 4,5 см</li>
                <li>Цену уточняйте</li>
            </div>
            <div class="col-md-4 portfolio-item margin-bottom-20 video">
                <a href="/images/plitka/2.gif" class="highslide" onclick="return hs.expand(this)">
                    <figure style="width: 100%; height: 200px;border-radius: 10px; overflow: hidden">
                        <img src="/images/plitka/2.gif" alt="БетонМастерСтрой">
                    </figure>
                </a>
                <h3 class="margin-bottom-0">Бордюр</h3>
                <li>Размер: 50х21х7см</li>
                <li>Цена: 3 руб за 1 м2</li>
            </div>
            <div class="col-md-4 portfolio-item margin-bottom-20 video">
                <a href="/images/plitka/3.gif" class="highslide" onclick="return hs.expand(this)">
                    <figure style="width: 100%; height: 200px;border-radius: 10px; overflow: hidden">
                        <img src="/images/plitka/3.gif" alt="БетонМастерСтрой">
                    </figure>
                </a>
                <h3 class="margin-bottom-0">Отлив садовый</h3>
                <li>Размер: 25х16х6см</li>
                <li>Цена: 3 руб за 1 м2</li>
            </div>
            <p>Использование тротуарной плитки во многом обусловлен ее экологичностью. Такая плитка не подвергается размягчению из-за воздействия высокой температуры в теплое время года, в результате чего она не выделяет никаких вредных веществ.</p>
        </div>
        <h3 class="margin-bottom-10">Больше примеров смотрите в разделе <a href="/portfolio">ФОТО</a></h3>
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