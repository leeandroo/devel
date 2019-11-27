<div id="modal-{{$cita->id}}" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header border-0 pb-0 mr-4">
				<button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p class="modal-title text-center mb-4">Agendar cita</p>
				<form id="modal-form" class="align-items-center pl-5 pr-5" style="color: #757575;" action="{{ url('/agendar/'.$cita->id) }}" method="POST">
					{!! csrf_field() !!}
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3">
								<label for="fecha" class="mt-1 mb-3 box-label">Responsable</label>
								<hr class="mt-0 mb-4">
							</div>	
							@foreach(App\User::get()->where('estado', 1) as $responsable)
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 worker-list p-0 mb-4">
									<div class="custom-control custom-radio align-middle float-right">
										<input type="radio" class="custom-control-input" id="{{ $responsable->id }}" name="responsable" value="{{ $responsable->id }}" required>
										<label class="custom-control-label" for="{{ $responsable->id }}"></label>
									</div>
									<div class="avatar float-left">
										<img src="{{asset('dashboard/img/avatars/'.$responsable->imagen)}}" alt="avatar mx-auto white" class="img-fluid rounded-circle z-depth-0 mr-3 float-left">
										<div class="float-left">
											<span class="text-list">{{ $responsable->name.' '.$responsable->lastname}}</span> <br>
											<span class="text-list-mini">{{ $responsable->profesion.' |	 Electro Global' }}</span>
										</div>
									</div>
								</div>
							@endforeach
						</div>
						<div class="form-row">
							
							<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mt-3 ">
								<label for="fecha" class="mt-1 mb-3 box-label">Cuando</label>
								<input type="date" pattern="yyyy/mm" class="form-control" name="fecha" required>
							</div>
							<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mt-3">
								<label for="fecha" class="mt-1 mb-3 box-label">Hora</label>
								<input type="time" class="form-control" name="hora_inicio">
							</div>
						</div>
					</div>
					<div class="md-for mt-5 mb-3 text-right" id="btn-modal">
						<button type="submit" class="btn btn-block green accent-3 white-text z-depth-0">Guardar cambios <i class="fa fa-check ml-2 fa-fw"></i> </button>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>