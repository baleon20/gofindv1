 @extends ('layouts.app')

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  
                  <h2 style="text-align: center">Listado de Usuarios</h2>
                 
      	  	   
      	  	       <table class="table table-bordered table-striped">
      	  	       	  <thead>
      	  	       	  	  <tr>
      	  	       	  	  	<th>Id</th>
      	  	       	  	  	<th>Email</th>
                           <th>Contraseña</th>
                           <th>Rol</th>
                            <th width="250px">Acciones</th>             
      	  	       	  	  </tr>
      	  	       	  </thead>
      	  	       	  @forelse($usuario as $User)
      	  	       	      <tbody>
      	  	       	      	  <tr>
      	  	       	      	  	  <td>{{$User->id}}</td>
      	  	       	      	  	  <td>{{$User->email}}</td>
                                  <td>{{$User->password}}</td>
                                  <td>{{$User->idrols}}</td>
                                                 <td> 
                                                      <a  class="btn btn-primary " href="/usuario/show/{{$User->id}}">Ver</a>
                                                      <a  class="btn btn-warning " href="/usuario/edit/{{$User->id}}">Editar</a>
                                                      <a  class="btn btn-danger " href="/usuario/delete/{{$User->id}}">Eliminar</a>
                                                      
                                                  </td>
                                          
      	  	       	      	  </tr>

                          @empty
      	  	       <div class="jumbotron">
      	  	       	    <h1 class="display-4"> No hay usuarios en el sistema</h1>
      	  	       	    <p class="lead">Deberias registrar uno para el correcto funcionamiento de la aplicacion.</p>

      	  	       	    <hr class="lead">
      	  	       	    <a  class="btn btn-primary btn-lg" href="/usuario/create" role="button">Crear Usuario</a>
      	  	        	</p>
      	  	       	
      	  	       </div> 
      	  	       @endforelse
                             <div class="input-group">
                      <form action="{{ route('User.getsearch')  }}" method="post" id="search-form" >
                        @csrf
                        <input type="text" class="form-control" name="id"  placeholder="Buscar">
                        <input class="btn btn-primary btn-lg" type="submit" value="Buscar">
                      </form>
                      </div>  
                  </tbody>
                              
                 </table>
                  <a  class="btn btn-primary btn-lg" href="/usuario/create" role="button">Nuevo Usuario</a>
      	  	</div>
      	</div>
    
    @endsection  	  	    