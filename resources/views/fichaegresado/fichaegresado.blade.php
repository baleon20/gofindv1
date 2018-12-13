@extends ('layouts.app')

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  
                  <h2 style="text-align: center">Listado de Ficha de Egresados</h2>
                 
      	  	   
      	  	       <table class="table table-bordered table-striped">
      	  	       	  <thead>
      	  	       	  	  <tr>
      	  	       	  	  	<th>Id</th>
                                          <th>Fecha de Egreso</th>                                       
                                          <th>Ficha</th>
                                          <th>Egresado</th>
                                         <th width="250px">Acciones</th>
      	  	       	  	  </tr>
      	  	       	  </thead>
      	  	       	  @forelse($fichaegresado as $FichaEgresado)
      	  	       	      <tbody>
      	  	       	      	  <tr>
      	  	       	      	  	  <td>{{$FichaEgresado->id}}</td>
      	  	       	      	  	  <td>{{$FichaEgresado->fechaegresado}}</td>
                                  <td>{{$FichaEgresado->idfichas}}</td>
                                  <td>{{$FichaEgresado->idegresados}}</td>
                                                  
                                    <td> 
                                                      <a  class="btn btn-primary " href="/fichaegresado/show/{{$FichaEgresado->id}}">Ver</a>
                                                      <a  class="btn btn-warning " href="/fichaegresado/edit/{{$FichaEgresado->id}}">Editar</a>
                                                      <a  class="btn btn-danger " href="/fichaegresado/delete/{{$FichaEgresado->id}}">Eliminar</a>
                                                      
                                    </td>
                                          
      	  	       	      	  </tr>

                          @empty
      	  	       <div class="jumbotron">
      	  	       	    <h1 class="display-4"> No hay Fichas de egresados en el sistema</h1>
      	  	       	    <p class="lead">Deberias registrar una para el correcto funcionamiento de la aplicacion.</p>

      	  	       	    <hr class="lead">
      	  	       	    <a  class="btn btn-primary btn-lg" href="/fichaegresado/create" role="button">Crear Ficha Egresado</a>
      	  	        	</p>
      	  	       	
      	  	       </div> 
      	  	       @endforelse
                             <div class="input-group">
                      <form action="{{ route('FichaEgresado.getsearch')  }}" method="post" id="search-form" >
                        @csrf
                        <input type="text" class="form-control" name="id"  placeholder="Buscar">
                        <input class="btn btn-primary btn-lg" type="submit" value="Buscar">
                      </form>
                      </div>  
                  </tbody>
                              
                 </table>
                 <a  class="btn btn-primary btn-lg" href="/fichaegresado/create" role="button">Nueva Ficha de Egreso</a>
      	  	</div>
      	</div>
    
    @endsection 
