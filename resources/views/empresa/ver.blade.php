@extends ('layouts.app')

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  <center>
                  <h2>Lista de Empresas</h2>
                  </center>
      	  	 
      	  	       <table class="table table-bordered table-striped">
      	  	       	  <thead>
      	  	       	  	  <tr>
      	  	       	  	  	<th>Id</th>
      	  	       	  	  	<th>Nombre</th>
                                          <th>Telefono</th>
                                          <th>Direccion</th>
                                          <th>NIT</th>
                                          <th>Usuario</th>
                                        
                                         
                                          <th width="250px"></th>
      	  	       	  	  </tr>
      	  	       	  </thead>
      	  	       	
      	  	       	      <tbody>
      	  	       	      	  <tr>
      	  	       	      	  	  <td>{{$Empresa->id}}</td>
      	  	       	      	  	  <td>{{$Empresa->nombre}}</td>
                                                  <td>{{$Empresa->telefono}}</td>
                                                  <td>{{$Empresa->direccion}}</td>
                                                  <td>{{$Empresa->NIT}}</td>
                                                  <td>{{$Empresa->idusuario}}</td>
                                                  
                                                  
                                                 
      	  	       	      	  </tr>

      	  	       	      </tbody>
      	  	       	 
      	  	       </table>
      
      	  	       	    
      	  	       	    <a  class="btn btn-primary btn-lg" href="/empresa" role="button">Atras</a>
      	  	        	</p>
      	  	       	
      	  	       </div> 
      	  	
      	  	</div>
      	</div>
    
    @endsection  	  	    