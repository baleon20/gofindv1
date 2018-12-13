@extends ('layouts.app')

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  <center>
                  <h2>Lista de Egresados</h2>
                  </center>
      	  	 
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
      	  	       	  	  </tr>
      	  	       	  </thead>
      	  	       	
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

                                                 
      	  	       	      	  </tr>

      	  	       	      </tbody>
      	  	       	 
      	  	       </table>
      
      	  	       	    
      	  	       	    <a  class="btn btn-primary btn-lg" href="/egresado" role="button">Atras</a>
      	  	        	</p>
      	  	       	
      	  	       </div> 
      	  	
      	  	</div>
      	</div>
    
    @endsection  	  	    