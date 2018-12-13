@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-6 offset-md-3">

			<form
   		        method="POST"
   		        action="{{ ! $Rol->id ? route('Rol.store') : route('Rol.update', ['id' => $Rol->id]), route('Rol.destroy', ['id' => $Rol->id]),  route('Rol.show', ['id' => $Rol->id]),  route('Rol.edit', ['id' => $Rol->id]), route('Rol.getsearch', ['id'=>$Rol->id]) }}"
   		        novalidate
   		        enctype="multipart/form-data"
   		    >
   		    
				@if($Rol->id)
					@method('PUT')
				@endif
				
				@csrf
						<div class="card">
							<div class="card-header">
								<center><h2>Crear Rol</h2></center>
								
							</div>
							<div class="card-body">
								<input
									 type="text" name="nombre"
									 class="form-control{{ $errors->has('nombre') ? 'is-invalid' : '' }}"
									 value=" {{ old('nombre') ?: $Rol->nombre }}"
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
								Guardar Rol
							</button>
							<br>
							<a class="btn btn-primary btn-lg" href="/rol" role="button">Listar Roles</a>

						</div>		
			</form>
	    </div>
@endsection