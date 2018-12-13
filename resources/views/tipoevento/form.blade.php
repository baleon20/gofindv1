@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-6 offset-md-3">
  	   <form 
  	      method="POST"
  	      action="{{ ! $TipoEvento->id ? route('TipoEvento.store'): route('TipoEvento.update', ['id'=>$TipoEvento->id]), route('TipoEvento.destroy', ['id'=>$TipoEvento->id]), route('TipoEvento.show', ['id'=>$TipoEvento->id]), route('TipoEvento.edit', ['id'=>$TipoEvento->id]), route('TipoEvento.getsearch', ['id'=>$TipoEvento->id]) }}"
  	       novalidate
  	       enctype="multipart/form-data">

  	       @if($TipoEvento->id)
  	       @method('PUT')
  	       @endif
  	    

  	       @csrf
  	      <div  class="card">
  	         <div class="card-header">
  	             <h2>Crear Tipo de Eventos</h2>
  	         </div>
  	         <div class="card-body">
  	             <div class="form-group">
  	            	  <label for="nombre">Nombre</label>
  	         	      <input 
                    type="text" name="nombre"  
  	         	      class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}"
  	         	      value="{{ old('nombre') ?: $TipoEvento->nombre}}"
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
  	            	  <label for="evento">Evento</label>
  	                  <select 
  	         	             name="ideventos"
  	         	              id="ideventos"
  	        	              class="form-control"
  	         	             >

  	         	              @foreach(\App\Evento::all()->pluck('nombre' , 'id') as $id => $Evento)
  	         		          <option 
  	         		         {{ (int) old('ideventos') ==$id || $TipoEvento->ideventos == $id ? 'selected' : ''}}}
  	         		          value="{{ $id }}">
  	         		    	 {{ $Evento}}
  	         		              </option>
  	         	  	           @endforeach
  	            	  </select>
  	         	   </div>
  	          </div>     
  	          <button type="submit" name="revision" class="btn btn-primary">Guardar Tipo de Evento</button>
              <br>
              <a class="btn btn-primary btn-lg" href="/tipoevento" role="button">Lista de Tipos de Eventos</a>
  	    
  	      </div>
  	  </form>
    </div>
  </div>
@endsection
