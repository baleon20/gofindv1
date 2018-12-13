@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-6 offset-md-3">
  	   <form 
  	      method="POST"
  	      action="{{ ! $Egresado->id ? route('Egresado.store'): route('Egresado.update', ['id'=>$Egresado->id]), route('Egresado.destroy', ['id'=>$Egresado->id]), route('Egresado.show', ['id'=>$Egresado->id]), route('Egresado.edit', ['id'=>$Egresado->id]), route('Egresado.getsearch', ['id'=>$Egresado->id]) }}"
  	       novalidate
  	       enctype="multipart/form-data">

  	       @if($Egresado->id)
  	       @method('PUT')
  	       @endif
  	    

  	       @csrf
  	      <div  class="card">
  	         <div class="card-header">
  	             <h2>Crear Egresado</h2>
  	         </div>
  	         <div class="card-body">
  	             <div class="form-group">
  	            	  <label for="nombre">Nombre</label>
  	         	      <input 
                    type="text" name="nombre"  
  	         	      class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}"
  	         	      value="{{ old('nombre') ?: $Egresado->nombre}}"
  	            	  required
  	                autofocus
  	         	      />
  	         	       @if($errors->has('nombre'))
  	         	       <span class="invalid-feedback">
  	         	            <strong>{{$errors->first('nombre') }}</strong>	 
  	         	        </span>

  	         	      @endif

                    
                 
                    <label for="apellido">Apellido</label>
                    <input 
                    type="text" name="apellido"  
                    class="form-control{{ $errors->has('apellido') ? ' is-invalid' : '' }}"
                    value="{{ old('apellido') ?: $Egresado->apellido}}"
                    required
                    autofocus
                    />
                     @if($errors->has('password'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('apellido') }}</strong>  
                      </span>

                    @endif

                    
                    <label for="telefono">Telefono</label>
                    <input 
                    type="text" name="telefono"  
                    class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}"
                    value="{{ old('telefono') ?: $Egresado->telefono}}"
                    required
                    autofocus
                    />
                     @if($errors->has('telefono'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('telefono') }}</strong>  
                      </span>

                    @endif

                    
                 
                    <label for="direccion">Direccion</label>
                    <input 
                    type="text" name="direccion"  
                    class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}"
                    value="{{ old('direccion') ?: $Egresado->direccion}}"
                    required
                    autofocus
                    />
                     @if($errors->has('direccion'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('direccion') }}</strong>  
                      </span>

                    @endif

                    
                 
                    <label for="email">Email</label>
                    <input 
                    type="text" name="email"  
                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                    value="{{ old('email') ?: $Egresado->email}}"
                    required
                    autofocus
                    />
                     @if($errors->has('email'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('email') }}</strong>  
                      </span>

                    @endif

                    
                
                    <label for="fechanacimiento">Fecha de Nacimiento</label>
                    <input 
                    type="text" name="fechanacimiento"  
                    class="form-control{{ $errors->has('fechanacimiento') ? ' is-invalid' : '' }}"
                    value="{{ old('fechanacimiento') ?: $Egresado->fechanacimiento}}"
                    required
                    autofocus
                    />
                     @if($errors->has('fechanacimiento'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('fechanacimiento') }}</strong>  
                      </span>

                    @endif

                    
                 
                    <label for="sexo">Sexo</label>
                    <input 
                    type="text" name="sexo"  
                    class="form-control{{ $errors->has('sexo') ? ' is-invalid' : '' }}"
                    value="{{ old('sexo') ?: $Egresado->sexo}}"
                    required
                    autofocus
                    />
                     @if($errors->has('sexo'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('sexo') }}</strong>  
                      </span>

                    @endif

                    
                 
                    <label for="estrato">Estrato</label>
                    <input 
                    type="text" name="estrato"  
                    class="form-control{{ $errors->has('estrato') ? ' is-invalid' : '' }}"
                    value="{{ old('estrato') ?: $Egresado->estrato}}"
                    required
                    autofocus
                    />
                     @if($errors->has('estrato'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('estrato') }}</strong>  
                      </span>

                    @endif

  	               </div>    
  	             
                    <div class="form-group">
                    <label for="usuario">Usuario</label>
                      <select 
                           name="idusuarios"
                            id="idusuarios"
                            class="form-control"
                           >

                            @foreach(\App\User::all()->pluck('email' , 'id') as $id => $User)
                          <option 
                         {{ (int) old('idusuarios') ==$id || $Egresado->idusuarios == $id ? 'selected' : ''}}}
                          value="{{ $id }}">
                       {{ $User}}
                              </option>
                             @endforeach
                    </select>
                 </div>
                    
                    <label for="TipoDocumento">Tipo de Documento</label>
                     <select 
                           name="idtipo_documentos"
                            id="idtipo_documentos"
                            class="form-control"
                           >

                            @foreach(\App\TipoDocumento::all()->pluck('nombre' , 'id') as $id => $TipoDocumento)
                          <option 
                         {{ (int) old('idtipo_documentos') ==$id || $Egresado->idtipo_documentos == $id ? 'selected' : ''}}}
                          value="{{ $id }}">
                       {{ $TipoDocumento}}
                              </option>
                             @endforeach
                    </select>
                
              </label>
  	          </div>     
  	          <button type="submit" name="revision" class="btn btn-primary">Guardar Egresado</button>
              <br>
              <a class="btn btn-primary btn-lg" href="/egresado" role="button">Lista de Egresados</a>
  	    
  	      </div>
  	  </form>
    </div>
  </div>
@endsection
