 @extends ('layouts.app')

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  
                  <h2 style="text-align: center">Lista de Departamentos</h2>
                 
      	  	   
      	  	       <table class="table table-bordered table-striped">
      	  	       	  <thead>
      	  	       	  	  <tr>
      	  	       	  	  	<th>Id</th>
      	  	       	  	  	<th>Nombre</th>
                           <th>Pais</th>
                           <th width="250px">Acciones</th>
                                         
      	  	       	  	  </tr>
      	  	       	  </thead>
      	  	       	  @forelse($departamentos as $departamento)
      	  	       	      <tbody>
      	  	       	      	  <tr>
      	  	       	      	  	  <td>{{$departamento->id}}</td>
      	  	       	      	  	  <td>{{$departamento->nombre}}</td>
                                   <td>{{$departamento->pais->name}}</td>
                                    <td> 
                                                      <a  class="btn btn-primary " href="/departamento/show/{{$departamento->id}}">Ver</a>
                                                      <a  class="btn btn-warning " href="/departamento/edit/{{$departamento->id}}">Editar</a>
                                                      <a  class="btn btn-danger " href="/departamento/delete/{{$departamento->id}}">Eliminar</a>
                                                      
                                                  </td>
                                          
      	  	       	      	  </tr>

                          @empty
      	  	       <div class="jumbotron">
      	  	       	    <h1 class="display-4"> No hay departamentos en el sistema</h1>
      	  	       	    <p class="lead">Deberias registrar uno para el correcto funcionamiento de la aplicacion.</p>

      	  	       	    <hr class="lead">
      	  	       	    <a  class="btn btn-primary btn-lg" href="/departamento/create" role="button">Crear Departamento</a>
      	  	        	</p>
      	  	       	
      	  	       </div> 
      	  	       @endforelse
                   <div class="input-group">
                      <form action="{{ route('Departamento.getsearch')  }}" method="post" id="search-form" >
                        @csrf
                        <input type="text" class="form-control" name="id"  placeholder="Buscar">
                        <input class="btn btn-primary btn-lg" type="submit" value="Buscar">
                      </form>
                      </div>  
                  </tbody>
                              
                 </table>
                 <a  class="btn btn-primary btn-lg" href="/departamento/create" role="button">Nuevo Departamento</a>
      	  	</div>
      	</div>
    
    @endsection  	  	    