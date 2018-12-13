@extends('adminlte::layouts.app')

@section('htmlheader_title')

@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-6 offset-md-3">
  	   <form 
  	      method="POST"
  	      action="{{ ! $User->id ? route('User.store'): route('User.update', ['id'=>$User->id]), route('User.destroy', ['id'=>$User->id]), route('User.show', ['id'=>$User->id]), route('User.edit', ['id'=>$User->id]), route('User.getsearch', ['id'=>$User->id]) }}"
  	       novalidate
  	       enctype="multipart/form-data">

  	       @if($User->id)
  	       @method('PUT')
  	       @endif
  	    

  	       @csrf
  	      <div  class="card">
  	         <div class="card-header">
  	             <h2>Crear Usuario</h2>
  	         </div>
  	         <div class="card-body">
  	             <div class="form-group">
  	            	  <label for="email">Email</label>
  	         	      <input 
                    type="text" name="email"  
  	         	      class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
  	         	      value="{{ old('email') ?: $User->email}}"
  	            	  required
  	                autofocus
  	         	      />
  	         	       @if($errors->has('email'))
  	         	       <span class="invalid-feedback">
  	         	            <strong>{{$errors->first('email') }}</strong>	 
  	         	        </span>

  	         	      @endif

                   
                 <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input 

                    type="text" name="password"  
                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                    value="{{ old('password') ?: $User->password}}"
                    required
                    autofocus

                    />
                    <input type="hidden" name="oculto" value="valor">
                     @if($errors->has('password'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('password') }}</strong>  
                      </span>

                    @endif

  	               </div>    
  	              <div class="form-group">
  	            	  <label for="Rol">Rol</label>
  	                  <select 
  	         	             name="idrols"
  	         	              id="idrols"
  	        	              class="form-control"
  	         	             >

  	         	              @foreach(\App\Rol::all()->pluck('nombre' , 'id') as $id => $Rol)
  	         		          <option 
  	         		         {{ (int) old('idrol') ==$id || $User->idrols == $id ? 'selected' : ''}}}
  	         		          value="{{ $id }}">
  	         		    	 {{ $Rol}}
  	         		              </option>
  	         	  	           @endforeach
  	            	  </select>
  	         	   </div>
  	             </div>
  	      </div>
           <button type="submit" name="revision" class="btn btn-primary">Guardar Usuario</button><br>
           <a class="btn btn-primary btn-lg" href="/usuario" role="button">Lista de Usuarios</a>
  	  </form>
    </div>
  </div>
@endsection
