@extends ('layouts.app')

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  <center>
                  <h2>Listado de Estudios</h2>
                  </center>
      	  	 
      	  	       <table class="table table-bordered table-striped">
      	  	       	  <thead>
      	  	       	  	  <tr>
      	  	       	  	  	  <th>Id</th>
                            <th>Titulo</th>
                                          <th>Institucion</th>
                                          <th>Duracion</th>
                                          <th>Fecha</th>
                                          <th>Egresado</th>
                                          <th>Nivel de Estudios</th>
                                          <th width="250px">Acciones</th>
      	  	       	  	  </tr>
      	  	       	  </thead>
      	  	       	
      	  	       	      <tbody>
      	  	       	      	  <tr>
      	  	       	      	  	   <td>{{$Estudio->id}}</td>
                                  <td>{{$Estudio->titulo}}</td>
                                  <td>{{$Estudio->institucion}}</td>
                                  <td>{{$Estudio->duracion}}</td>
                                  <td>{{$Estudio->fecha}}</td>
                                                  <td>{{$Estudio->idegresados}}</td>
                                                  <td>{{$Estudio->idnivel_estudios}}</td>

                                                 
      	  	       	      	  </tr>

      	  	       	      </tbody>
      	  	       	 
      	  	       </table>
      
      	  	       	    
      	  	       	    <a  class="btn btn-primary btn-lg" href="/estudio" role="button">Atras</a>
      	  	        	</p>
      	  	       	
      	  	       </div> 
      	  	
      	  	</div>
      	</div>
    
    @endsection  	  	    