@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-6 offset-md-3">
  	   <form 
  	      method="POST"
  	      action="{{ ! $Experiencia->id ? route('Experiencia.store'): route('Experiencia.update', ['id'=>$Experiencia->id]), route('Experiencia.destroy', ['id'=>$Experiencia->id]), route('Experiencia.show', ['id'=>$Experiencia->id]), route('Experiencia.edit', ['id'=>$Experiencia->id]), route('Experiencia.getsearch', ['id'=>$Experiencia->id]) }}"
  	       novalidate
  	       enctype="multipart/form-data">

  	       @if($Experiencia->id)
  	       @method('PUT')
  	       @endif
  	    

  	       @csrf
  	      <div  class="card">
  	         <div class="card-header">
  	             <h2>Crear Experiencia</h2>
  	         </div>
  	         <div class="card-body">
  	             <div class="form-group">
  	            	  <label for="organizacion">Organizacion</label>
  	         	      <input 
                    type="text" name="organizacion"  
  	         	      class="form-control{{ $errors->has('organizacion') ? ' is-invalid' : '' }}"
  	         	      value="{{ old('organizacion') ?: $Experiencia->organizacion}}"
  	            	  required
  	                autofocus
  	         	      />
  	         	       @if($errors->has('organizacion'))
  	         	       <span class="invalid-feedback">
  	         	            <strong>{{$errors->first('organizacion') }}</strong>	 
  	         	        </span>

  	         	      @endif
  	                   
                 
                    <label for="fechainicio">Fecha de Inicio</label>
                    <input 
                    type="text" name="fechainicio"  
                    class="form-control{{ $errors->has('fechainicio') ? ' is-invalid' : '' }}"
                    value="{{ old('fechainicio') ?: $Experiencia->fechainicio}}"
                    required
                    autofocus
                    />
                     @if($errors->has('fechainicio'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('fechainicio') }}</strong>   
                      </span>

                    @endif
                      
                  
                    <label for="fechafinal">Fecha de Finalizacion</label>
                    <input 
                    type="text" name="fechafinal"  
                    class="form-control{{ $errors->has('fechafinal') ? ' is-invalid' : '' }}"
                    value="{{ old('fechafinal') ?: $Experiencia->fechafinal}}"
                    required
                    autofocus
                    />
                     @if($errors->has('fechafinal'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('fechafinal') }}</strong>   
                      </span>

                    @endif
                      
                   
                    <label for="cargo">Cargo</label>
                    <input 
                    type="text" name="cargo"  
                    class="form-control{{ $errors->has('cargo') ? ' is-invalid' : '' }}"
                    value="{{ old('cargo') ?: $Experiencia->cargo}}"
                    required
                    autofocus
                    />
                     @if($errors->has('cargo'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('cargo') }}</strong>   
                      </span>

                    @endif
                  
                    <label for="descripcion">Descripcion</label>
                    <input 
                    type="text" name="descripcion"  
                    class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}"
                    value="{{ old('descripcion') ?: $Experiencia->descripcion}}"
                    required
                    autofocus
                    />
                     @if($errors->has('descripcion'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('descripcion') }}</strong>   
                      </span>

                    @endif
                   
                    <label for="adjunto">Adjunto</label>
                    <input 
                    type="text" name="adjunto"  
                    class="form-control{{ $errors->has('adjunto') ? ' is-invalid' : '' }}"
                    value="{{ old('adjunto') ?: $Experiencia->adjunto}}"
                    required
                    autofocus
                    />
                     @if($errors->has('adjunto'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('adjunto') }}</strong>   
                      </span>

                    @endif
                  
  	            	  <label for="egresado">Egresado</label>
  	                  <select 
  	         	             name="idegresados"
  	         	              id="idegresados"
  	        	              class="form-control"
  	         	             >

  	         	              @foreach(\App\Egresado::all()->pluck('nombre' , 'id') as $id => $Egresado)
  	         		          <option 
  	         		         {{ (int) old('idegresados') ==$id || $Experiencia->idegresados == $id ? 'selected' : ''}}}
  	         		          value="{{ $id }}">
  	         		    	 {{ $Egresado}}
  	         		              </option>
  	         	  	           @endforeach
  	            	  </select>
  	         	   </div>
  	          </div>     
  	          <button type="submit" name="revision" class="btn btn-primary">Guardar Experiencia</button>
              <br>
              <a class="btn btn-primary btn-lg" href="/experiencia" role="button">Lista de Experiencias</a>
  	    
  	      </div>
  	  </form>
    </div>
  </div>
@endsection