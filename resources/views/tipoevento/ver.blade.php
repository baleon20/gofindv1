@extends ('layouts.app')

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  <center>
                  <h2>Listado de Tipos de Eventos</h2>
                  </center>
      	  	 
      	  	       <table class="table table-bordered table-striped">
      	  	       	  <thead>
      	  	       	  	  <tr>
      	  	       	  	  	<th>Id</th>
      	  	       	  	  	<th>Nombre</th>
                                          <th>Evento</th>
                                         
      	  	       	  	  </tr>
      	  	       	  </thead>
      	  	       	
      	  	       	      <tbody>
      	  	       	      	  <tr>
      	  	       	      	  	  <td>{{$TipoEvento->id}}</td>
      	  	       	      	  	  <td>{{$TipoEvento->nombre}}</td>
                                                  <td>{{$TipoEvento->ideventos}}</td>
                                                 
      	  	       	      	  </tr>

      	  	       	      </tbody>
      	  	       	 
      	  	       </table>
      
      	  	       	    
      	  	       	    <a  class="btn btn-primary btn-lg" href="/tipoevento" role="button">Atras</a>
      	  	        	</p>
      	  	       	
      	  	       </div> 
      	  	
      	  	</div>
      	</div>
    
    @endsection  