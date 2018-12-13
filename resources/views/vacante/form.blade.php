@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-6 offset-md-3">
  	   <form 
  	      method="POST"
  	      action="{{ ! $Vacante->id ? route('vacante.store'): route('vacante.update', ['id'=>$Vacante->id]), route('vacante.destroy', ['id'=>$Vacante->id]), route('vacante.show', ['id'=>$Vacante->id]), route('vacante.edit', ['id'=>$Vacante->id]),
          route('vacante.getsearch', ['id'=>$Vacante->id])  }}"
  	       novalidate
  	       enctype="multipart/form-data">

  	       @if($Vacante->id)
  	       @method('PUT')
  	       @endif
  	    

  	       @csrf
  	      <div  class="card">
  	         <div class="card-header">
  	             <h2>Crear Vacante</h2>
  	         </div>
  	         <div class="card-body">
  	             <div class="form-group">
  	            	  <label for="nombre">Nombre</label>
  	         	      <input 
                    type="text" name="nombre"  
  	         	      class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}"
  	         	      value="{{ old('nombre') ?: $Vacante->nombre}}"
  	            	  required
  	                autofocus
  	         	      />
  	         	       @if($errors->has('nombre'))
  	         	       <span class="invalid-feedback">
  	         	            <strong>{{$errors->first('nombre') }}</strong>	 
  	         	        </span>

  	         	      @endif

                    
                    <label for="fechainicio">Fecha de Inicio</label>
                    <input 
                    type="text" name="fechainicio"  
                    class="form-control{{ $errors->has('fechainicio') ? ' is-invalid' : '' }}"
                    value="{{ old('fechainicio') ?: $Vacante->fechainicio}}"
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
                    value="{{ old('fechafinal') ?: $Vacante->fechafinal}}"
                    required
                    autofocus
                    />
                     @if($errors->has('fechafinal'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('fechafinal') }}</strong>  
                      </span>

                    @endif

                   
                    <label for="descripcion">Descripcion</label>
                    <input 
                    type="text" name="descripcion"  
                    class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}"
                    value="{{ old('descripcion') ?: $Vacante->descripcion}}"
                    required
                    autofocus
                    />
                     @if($errors->has('descripcion'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('descripcion') }}</strong>  
                      </span>

                    @endif

                    
                    <label for="requisito">Requisito</label>
                    <input 
                    type="text" name="requisito"  
                    class="form-control{{ $errors->has('requisito') ? ' is-invalid' : '' }}"
                    value="{{ old('requisito') ?: $Vacante->requisito}}"
                    required
                    autofocus
                    />
                     @if($errors->has('requisito'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('requisito') }}</strong>  
                      </span>

                    @endif

                    
                    <label for="candidatos">Candidatos</label>
                    <input 
                    type="text" name="candidatos"  
                    class="form-control{{ $errors->has('candidatos') ? ' is-invalid' : '' }}"
                    value="{{ old('candidatos') ?: $Vacante->candidatos}}"
                    required
                    autofocus
                    />
                     @if($errors->has('candidatos'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('candidatos') }}</strong>  
                      </span>

                    @endif

                    
                    <label for="rangosalarial">Rango Salarial</label>
                    <input 
                    type="text" name="rangosalarial"  
                    class="form-control{{ $errors->has('rangosalarial') ? ' is-invalid' : '' }}"
                    value="{{ old('rangosalarial') ?: $Vacante->rangosalarial}}"
                    required
                    autofocus
                    />
                     @if($errors->has('rangosalarial'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('rangosalarial') }}</strong>  
                      </span>

                    @endif

  	            	  <label for="ciudad">Ciudad</label>
  	                  <select 
  	         	             name="idciudad"
  	         	              id="idciudad"
  	        	              class="form-control"
  	         	             >

  	         	              @foreach(\App\Ciudad::all()->pluck('nombre' , 'id') as $id => $Ciudad)
  	         		          <option 
  	         		         {{ (int) old('idciudad') ==$id || $Vacante->idciudad == $id ? 'selected' : ''}}}
  	         		          value="{{ $id }}">
  	         		    	 {{ $Ciudad}}
  	         		              </option>
  	         	  	           @endforeach
  	            	  </select>
  	         	  
                    <label for="empresa">Empresa</label>
                      <select 
                           name="idempresas"
                            id="idempresas"
                            class="form-control"
                           >

                            @foreach(\App\Empresa::all()->pluck('nombre' , 'id') as $id => $Empresa)
                          <option 
                         {{ (int) old('idempresas') ==$id || $Vacante->idempresas == $id ? 'selected' : ''}}}
                          value="{{ $id }}">
                       {{ $Empresa}}
                              </option>
                             @endforeach
                    </select>
                 
                    <label for="area">Area</label>
                      <select 
                           name="idareas"
                            id="idareas"
                            class="form-control"
                           >

                            @foreach(\App\Area::all()->pluck('nombre' , 'id') as $id => $Area)
                          <option 
                         {{ (int) old('idareas') ==$id || $Vacante->idareas == $id ? 'selected' : ''}}}
                          value="{{ $id }}">
                       {{ $Area}}
                              </option>
                             @endforeach
                    </select>
                 </div>

  	          </div>     
  	          <button type="submit" name="revision" class="btn btn-primary">Guardar Vacante</button>
              <br>
              <a class="btn btn-primary btn-lg" href="/vacante" role="button">Lista de Vacantes</a>
  	    
  	      </div>
  	  </form>
    </div>
  </div>
@endsection
