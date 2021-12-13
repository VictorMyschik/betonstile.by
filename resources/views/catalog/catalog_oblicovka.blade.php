@extends('layouts.app')

@section('content')

<div id="content">
    <div class="container background-white">
        <h1>Плитка облицовочная</h1>
        <h3 class="margin-bottom-10">Уточняйте наличие. Также возможно изготовление под заказ.</h3>
        <div class="row margin-vert-30">
            <div class="col-md-4 portfolio-item margin-bottom-20 video">
                <a href="/images/oblicovka/1.jpg" class="highslide" onclick="return hs.expand(this)">
                    <figure style="width: 100%; height: 200px;border-radius: 10px; overflow: hidden">
                        <img src="/images/oblicovka/1.jpg" alt="БетонМастерСтрой">
                    </figure>
                </a>
                <h3 class="margin-bottom-0">Старый керпич</h3>

            </div>

            <p>Отличный бюджетный вариант для тех, кто не может использовать дорогой натуральный камень.Бетонная плитка может иметь разную текстуру, форму и цвет. Для этого в процессе приготовления в подготовленный раствор вводится нужный краситель, затем полученная смесь разливается по формам.</p>
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