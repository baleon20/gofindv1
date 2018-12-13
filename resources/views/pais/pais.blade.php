@extends ('layouts.app')

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  <center>
                  <h2>Lista de Paises</h2>
                  </center>
                  


                 
                  
      	  	   @if(!$pais->isEmpty())
      	  	       <table class="table table-bordered table-striped">
      	  	       	  <thead>
      	  	       	  	  <tr>
      	  	       	  	  	<th>Id</th>
      	  	       	  	  	<th>Nombre</th>
                                          <th>Acciones</th>
      	  	       	  	  </tr>
      	  	       	  </thead>
      	  	       	  @foreach($pais as $Pais)
      	  	       	      <tbody>
      	  	       	      	  <tr>
      	  	       	      	  	  <td>{{$Pais->id}}</td>
      	  	       	      	  	  <td>{{$Pais->name}}</td>
                                                  <td> 
                                                      <a  class="btn btn-primary " href="/pais/show/{{$Pais->id}}">Ver</a>
                                                      <a  class="btn btn-warning " href="/pais/edit/{{$Pais->id}}">Editar</a>
                                                      <a  class="btn btn-danger " href="/pais/delete/{{$Pais->id}}">Eliminar</a>
                                                    
                                                  </td>
                                                  

      	  	       	      	  </tr>


      	  	       	      </tbody>
                          
      	  	       	  @endforeach
                      
                      <div class="input-group">
                      <form action="{{ route('Pais.getsearch')  }}" method="post" id="search-form" >
                        @csrf
                        <input type="text" class="form-control" name="id"  placeholder="Search Pais">
                        <input class="btn btn-primary btn-lg" type="submit" value="Buscar">
                      </form>
                      </div>                                              
      	  	       </table>
                          <a  class="btn btn-primary btn-lg" href="/pais/create" role="button">Nuevo pais</a>
      	  	    @else
      	  	       <div class="jumbotron">
      	  	       	    <h1 class="display-4"> No hay pais en el sistema</h1>
      	  	       	    <p class="lead">Deberias registrar una para el correcto funcionamiento de la aplicacion.</p>

      	  	       	    <hr class="lead">
      	  	       	    <a  class="btn btn-primary btn-lg" href="/pais/create" role="button">Crear pais</a>
      	  	        	</p>
      	  	       	
      	  	       </div> 
      	  	    @endif
      	  	</div>
      	</div>
    
    @endsection  	  	    