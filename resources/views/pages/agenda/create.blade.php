<div id="modalCita" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header border-0 pb-0 mr-4">
				<button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p class="modal-title text-center mb-5">Contratar servicio</p>
				<form class="align-items-center pl-5 pr-5" style="color: #757575;" action="{{ url('/solicitar-servicio') }}" method="POST" id="modal-form">
					{!! csrf_field() !!}
					<div class="form-grou">
				

						<div class="form-row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<label for="nombre" class="mt-1 mb-3 box-label">Servicio</label>
								<select class="browser-default custom-select" name="servicio">
									@foreach($servicios as $servicio)
										<option value="{{ $servicio->id }}">{{ $servicio->nombre }}</option>
									@endforeach
								</select>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
								<label for="name">Descripción</label>
								<textarea name="descripcion" class="form-control rounded-0" type="text" rows="4"></textarea>
							</div>	
							<div class="col-lg-12 mt-4 mb-3">
								<div class="custom-control custom-checkbox my-4 text-left">
									<input type="checkbox" class="custom-control-input" id="estadowsp" name="estadowsp">
									<label class="custom-control-label black-text" for="estadowsp" id="relawayLight">Habilitar contacto por Whatsapp?</label>
								</div>
							</div>
						</div>
					</div>
					<div class="md-for mt-0 mb-4 text-right" id="btn-modal">
						<button type="submit" class="btn btn-block green accent-3 white-text z-depth-0" id="btn-aceptar">Confirmar solicitud <i class="fas fa-check ml-2"></i></button>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>