 @extends ('layouts.app')

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  <center>
                  <h2>Lista de Eventos</h2>
                  </center>
      	  	   @if(!$evento->isEmpty())
      	  	       <table class="table table-bordered table-striped">
      	  	       	  <thead>
      	  	       	  	  <tr>
      	  	       	  	  	<th>Id</th>
      	  	       	  	  	<th>Nombre</th>
                                          <th>Descripcion</th>
                                          <th>Fecha Evento</th>
                                          <th>Lugar</th>
                                          <th>Direccion</th>

                                          <th>Acciones</th>
      	  	       	  	  </tr>
      	  	       	  </thead>
      	  	       	  @foreach($evento as $Evento)
      	  	       	      <tbody>
      	  	       	      	  <tr>
      	  	       	      	  	  <td>{{$Evento->id}}</td>
      	  	       	      	  	  <td>{{$Evento->nombre}}</td>
                                                  <td>{{$Evento->descripcion}}</td>
                                                  <td>{{$Evento->fechaevento}}</td>
                                                  <td>{{$Evento->lugar}}</td>
                                                  <td>{{$Evento->direccion}}</td>
                                                  <td> 
                                                      <a  class="btn btn-primary " href="/evento/show/{{$Evento->id}}">Ver</a>
                                                      <a  class="btn btn-warning " href="/evento/edit/{{$Evento->id}}">Editar</a>
                                                      <a  class="btn btn-danger " href="/evento/delete/{{$Evento->id}}">Eliminar</a>
                                                      
                                                  </td>
      	  	       	      	  </tr>

      	  	       	      </tbody>
      	  	       	  @endforeach
                      <div class="input-group">
                      <form action="{{ route('Evento.getsearch')  }}" method="post" id="search-form" >
                        @csrf
                        <input type="text" class="form-control" name="id"  placeholder="Buscar">
                        <input class="btn btn-primary btn-lg" type="submit" value="Buscar">
                      </form>
                      </div>  
      	  	       </table>
                          
      	  	    @else
      	  	       <div class="jumbotron">
      	  	       	    <h1 class="display-4"> No hay eventos en el sistema</h1>
      	  	       	    <p class="lead">Deberias registrar uno para el correcto funcionamiento de la aplicacion.</p>

      	  	       	    <hr class="lead">
      	  	       	    <a  class="btn btn-primary btn-lg" href="/evento/create" role="button">Crear Evento</a>
      	  	        	</p>
      	  	       	
      	  	       </div> 
      	  	    @endif
      	  	</div>
      	</div>
    
    @endsection 