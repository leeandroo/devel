
<style>

#centrar{
	display: flex;
	justify-content: center;
	align-items: center;
}

#btnmodal1 .btn {
	
	background-color:#FEBD00;		
	border-radius:30px;	
	color:#ffffff;
	text-transform: capitalize;
	padding:10px 31px;
	/* text-shadow:0px 1px 0px #2f6627; */

}
#btnmodal2 .btn {
	
	background-color:#ffffff;		
	border-radius:30px;	
	color:#FEBD00;
	text-transform: capitalize;
	padding:10px 31px;
	/* text-shadow:0px 1px 0px #2f6627; */

}

</style>

<div id="modal-delete-{{$insumo->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <form method="POST" action="{{ url("insumo/{$insumo->id}") }}">  
                      
        {{ method_field('DELETE') }}
        
        {!! csrf_field() !!}
        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header warning-color white-text" id="centrar">
                    <h4 class="modal-title"><i class="fas fa-exclamation-circle"></i> ¿Estas Seguro?</h4>
                </div>

                <div class="modal-body" id="centrar">
                    <div class="col-lg-10">

                        <div id="centrar">
                        <p>Daras de baja el siguiente insumo:</p>
                        </div>
                        <ul>
                            <li>ID: {{$insumo->id}}</li>
                            <li>NOMBRE: {{$insumo->nombre}}</li>
                        </ul>
                    </div>                    
                </div>


                <div class="modal-footer" id="centrar">

                    <div id="btnmodal1">
                        <button type="submit" class="btn" id="btnmodal1">Aceptar</button>
                    </div>
                    <div id="btnmodal2">
                    <button type="button" class="btn" id="btnmodal2" data-dismiss="modal" aria-lebel="Close">Cancelar</button>
                    </div>

                </div>


            </div>

        </div>

    </form>

      
</div>