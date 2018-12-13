@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-6 offset-md-3">
  	   <form 
  	      method="POST"
  	      action="{{ ! $FichaEgresado->id ? route('FichaEgresado.store'): route('FichaEgresado.update', ['id'=>$FichaEgresado->id]), route('FichaEgresado.destroy', ['id'=>$FichaEgresado->id]), route('FichaEgresado.show', ['id'=>$FichaEgresado->id]), route('FichaEgresado.edit', ['id'=>$FichaEgresado->id]), route('FichaEgresado.getsearch', ['id'=>$FichaEgresado->id]) }}"
  	       novalidate
  	       enctype="multipart/form-data">

  	       @if($FichaEgresado->id)
  	       @method('PUT')
  	       @endif
  	    

  	       @csrf
  	      <div  class="card">
  	         <div class="card-header">
  	             <h2>Crear Ficha de Egresado</h2>
  	         </div>
  	         <div class="card-body">
  	             <div class="form-group">
  	            	  <label for="fechaegresado">Fecha de egreso</label>
  	         	      <input 
                    type="text" name="fechaegresado"  
  	         	      class="form-control{{ $errors->has('fechaegresado') ? ' is-invalid' : '' }}"
  	         	      value="{{ old('fechaegresado') ?: $FichaEgresado->fechaegresado}}"
  	            	  required
  	                autofocus
  	         	      />
  	         	       @if($errors->has('fechaegresado'))
  	         	       <span class="invalid-feedback">
  	         	            <strong>{{$errors->first('fechaegresado') }}</strong>	 
  	         	        </span>

  	         	      @endif
                   
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
  	         		         {{ (int) old('idegresados') ==$id || $FichaEgresado->idegresados == $id ? 'selected' : ''}}}
  	         		          value="{{ $id }}">
  	         		    	 {{ $Egresado}}
  	         		              </option>
  	         	  	           @endforeach
  	            	  </select>
  	         	   </div>
                 <div class="form-group">
                    <label for="ficha">Ficha</label>
                      <select 
                           name="idfichas"
                            id="idfichas"
                            class="form-control"
                           >

                            @foreach(\App\Ficha::all()->pluck('nombre' , 'id') as $id => $Ficha)
                          <option 
                         {{ (int) old('idfichas') ==$id || $FichaEgresado->idfichas == $id ? 'selected' : ''}}}
                          value="{{ $id }}">
                       {{ $Ficha}}
                              </option>
                             @endforeach
                    </select>
                 </div>
  	          </div>     
  	          <button type="submit" name="revision" class="btn btn-primary">Guardar Ficha de Egresado</button>
              <br>
              <a class="btn btn-primary btn-lg" href="/fichaegresado" role="button">Lista de Ficha de Egresados</a>
  	    
  	      </div>
  	  </form>
    </div>
  </div>
@endsection