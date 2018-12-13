@extends ('layouts.app')

 @section('content')
      <div class="row">
      	  <div class="col-md-10 offset-md-1">
                  <center>
                  <h2>Listado Pais</h2>
                  </center>
                  
      	  	   
      	  	       <table class="table table-bordered table-striped">
      	  	       	  <thead>
      	  	       	  	  <tr>
      	  	       	  	  	<th>Id</th>
      	  	       	  	  	<th>Nombre</th>
                                         
      	  	       	  	  </tr>
      	  	       	  </thead>
      	  	       	
      	  	       	      <tbody>
      	  	       	      	  <tr>
      	  	       	      	  	  <td>{{$Pais->id}}</td>
      	  	       	      	  	  <td>{{$Pais->name}}</td>
                                                 
      	  	       	      	  </tr>

      	  	       	      </tbody>
      	  	       	 
      	  	       </table>
      
      	  	       	    
      	  	       	    <a  class="btn btn-primary btn-lg" href="/pais" role="button">Atras</a>
      	  	        	</p>
      	  	       	
      	  	       </div> 
      	  	
      	  	</div>
      	</div>
    
    @endsection  	  	    