@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-6 offset-md-3">

			<form
   		        method="POST"
   		        action="{{ ! $Pais->id ? route('Pais.store') : route('Pais.update', ['id' => $Pais->id]), route('Pais.destroy', ['id' => $Pais->id]),  route('Pais.show', ['id' => $Pais->id]),  route('Pais.edit', ['id' => $Pais->id]), route('Pais.getsearch', ['id' => $Pais->id]) }}"
   		        novalidate
   		        enctype="multipart/form-data"
   		    >
   		    
				@if($Pais->id)
					@method('PUT')
				@endif
				
				@csrf
						<div class="card">
							<div class="card-header">
								<center><h2>Crear pais</h2></center>
								
							</div>
							<div class="card-body">
								<input
									 type="text" name="name"
									 class="form-control{{ $errors->has('name') ? 'is-invalid' : '' }}"
									 value=" {{ old('name') ?: $Pais->name }}"
									 required
									 autofocus

								/>

								@if($errors->has('name'))
									<span class="invalid-feedback">
											<strong>{{ $errors->first('nombre') }}</strong>
										</span>
								@endif

							</div>
							<button type="submit" name="revision" class="btn btn-primary">
								Guardar Pais
							</button>
							<br>
							<a class="btn btn-primary btn-lg" href="/pais" role="button">Listar pais</a>

						</div>		
			</form>
	    </div>
@endsection