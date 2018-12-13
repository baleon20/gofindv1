 @extends ('layouts.app')

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  
                  <h2 style="text-align: center">Listado de Experiencias</h2>
                 
      	  	   
      	  	       <table class="table table-bordered table-striped">
      	  	       	  <thead>
      	  	       	  	  <tr>
      	  	       	  	  	<th>Id</th>
      	  	       	  	  	<th>Organizacion</th>
                                          <th>Fecha de Inicio</th>
                                          <th>Fecha de Finalizacion</th>
                                          <th>Cargo</th>
                                          <th>Descripcion</th>
                                          <th>Adjunto</th>
                                          <th>Egresado</th>
                                          <th width="250px">Acciones</th>
                                         
      	  	       	  	  </tr>
      	  	       	  </thead>
      	  	       	  @forelse($experiencia as $Experiencia)
      	  	       	      <tbody>
      	  	       	      	  <tr>
      	  	       	      	  	  <td>{{$Experiencia->id}}</td>
      	  	       	      	  	  <td>{{$Experiencia->organizacion}}</td>
                                                  <td>{{$Experiencia->fechainicio}}</td>
                                                  <td>{{$Experiencia->fechafinal}}</td>
                                                  <td>{{$Experiencia->cargo}}</td>
                                                  <td>{{$Experiencia->descripcion}}</td>
                                                  <td>{{$Experiencia->adjunto}}</td>
                                                  <td>{{$Experiencia->idegresados}}</td>
                                    <td> 
                                                      <a  class="btn btn-primary " href="/experiencia/show/{{$Experiencia->id}}">Ver</a>
                                                      <a  class="btn btn-warning " href="/experiencia/edit/{{$Experiencia->id}}">Editar</a>
                                                      <a  class="btn btn-danger " href="/experiencia/delete/{{$Experiencia->id}}">Eliminar</a>
                                                      
                                                  </td>
                                          
      	  	       	      	  </tr>

                          @empty
      	  	       <div class="jumbotron">
      	  	       	    <h1 class="display-4"> No hay Experiencias en el sistema</h1>
      	  	       	    <p class="lead">Deberias registrar una para el correcto funcionamiento de la aplicacion.</p>

      	  	       	    <hr class="lead">
      	  	       	    <a  class="btn btn-primary btn-lg" href="/experiencia/create" role="button">Crear Experiencia</a>
      	  	        	</p>
      	  	       	
      	  	       </div> 
      	  	       @endforelse
                             <div class="input-group">
                      <form action="{{ route('Experiencia.getsearch')  }}" method="post" id="search-form" >
                        @csrf
                        <input type="text" class="form-control" name="id"  placeholder="Buscar">
                        <input class="btn btn-primary btn-lg" type="submit" value="Buscar">
                      </form>
                      </div>  
                  </tbody>
                              
                 </table>
                 <a  class="btn btn-primary btn-lg" href="/experiencia/create" role="button">Nueva Experiencia</a>
      	  	</div>
      	</div>
    
    @endsection 
