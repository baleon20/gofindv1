@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-6 offset-md-3">
  	   <form 
  	      method="POST"
  	      action="{{ ! $Empresa->id ? route('Empresa.store'): route('Empresa.update', ['id'=>$Empresa->id]), route('Empresa.destroy', ['id'=>$Empresa->id]), route('Empresa.show', ['id'=>$Empresa->id]), route('Empresa.edit', ['id'=>$Empresa->id]), route('Empresa.getsearch', ['id'=>$Empresa->id]) }}"
  	       novalidate
  	       enctype="multipart/form-data">

  	       @if($Empresa->id)
  	       @method('PUT')
  	       @endif
  	    

  	       @csrf
  	      <div  class="card">
  	         <div class="card-header">
  	             <h2>Crear Empresa</h2>
  	         </div>
  	         <div class="card-body">
  	             <div class="form-group">
  	            	  <label for="nombre">Nombre</label>
  	         	      <input 
                    type="text" name="nombre"  
  	         	      class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}"
  	         	      value="{{ old('nombre') ?: $Empresa->nombre}}"
  	            	  required
  	                autofocus
  	         	      />
  	         	       @if($errors->has('nombre'))
  	         	       <span class="invalid-feedback">
  	         	            <strong>{{$errors->first('nombre') }}</strong>	 
  	         	        </span>

  	         	      @endif

                    
                 <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input 
                    type="text" name="telefono"  
                    class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}"
                    value="{{ old('telefono') ?: $Empresa->telefono}}"
                    required
                    autofocus
                    />
                     @if($errors->has('telefono'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('telefono') }}</strong>  
                      </span>

                    @endif

  	               </div>    
                   
                 <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input 
                    type="text" name="direccion"  
                    class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}"
                    value="{{ old('direccion') ?: $Empresa->direccion}}"
                    required
                    autofocus
                    />
                     @if($errors->has('direccion'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('direccion') }}</strong>  
                      </span>

                    @endif

                   </div>  
                 <div class="form-group">
                    <label for="NIT">NIT</label>
                    <input 
                    type="text" name="NIT"  
                    class="form-control{{ $errors->has('NIT') ? ' is-invalid' : '' }}"
                    value="{{ old('NIT') ?: $Empresa->NIT}}"
                    required
                    autofocus
                    />
                     @if($errors->has('NIT'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('NIT') }}</strong>  
                      </span>

                    @endif

                   
  	         	   </div>
                 <div class="form-group">
                    <label for="usuario">Usuario</label>
                      <select 
                           name="idusuario"
                            id="idusuario"
                            class="form-control"
                           >

                            @foreach(\App\User::all()->pluck('email' , 'id') as $id => $User)
                          <option 
                         {{ (int) old('idusuario') ==$id || $Empresa->idusuario == $id ? 'selected' : ''}}}
                          value="{{ $id }}">
                       {{ $User}}
                              </option>
                             @endforeach
                    </select>
                 </div>
                </div>
  	          </div>     
  	          <button type="submit" name="revision" class="btn btn-primary">Guardar Empresa</button>
              <br>
              <a class="btn btn-primary btn-lg" href="/empresa" role="button">Lista de Empresas</a>
  	    
  	      </div>
  	  </form>
    </div>
  </div>
@endsection
