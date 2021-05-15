@extends('layouts.app')

@section('content')


	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<h2 class="text-center text-info">SERVICIOS</h2>
					</div>

					<div class="card-body">
						@if (session('status'))
							<div class="alert alert-success" role="alert">
								{{ session('status') }}
							</div>
						@endif	
					</div>
						
					<div class="container">
						
						<div class="row">				
							<div class="col">
								<div class="card text-center" style="height: 13rem;" style="width: 12rem;">
								  <div class="card-body">

							        <div class="col">
							    	    <h5 class="card-title">Examenes de rutina</h5>
							    	    <p class="card-text">1 hr 20 min</p>
							        </div>

							        <div>
							        	<br>
							        	<a href="#" class="btn btn-info">RESERVAR</a>
							      	</div>

								  </div>
								</div>
							</div>	

							<div class="col">
								<div class="card text-center" style="height: 13rem;" style="width: 12rem;" >
								  <div class="card-body">
								    
								    <div class="col">
									    <h5 class="card-title">Rellenos dentales</h5>
									    <p class="card-text">1 hr 30 min</p>
								    </div>

								    <div>
								    	<br>
								    	<a href="#" class="btn btn-info">RESERVAR</a>
								  	</div>

								  </div>
								</div>
							</div>

							<div class="col">
								<div class="card text-center" style="height: 13rem;" style="width: 12rem;" >
								  <div class="card-body">


								    <div class="col">
									    <h5 class="card-title">Higiene dental</h5>
									    <p class="card-text">1 hr 40 min</p>
								    </div>

								    <div>
								    	<br>
								    	<a href="#" class="btn btn-info">RESERVAR</a>
								  	</div>

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

@endsection
