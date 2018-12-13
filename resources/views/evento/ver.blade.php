@extends ('layouts.app')

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  <center>
                  <h2>Lista de Eventos</h2>
                  </center>
      	  	 
      	  	       <table class="table table-bordered table-striped">
      	  	       	  <thead>
      	  	       	  	  <tr>
      	  	       	  	  	<th>Id</th>
                                          <th>Nombre</th>
                                          <th>Descripcion</th>
                                          <th>Fecha Evento</th>
                                          <th>Lugar</th>
                                          <th>Direccion</th>
                                         
      	  	       	  	  </tr>
      	  	       	  </thead>
      	  	       	
      	  	       	      <tbody>
      	  	       	      	  <tr>
      	  	       	      	  	 <td>{{$Evento->id}}</td>
                                                  <td>{{$Evento->nombre}}</td>
                                                  <td>{{$Evento->descripcion}}</td>
                                                  <td>{{$Evento->fechaevento}}</td>
                                                  <td>{{$Evento->lugar}}</td>
                                                  <td>{{$Evento->direccion}}</td>
                                                 
      	  	       	      	  </tr>

      	  	       	      </tbody>
      	  	       	 
      	  	       </table>
      
      	  	       	    
      	  	       	    <a  class="btn btn-primary btn-lg" href="/evento" role="button">Atras</a>
      	  	        	</p>
      	  	       	
      	  	       </div> 
      	  	
      	  	</div>
      	</div>
    
    @endsection  	  