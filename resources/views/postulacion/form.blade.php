@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-6 offset-md-3">
  	   <form 
  	      method="POST"
  	      action="{{ ! $Postulacion->id ? route('Postulacion.store'): route('Postulacion.update', ['id'=>$Postulacion->id]), route('Postulacion.destroy', ['id'=>$Postulacion->id]), route('Postulacion.show', ['id'=>$Postulacion->id]), route('Postulacion.edit', ['id'=>$Postulacion->id]), route('Postulacion.getsearch', ['id'=>$Postulacion->id]) }}"
  	       novalidate
  	       enctype="multipart/form-data">

  	       @if($Postulacion->id)
  	       @method('PUT')
  	       @endif
  	    

  	       @csrf
  	      <div  class="card">
  	         <div class="card-header">
  	             <h2>Crear Postulacion</h2>
  	         </div>
  	         <div class="card-body">
  	             <div class="form-group">
  	            	  <label for="fechapostulacion">Fecha de Postulacion</label>
  	         	      <input 
                    type="text" name="fechapostulacion"  
  	         	      class="form-control{{ $errors->has('fechapostulacion') ? ' is-invalid' : '' }}"
  	         	      value="{{ old('fechapostulacion') ?: $Postulacion->fechapostulacion}}"
  	            	  required
  	                autofocus
  	         	      />
  	         	       @if($errors->has('fechapostulacion'))
  	         	       <span class="invalid-feedback">
  	         	            <strong>{{$errors->first('fechapostulacion') }}</strong>	 
  	         	        </span>

  	         	      @endif
  	               </div>    
  	              <div class="form-group">
  	            	  <label for="vacante">Vacante</label>
  	                  <select 
  	         	             name="idvacantes"
  	         	              id="idvacantes"
  	        	              class="form-control"
  	         	             >

  	         	              @foreach(\App\Vacante::all()->pluck('nombre' , 'id') as $id => $Vacante)
  	         		          <option 
  	         		         {{ (int) old('idvacantes') ==$id || $Postulacion->idvacantes == $id ? 'selected' : ''}}}
  	         		          value="{{ $id }}">
  	         		    	 {{ $Vacante}}
  	         		              </option>
  	         	  	           @endforeach
  	            	  </select>
  	         	   </div>    
                  <div class="form-group">
                    <label for="egresado">Egresado</label>
                      <select 
                           name="idegresados"
                            id="idegresados"
                            class="form-control"
                           >

                            @foreach(\App\Egresado::all()->pluck('nombre' , 'id') as $id => $Egresado)
                          <option 
                         {{ (int) old('idegresados') ==$id || $Postulacion->idegresados == $id ? 'selected' : ''}}}
                          value="{{ $id }}">
                       {{ $Egresado}}
                              </option>
                             @endforeach
                    </select>
                 </div>
  	          </div>     
  	          <button type="submit" name="revision" class="btn btn-primary">Guardar Postulacion</button>
              <br>
              <a class="btn btn-primary btn-lg" href="/postulacion" role="button">Lista de Postulaciones</a>
  	    
  	      </div>
  	  </form>
    </div>
  </div>
@endsection
