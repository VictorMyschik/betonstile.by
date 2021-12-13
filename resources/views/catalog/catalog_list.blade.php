@extends('layouts.app')

@section('content')

<div id="content">
    <div class="container background-white">
        <h1>Мы изготавливаем только качественные изделия из армированного бетона.</h1>
        <div class="col-lg-6 fa-border margin-top-10" style="overflow: hidden;">
            <a href="/catalog/zabor"><h2 class="margin-10">Заборы</h2>
                <div style="width: 250px; overflow: hidden; float: right; margin: 5px; border-radius: 5px">
                    <img src="foto/20.gif">
                </div>
                <p>Материал, который используется в качестве основы для такого забора, говорит сам за себя: сочетание
                    металлической арматуры и бетона.</p>
                <p> В совокупности получается прочная конструкция, которую невозможно повредить простым
                    инструментом.</p>
            </a>
        </div>
        <div class="col-lg-6 fa-border margin-top-10" style="overflow: hidden;">
            <a href="/catalog/malarh"><h2 align="right" class="margin-10">Мылые формы</h2>
            <div style="width: 250px; overflow: hidden; float: left; margin: 5px; border-radius: 5px">
                <img src="img/lev.jpg">
            </div>
            <p>Декоративные изделия из бетона, приобретают всё большую популярность в благоустройстве экстерьеров
                загородных участков и дач.</p>
            </a>
        </div>

        <div class="col-lg-6 fa-border margin-top-10" style="overflow: hidden;">
            <a href="/catalog/block"><h2 align="right" class="margin-10" style="text-align: center">Блоки Бетонные</h2>
            <div style="width: 250px; overflow: hidden; float: left; margin: 5px; border-radius: 5px">
                <img src="img/blok.jpg">
            </div>
            <p>Декоративные блоки для столбов забора используются все чаще. Они служат не только надежным основанием, но
                и настоящим украшением. Их структура и расцветка поверхности, нередко имитируют натуральный камень,
                кирпич или гладкую штукатурку.</p>
            </a>
        </div>

        <div class="col-lg-6 fa-border margin-top-10" style="overflow: hidden;">
            <a href="/catalog/travnica"><h2 class="margin-10" style="text-align: center">Плитка травница</h2>
            <div style="width: 250px; overflow: hidden; float: right; margin: 5px; border-radius: 5px">
                <img src="img/travnica.jpg">
            </div>
            <p>Для тех, кто стремится сделать свой участок максимально «зеленым», советуем использовать «травницу»
                зеленую плитку.</p>
            </a>
        </div>
    </div>
    <div class="container background-white">
        <div class="col-lg-4 fa-border margin-top-10" style="overflow: hidden;">
            <a href="/catalog/vorota"><h2 style="text-align: center">Ворота и колитки</h2>
            <div style="width: 100%; overflow: hidden; float: right; margin: 5px; border-radius: 5px">
                <img src="img/vorota.gif">
            </div>
            <p style="text-align: center">Неважно, будут это просто распашные ворота, распашные металлические ворота,
                или раздвижные ворота для дачи — цена работ всегда обсуждаема и не высока. Все зависит от Вашего
                отношения к собственной безопасности.</p>
            </a>
        </div>

        <div class="col-lg-4 fa-border margin-top-10" style="overflow: hidden;">
            <a href="/catalog/trotuar"><h2 style="text-align: center">Плитка тротуарная</h2>
            <div style="width: 100%; overflow: hidden; float: right; margin: 5px; border-radius: 5px">
                <img src="img/plitka.jpg">
            </div>
            <p style="text-align: center">Красивая тротуарная плитка всегда была эталоном благосостояния приусадебного участка.</p>
            </a>
        </div>

        <div class="col-lg-4 fa-border margin-top-10" style="overflow: hidden;">
            <a href="/catalog/oblicovka"> <h2 style="text-align: center">Плитка облицовочная</h2>
            <div style="width: 100%; overflow: hidden; float: right; margin: 5px; border-radius: 5px">
                <img src="img/oblicovka.gif">
            </div>
            <p style="text-align: center">Прочная и надежная, с длительным сроком службы, она как нельзя лучше подходит для отделки зданий
                различного назначения: жилых домов, офисных зданий, строений коммерческой направленности.</p>
            </a>
        </div>

    </div>
</div>

@endsection