@extends ('layouts.app')

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  <center>
                  <h2>Lista de Programas</h2>
                  </center>
      	  	   @if(!$programa->isEmpty())
      	  	       <table class="table table-bordered table-striped">
      	  	       	  <thead>
      	  	       	  	  <tr>
      	  	       	  	  	<th>Id</th>
      	  	       	  	  	<th>Nombre</th>
                                          <th>Acciones</th>
      	  	       	  	  </tr>
      	  	       	  </thead>
      	  	       	  @foreach($programa as $Programa)
      	  	       	      <tbody>
      	  	       	      	  <tr>
      	  	       	      	  	  <td>{{$Programa->id}}</td>
      	  	       	      	  	  <td>{{$Programa->nombre}}</td>
                                                  <td> 
                                                      <a  class="btn btn-primary " href="/programa/show/{{$Programa->id}}">Ver</a>
                                                      <a  class="btn btn-warning " href="/programa/edit/{{$Programa->id}}">Editar</a>
                                                      <a  class="btn btn-danger " href="/programa/delete/{{$Programa->id}}">Eliminar</a>
                                                      
                                                  </td>
      	  	       	      	  </tr>

      	  	       	 
      	  	       	  @endforeach
                                <div class="input-group">
                      <form action="{{ route('Programa.getsearch')  }}" method="post" id="search-form" >
                        @csrf
                        <input type="text" class="form-control" name="id"  placeholder="Buscar">
                        <input class="btn btn-primary btn-lg" type="submit" value="Buscar">
                      </form>
                      </div>  
      	  	       </table>
                          <a  class="btn btn-primary btn-lg" href="/programa/create" role="button">Nuevo Programa</a>
                               </tbody>
      	  	    @else
      	  	       <div class="jumbotron">
      	  	       	    <h1 class="display-4"> No hay programas en el sistema</h1>
      	  	       	    <p class="lead">Deberias registrar uno para el correcto funcionamiento de la aplicacion.</p>
          
      	  	       	 <a  class="btn btn-primary btn-lg" href="/programa/create" role="button">Nuevo Programa</a>
      	  	       </div> 
      	  	    @endif
      	  	</div>
      	</div>
    
    @endsection  	  	    