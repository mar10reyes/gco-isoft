@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                    <div class="row">
                        
                        <div class="col">
                            
                            <!-- Button AGENDAR CITA -->
                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#agendarCita">
                              AGENDAR CITA
                            </button>

                            <!-- Modal AGENDAR CITA-->
                            <div class="modal fade" id="agendarCita" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">¿Desea agendar una cita?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>

                                  <div class="modal-body">
                                        
                                        <label>Fecha</label>
                                        <input type="text" class="form-control" id="calendarioAgendar" name="" readonly="">

                                        <br>
                                        <label>Hora</label>
                                        <select class="form-control">
                                          <option>Default select</option>
                                        </select>

                                        <br>
                                        <label>Procedimiento</label>
                                        <select class="form-control">
                                          <option>Default select</option>
                                        </select>            

                                  </div>
                            
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-info" data-dismiss="modal">CANCELAR</button>
                                    <button type="button" class="btn btn-info">AGENDAR</button>
                                  </div>
                                </div>
                              </div>
                            </div>

                        </div>

                        <div class="col">
                              
                              <h2 class="text text-info">Citas</h2>

                        </div>

                    </div>
                </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">

                            <div class="col">
                                <div class="card" style="width: 10rem" style="height: 10rem">
                                    <div class="card-body">
                                        <h1 class="text-center" class="">15</h1>
                                        <p class="text-center">enero</p>
                                        <p class="text-center"><small class="form-text-center text-muted">vie. 1:00</small></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card" style="width: 30rem" style="height: 10rem">
                                    <div class="card-body">
                                        
                                        <div class="row">

                                            <div class="col">

                                                <br>
                                                <br>
                                                <div>
                                                    <h2 class="text" > Procedimiento </h2>
                                                </div>

                                                <div>
                                                    <p class="text-secondary"> 1 h 20 min</p>
                                                </div>

                                            </div>

                                            <div class="col ">

                                                <!-- BOTON CANCELAR-->      
                                                <div>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-info btn-sm btn-block" data-toggle="modal" data-target="#cancelarCita">
                                                      CANCELAR
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="cancelarCita" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">¿Desea cancelar la cita programada?</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                          </div>
                                    
                                                          <div class="modal-footer">
                                                            <button type="button" class="btn btn-info" data-dismiss="modal">No, mantener</button>
                                                            <button type="button" class="btn btn-info">Si, cancelar</button>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                </div>

                                                <br>

                                                <div>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-info btn-sm btn-block" data-toggle="modal" data-target="#reprogramarCita">
                                                      REPROGAMAR CITA
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="reprogramarCita" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">¿Desea reprogramar la cita programada?</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                          </div>

                                                          <div class="modal-body">
                                                                
                                                                <label>Fecha</label>
                                                                <input type="text" class="form-control" id="calendarioReprogramar" name="" readonly="">

                                                                <br>
                                                                <label>Hora</label>
                                                                <select class="form-control">
                                                                  <option>Default select</option>
                                                                </select>       

                                                          </div>
                                                    
                                                          <div class="modal-footer">
                                                            <button type="button" class="btn btn-info" data-dismiss="modal">CANCELAR</button>
                                                            <button type="button" class="btn btn-info">REPROGRAMAR</button>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                               </div>
                                               
                                                <br>

                                                <div>
                                                   <!-- Button trigger modal -->
                                                   <button type="button" class="btn btn-info btn-sm btn-block" data-toggle="modal" data-target="#cambiarProcedimiento">
                                                     CAMBIAR PROCEDIMIENTO
                                                   </button>

                                                   <!-- Modal -->
                                                   <div class="modal fade" id="cambiarProcedimiento" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                     <div class="modal-dialog" role="document">
                                                       <div class="modal-content">
                                                         <div class="modal-header">
                                                           <h5 class="modal-title" id="staticBackdropLabel">¿Desea cambiar el procedimiento de la cita programada?</h5>
                                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                             <span aria-hidden="true">&times;</span>
                                                           </button>
                                                         </div>

                                                         <div class="modal-body">
                                                               
                                                               <label>Procedimiento</label>
                                                               <select class="form-control">
                                                                 <option>Default select</option>
                                                               </select>       

                                                         </div>
                                                   
                                                         <div class="modal-footer">
                                                           <button type="button" class="btn btn-info" data-dismiss="modal">CANCELAR</button>
                                                           <button type="button" class="btn btn-info">CAMBIAR PROCEDIMIENTO</button>
                                                         </div>
                                                       </div>
                                                     </div>
                                                   </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
