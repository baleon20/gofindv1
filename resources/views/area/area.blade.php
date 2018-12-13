@extends ('layouts.app')

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  <center>
                  <h2>Lista de Areas</h2>
                  </center>
      	  	   @if(!$area->isEmpty())
      	  	       <table class="table table-bordered table-striped">
      	  	       	  <thead>
      	  	       	  	  <tr>
      	  	       	  	  	<th>Id</th>
      	  	       	  	  	<th>Nombre</th>
                        <th width="250px">Acciones</th> 
      	  	       	  	  </tr>
      	  	       	  </thead>
                                <tbody>
      	  	       	  @foreach($area as $Area)
      	  	       	      
      	  	       	      	  <tr>
      	  	       	      	  	  <td>{{$Area->id}}</td>
      	  	       	      	  	  <td>{{$Area->nombre}}</td>
                                                  <td> 
                                                      <a  class="btn btn-primary " href="/area/show/{{$Area->id}}">Ver</a>
                                                      <a  class="btn btn-warning " href="/area/edit/{{$Area->id}}">Editar</a>
                                                      <a  class="btn btn-danger " href="/area/delete/{{$Area->id}}">Eliminar</a>
                                                      
                                                  </td>
      	  	       	      	  </tr>

                                            

      	  	       	      
      	  	       	  @endforeach
                      <div class="input-group">
                      <form action="{{ route('Area.getsearch')  }}" method="post" id="search-form" >
                        @csrf
                        <input type="text" class="form-control" name="id"  placeholder="Buscar">
                        <input class="btn btn-primary btn-lg" type="submit" value="Buscar">
                      </form>
                      </div>     
      	  	       </table>
                         </tbody>
                          <a  class="btn btn-primary btn-lg" href="/area/create" role="button">Nueva Area</a>
      	  	    @else
      	  	       <div class="jumbotron">
      	  	       	    <h1 class="display-4"> No hay areas en el sistema</h1>
      	  	       	    <p class="lead">Deberias registrar una para el correcto funcionamiento de la aplicacion.</p>

      	  	       	    <hr class="lead">
      	  	       	    <a  class="btn btn-primary btn-lg" href="/area/create" role="button">Crear Area</a>
      	  	        	</p>
      	  	       	
      	  	       </div> 
      	  	    @endif
      	  	</div>
      	</div>
    
    @endsection  	  	    