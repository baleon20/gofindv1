 @extends ('layouts.app')

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  
                  <h2 style="text-align: center">Listado de Empresas</h2>
                 
      	  	   
      	  	       <table class="table table-bordered table-striped">
      	  	       	  <thead>
      	  	       	  	  <tr>
      	  	       	  	  	<th>Id</th>
                            <th>Nombre</th>
                                          <th>Telefono</th>
                                          <th>Direccion</th>
                                          <th>NIT</th>
                                          <th>Usuario</th>
                                          <th width="250px">Acciones</th>

                                         
                                          
      	  	       	  	  </tr>
      	  	       	  </thead>
      	  	       	  @forelse($empresa as $Empresa)
      	  	       	      <tbody>
      	  	       	      	  <tr>
      	  	       	      	  	 <td>{{$Empresa->id}}</td>
                                  <td>{{$Empresa->nombre}}</td>
                                  <td>{{$Empresa->telefono}}</td>
                                  <td>{{$Empresa->direccion}}</td>
                                  <td>{{$Empresa->NIT}}</td>
                                  <td>{{$Empresa->idusuario}}</td>
                                                  
                                                 <td> 
                                                      <a  class="btn btn-primary " href="/empresa/show/{{$Empresa->id}}">Ver</a>
                                                      <a  class="btn btn-warning " href="/empresa/edit/{{$Empresa->id}}">Editar</a>
                                                      <a  class="btn btn-danger " href="/empresa/delete/{{$Empresa->id}}">Eliminar</a>
                                                      
                                                  </td>
                                          
      	  	       	      	  </tr>

                          @empty
      	  	       <div class="jumbotron">
      	  	       	    <h1 class="display-4"> No hay empresas en el sistema</h1>
      	  	       	    <p class="lead">Deberias registrar una para el correcto funcionamiento de la aplicacion.</p>

      	  	       	    <hr class="lead">
      	  	       	    <a  class="btn btn-primary btn-lg" href="/empresa/create" role="button">Crear Empresa</a>
      	  	        	</p>
      	  	       	
      	  	       </div> 
      	  	       @endforelse
                   <div class="input-group">
                      <form action="{{ route('Empresa.getsearch')  }}" method="post" id="search-form" >
                        @csrf
                        <input type="text" class="form-control" name="id"  placeholder="Buscar">
                        <input class="btn btn-primary btn-lg" type="submit" value="Buscar">
                      </form>
                      </div>  
                  </tbody>
                              
                 </table>
                  <a  class="btn btn-primary btn-lg" href="/empresa/create" role="button">Nuevo Empresa</a>
      	  	</div>
      	</div>
    
    @endsection  	  	    