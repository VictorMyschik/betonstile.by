@extends('layouts.app')

@section('content')

<div id="content">
    <div class="container background-white">
        <h1>Тротуарная плитка-травница</h1>
        <h3 class="margin-bottom-10">Уточняйте наличие. Также возможно изготовление под заказ.</h3>
        <div class="row margin-vert-30">
            <p>Для тех, кто стремится сделать свой участок максимально «зеленым», советуем использовать «травницу»
                зеленую плитку.
            </p>
            <p>
                Как можно догадаться из названия, конструкция плитки позволяет траве свободно расти в промежутках между
                камнями. Таким образом, Вы сможете избежать ощущения сплошного бетонного покрытия и внести
                дополнительную изюминку в Ваш ландшафтный проект.</p>
                <div class="col-md-6 portfolio-item margin-bottom-20 video">
                    <a href="/images/trav/1.gif" class="highslide" onclick="return hs.expand(this)">
                        <figure style="width: 100%; border-radius: 10px; overflow: hidden">
                            <img src="/images/trav/1.gif" alt="БетонМастерСтрой">
                        </figure>
                    </a>
                    <h3 class="margin-bottom-0">"Булыжник"</h3>
                    <li>Размер: h = 8 см</li>
                    <li>Цена 4 руб</li>
                </div>
            <h3>Преимущества травницы:</h3>
            <li>Устойчивость к истиранию</li>
             <li>устойчивость к воздействию морозов</li>
             <li>Прочность и легкость</li>
             <li>Отсутствие необходимости обработки водоотталкивающими и грязезащитными средствами</li>
        </div>
        <h3 class="margin-bottom-5">Больше примеров смотрите в разделе <a href="/portfolio">ФОТО</a></h3>
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