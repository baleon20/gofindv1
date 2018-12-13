@extends ('layouts.app')

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  
                  <h2 style="text-align: center">Listado de Estudios</h2>
                 
      	  	   
      	  	       <table class="table table-bordered table-striped">
      	  	       	  <thead>
      	  	       	  	  <tr>
      	  	       	  	  	<th>Id</th>
                            <th>Titulo</th>
                                          <th>Institucion</th>
                                          <th>Duracion</th>
                                          <th>Fecha</th>
                                          <th>Egresado</th>
                                          <th>Nivel de Estudios</th>
                                          <th width="250px">Acciones</th>
                                          
                                         
      	  	       	  	  </tr>
      	  	       	  </thead>
      	  	       	  @forelse($estudio as $Estudio)
      	  	       	      <tbody>
      	  	       	      	  <tr>
      	  	       	      	  	  <td>{{$Estudio->id}}</td>
                                  <td>{{$Estudio->titulo}}</td>
                                  <td>{{$Estudio->institucion}}</td>
                                  <td>{{$Estudio->duracion}}</td>
                                  <td>{{$Estudio->fecha}}</td>
                                  <td>{{$Estudio->idegresados}}</td>
                                  <td>{{$Estudio->idnivel_estudios}}</td>
                                                 <td> 
                                                      <a  class="btn btn-primary " href="/estudio/show/{{$Estudio->id}}">Ver</a>
                                                      <a  class="btn btn-warning " href="/estudio/edit/{{$Estudio->id}}">Editar</a>
                                                      <a  class="btn btn-danger " href="/estudio/delete/{{$Estudio->id}}">Eliminar</a>
                                                      
                                                  </td>
                                          
      	  	       	      	  </tr>

                          @empty
      	  	       <div class="jumbotron">
      	  	       	    <h1 class="display-4"> No hay Estudios en el sistema</h1>
      	  	       	    <p class="lead">Deberias registrar uno para el correcto funcionamiento de la aplicacion.</p>

      	  	       	    <hr class="lead">
      	  	       	    <a  class="btn btn-primary btn-lg" href="/estudio/create" role="button">Crear Estudio</a>
      	  	        	</p>
      	  	       	
      	  	       </div> 
      	  	       @endforelse
                             <div class="input-group">
                      <form action="{{ route('Estudio.getsearch')  }}" method="post" id="search-form" >
                        @csrf
                        <input type="text" class="form-control" name="id"  placeholder="Buscar">
                        <input class="btn btn-primary btn-lg" type="submit" value="Buscar">
                      </form>
                      </div>  
                  </tbody>
                              
                 </table>
                  <a  class="btn btn-primary btn-lg" href="/estudio/create" role="button">Nuevo Estudio</a>
      	  	</div>
      	</div>
    
    @endsection  	  	    