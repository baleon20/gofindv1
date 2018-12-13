@extends ('layouts.app')

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  
                  <h2 style="text-align: center">Listado de Vacantes</h2>
                 
      	  	   
      	  	       <table class="table table-bordered table-striped">
      	  	       	  <thead>
      	  	       	  	  <tr>
      	  	       	  	  	<th>Id</th>
                            <th>Nombre</th>
                                          <th>Fecha de Inicio</th>
                                          <th>Fecha De Finalizacion</th>
                                          <th>Descripcion</th>
                                          <th>Requisitos</th>
                                          <th>Candidatos</th>
                                          <th>Rango Salarial</th>
                                          <th>Ciudad</th>
                                          <th>Area</th>
                                          <th>Empresa</th>
                                         <th width="250px">Acciones</th>
      	  	       	  	  </tr>
      	  	       	  </thead>
      	  	       	  @forelse($vacante as $Vacante)
      	  	       	      <tbody>
      	  	       	      	  <tr>
      	  	       	      	  	  <td>{{$Vacante->id}}</td>
                                  <td>{{$Vacante->nombre}}</td>
                                  <td>{{$Vacante->fechainicio}}</td>
                                  <td>{{$Vacante->fechafinal}}</td>
                                  <td>{{$Vacante->descripcion}}</td>
                                  <td>{{$Vacante->requisito}}</td>
                                  <td>{{$Vacante->candidatos}}</td>
                                  <td>{{$Vacante->rangosalarial}}</td>               
                                  <td>{{$Vacante->idciudad}}</td>
                                  <td>{{$Vacante->idareas}}</td>
                                  <td>{{$Vacante->idempresas}}</td>
                                                 <td> 
                                                      <a  class="btn btn-primary " href="/vacante/show/{{$Vacante->id}}">Ver</a>
                                                      <a  class="btn btn-warning " href="/vacante/edit/{{$Vacante->id}}">Editar</a>
                                                      <a  class="btn btn-danger " href="/vacante/delete/{{$Vacante->id}}">Eliminar</a>
                                                      
                                                  </td>
                                          
      	  	       	      	  </tr>

                          @empty
      	  	       <div class="jumbotron">
      	  	       	    <h1 class="display-4"> No hay vacantes en el sistema</h1>
      	  	       	    <p class="lead">Deberias registrar uno para el correcto funcionamiento de la aplicacion.</p>

      	  	       	    <hr class="lead">
      	  	       	    <a  class="btn btn-primary btn-lg" href="/vacante/create" role="button">Crear Vacante</a>
      	  	        	</p>
      	  	       	
      	  	       </div> 
      	  	       @endforelse
                             <div class="input-group">
                      <form action="{{ route('vacante.getsearch')  }}" method="post" id="search-form" >
                        @csrf
                        <input type="text" class="form-control" name="id"  placeholder="Buscar">
                        <input class="btn btn-primary btn-lg" type="submit" value="Buscar">
                      </form>
                      </div>  
              
                  </tbody>
                              
                 </table>
                  <a  class="btn btn-primary btn-lg" href="/vacante/create" role="button">Nuevo Vacante</a>
      	  	</div>
      	</div>
    
    @endsection  	  	    