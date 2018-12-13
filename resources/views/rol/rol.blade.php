@extends ('layouts.app')

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  <center>
                  <h2>Lista de Roles</h2>
                  </center>
      	  	   @if(!$rol->isEmpty())
      	  	       <table class="table table-bordered table-striped">
      	  	       	  <thead>
      	  	       	  	  <tr>
      	  	       	  	  	<th>Id</th>
      	  	       	  	  	<th>Nombre</th>
                                          <th width="250px">Acciones</th>
      	  	       	  	  </tr>
      	  	       	  </thead>
      	  	       	  @foreach($rol as $Rol)
      	  	       	      <tbody>
      	  	       	      	  <tr>
      	  	       	      	  	  <td>{{$Rol->id}}</td>
      	  	       	      	  	  <td>{{$Rol->nombre}}</td>
                                                  <td> 
                                                      <a  class="btn btn-primary " href="/rol/show/{{$Rol->id}}">Ver</a>
                                                      <a  class="btn btn-warning " href="/rol/edit/{{$Rol->id}}">Editar</a>
                                                      <a  class="btn btn-danger " href="/rol/delete/{{$Rol->id}}">Eliminar</a>
                                                      
                                                  </td>
      	  	       	      	  </tr>

      	  	       	      </tbody>
      	  	       	  @endforeach
                     <div class="input-group">
                      <form action="{{ route('Rol.getsearch')  }}" method="post" id="search-form" >
                        @csrf
                        <input type="text" class="form-control" name="id"  placeholder="Buscar">
                        <input class="btn btn-primary btn-lg" type="submit" value="Buscar">
                      </form>
                      </div>  
      	  	       </table>
                          <a  class="btn btn-primary btn-lg" href="/rol/create" role="button">Nuevo Rol</a>
      	  	    @else
      	  	       <div class="jumbotron">
      	  	       	    <h1 class="display-4"> No hay roles en el sistema</h1>
      	  	       	    <p class="lead">Deberias registrar uno para el correcto funcionamiento de la aplicacion.</p>
                        <hr class="lead">
                        <a  class="btn btn-primary btn-lg" href="/rol/create" role="button">Crear Rol </a>
      	  	       </div> 
      	  	    @endif
      	  	</div>
      	</div>
    
    @endsection  	  	    