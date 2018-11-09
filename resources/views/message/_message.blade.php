@foreach (['danger', 'warning', 'success', 'info'] as $msg)
	@if(Session::has('alert-' . $msg))
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-5"></div>
			<div class="col-md-3">
					<div id="errorAlert">
						<p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}	<a href="#" class="close"
							data-dismiss="alert" aria-label="close">&times;</a>
						</p>				
					</div>
			</div>
		</div>
	@endif
@endforeach