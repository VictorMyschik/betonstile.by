@extends('layouts.app')

@section('content')
<div id="content">
    <div class="container background-white">
        <div class="col-md-9">
            <h1>КЛАССИФИКАЦИЯ БЕТОННОЙ СМЕСИ</h1>
            <h3>Классифицируется бетон по различным признакам:</h3>
            <li>бетон разделяют по его назначению на два типа - специальный (жароустойчивый, химзащитный,
                звуконепроницаемый, и т. д.), и обычный бетон, который предназначен для постройки зданий, строений;
            </li>
            <li> по видам вяжущегося вещества (гипс, силикат, цемент);</li>
            <li>по виду заполнителя (плотный, пористый, специальный);</li>
            <li>по структуре (крупнопозерновой, ячеистый);</li>
            <li>по условиям затвердения (в обычных условиях, в тепло влажностной обработке, при давлении атмосфер, так и в
                условиях автоклавного затвердевания);
            </li>
            <li>по объемности массы;</li>
            <li>по содержанию вяжущего вещества (тощий, товарный, жирный).</li>
            <br>
            <h3>ПРОТИВОМОРОЗНЫЕ ДОБАВКИ</h3>
            <p>В последнее время начали применять так называемые холодные бетоны, которые имеют способность твердеть и при
                минусовой температуре даже без подогрева. Поэтому они и получили такое название. Обычно тяжелый бетон не
                может затвердеть при низкой температуре, потому что вода в нем замерзает, и лед не взаимодействует с
                цементом. А для бетонного затвердения при таких температурах вода должна быть жидкой формы. Достигнуть этого
                можно и без обогрева. Следует ввести в воду специальные противоморозные химические добавки: соли хлористого
                кальция, хлорида натрия, поташа, и т.д. Вследствие этого бетон заправляется не просто водой, а растворами из
                этих солей, которые имеют способность затвердевать и при температурах ниже 0 градусов.</p>
            <p>Формировку бетонных свойств нужно начинать с производства бетона, укладывания и твердости смеси. Именно этим
                определяется, какого качества будет изделие. Потому важно хорошо знать все свойства бетонной смеси, их
                зависимость от разных факторов. Важно уметь координировать процесс приготовления, доставки бетона, его
                укладки, затвердевания смеси из бетона.</p>
        </div>
        <div class="col-md-3">
            <h1>Интересное</h1>
            @foreach($list as $key => $title)
            <li> <a href="{{ $key }}">{{ $title }} </a></li>
            @endforeach
        </div>
    </div>
</div>

            @endsection