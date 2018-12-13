 @extends ('layouts.app') 

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  
                  <h2 style="text-align: center">Lista de Egresados</h2>
                  
      	  	   <section class="webdesigntuts-workshop">
  <form action="" method="">        
    <input type="search" placeholder="Search...">         
    <button>Search</button>
  </form>
</section>
      	  	       <table class="table table-bordered table-striped">
      	  	       	  <thead>
      	  	       	  	  <tr>
      	  	       	  	  	<th>Id</th>
                            <th>Nombre</th>
                                          <th>Apellido</th>
                                          <th>Telefono</th>
                                          <th>Direccion</th>
                                          <th>Email</th>
                                          <th>Fecha de Nacimiento</th>
                                          <th>Sexo</th>
                                          <th>Estrato</th>
                                          
                                          <th>Usuario</th>
                                          <th>Tipo de ocumento</th>
                                         <th width="250px">Acciones</th>
      	  	       	  	  </tr>
      	  	       	  </thead>
      	  	       	  @forelse($egresado as $Egresado)
      	  	       	      <tbody>
      	  	       	      	  <tr>
      	  	       	      	  	  <td>{{$Egresado->id}}</td>
                                  <td>{{$Egresado->nombre}}</td>
                                  <td>{{$Egresado->apellido}}</td>
                                  <td>{{$Egresado->telefono}}</td>
                                  <td>{{$Egresado->direccion}}</td>
                                  <td>{{$Egresado->email}}</td>
                                  <td>{{$Egresado->fechanacimiento}}</td>
                                  <td>{{$Egresado->sexo}}</td>
                                  <td>{{$Egresado->estrato}}</td>
                                  
                                                  <td>{{$Egresado->idusuarios}}</td>
                                                  <td>{{$Egresado->idtipo_documentos}}</td>
                                                 <td> 
                                                      <a  class="btn btn-primary " href="/egresado/show/{{$Egresado->id}}">Ver</a>
                                                      <a  class="btn btn-warning " href="/egresado/edit/{{$Egresado->id}}">Editar</a>
                                                      <a  class="btn btn-danger " href="/egresado/delete/{{$Egresado->id}}">Eliminar</a>
                                                      
                                                  </td>
                                          
      	  	       	      	  </tr>
                          @empty
      	  	       <div class="jumbotron">
      	  	       	    <h1 class="display-4"> No hay egresados en el sistema</h1>
      	  	       	    <p class="lead">Deberias registrar uno para el correcto funcionamiento de la aplicacion.</p>

      	  	       	    <hr class="lead">
      	  	       	    <a  class="btn btn-primary btn-lg" href="/egresado/create" role="button">Crear Egresado</a>
      	  	        	</p>
      	  	       	
      	  	       </div> 
      	  	       @endforelse
                   <div class="input-group">
                      <form action="{{ route('Egresado.getsearch')  }}" method="post" id="search-form" >
                        @csrf
                        <input type="text" class="form-control" name="id"  placeholder="Buscar">
                        <input class="btn btn-primary btn-lg" type="submit" value="Buscar">
                      </form>
                      </div>  
                  </tbody>
                              
                 </table>
                 
                <a  class="btn btn-primary btn-lg" href="/egresado/create" role="button">Nuevo Egresado</a>
      	  	</div>
      	</div>
    
    @endsection  	  	    