@extends ('layouts.app')

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  <center>
                  <h2>Lista de Nivel de Estudios</h2>
                  </center>
      	  	   @if(!$nivelestudio->isEmpty())
      	  	       <table class="table table-bordered table-striped">
      	  	       	  <thead>
      	  	       	  	  <tr>
      	  	       	  	  	<th>Id</th>
      	  	       	  	  	<th>Nombre</th>
                                          <th>Acciones</th>
      	  	       	  	  </tr>
      	  	       	  </thead>
      	  	       	  @foreach($nivelestudio as $NivelEstudio)
      	  	       	      <tbody>
      	  	       	      	  <tr>
      	  	       	      	  	  <td>{{$NivelEstudio->id}}</td>
      	  	       	      	  	  <td>{{$NivelEstudio->nombre}}</td>
                                                  <td> 
                                                      <a  class="btn btn-primary " href="/nivelestudio/show/{{$NivelEstudio->id}}">Ver</a>
                                                      <a  class="btn btn-warning " href="/nivelestudio/edit/{{$NivelEstudio->id}}">Editar</a>
                                                      <a  class="btn btn-danger " href="/nivelestudio/delete/{{$NivelEstudio->id}}">Eliminar</a>
                                                      
                                                  </td>
      	  	       	      	  </tr>

      	  	       	      </tbody>
      	  	       	  @endforeach
                     <div class="input-group">
                      <form action="{{ route('NivelEstudio.getsearch')  }}" method="post" id="search-form" >
                        @csrf
                        <input type="text" class="form-control" name="id"  placeholder="Buscar">
                        <input class="btn btn-primary btn-lg" type="submit" value="Buscar">
                      </form>
                      </div>  
      	  	       </table>
                          <a  class="btn btn-primary btn-lg" href="/nivelestudio/create" role="button">Nuevo Nivel de Estudio</a>
      	  	    @else
      	  	       <div class="jumbotron">
      	  	       	    <h1 class="display-4"> No hay Nivel de Estudio en el sistema</h1>
      	  	       	    <p class="lead">Deberias registrar uno para el correcto funcionamiento de la aplicacion.</p>
      	  	       	<a  class="btn btn-primary btn-lg" href="/nivelestudio/create" role="button">Nuevo Nivel de Estudio</a>
      	  	       </div> 
      	  	    @endif
      	  	</div>
      	</div>
    
    @endsection  	  	    
