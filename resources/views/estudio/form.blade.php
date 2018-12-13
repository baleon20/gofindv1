@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-6 offset-md-3">
       <form 
          method="POST"
          action="{{ ! $Estudio->id ? route('Estudio.store') : route('Estudio.update', ['id' => $Estudio->id]), route('Estudio.destroy', ['id' => $Estudio->id]),  route('Estudio.show', ['id' => $Estudio->id]),  route('Estudio.edit', ['id' => $Estudio->id]), route('Estudio.getsearch', ['id'=>$Estudio->id]) }}"
           novalidate
           enctype="multipart/form-data">

           @if($Estudio->id)
           @method('PUT')
           @endif
        

           @csrf
          <div  class="card">
             <div class="card-header">
                 <h2>Crear Estudio</h2>
             </div>
             <div class="card-body">
                 <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input 
                    type="text" name="titulo"  
                    class="form-control{{ $errors->has('titulo') ? ' is-invalid' : '' }}"
                    value="{{ old('titulo') ?: $Estudio->titulo}}"
                    required
                    autofocus
                    />
                     @if($errors->has('titulo'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('titulo') }}</strong>   
                      </span>

                    @endif

                  
                 <div class="form-group">
                    <label for="institucion">Institucion</label>
                    <input 
                    type="text" name="institucion"  
                    class="form-control{{ $errors->has('institucion') ? ' is-invalid' : '' }}"
                    value="{{ old('institucion') ?: $Estudio->institucion}}"
                    required
                    autofocus
                    />
                     @if($errors->has('institucion'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('institucion') }}</strong>  
                      </span>

                    @endif

                   
                 <div class="form-group">
                    <label for="duracion">Duracion</label>
                    <input 
                    type="text" name="duracion"  
                    class="form-control{{ $errors->has('duracion') ? ' is-invalid' : '' }}"
                    value="{{ old('duracion') ?: $Estudio->duracion}}"
                    required
                    autofocus
                    />
                     @if($errors->has('duracion'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('duracion') }}</strong>  
                      </span>

                    @endif

                    
                 <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input 
                    type="text" name="fecha"  
                    class="form-control{{ $errors->has('fecha') ? ' is-invalid' : '' }}"
                    value="{{ old('fecha') ?: $Estudio->fecha}}"
                    required
                    autofocus
                    />
                     @if($errors->has('fecha'))
                     <span class="invalid-feedback">
                          <strong>{{$errors->first('fecha') }}</strong>  
                      </span>

                    @endif

                     
                  <div class="form-group">
                    <label for="egresado">Egresado</label>
                      <select 
                           name="idegresados"
                            id="idegresados"
                            class="form-control"
                           >

                            @foreach(\App\Egresado::all()->pluck('nombre' , 'id') as $id => $Egresado)
                          <option 
                         {{ (int) old('idegresados') ==$id || $Estudio->idegresados == $id ? 'selected' : ''}}}
                          value="{{ $id }}">
                       {{ $Egresado}}
                              </option>
                             @endforeach
                    </select>
                 </div>
                 <div class="form-group">
                    <label for="nivelestudio">Nivel de Estudio</label>
                      <select 
                           name="idnivel_estudios"
                            id="idnivel_estudios"
                            class="form-control"
                           >

                            @foreach(\App\NivelEstudio::all()->pluck('nombre' , 'id') as $id => $NivelEstudio)
                          <option 
                         {{ (int) old('idnivel_estudios') ==$id || $Estudio->idnivel_estudios == $id ? 'selected' : ''}}}
                          value="{{ $id }}">
                       {{ $NivelEstudio}}
                              </option>
                             @endforeach
                    </select>
               </div>
              </div>    
              </div>
              </div> 
            </div>
             </div>

              <button type="submit" name="revision" class="btn btn-primary">Guardar Estudio</button>
              <br>
              <a class="btn btn-primary btn-lg" href="/estudio" role="button">Lista de Estudios</a>
        
          </div>
      </form>
    </div>
  </div>
@endsection
