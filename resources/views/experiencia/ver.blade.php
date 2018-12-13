@extends ('layouts.app')

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  <center>
                  <h2>Lista de Experiencias</h2>
                  </center>
      	  	 
      	  	       <table class="table table-bordered table-striped">
      	  	       	  <thead>
      	  	       	  	  <tr>
      	  	       	  	  	<th>Id</th>
      	  	       	  	  	<th>Organizacion</th>
                                          <th>Fecha de Inicio</th>
                                          <th>Fecha de Finalizacion</th>
                                          <th>Cargo</th>
                                          <th>Descripcion</th>
                                          <th>Adjunto</th>
                                          <th>Egresado</th>
                                          

                                         
      	  	       	  	  </tr>
      	  	       	  </thead>
      	  	       	
      	  	       	      <tbody>
      	  	       	      	  <tr>
      	  	       	      	  	  <td>{{$Experiencia->id}}</td>
      	  	       	      	  	  <td>{{$Experiencia->organizacion}}</td>
                                                  <td>{{$Experiencia->fechainicio}}</td>
                                                  <td>{{$Experiencia->fechafinal}}</td>
                                                  <td>{{$Experiencia->cargo}}</td>
                                                  <td>{{$Experiencia->descripcion}}</td>
                                                  <td>{{$Experiencia->adjunto}}</td>
                                                  <td>{{$Experiencia->idegresados}}</td>
                                                 
                                                 
      	  	       	      	  </tr>

      	  	       	      </tbody>
      	  	       	 
      	  	       </table>
      
      	  	       	    
      	  	       	    <a  class="btn btn-primary btn-lg" href="/experiencia" role="button">Atras</a>
      	  	        	</p>
      	  	       	
      	  	       </div> 
      	  	
      	  	</div>
      	</div>
    
    @endsection  	  	    