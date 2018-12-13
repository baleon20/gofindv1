@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-6 offset-md-3">

			<form
   		        method="POST"
   		        action="{{ ! $Area->id ? route('Area.store') : route('Area.update', ['id' => $Area->id]), route('Area.destroy', ['id' => $Area->id]),  route('Area.show', ['id' => $Area->id]),  route('Area.edit', ['id' => $Area->id]), route('Area.getsearch', ['id' => $Area->id]) }}"
   		        novalidate
   		        enctype="multipart/form-data"
   		    >
   		    
				@if($Area->id)
					@method('PUT')
				@endif
				
				@csrf
						<div class="card">
							<div class="card-header">
								<center><h2>Crear Area</h2></center>
								
							</div>
							<div class="card-body">
								<input
									 type="text" name="nombre"
									 class="form-control{{ $errors->has('nombre') ? 'is-invalid' : '' }}"
									 value=" {{ old('nombre') ?: $Area->nombre }}"
									 required
									 autofocus

								/>

								@if($errors->has('nombre'))
									<span class="invalid-feedback">
											<strong>{{ $errors->first('nombre') }}</strong>
										</span>
								@endif

							</div>
							<button type="submit" name="revision" class="btn btn-primary">
								Guardar Area
							</button>
							<br>
							<a class="btn btn-primary btn-lg" href="/area" role="button">Listar Areas</a>

						</div>		
			</form>
	    </div>
@endsection