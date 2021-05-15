@extends('layouts.app')

	@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">

						
					<div class="row">
					
						<div class="col">
							<h5 class="text-info">PROCEDIMIENTOS</h5>
						</div>

						
						<div class="col-8" class="text-right">
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

							      		<label>Identificacion del paciente</label>
							      		<input type="text" class="form-control" name="">

							            <br>
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
   
							<!-- BOTON AGREGAR PROCEDIMIENTO modal -->
							<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#agregarprocedimiento">
							  AGREGAR PROCEDIMEINTO
							</button>

							<!-- Modal -->
							<div class="modal fade" id="agregarprocedimiento" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<h5 class="modal-title" id="staticBackdropLabel">¿Desea agregar un procedimiento?</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									  <span aria-hidden="true">&times;</span>
									</button>
								  </div>

								  <div class="modal-body">
								      <form>
								        <div class="form-group">
								          <label for="exampleInputEmail1">Nombre</label>
								          <input type="text" class="form-control" id="">
								        </div>
								        <div class="form-group">
								          <label for="exampleInputPassword1">Duracion</label>
								          <input type="password" class="form-control" id="">
								        </div>
								      </form>
								   </div>
						
								  <div class="modal-footer">
									<button type="button" class="btn btn-info" data-dismiss="modal">NO</button>
									<button type="button" class="btn btn-info">GUARDAR</button>
								  </div>
								</div>
							  </div>
							</div>
							
							<!-- Button LISTAR -->
							<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#listarCita">
							  LISTAR CITA
							</button>

							<!-- Modal LISTAR CITA-->
							<div class="modal fade bd-example-modal-lg" id="listarCita"tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
							  <div class="modal-dialog modal-lg">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="staticBackdropLabel">Lista de citas del dia de hoy</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>

							      <div class="modal-body">

							      	<div class="row">
							      		
							      		<div class="col-5">
							      			<ul class="list-group">
							      				<label>Nombre del paciente</label>
							      			  <li class="list-group-item">Nombre paciente</li>
							      			  
							      			</ul>	
							      		</div>	

							      		<div class="col-4">
							      			<ul class="list-group">
							      				<label>Procedimiento</label>
							      			  <li class="list-group-item">Procedimiento</li>
							      			 
							      			</ul>	
							      		</div>

							      		<div class="col-3">
							      			<ul class="list-group">
							      				<label>Hora</label>
							      			  <li class="list-group-item">hora</li>
							      			
							      			</ul>	
							      		</div>

							      	</div>     

							      </div>
							
							      <div class="modal-footer">
							        <button type="button" class="btn btn-info" data-dismiss="modal">CERRAR</button>
							      </div>
							    </div>
							  </div>
							</div>

						</div>
					</div>
					</div>

						<div class="card-body">
							@if (session('status'))
								<div class="alert alert-success" role="alert">
									{{ session('status') }}
								</div>
							@endif

							<div class="container">
								
								<div class="row">

									<div class="col-4">
										<div class="card text-center" style="height: 8rem;" style="width: 12rem;">
										  <div class="card-body">

									        <div class="col">
									    	    <h5 class="card-title">Examenes de rutina</h5>
									    	    <p class="card-text">1 hr 20 min</p>
									        </div>

										  </div>
										</div>
									</div>

									<div class="col-8">
										<div class="card" style="height: 8rem;" style="width: 25rem;">
											<div class="card-body">
												
												<div class="row">

										
													<div class="col">

														<!-- BOTON CANCELAR-->      
														<div>
															<!-- Button trigger modal -->
															<button type="button" class="btn btn-info btn-sm btn-block" data-toggle="modal" data-target="#eliminarprocedimiento">
															  ELIMINAR PROCEDIMIENTO
															</button>

															<!-- Modal -->
															<div class="modal fade" id="eliminarprocedimiento" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
															  <div class="modal-dialog" role="document">
																<div class="modal-content">
																  <div class="modal-header">
																	<h5 class="modal-title" id="staticBackdropLabel">¿Desea eliminar el procedimiento?</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	  <span aria-hidden="true">&times;</span>
																	</button>
																  </div>
											
																  <div class="modal-footer">
																	<button type="button" class="btn btn-info" data-dismiss="modal">No, mantener</button>
																	<button type="button" class="btn btn-info">Si, eliminar</button>
																  </div>
																</div>
															  </div>
															</div>

														</div>

														<br>

														<div>
															<!-- BOTON AGREGAR PROCEDIMIENTO modal -->
							<button type="button" class="btn btn-info btn-sm btn-block" data-toggle="modal" data-target="#editarprocedimiento">
							  EDITAR PROCEDIMEINTO
							</button>

							<!-- Modal -->
							<div class="modal fade" id="editarprocedimiento" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<h5 class="modal-title" id="staticBackdropLabel">¿Desea editar el procedimiento?</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									  <span aria-hidden="true">&times;</span>
									</button>
								  </div>

								  <div class="modal-body">
								      <form>
								        <div class="form-group">
								          <label for="exampleInputEmail1">Nombre</label>
								          <input type="text" class="form-control" id="">
								        </div>
								        <div class="form-group">
								          <label for="exampleInputPassword1">Duracion</label>
								          <input type="password" class="form-control" id="">
								        </div>
								      </form>
								   </div>
						
								  <div class="modal-footer">
									<button type="button" class="btn btn-info" data-dismiss="modal">CANCELAR</button>
									<button type="button" class="btn btn-info">GUARDAR</button>
								  </div>
								</div>
							  </div>
							</div>
													   </div>
													   
														<br>

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
