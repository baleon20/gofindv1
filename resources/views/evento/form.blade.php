@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-6 offset-md-3">

			<form
   		        method="POST"
   		        action="{{ ! $Evento->id ? route('Evento.store') : route('Evento.update', ['id' => $Evento->id]), route('Evento.destroy', ['id' => $Evento->id]),  route('Evento.show', ['id' => $Evento->id]),  route('Evento.edit', ['id' => $Evento->id]), route('Evento.getsearch', ['id'=>$Evento->id]) }}"
   		        novalidate
   		        enctype="multipart/form-data"
   		    >
   		    
				@if($Evento->id)
					@method('PUT')
				@endif
				
				@csrf
						<div class="card">
							<div class="card-header">
								<center><h2>Crear Evento</h2></center>
								
							</div>
							<div class="card-body">
								<div class="form-group">
									<label for="nombre">Nombre</label>
								
									<input
										 type="text" name="nombre"
										 class="form-control{{ $errors->has('nombre') ? 'is-invalid' : '' }}"
										 value=" {{ old('nombre') ?: $Evento->nombre }}"
										 required
										 autofocus

									/>
									@if($errors->has('nombre'))
										<span class="invalid-feedback">
												<strong>{{ $errors->first('nombre') }}</strong>
											</span>
									@endif	
								</div>
								
							
								<div class="form-group">
									<label for="descripcion">Descripcion</label>
								<input
									 type="text" name="descripcion"
									 class="form-control{{ $errors->has('descripcion') ? 'is-invalid' : '' }}"
									 value=" {{ old('descripcion') ?: $Evento->descripcion }}"
									 required
									 autofocus

								/>

								@if($errors->has('descripcion'))
									<span class="invalid-feedback">
											<strong>{{ $errors->first('descripcion') }}</strong>
										</span>
								@endif
						    	</div>
								<div class="form-group">
									<label for="fechaevento">Fecha del Evento</label>
								<input
									 type="text" name="fechaevento"
									 class="form-control{{ $errors->has('fechaevento') ? 'is-invalid' : '' }}"
									 value=" {{ old('fechaevento') ?: $Evento->fechaevento }}"
									 required
									 autofocus

								/>
								@if($errors->has('fechaevento'))
									<span class="invalid-feedback">
											<strong>{{ $errors->first('fechaevento') }}</strong>
										</span>
								@endif
								</div>
								<div class="form-group">
									<label for="lugar">Lugar</label>
								<input
									 type="text" name="lugar"
									 class="form-control{{ $errors->has('lugar') ? 'is-invalid' : '' }}"
									 value=" {{ old('lugar') ?: $Evento->lugar }}"
									 required
									 autofocus

								/>
								@if($errors->has('lugar'))
									<span class="invalid-feedback">
											<strong>{{ $errors->first('lugar') }}</strong>
										</span>
								@endif
								</div>
								<div class="form-group">
									<label for="direccion">Direccion</label>
								<input
									 type="text" name="direccion"
									 class="form-control{{ $errors->has('direccion') ? 'is-invalid' : '' }}"
									 value=" {{ old('direccion') ?: $Evento->direccion }}"
									 required
									 autofocus

								/>
								@if($errors->has('direccion'))
									<span class="invalid-feedback">
											<strong>{{ $errors->first('direccion') }}</strong>
										</span>
								@endif
								</div>

							</div>
							<button type="submit" name="revision" class="btn btn-primary">
								Guardar Evento
							</button>
							<br>
							<a class="btn btn-primary btn-lg" href="/evento" role="button">Listar Evento</a>

						</div>		
			</form>
	    </div>
@endsection