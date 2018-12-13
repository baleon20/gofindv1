@extends ('layouts.app')

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  <center>
                  <h2>Lista de Tipo de Documentos</h2>
                  </center>
      	  	   @if(!$tipodocumento->isEmpty())
      	  	       <table class="table table-bordered table-striped">
      	  	       	  <thead>
      	  	       	  	  <tr>
      	  	       	  	  	<th>Id</th>
      	  	       	  	  	<th>Nombre</th>
                                          <th>Acciones</th>
      	  	       	  	  </tr>
      	  	       	  </thead>
      	  	       	  @foreach($tipodocumento as $TipoDocumento)
      	  	       	      <tbody>
      	  	       	      	  <tr>
      	  	       	      	  	  <td>{{$TipoDocumento->id}}</td>
      	  	       	      	  	  <td>{{$TipoDocumento->nombre}}</td>
                                                  <td> 
                                                      <a  class="btn btn-primary " href="/tipodocumento/show/{{$TipoDocumento->id}}">Ver</a>
                                                      <a  class="btn btn-warning " href="/tipodocumento/edit/{{$TipoDocumento->id}}">Editar</a>
                                                      <a  class="btn btn-danger " href="/tipodocumento/delete/{{$TipoDocumento->id}}">Eliminar</a>
                                                      
                                                  </td>
      	  	       	      	  </tr>

      	  	       	      </tbody>
      	  	       	  @endforeach
                                          <div class="input-group">
                      <form action="{{ route('TipoDocumento.getsearch')  }}" method="post" id="search-form" >
                        @csrf
                        <input type="text" class="form-control" name="id"  placeholder="Buscar">
                        <input class="btn btn-primary btn-lg" type="submit" value="Buscar">
                      </form>
                      </div>  
      	  	       </table>
                          <a  class="btn btn-primary btn-lg" href="/tipodocumento/create" role="button">Nuevo Tipo de Documento</a>
      	  	    @else
      	  	       <div class="jumbotron">
      	  	       	    <h1 class="display-4"> No hay tipo de documento en el sistema</h1>
      	  	       	    <p class="lead">Deberias registrar uno para el correcto funcionamiento de la aplicacion.</p>
                       <a  class="btn btn-primary btn-lg" href="/tipodocumento/create" role="button">Nuevo Tipo de Documento</a>
      	  	       	    
      	  	        	</p>
      	  	       	
      	  	       </div> 
      	  	    @endif
      	  	</div>
      	</div>
    
    @endsection  	  	    