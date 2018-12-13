 @extends ('layouts.app')

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  
                  <h2 style="text-align: center">Listado de Postulaciones</h2>
                 
      	  	   
      	  	       <table class="table table-bordered table-striped">
      	  	       	  <thead>
      	  	       	  	  <tr>
      	  	       	  	  	<th>Id</th>
      	  	       	  	  	<th>Fecha de Postulacion</th>
                            <th> Vacantes</th>
                            <th> Egresado</th>
                            <th width="250px">Acciones</th>             
      	  	       	  	  </tr>
      	  	       	  </thead>
      	  	       	  @forelse($postulacion as $Postulacion)
      	  	       	      <tbody>
      	  	       	      	  <tr>
      	  	       	      	  	 <td>{{$Postulacion->id}}</td>
                                  <td>{{$Postulacion->fechapostulacion}}</td>
                                  <td>{{$Postulacion->idvacantes}}</td>
                                  <td>{{$Postulacion->idegresados}}</td>
                                    <td> 
                                                      <a  class="btn btn-primary " href="/postulacion/show/{{$Postulacion->id}}">Ver</a>
                                                      <a  class="btn btn-warning " href="/postulacion/edit/{{$Postulacion->id}}">Editar</a>
                                                      <a  class="btn btn-danger " href="/postulacion/delete/{{$Postulacion->id}}">Eliminar</a>
                                                      
                                                  </td>
                                          
      	  	       	      	  </tr>

                          @empty
      	  	       <div class="jumbotron">
      	  	       	    <h1 class="display-4"> No hay postulaciones en el sistema</h1>
      	  	       	    <p class="lead">Deberias registrar una para el correcto funcionamiento de la aplicacion.</p>

      	  	       	    <hr class="lead">
      	  	       	    <a  class="btn btn-primary btn-lg" href="/postulacion/create" role="button">Crear Postulacion</a>
      	  	        	</p>
      	  	       	
      	  	       </div> 
      	  	       @endforelse
                   <div class="input-group">
                      <form action="{{ route('Postulacion.getsearch')  }}" method="post" id="search-form" >
                        @csrf
                        <input type="text" class="form-control" name="id"  placeholder="Buscar">
                        <input class="btn btn-primary btn-lg" type="submit" value="Buscar">
                      </form>
                      </div>  
                  </tbody>
                              
                 </table>
                 
                 <a  class="btn btn-primary btn-lg" href="/postulacion/create" role="button">Nueva Postulacion</a>
      	  	</div>
      	</div>
    
    @endsection  	  	    