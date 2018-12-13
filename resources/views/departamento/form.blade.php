@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-6 offset-md-3">
  	   <form 
  	      method="POST"
  	      action="{{ ! $Departamento->id ? route('Departamento.store'): route('Departamento.update', ['id'=>$Departamento->id]), route('Departamento.destroy', ['id'=>$Departamento->id]), route('Departamento.show', ['id'=>$Departamento->id]), route('Departamento.edit', ['id'=>$Departamento->id]), route('Departamento.getsearch', ['id'=>$Departamento->id]) }}"
  	       novalidate
  	       enctype="multipart/form-data">

  	       @if($Departamento->id)
  	       @method('PUT')
  	       @endif
  	    

  	       @csrf
  	      <div  class="card">
  	         <div class="card-header">
  	             <h2>Crear Departamento</h2>
  	         </div>
  	         <div class="card-body">
  	             <div class="form-group">
  	            	  <label for="nombre">Nombre</label>
  	         	      <input 
                    type="text" name="nombre"  
  	         	      class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}"
  	         	      value="{{ old('nombre') ?: $Departamento->nombre}}"
  	            	  required
  	                autofocus
  	         	      />
  	         	       @if($errors->has('nombre'))
  	         	       <span class="invalid-feedback">
  	         	            <strong>{{$errors->first('nombre') }}</strong>	 
  	         	        </span>

  	         	      @endif
  	               </div>    
  	              <div class="form-group">
  	            	  <label for="Pais">Pais</label>
  	                  <select 
  	         	             name="idpais"
  	         	              id="idpais"
  	        	              class="form-control"
  	         	             >

  	         	              @foreach(\App\Pais::all()->pluck('name' , 'id') as $id => $Pais)
  	         		          <option 
  	         		         {{ (int) old('idpais') ==$id || $Departamento->idpais == $id ? 'selected' : ''}}}
  	         		          value="{{ $id }}">
  	         		    	 {{ $Pais}}
  	         		              </option>
  	         	  	           @endforeach
  	            	  </select>
  	         	   </div>
  	          </div>     
  	          <button type="submit" name="revision" class="btn btn-primary">Guardar Departamento</button>
              <br>
              <a class="btn btn-primary btn-lg" href="/departamento" role="button">Lista de Departamentos</a>
  	    
  	      </div>
  	  </form>
    </div>
  </div>
@endsection
