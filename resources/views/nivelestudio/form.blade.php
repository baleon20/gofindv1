@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-6 offset-md-3">

			<form
   		        method="POST"
   		        action="{{ ! $NivelEstudio->id ? route('NivelEstudio.store') : route('NivelEstudio.update', ['id' => $NivelEstudio->id]), route('NivelEstudio.destroy', ['id' => $NivelEstudio->id]),  route('NivelEstudio.show', ['id' => $NivelEstudio->id]),  route('NivelEstudio.edit', ['id' => $NivelEstudio->id]), route('NivelEstudio.getsearch', ['id'=>$NivelEstudio->id]) }}"
   		        novalidate
   		        enctype="multipart/form-data"
   		    >
   		    
				@if($NivelEstudio->id)
					@method('PUT')
				@endif
				
				@csrf
						<div class="card">
							<div class="card-header">
								<center><h2>Crear Nivel de Estudio</h2></center>
								
							</div>
							<div class="card-body">
								<input
									 type="text" name="nombre"
									 class="form-control{{ $errors->has('nombre') ? 'is-invalid' : '' }}"
									 value=" {{ old('nombre') ?: $NivelEstudio->nombre }}"
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
								Guardar Nivel de Estudio
							</button>
							<br>
							<a class="btn btn-primary btn-lg" href="/nivelestudio" role="button">Listar Nivel de Estudio</a>

						</div>		
			</form>
	    </div>
@endsection