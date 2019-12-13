<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orden de trabajo: {{ 'EG-0'.$ot->id }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
   
    <style>
        @font-face {
            font-family: 'Montserrat';
            font-weight: normal;
            font-style: normal;
            font-variant: normal;
            src: url("https://fonts.googleapis.com/css?family=Montserrat&display=swap");
        }

        @font-face {
            font-family: 'PT Sans';
            font-weight: normal;
            font-style: normal;
            font-variant: normal;
            src: url("https://fonts.googleapis.com/css?family=PT+Sans&display=swap");
        }

        .ot-header {
            width: 100%;
            height: 85px;
        }

        .ot-body {
            width: 100%; 
            height: auto;
            margin-top: 35px;
        }

        .logo,
        .date {
            width: 50%;
            height: 85px;
            float: left;
        }

        .date {
            text-align: right;
        }

        .header {
            width: 100%;
            height: 100px;
        }

        .date h4, 
        .title h4 {
            font-family: Montserrat, sans-serif;
            font-size: 30px;
            font-weight: bold;
            color: #01579b;
        }

        
        .date p {
            font-family: PT Sans, sans-serif;
            font-size: 15px;
            color: #9e9e9e;
        }

        .header p, {
            font-family: PT Sans, sans-serif;
            font-size: 16px;
            color: #9e9e9e;
        }
        
        .logo img {
            width: 140px;
            height: 55px;
        }

        .company-info,
        .client-info {
            width: 50%;
            height: auto; 
        }

        .client-info {
            float: left;
        }

        .table thead th{
            font-family: Montserrat, sans-serif;
            font-size: 16px;
            font-weight: normal;
            color: white;
        }

        .table tbody td {
            font-family: PT Sans, sans-serif;
            font-size: 14px;
            font-weight: normal;
            color: #757575  ;
        }

        .bg-primary {
            background-color: #607d8b !important;
        }

        .mb-3 {
            margin-bottom: 70px !important;
        }
    </style>
</head>
<body>
    <div class="ot-header">
        <div class="logo">
            <img src="{{ public_path('img/logo.PNG') }}" >
        </div>

        <div class="date">
            <h4>Orden de servicio</h4>
            <p>
                N° de orden: {{ 'EG-0'.$ot->id }} <br>
                Fecha: {{ $ot->fecha }}
            </p>
        </div>
    </div>

    <div class="ot-body">
        <table class="table table-bordered mb-3">
            <thead>
                <tr class="bg-primary">
                    <th scope="col" colspan="6">Información del cliente</th>
                    <th scope="col" >Contacto</th>
                    <th scope="col" >Dirección</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="6">
                        Solicitado por: {{ $ot->user->name.' '.$ot->user->lastname }} <br>
                        Correo: {{ $ot->user->email }} <br>
                        RUT: {{ $ot->user->rut }}
                    </td>
                    <td colspan="">
                        +56 {{ $ot->user->telefono }} <br>
                        
                        @if($ot->estado_whatsapp == 1)
                            WhatsApp habilitado 
                        @elseif($ot->estado_whatsapp == 0)
                            Sin comunicación vía WhatsApp
                        @endif
                    </td>
                    <td colspan="">
                        {{ $ot->user->calle.', '.$ot->user->numero_calle }}
                    </td>
                </tr>
                
               
            </tbody>
        </table>
        <table class="table table-bordered mb-3">
            <thead>
                <tr class="bg-primary">
                    <th scope="col" colspan="8">Servicios y trabajos</th>
                    <th scope="col" >Inicio</th>
                    <th scope="col" >Termino</th>
                    <th scope="col" >Precio</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="8">
                        Servicio: {{ $ot->servicio->nombre}} <br>
                        Tipo: {{ $ot->servicio->tipo }} <br>
                        Descripción: {{ $ot->descripcion }}
                    </td>
                    <td colspan="">
                        {{ $ot->hora_inicio }} <br>
                    </td>
                    <td colspan="">
                        {{ $ot->hora_termino }}
                    </td>
                    <td colspan="">
                        {{ '$'.$ot->servicio->precio }} CLP
                    </td>
                </tr>
                
               
            </tbody>
        </table>
        <table class="table table-bordered   mb-3">
            <thead>
                <tr class="bg-primary">
                    <th scope="col" colspan="8">Materiales</th>
                    <th scope="col" >Cantidad</th>
                    <th scope="col" >Precio</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="8">
                         <br>
                         <br>
                        
                    </td>
                    <td colspan="">
                         <br>
                    </td>
                    <td colspan="">
                        
                    </td>
         
                </tr>
                
               
            </tbody>
        </table>
        <table class="table table-bordered">    
            <thead>
                <tr class="bg-primary">
                    <th scope="col" colspan="8">Observaciones</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="8">
                         <br>
                         <br>
                        
                    </td>
                    
         
                </tr>
                
               
            </tbody>
        </table>
    </div>
    <!-- <div class="ot-header">
        
        <p class="ot-title">
            Orden de trabajo <br>
            <p class="ot-subtitle"> <span class="black-text">Electro</span> Global</p>
            <img src="" alt="">
        </p>
        
    </div>
    

    <div class="insumos">
        <table>
            <thead>
                <tr>
                    <th colspan="4" class="cabecera">Insumos utilizados</th>
                </tr>
            </thead>
            <tbody> 
                <tr>
                    <td>Insumo</td>
                    <td>Categoria</td>
                    <td>Cantidad</td>
                    <td>Precio</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="tareas">
        <table>
            <thead>
                <tr>
                    <th colspan="3" class="cabecera">Tareas anexas</th>
                </tr>
            </thead>
            <tbody> 
                <tr>
                    <td>Tarea</td>
                    <td>Descripción</td>
                    <td>Estado</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div>
        <table>
            <thead>
                <tr>
                    <th colspan="3" class="cabecera">Observación</th>
                </tr>
            </thead>
            <tbody> 
                <tr> 
                    <td colspan="3" style=" height: 120px; "></td>
                </tr>
            </tbody>
        </table>
    </div> -->
    
</body>
</html>