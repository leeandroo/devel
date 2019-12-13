<div id="modalSupplies" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header border-0 pb-0 mr-4">
				<button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p class="modal-title text-center mb-4">Agregar insumos </p>
				<form id="modal-form" class="align-items-center pl-5 pr-5" style="color: #757575;" action="{{ url('agregar/insumos/'.$cita->id) }} " method="POST">
					{!! csrf_field() !!}
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3">
								<label for="fecha" class="mt-1 mb-3 box-label">Insumo</label>
								
							</div>	
							<select class="browser-default custom-select ml-1 mr-1" name="insumo">
								@foreach($cita->insumos as $insumo)
									<option value="{{ $insumo->id }}">{{ $insumo->nombre }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-row">
							
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3 ">
								<label for="fecha" class="mt-1 mb-3 box-label">Cantidad</label>
								<input type="number" class="form-control" name="cantidad" required>
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