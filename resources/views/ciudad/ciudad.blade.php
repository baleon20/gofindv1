@extends ('layouts.app')

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  
                  <h2 style="text-align: center">Lista de Ciudades</h2>
                 
      	  	   
      	  	       <table class="table table-bordered table-striped">
      	  	       	  <thead>
      	  	       	  	  <tr>
      	  	       	  	  	<th>Id</th>
      	  	       	  	  	<th>Nombre</th>
                           <th>Departamento</th>
                            <th width="250px">Acciones</th>       
      	  	       	  	  </tr>
      	  	       	  </thead>
      	  	       	  @forelse($ciudad as $Ciudad)
      	  	       	      <tbody>
      	  	       	      	  <tr>
      	  	       	      	  	  <td>{{$Ciudad->id}}</td>
      	  	       	      	  	  <td>{{$Ciudad->nombre}}</td>
                                   <td>{{$Ciudad->iddepartamento}}</td>
                                   
                                    <td> 
                                                      <a  class="btn btn-primary " href="/ciudad/show/{{$Ciudad->id}}">Ver</a>
                                                      <a  class="btn btn-warning " href="/ciudad/edit/{{$Ciudad->id}}">Editar</a>
                                                      <a  class="btn btn-danger " href="/ciudad/delete/{{$Ciudad->id}}">Eliminar</a>
                                                      
                                                  </td>
                                          
      	  	       	      	  </tr>

                          @empty
      	  	       <div class="jumbotron">
      	  	       	    <h1 class="display-4"> No hay ciudades en el sistema</h1>
      	  	       	    <p class="lead">Deberias registrar una para el correcto funcionamiento de la aplicacion.</p>

      	  	       	    <hr class="lead">
      	  	       	    <a  class="btn btn-primary btn-lg" href="/ciudad/create" role="button">Crear Ciudad</a>
      	  	        	</p>
      	  	       	
      	  	       </div> 
      	  	       @endforelse
                   <div class="input-group">
                      <form action="{{ route('Ciudad.getsearch')  }}" method="post" id="search-form" >
                        @csrf
                        <input type="text" class="form-control" name="id"  placeholder="Buscar">
                        <input class="btn btn-primary btn-lg" type="submit" value="Buscar">
                      </form>
                      </div>     
                 </table>
                  <a  class="btn btn-primary btn-lg" href="/ciudad/create" role="button">Nuevo Ciudad</a>
      	  	</div>
      	</div>
    </tbody>
    @endsection  	  	    