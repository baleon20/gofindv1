@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-6 offset-md-3">
  	   <form 
  	      method="POST"
  	      action="{{ ! $Ciudad->id ? route('Ciudad.store'): route('Ciudad.update', ['id'=>$Ciudad->id]), route('Ciudad.destroy', ['id'=>$Ciudad->id]), route('Ciudad.show', ['id'=>$Ciudad->id]), route('Ciudad.edit', ['id'=>$Ciudad->id, route('Ciudad.getsearch', ['id'=>$Ciudad->id]), route('Ciudad.getsearch', ['id' => $Ciudad->id]) }}"
  	       novalidate
  	       enctype="multipart/form-data">

  	       @if($Ciudad->id)
  	       @method('PUT')
  	       @endif
  	    

  	       @csrf
  	      <div  class="card">
  	         <div class="card-header">
  	             <h2>Crear Ciudades</h2>
  	         </div>
  	         <div class="card-body">
  	             <div class="form-group">
  	            	  <label for="nombre">Nombre</label>
  	         	      <input 
                    type="text" name="nombre"  
  	         	      class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}"
  	         	      value="{{ old('nombre') ?: $Ciudad->nombre}}"
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
  	            	  <label for="Departamento">Departamento</label>
  	                  <select 
  	         	             name="iddepartamento"
  	         	              id="iddepartamento"
  	        	              class="form-control"
  	         	             >

  	         	              @foreach(\App\Departamento::all()->pluck('nombre' , 'id') as $id => $Departamento)
  	         		          <option 
  	         		         {{ (int) old('iddepartamento') ==$id || $Ciudad->iddepartamento == $id ? 'selected' : ''}}}
  	         		          value="{{ $id }}">
  	         		    	 {{ $Departamento}}
  	         		              </option>
  	         	  	           @endforeach
  	            	  </select>
  	         	   </div>
                 
  	          </div>     
  	          <button type="submit" name="revision" class="btn btn-primary">Guardar Ciudad</button>
              <br>
              <a class="btn btn-primary btn-lg" href="/ciudad" role="button">Lista de Ciudades</a>
  	    
  	      </div>
  	  </form>
    </div>
  </div>
@endsection
