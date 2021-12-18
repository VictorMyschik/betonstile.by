<div class="row m-t-10">
	@foreach($needSettings as $key => $value)
		<div class="col">
			@include('Form.BaseForm.Inputs.'.$value['#type'], ['name' => $key, 'item' => $value])
		</div>
	@endforeach
</div>