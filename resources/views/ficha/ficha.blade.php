@extends ('layouts.app')

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  
                  <h2 style="text-align: center">Listado de Fichas</h2>
                 
      	  	   
      	  	       <table class="table table-bordered table-striped">
      	  	       	  <thead>
      	  	       	  	  <tr>
      	  	       	  	  	<th>Id</th>
                            <th>Fecha de Inicio</th>
                            <th>Fecha de Finalizacion</th>
                           <th>Programa</th>
                            <th width="250px">Acciones</th>             
      	  	       	  	  </tr>
      	  	       	  </thead>
      	  	       	  @forelse($ficha as $Ficha)
      	  	       	      <tbody>
      	  	       	      	  <tr>
      	  	       	      	  	  <td>{{$Ficha->id}}</td>
      	  	       	      	  	 
                                  <td>{{$Ficha->fechainicio}}</td>
                                  <td>{{$Ficha->fechafinal}}</td>
                                   <td>{{$Ficha->idprogramas}}</td>
                                    <td> 
                                                      <a  class="btn btn-primary " href="/ficha/show/{{$Ficha->id}}">Ver</a>
                                                      <a  class="btn btn-warning " href="/ficha/edit/{{$Ficha->id}}">Editar</a>
                                                      <a  class="btn btn-danger " href="/ficha/delete/{{$Ficha->id}}">Eliminar</a>
                                                      
                                                  </td>
                                          
      	  	       	      	  </tr>

                          @empty
      	  	       <div class="jumbotron">
      	  	       	    <h1 class="display-4"> No hay fichas en el sistema</h1>
      	  	       	    <p class="lead">Deberias registrar una para el correcto funcionamiento de la aplicacion.</p>

      	  	       	    <hr class="lead">
      	  	       	    <a  class="btn btn-primary btn-lg" href="/ficha/create" role="button">Crear Ficha</a>
      	  	        	</p>
      	  	       	
      	  	       </div> 
      	  	       @endforelse
                             <div class="input-group">
                      <form action="{{ route('Ficha.getsearch')  }}" method="post" id="search-form" >
                        @csrf
                        <input type="text" class="form-control" name="id"  placeholder="Buscar">
                        <input class="btn btn-primary btn-lg" type="submit" value="Buscar">
                      </form>
                      </div>  
                  </tbody>
                              
                 </table>
                  
      	  	</div>
      	</div>
    
    @endsection  	  	    