@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-6 offset-md-3">

			<form
   		        method="POST"
   		        action="{{ ! $TipoDocumento->id ? route('TipoDocumento.store') : route('TipoDocumento.update', ['id' => $TipoDocumento->id]), route('TipoDocumento.destroy', ['id' => $TipoDocumento->id]),  route('TipoDocumento.show', ['id' => $TipoDocumento->id]),  route('TipoDocumento.edit', ['id' => $TipoDocumento->id]),route('TipoDocumento.getsearch', ['id'=>$TipoDocumento->id]) }}"
   		        novalidate
   		        enctype="multipart/form-data"
   		    >
   		    
				@if($TipoDocumento->id)
					@method('PUT')
				@endif
				
				@csrf
						<div class="card">
							<div class="card-header">
								<center><h2>Crear Tipo de Documento</h2></center>
								
							</div>
							<div class="card-body">
								<label for="nombre">Nombre</label>
								<input
									 type="text" name="nombre"
									 class="form-control{{ $errors->has('nombre') ? 'is-invalid' : '' }}"
									 value=" {{ old('nombre') ?: $TipoDocumento->nombre }}"
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
								Guardar Tipo de Documento
							</button>
							<br>
							<a class="btn btn-primary btn-lg" href="/tipodocumento" role="button">Listar Tipos de Documentos</a>

						</div>		
			</form>
	    </div>
@endsection
