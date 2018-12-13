@extends ('layouts.app')

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  <center>
                  <h2>Listado de Vacantes</h2>
                  </center>
      	  	 
      	  	       <table class="table table-bordered table-striped">
      	  	       	  <thead>
      	  	       	  	  <tr>
      	  	       	  	  	<th>Id</th>
      	  	       	  	  	<th>Nombre</th>
                                          <th>Fecha de Inicio</th>
                                          <th>Fecha De Finalizacion</th>
                                          <th>Descripcion</th>
                                          <th>Requisitos</th>
                                          <th>Candidatos</th>
                                          <th>Rango Salarial</th>
                                          <th>Ciudad</th>
                                          <th>Area</th>
                                          <th>Empresa</th>
                                         
      	  	       	  	  </tr>
      	  	       	  </thead>
      	  	       	
      	  	       	      <tbody>
      	  	       	      	  <tr>
      	  	       	      	  	  <td>{{$Vacante->id}}</td>
                                  <td>{{$Vacante->nombre}}</td>
                                  <td>{{$Vacante->fechainicio}}</td>
                                  <td>{{$Vacante->fechafinal}}</td>
                                  <td>{{$Vacante->descripcion}}</td>
                                   <td>{{$Vacante->requisito}}</td>
                                  <td>{{$Vacante->candidatos}}</td>
                                  <td>{{$Vacante->rangosalarial}}</td>
                
                                  <td>{{$Vacante->idciudad}}</td>
                                                  <td>{{$Vacante->idareas}}</td>
                                                  <td>{{$Vacante->idempresas}}</td>
                                                 
      	  	       	      	  </tr>

      	  	       	      </tbody>
      	  	       	 
      	  	       </table>
      
      	  	       	    
      	  	       	    <a  class="btn btn-primary btn-lg" href="/vacante" role="button">Atras</a>
      	  	        	</p>
      	  	       	
      	  	       </div> 
      	  	
      	  	</div>
      	</div>
    
    @endsection  	  	    