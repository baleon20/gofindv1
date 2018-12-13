 @extends ('layouts.app')

 @section('content')
      <div class="row">
              <div class="col-md-10 offset-md-1">
                  
                  <h2 style="text-align: center">Listado de Tipo de Eventos</h2>
                 
                     
                         <table class="table table-bordered table-striped">
                                <thead>
                                      <tr>
                                          <th>Id</th>
                                          <th>Nombre</th>
                                            <th>Evento</th>
                                            <th width="250px">Acciones</th>
                                         
                                      </tr>
                                </thead>
                                @forelse($tipoevento as $TipoEvento)
                                    <tbody>
                                            <tr>
                                                  <td>{{$TipoEvento->id}}</td>
                                                  <td>{{$TipoEvento->nombre}}</td>
                                                  <td>{{$TipoEvento->ideventos}}</td>
                                    <td> 
                                                      <a  class="btn btn-primary " href="/tipoevento/show/{{$TipoEvento->id}}">Ver</a>
                                                      <a  class="btn btn-warning " href="/tipoevento/edit/{{$TipoEvento->id}}">Editar</a>
                                                      <a  class="btn btn-danger " href="/tipoevento/delete/{{$TipoEvento->id}}">Eliminar</a>
                                                      
                                                  </td>
                                          
                                            </tr>

                          @empty
                         <div class="jumbotron">
                                  <h1 class="display-4"> No hay tipos de eventos en el sistema</h1>
                                  <p class="lead">Deberias registrar uno para el correcto funcionamiento de la aplicacion.</p>

                                  <hr class="lead">
                                  <a  class="btn btn-primary btn-lg" href="/tipoevento/create" role="button">Crear Tipo de Evento</a>
                              </p>
                              
                         </div> 
                         @endforelse
                      <div class="input-group">
                      <form action="{{ route('TipoEvento.getsearch')  }}" method="post" id="search-form" >
                        @csrf
                        <input type="text" class="form-control" name="id"  placeholder="Buscar">
                        <input class="btn btn-primary btn-lg" type="submit" value="Buscar">
                      </form>
                      </div>  
                  </tbody>
                              
                 </table>
                  <a  class="btn btn-primary btn-lg" href="/tipoevento/create" role="button">Nuevo Tipo de Evento</a>
                  </div>
            </div>
    
    @endsection             