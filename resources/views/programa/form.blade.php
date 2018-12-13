@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-6 offset-md-3">

			<form
   		        method="POST"
   		        action="{{ ! $Programa->id ? route('Programa.store') : route('Programa.update', ['id' => $Programa->id]), route('Programa.destroy', ['id' => $Programa->id]),  route('Programa.show', ['id' => $Programa->id]),  route('Programa.edit', ['id' => $Programa->id]), route('Programa.getsearch', ['id'=>$Programa->id]) }}"
   		        novalidate
   		        enctype="multipart/form-data"
   		    >
   		    
				@if($Programa->id)
					@method('PUT')
				@endif
				
				@csrf
						<div class="card">
							<div class="card-header">
								<center><h2>Crear Programa</h2></center>
								
							</div>
							<div class="card-body">
								<input
									 type="text" name="nombre"
									 class="form-control{{ $errors->has('nombre') ? 'is-invalid' : '' }}"
									 value=" {{ old('nombre') ?: $Programa->nombre }}"
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
								Guardar Programa
							</button>
							<br>
							<a class="btn btn-primary btn-lg" href="/programa" role="button">Listar Programas</a>

						</div>		
			</form>
	    </div>
@endsection