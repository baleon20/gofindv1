@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-6 offset-md-3">
  	   <form 
  	      method="POST"
  	      action="{{ ! $Ficha->id ? route('Ficha.store'): route('Ficha.update', ['id'=>$Ficha->id]), route('Ficha.destroy', ['id'=>$Ficha->id]), route('Ficha.show', ['id'=>$Ficha->id]), route('Ficha.edit', ['id'=>$Ficha->id]), route('Ficha.getsearch', ['id'=>$Ficha->id]) }}"
  	       novalidate
  	       enctype="multipart/form-data">

  	       @if($Ficha->id)
  	       @method('PUT')
  	       @endif
  	    

  	       @csrf
  	      <div  class="card">
  	         <div class="card-header">
  	            <center><h2>Crear Ficha</h2></center>
  	         </div>
  	            <div class="card-body">
  	             <div class="form-group">
                  <label for="fechainicio">Fecha de Iniciacion</label>
                    <input 
                    type="text" name="fechainicio"  
                    class="form-control{{ $errors->has('fechainicio') ? ' is-invalid' : '' }}"
                    value="{{ old('fechainicio') ?: $Ficha->fechainicio}}"
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
                    value="{{ old('fechafinal') ?: $Ficha->fechafinal}}"
                    required
                    autofocus
                    />
                     @if($errors->has('fechafinal'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('fechafinal') }}</strong>   
                      </span>

                    @endif
  	               </div>   

  	              <div class="form-group">
  	            	  <label for="Programa">Programa</label>
  	                  <select 
  	         	             name="idprogramas"
  	         	              id="idprogramas"
  	        	              class="form-control"
  	         	             >

  	         	              @foreach(\App\Programa::all()->pluck('nombre' , 'id') as $id => $Programa)
  	         		          <option 
  	         		         {{ (int) old('idprogramas') ==$id || $Ficha->idprogramas == $id ? 'selected' : ''}}}
  	         		          value="{{ $id }}">
  	         		    	 {{ $Programa}}
  	         		              </option>
  	         	  	           @endforeach
  	            	  </select>
  	         	   </div>
  	          </div>     
  	          <button type="submit" name="revision" class="btn btn-primary">Guardar Ficha</button>
              <br>
              <a class="btn btn-primary btn-lg" href="/ficha" role="button">Lista de Fichas</a>
  	    
  	      </div>
  	  </form>
    </div>
  </div>
@endsection
