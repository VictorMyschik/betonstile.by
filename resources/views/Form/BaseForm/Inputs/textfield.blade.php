<label for="{{ $name }}" class="mr-bold mr-form-size-09">{{ $item['#title'] }}</label>
<input id="{{ $name }}" type="text" name="{{ $name }}" value="{{ $item['#value'] }}" placeholder='{{ $item['#placeholder'] ?? null }}'
       @if(isset($item['#attributes'])) @include('layouts.Elements.input_attr',['attributes'=>$item['#attributes']]) @endif
       class="form-control form-control-sm col-sm-12 mr-border-radius-5 p-l-5 @if(isset($item['#class'])) @foreach($item['#class'] as $class){{ $class }}@endforeach @endif">