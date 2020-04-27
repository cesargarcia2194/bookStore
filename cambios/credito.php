<?php
/************************************
 * V1.1
 * 
 ************************************/
// no direct access
defined( '_VALID_MOS' ) or die( 'Restricted access' );

require_once( $mainframe->getPath( 'admin_html' ) );

$cid = josGetArrayInts( 'cid' );
$numauts = josGetArrayInts( 'numauts' );

switch ($task) 
	{
	case 'subir_imagen_huella': solicitud_subir_huella($option);break;
	case 'agregar_imagen_huella': solicitud_agregar_huella($option); break;
	case 'agregarhuella':
		agregarhuella($option);
		break;
	case 'change_tracking': change_tracking($option);break;
	case 'go_idcheck': go_idcheck($option);break;
    case 'gofourthcomercioSuccess': gofourthcomercioSuccess($option);break;
	case 'calificar_validador': calificar_validador($option);break;
	case 'validador_identidad': validador_identidad($option);break;        
        case 'validador_preguntas_credid': validador_preguntas_credid($option); break;
        case 'validador_respuestas_credid': validador_respuestas_credid($option); break;
	case 'activaciones': activaciones($option); break;
	case 'bloqueos': bloqueos($option); break;
	case 'open_transunion': open_transunion($option); break;
	case 'agregarvoucher':
		agregarvoucher($option);
	break;
	case 'agregar_voucher':
		agregar_voucher($option);
		break;
	case 'limitecredito':
		limitecredito($option);
	break;
	case 'procesar_limitecredito':
		procesar_limitecredito($option);
		break;
	case 'finish':
		finish($option);
	break;
	case 'solicitudcredito':
		solicitudcredito($option);
	break;
	case 'gosixth':
		gosixth($option);
	break;
	case 'gofifth':
		gofifth($option);
	break;
	case 'gosecond':
		gosecond($option);
	break;
	case 'gothird':
		gothird($option);
	break;
	case 'gofourth':
		gofourth($option);
	break;
	case 'agregarorden':
		agregarorden($option);
		break;
	case 'buscarReintegro':
		buscarReintegro($option);
		break;	
	case 'anularReintegro':
		$id = $_GET['id'];
		anularReintegro($option,$id);
		break;	
	case 'showDevolucionesAutorizacionesEmpresas':
		showDevolucionesAutorizacionesEmpresas( $option );
		break;
	case 'devolucionVentaTelefonica':
		devolucionVentaTelefonica( $option ) ;
		break;
	case 'procesarDevolucionAutorizacion':
		procesaDevolucionTelefonica($option);
		break;
	case 'save_seguimiento_legal':
		save_seguimiento_legal($option);
		break;
	case 'show_cuenta_seguimiento_legal':
		show_cuenta_seguimiento_legal($option);
		break;
	case 'show_cuentas_seguimiento_legal':
		show_cuentas_seguimiento_legal($option);
		break;
	case 'alta_reintegro_ajuste':
		alta_reintegro_ajuste();
		break;
	case 'show_reintegros':
		showReintegros($option);
		break ;
			
	case 'reintegro_alta':
		reintegro_alta($option);
		break ;
		
	case 'go_reintegro_alta':
		go_reintegro_alta($option);
		break;
		
	case 'tarjetaregalo_alta':
		TarjetaRegalo_Alta($option);
		break;
		
	case 'tarjeta_cocina_alta':
		TarjetaCocina_Alta($option);
		break;
	case 'tarjeta_galon_alta':
		TarjetaGalon_Alta($option);
		break;	
	case 'tarjeta_galon_procesaalta':
		TarjetaGalon_ProcesaAlta($option);
		break;
	case 'tarjeta_cocina_procesaalta':
		TarjetaCocina_ProcesaAlta($option);
		break;		
	case 'tarjeta_galon_listado':
		TarjetaGalon_Listado($option);
		break;
	case 'tarjeta_cocina_listado':
		TarjetaCocina_Listado($option);
		break;
	case 'search_tarjeta_cocina_listado':
	search_TarjetaCocina_Listado($option);
	break;
	case 'listado_cashback':
		Listado_Cashback($option);
		break;

	case 'tarjetaregalo_procesaalta':
		TarjetaRegalo_ProcesaAlta($option);
		break;

	case 'tarjetaregalo_carga':
		TarjetaRegalo_Carga($option);
		break;
		
	case 'tarjeta_galon_carga':
		TarjetaGalon_Carga($option);
		break;

	case 'tarjeta_cocina_carga':
		TarjetaCocina_Carga($option);
		break;		
	case 'autorizaciontelefonica_carga':
		AutorizacionTelefonica_Carga($option);
		break;
		
	case 'devolucionautorizaciontelefonica_carga':
		DevolucionAutorizacionTelefonica_Carga($option);
		break;
		
	case 'tarjetaregalo_listado':
		TarjetaRegalo_Listado($option);
		break;

	case 'cancel':
		mosRedirect( 'index.php');
		break;

	case 'tasaCero':
		tasaCero($option);
		break;

	case 'showAutorizacionesTasaCero':
		showAutorizacionesTasaCero($option);
		break;

	case 'searchAutorizacionesTasaCero':
		searchAutorizacionesTasaCero($option);
		break;
		
	case 'ventasTelefonicas':
		ventasTelefonicas($option);
		break;
		
	case 'viewAutorizacion':
		$id = $_GET['id'];
		viewAutorizacion($option,$id);
		break;
	case 'viewDevolucionAutorizacion':
		$id = $_GET['id'];
		viewDevolucionAutorizacion($option,$id);
		break;
	case 'autorizacionDenegada':
		autorizacionDenegada();
		break;
		
	case 'anularAutorizacion':
		$id = $_GET['id'];
		anularAutorizacion($option,$id);
		break;
		
	case 'anularDevolucionAutorizacion':
		$id = $_GET['id'];
		anularDevolucionAutorizacion($option,$id);
		break;
		
	case 'showAutorizacionesEmpresas':
		showAutorizacionesEmpresas($option);
		break;
		
	case 'ventasTelefonicas_solicitaFactura':
		$id = $_GET['id'];
		ventasTelefonicas_solicitaFactura($id,$option);
		break;		
	case 'finalizaAutorizacionTelefonica':
		finalizaAutorizacionTelefonica($option);
		break;
		
	case 'procesarAutorizacionTasaCero':
		procesarAutorizacionTasaCero($option);
		break;
		
	case 'procesarAutorizacion':
		procesarAutorizacion($option);
		break;
		
	case 'showVentasTelefonicasResumen':
		showVentasTelefonicasResumen($option);
		break;
		
	case 'showPreautorizaciones':
		showPreautorizaciones($option);
		break;
		
	case 'showPreautorizacionesEstudio':
		showPreautorizacionesEstudio($option);
		break;
		
	case 'gotoScorecard_SCREEN1':
		gotoScorecard_SCREEN1($option);
		break;

	case 'gotoScorecard_SCREEN2':
		gotoScorecard_SCREEN2($option);
		break;
		
	case 'gotoScorecard_SCREEN2_CRITERIO':
		gotoScorecard_SCREEN2_CRITERIO($option);
		break;

	case 'gotoScorecard_SCREEN3':
		gotoScorecard_SCREEN3($option);
		break;

	case 'showPreciador':
		showPreciador($option);
		break;
            
        case 'select_impresion_masiva':
            select_impresionMasiva($option);
            break;

            case 'insert_impresion_masiva':
            insert_impresionMasiva($option);
            break;

	case 'calcularPreciador':
		calcularPreciador($option);
		break;

	case 'search':
		searchPreautorizaciones( $option );
		break;
		
	case 'searchEstudio':
		searchPreautorizacionesEstudio( $option );
		break;
		
	case 'show_preautorizacion':
		show_preautorizacion();
		break ;
	case 'show_editPreautorizacion':
		showEditPreautorizacion( $option );
		break ;
	
	case 'edit_preautorizacion':
		editPreautorizacion( $option );
		mosRedirect( 'index.php?option='. $option, "Preautorizaci&oacute;n modificada exitosamente." );
		break ;
		
	case 'tracking_tarjetas': tracking_tarjetas($option);
		break;
	case 'buscar_show_devolucion': buscar_show_devolucion($option);
		break;
	case 'buscar_showAutorizacionesEmpresas': buscar_showAutorizacionesEmpresas($option);
		break;
	case 'tarjeta_adicional_sucursal':
		tarjeta_adicional_sucursal($option);
		break;
	case 'cambiar_tracking': cambiar_tracking($option);
		break;
	case 'solicitudCredixcelCredito': solicitudCredixcelCredito($option);
		break;
	case 'show_solicitudes_credixcel': show_solicitudes_credixcel($option);
		break;
	//modificaciones Karol
	case 'entrega_tarjeta': entrega_tarjeta($option);
		break;
	case 'gotracking': gotracking($option);
		break;
	case 'verificador': verificador($option);
		break;
	case 'showSolicitudCreditoPersonas':
		showSolicitudCreditoPersonas( $option );
		break ;
	case 'mensajeria':
		showReporteMensajeria( $option );
		break ;
	case 'mensajeria_procesada':
		showMensajeriaProcesada( $option );
		break ;
	case 'show_busqueda_mensajeria':
		showBusquedaMensajeria( $option );
		break ;		
	case 'show_mensajeriaPreautorizacion':
		showMensajeriaPreautorizacion( $option );
		break ;
	case 'showPreautorizacionProcesada':
		showPreautorizacionProcesada( $option );
		break ;		
	case 'guardar_estado_mensajeria':
		guardarEstadoMensajeria( $option );
		break ;
	case 'buscar_mensajeria_pendiente':
		buscarMensajeriaPendiente( $option );
		break ;
	case 'buscar_mensajeria_procesada':
		buscarMensajeriaProcesada( $option );
		break ;
	case 'search_mensajeria_procesada':
		searchMensajeriaProcesada( $option );
		break ;
	case 'rechazocredito': rechazocredito($option);break;
	case 'imagenorden':
	imagenorden($option);break;
	case 'imagenhuella':
		imagenhuella($option);
	break;
	case 'openpdfexperto': openPdfExperto();
	break;
	case 'buscar_preautorizacion_avanzado':
		buscar_preautorizacion_avanzado($option);
		break;
	case 'change_estado_gestion':
		changeEstadoGestionPreautorizacion($option);
		break;
	case 'pruebaKarol': prueba_karol($option);break;	
	case 'clear':
		// $option->setUserState( "filter{$option}search" , '' );
		// $option->setUserState( "filter{$option}criteria" , '' );
		// $option->setUserState( "filter{$option}match" , '' );
		showPreautorizaciones($option);
		break;
	case 'go':	
	default:
//		mosRedirect( 'index.php', 'Opci&oacute;n Inv&aacute;lida');
		showPreautorizaciones($option);
		break;
		}
function prueba_karol($option){
	//HTML_credito::finish( $option, '1138341','','0','CREDIX','B1');
	global $database,$my;
	$database->setQuery("select * from tb_preautorizacion where numusu='17188340'");
	$database->loadObject($row);
	HTML_credito::finish($option,$row->id, '0','0','','');
}
/*Almacena la imagen de la huella en el servidor*/
function solicitud_subir_huella() {
    global $config_absolute_path, $database, $my;
    $identificacion = mosGetParam($_POST, 'identificacion');
    $tipo_documento = mosGetParam($_POST, 'tipo_identificacion');

    $errors = array();
    $errors['error'] = 0;
    require_once($config_absolute_path."includes/upload/classFileUploader.php");
    $extensions = array("image/jpeg","image/jpg","image/gif","image/bmp","image/png");
    /*Ruta al directorio local donde se almacenan las imágenes*/
    $ruta = _CREDITO_HUELLAS_SOURCE_ ;

    if(is_uploaded_file($_FILES['file']['tmp_name'])){
        /*Obtener la extension del archivo*/
        $temporary = explode(".", $_FILES["file"]["name"]);
        $file_extension = end($temporary);
        /*Seteo el nombre del archivo al formato Identificacion+T+Fecha+extension*/
        $file_name = $identificacion . 'T' . date("Y-m-d_H-i-s") . '.' . $file_extension;
        $_FILES['file']['name'] = $file_name;
        $upload = new fileUploader($ruta,"2408000",$extensions,$_FILES["file"]);
        if($upload->result != "OK") {
            $errors['error'] = 1;
            $errors['message'] = "Error al almacenar el archivo";
        } else {
            /*Ejecutar la subida a amazon aws S3*/
            $amazon = new MyLibrary_Utilities_Amazon();
            $amazon->uploadFileS3(_AMAZONS3_BUCKET_ENVIROMENT_, _AMAZONS3_KEYNAME_HUELLAS_ . $file_name, _CREDITO_HUELLAS_SOURCE_ . $file_name, $_FILES["file"]["type"]);
            /*Almaceno en base de datos la ruta a la imagen*/
            $database->setQuery("select * from tb_documento_huella where identificacion = '$identificacion';");
            $database->loadObject($item);
            if(!empty($item)){
                $query="update tb_documento_huella set url = '$file_name', username = '$my->username', fecha = '". date("Y-m-d H:i:s") ."' where identificacion = '$identificacion'";
                $database->setQuery($query);
                $database->query();
            }else{
                $query="insert into tb_documento_huella (identificacion,url,username,fecha) values ('$identificacion','$file_name','$my->username','". date("Y-m-d H:i:s") ."')";
                $database->setQuery($query);
                $database->query(); 
            }
        }
    } else {
        $errors['error'] = 1;
        $errors['message'] = "Error en la subida del archivo";
    }
    if($errors['error'] == 1) {
        mosRedirect( 'index.php?option=credito&task=agregar_imagen_huella&identificacion=' . $identificacion . '&tipo_documento=' . $tipo_documento ,$errors['message']);
    } else {
        mosRedirect( "index.php?option=credito&task=gosecond&identificacion=$identificacion&tipo_documento=$tipo_documento", '' );
    }
}
/*Formulario para subir imagen por medio de ajax*/
function solicitud_agregar_huella($option) {
	/*CAPTURA DE CEDULA Y TIPO DE CEDULA*/
    $identificacion = mosGetParam($_GET,"identificacion");
    $tipo_documento = mosGetParam($_GET,"tipo_documento");

    HTML_credito::solicitud_agregar_huella($option, $identificacion, $tipo_documento);
}

    /**
     * @description Registro de Tarjetas Adicionales en Sucursales
     * @autor Edgard Murillo
     * @param type $option
     */

function tarjeta_adicional_sucursal($option) 
	{
		global $my, $database;
		$id = mosGetParam($_GET,'id');
		$id_preautorizacion = mosGetParam($_POST,'id_preautorizacion');
		$cedula = mosGetParam($_POST,'cedula');
		$telefono = mosGetParam($_POST,'telefono');
		$nombre = mosGetParam($_POST,'nombre_adicional');
		$apellidos = mosGetParam($_POST,'apellido_adicional') . ' ' .mosGetParam($_POST,'apellido2_adicional');
		$email = mosGetParam($_POST,'email');
		$dir_trabajo = mosGetParam($_POST,'dir_trabajo');
		$por_lim = mosGetParam($_POST,'por_lim');
		$tipo_identificacion = mosGetParam($_POST,'additional_type_id');
		$nacionalidad = mosGetParam($_POST,'nacionalidad');
		$genero = mosGetParam($_POST,'genero');
		$fecha_nacimiento = mosGetParam($_POST,'fecha_nacimiento');
                $fecha = date('Y-m-d');
                $estado='2';
                $numusu = '';
                $numtar = '';
                
                $query = "select * from tb_preautorizacion where id = '$id';";
                $database->setQuery( $query );
                $database->loadObject($row);
                $row = & $row;	
                $numusu = $row->numusu;

                
                $query1 = "SELECT * FROM tb_tarjeta_maestro where categoria_tarjeta = 1 and numusu = '$numusu' limit 1;";
                $database->setQuery( $query1 );
                $database->loadObject($row1);
                $row1 = & $row1;
                
                $numtar = $row1->numtar_19;
                 
		if ($cedula!='') { //tarjeta adicional
                        $tarjeta_credixcel = getTarjetaTransaccionCredixcel($numusu);
			$query = "INSERT INTO tb_tarjetas_adicional (tarjeta, cedula, telefono, nombre, apellidos, email, dir_trabajo, por_lim, estado, numusu, nacionalidad, genero, fecha_nacimiento, tipo_identificacion,fecha_creado)
			VALUES ('$tarjeta_credixcel->numtar','$cedula','$telefono','$nombre','$apellidos','$email','$dir_trabajo','$por_lim','$estado','$numusu','$nacionalidad','$genero','$fecha_nacimiento','$tipo_identificacion','$fecha');";
                        
                        $database->setQuery($query);
			$database->query();
			if ($database->getErrorNum()) {
				$mensajes = $database->stderr();
				return;
			} else {
				$mensajes = "<b style='color:blue;'>Carga de archivo procesada...</b><br />";
			}
			// Llenado en Tarjetas Impresiones
                        
                        $query3 = "UPDATE tb_tarjeta_maestro SET tar_nombre = '$nombre' , tar_apellido = '$apellidos'  WHERE numtar_19 = '$tarjeta_credixcel->numtar';";
                        $database->setQuery($query3);
			$database->query();
                        
			$estadoEmbozado = 20;

//			$query = "SELECT fdesde, fhasta FROM tb_tarjeta WHERE numtar_19 = '$preautorizacion->ccno'";
                        $query3 = "SELECT fdesde, fhasta FROM tb_tarjeta WHERE numtar_19 = '$numtar'";
   			$database->setQuery( $query3 );
                        $database->loadObject($row3);
                        $row3 = & $row3;
                        
                        
   			$lugarImpresion = 'IMPRESION EN CUSTODIA';
   			
                        $cedula = str_replace("-", "", $cedula);
			$query2 = "INSERT INTO tb_impresion_tarjeta (numtar, fecha_inserccion, plasticos_consumidos, numusu, fk_estado_renovacion, aff_group, fdesde, fhasta, stand_courier, lugar_impresion, tipo_novedad, fuente, cedula) 
                                            VALUES ('$tarjeta_credixcel->numtar', '$fecha', '0', '$numusu', '$estadoEmbozado', '$row->aff_group', '$row3->fdesde', '$row3->fhasta', '0', '$lugarImpresion', 'ALTA', 'PREAUTORIZACION', '$cedula');";
			$database->setQuery($query2);
			$database->query();
			if ($database->getErrorNum()) {
				$mensajes = $database->stderr();
				return;
			} else {
				$mensajes = "<b style='color:blue;'>Tarjeta Cargada. Pendiente de Imprimir</b><br />";
			}

			$idRegistro = mysql_insert_id();
   			cambiarTrackingEmbozado($idRegistro, 'PREAUTORIZACION', $estadoEmbozado, "Tarjeta Cargada. Pendiente de Imprimir");

			mosRedirect('index.php?option=credito&task=clear',"Tarjeta Adicional Registrada");
		}   
                //NACIONALIDAD
    $database->setQuery("select * from tb_paises order by nombre asc;");
    $paises = $database->loadObjectList();

    if ($database->getErrorNum()) {
        echo $database->stderr();
        return array();
        }
        
    $nacionalidad[] = mosHTML::makeOption( '', 'Seleccione la nacionalidad');
    foreach ($paises as $key=>$item){
        $nacionalidad[] = mosHTML::makeOption( $item->codigo, $item->nombre);
        }
    $lists['nacionalidad'] = mosHTML::selectList( $nacionalidad, 'nacionalidad', 'id="nacionalidadList" class="inputbox" size="1"', 'value', 'text', '188' );
    
		HTML_credito::tarjeta_adicional_sucursal($option, $mensajes, $id, $lists);
	}

function imagenhuella($option) {
	$resultado = mosGetParam($_GET,"id");
	HTML_credito::imagenhuella($option,$resultado);		
}
function agregarhuella($option){
?>
<script languaje="javascript"> 
	function funcion_javascript(){ 
		var padre=window.self; 
		padre.opener = window.self; 
		padre.close(); 
	} 
</script>
	
<?php
GLOBAL $database, $config_absolute_path,$my;	
$id = mosGetParam($_POST,"id");
	$errors = array();
	$errors['error'] = 0;
	require_once($config_absolute_path."includes/upload/classFileUploader.php");
	$extensions = array("image/jpeg","image/jpg","image/gif","image/bmp","image/png");
	/*Ruta al directorio local donde se almacenan las imágenes*/
	$ruta = _CREDITO_HUELLAS_SOURCE_ ;

	if(is_uploaded_file($_FILES['huella']['tmp_name'])){
		/*Obtener la extension del archivo*/
		$temporary = explode(".", $_FILES["huella"]["name"]);
		$file_extension = end($temporary);
		/*Seteo el nombre del archivo al formato Identificacion+T+Fecha+extension*/
		$file_name = $id . 'T' . date("Y-m-d_H-i-s") . '.' . $file_extension;
		$_FILES['huella']['name'] = $file_name;
		$upload = new fileUploader($ruta,"2408000",$extensions,$_FILES["huella"]);
		if($upload->result != "OK") {
			$errors['error'] = 1;
			$errors['message'] = "Error al almacenar el archivo";
		} else {
			/*Ejecutar la subida a amazon aws S3*/
			$amazon = new MyLibrary_Utilities_Amazon();
			$amazon->uploadFileS3(_AMAZONS3_BUCKET_ENVIROMENT_, _AMAZONS3_KEYNAME_HUELLAS_ . $file_name, _CREDITO_HUELLAS_SOURCE_ . $file_name, $_FILES["huella"]["type"]);
			/*Almaceno en base de datos la ruta a la imagen*/
			$database->setQuery("select * from tb_documento_huella where identificacion = '$id';");
			$database->loadObject($item);
			if(!empty($item)){
				$query="update tb_documento_huella set url = '$file_name', username = '$my->username', fecha = '". date("Y-m-d H:i:s") ."' where identificacion = '$id'";
				$database->setQuery($query);
				$database->query();
			}else{
				$query="insert into tb_documento_huella (identificacion,url,username,fecha) values ('$id','$file_name','$my->username','". date("Y-m-d H:i:s") ."')";
				$database->setQuery($query);
				$database->query();	
			}
		}
	} else {
		$errors['error'] = 1;
		$errors['message'] = "Error en la subida del archivo";
	}
?> 
<script languaje="javascript"> 
funcion_javascript();
</script> 
<?php

}

function change_tracking($option){
	global $my , $database;
	$accion =  mosGetParam($_POST, 'accion');
	$tracking = mosGetParam($_POST, 'tracking');
	$tipoTrack		 = getTracking($tracking);
 	if($accion!=''){
		 $valor = mosGetParam($_POST, 'datos');
			if($accion=='1'){
				$lines = explode(PHP_EOL,$valor );
				//INSERTAR A TABLA
				for($i = 0; $i<count($lines); $i++)
				{
					$item = null;
					$cuenta = trim($lines[$i]);
					$database->setQuery("update tb_preautorizacion set tracking='$tracking' where numusu='$cuenta'");
					$database->query();
					$database->setQuery("select id tb_preautorizacion where numusu='$cuenta'");
					$id = $database->loadResult();
				$query = "insert into tb_preautorizacion_comentarios(numusu,comentario,fecha_creado,creador) values('$cuenta','SE HA CAMBIADO A ESTADO DE TRACKING $tipoTrack','".date("dmY H:i:s")."','$my->username')";
				$database->setQuery($query);
				$database->query();

				}
			}if($accion=='2'){
				$lines = explode(PHP_EOL,$valor );
				//INSERTAR A TABLA
				for($i = 0; $i<count($lines); $i++)
				{
					$item = null;
					$tarjeta = trim($lines[$i]);	
					$database->setQuery("select distinct numusu from tb_tarjeta_maestro where numtar_19='$tarjeta'");
					$cuenta = $database->loadResult();
					if($cuenta !=''){
						$database->setQuery("update tb_preautorizacion set tracking='$tracking' where numusu='$cuenta'");
						$database->query();
						$query = "insert into tb_preautorizacion_comentarios(numusu,comentario,fecha_creado,creador) values('$cuenta','SE HA CAMBIADO A ESTADO DE TRACKING $tipoTrack','".date("dmY H:i:s")."','$my->username')";
						$database->setQuery($query);
						$database->query();
					}
				}
			}if($accion=='3'){
				$lines = explode(PHP_EOL,$valor );
				//INSERTAR A TABLA
				for($i = 0; $i<count($lines); $i++)
				{
					$item = null;
					$cedula = trim($lines[$i]);	
					$database->setQuery("update tb_preautorizacion set tracking='$tracking' where identificacion='$cedula'");
					$database->query();
					$database->setQuery("select numusu from tb_preautorizacion where identificacion='$cedula' and numusu !='0' and estado='APROBADO' limit 1");
					$cuenta = $database->loadResult();
					if($cuenta !=''){
						$query = "insert into tb_preautorizacion_comentarios(numusu,comentario,fecha_creado,creador) values('$cuenta','SE HA CAMBIADO A ESTADO DE TRACKING $tipoTrack','".date("dmY H:i:s")."','$my->username')";
						$database->setQuery($query);
						$database->query();
					}

				}
			}	
		mosRedirect( 'index.php?option=credito&task=change_tracking',"Tracking Modificado");	
	}
	HTML_credito::change_tracking($option);
}

function open_transunion($option) {
	$fileName = mosGetParam($_GET, 'file');
	$s3 = mosAmazonS3::authentication();
	$bucket = _AMAZONS3_BUCKET_ENVIROMENT_;
	$keyname = _AMAZONS3_KEYNAME_TRANSUNION_ . $fileName;
	try {
	$cmd = $s3->getCommand('GetObject', array('Bucket' => $bucket,'Key' => $keyname));
	$request = $s3->createPresignedRequest($cmd, '+' . _AMAZONS3_URL_PRESIGNED_EXPIRATION_ . ' minutes');
	mosRedirect( (string) $request->getUri() , '');
	} catch(Exception $e) {
		echo $e->getMessage();
	}
}

function go_idcheck($option) {
    global $database,$my,$config_absolute_path;    
    
    /*CAPTURA DE CEDULA Y TIPO DE CEDULA*/
    $identificacion = mosGetParam($_POST,"identificacion");
    $tipo_documento = mosGetParam($_POST,"tipodocumento");

    /*Se captura las variables de la pantalla*/
    $array_info = array();
    $array_info['telefono'] = mosGetParam($_POST,"telefono");
    $array_info['email'] = trim(mosGetParam($_POST, "email"));        
    $esPatrocinio = mosGetParam($_POST,"patrocinio");
    $esPatrocinio == 'on' ? $esPatrocinio = 1 : $esPatrocinio = 0;
    $array_info['patrocinio'] = $esPatrocinio;
    $array_info['lugar_apertura'] = mosGetParam($_POST, 'lugar_apertura');    
    if($my->username == 'VFUENTEMUSICALGUAPILES'){    
       $array_info['lugar_apertura'] = 'FUENTE MUSICAL GUAPILES';
    }
    $array_info['tipo_producto'] = mosGetParam($_POST, 'tipo_producto');
    $array_info['huella'] = mosGetParam($_POST,"validacion_huella");
    $array_info['autentika'] = mosGetParam($_POST,"autentika");
    $array_info = (Object) $array_info;

    $idCheck = new mosIDCheck();
    $mosValidadorHuella = new mosValidadorHuella();

   //Inicializar tb_preautorizacion_teletec
    $creditApplication = new CreditApplication();
    $idPreautoTeletec = $creditApplication->addMarcasPreautorizacion($identificacion, $array_info);
    
    //Guardar edecan apertura
    if($array_info->lugar_apertura == 'SUPER SALON S50 MULTICENTRO' ||
        $array_info->lugar_apertura == 'SUPER SALON ALAJUELA PARQUE CENTRAL' ||
        $array_info->lugar_apertura == 'SUPER SALON 67 PASEO METROPOLI' ||
        $array_info->lugar_apertura == 'SUPER SALON 03 SAN PEDRO' ||
        $array_info->lugar_apertura == 'SUPER SALON 75 CITY MALL ALAJUELA' ||
        $array_info->lugar_apertura == 'SUPER SALON S53 PASEO DE LAS FLORES' ||
        $array_info->lugar_apertura == 'BABALU SAN JOSE' ||
        $array_info->lugar_apertura == 'INTELEC SAN RAMON' ||
        $array_info->lugar_apertura == 'PECOSA'){
            
        $database->setQuery("SELECT pdv FROM tb_pdv WHERE TRIM(nombre) = TRIM('$array_info->lugar_apertura')");
        $pdv_apert_ede = $database->loadResult();    
        
        $creditApplication->guardar_edecan_solicitud_apertura(
        $idPreautoTeletec,
        $identificacion,
        $array_info->lugar_apertura,
        $pdv_apert_ede,
        mosGetParam($_POST,"codigo_edecan"));                
        
    }

    /*Enviar notificacion si un usuario de stand Realiza validador de identidad con cuestionario*/
    if(($_SESSION['session_gid'] == 'supervisor' || $_SESSION['session_gid'] == 'ventas_especial') && $es_validador_huella == 0) {
        $to = mosEmail::getEmailList('credito.notificaciones.vidpreguntas');
        //$to = array();
        //$to[] = array('to'=>'kbenavides@live.com');
        $subject = "Alerta de Cuestionario Validador ID";
        $from = array('from'=>'noreply@credix.com','fromname'=>'Credix World S.A');
        $message = "Se ha consultado el validador de identidad por cuestionario para la identificacion $identificacion por el usuario " . $my->username;
        mosEmail::sendEmail($subject,$from,$to,$message);
    }

    /*SI TIPO DE IDENTIDAD ES RESIDENTE SE ENVIA A ESTUDIO*/
    if($tipo_documento == 'Cr')
    {
        $arrayIDCheck = (object)array('Aviso'=>'N' , 'EsDef'=>'N' , 'EsPep'=>'N' ,
                                        'codigoRes'=>'2' , 'observaciones'=>'NO SE REALIZO ID CHECK, EXTRANJERO');
        $idTeletec = $idCheck->saveIdCheckData($identificacion, $arrayIDCheck, $idPreautoTeletec);
        /*Almaceno si se hizo validador de huella - se guarda también si no es residente*/
        if($array_info->lugar_apertura == 'SUCURSALES') {
            if($array_info->huella == 1)
                mosRedirect( "index.php?option=credito&task=agregar_imagen_huella&identificacion=$identificacion&tipo_documento=$tipo_documento", '' );
            else 
                mosRedirect( "index.php?option=credito&task=gosecond&identificacion=$identificacion&tipo_documento=$tipo_documento", '' );
        }
    } 

    /*APLICO VALIDACION ID CHECK*/
    $idCheckData = $idCheck->apply_idcheck($identificacion, $idPreautoTeletec);

    /*SI IDCHECK ES ROJO SE RECHAZA*/
    if($idCheckData->codigoRes == '3')
    {
        $row = new mosPreautorizacion( $database );
        $row->id               = (int) $row->id;
        $row->sexo = 'N';
        $row->nombre = '';
        $row->apellidos = '';
        $row->fecha_nacimiento = '19000101';
        $row->identificacion = $identificacion;
        $row->tipodocumento = $tipo_documento;
        $row->dia_alta = date('d');
        $row->mes_alta = date('m');
        $row->ano_alta = date('Y');
        $row->agente_vendedor = $my->username;
        $row->establecimiento = $my->name;
        $row->entrada = 1;
        $row->estado         = "RECHAZADO" ;
        $row->estado_origen  = "RECHAZADO" ;
        $row->tracking   = 70;  
        $row->telefono = mosGetParam($_POST,"telefono");
        $row->establecimiento_apertura = mosGetParam($_POST, 'lugar_apertura');
        $row->tipo_producto = mosGetParam($_POST, 'tipo_producto');
        $row->autentika = mosGetParam($_POST,"autentika");
        $row->store();
        /*INGRESO COMENTARIO CON RESOLUCION DE ID CHECK*/
        /*AVISO ID CHECK*/
        $avisoTextIdCheck = $idCheck->getTextResolucion($idCheckData->Aviso);
        /*RESOLUCION ID CHECK*/
        $resolucionTextIdCheck = getTextResolucionTeletec($idCheckData->codigoRes);
        /*COMENTARIO DE RESOLUCION ID CHECK*/
        $comentario_resolucion_idcheck = 'AVISO ID CHECK: '.$avisoTextIdCheck. ' [::] RESOLUCION ID CHECK: '.$resolucionTextIdCheck.
        ' [::] ESDEF: '. ($idCheckData->EsDef == '1' ? 'SI' : 'NO') .' [::] ESPEP: '. ($idCheckData->EsPep == '1' ? 'SI' : 'NO');
        saveComentarioInicial($row->id,$comentario_resolucion_idcheck,'ID');
        saveComentarioInicial($row->id,"SOLICITUD RECHAZADA POR ID CHECK",'ID');
        
        $database->setQuery("update tb_preautorizacion_teletec set id_preautorizacion='$row->id' where id = '$idPreautoTeletec';");
        $database->query(); 
        
        //*REDIRECCIONO A PANTALLA DE INFORMACION DE RECHAZO*/
        HTML_credito::gofourthcomercio($option,null,3); 
    } else if($array_info->lugar_apertura == "SUCURSALES"){
        
        /*Si se hizo validacion de huella se debe adjuntar imagen, sino se realiza id validator cuestionario*/        
        if($array_info->huella == 1) 
            mosRedirect( "index.php?option=credito&task=agregar_imagen_huella&identificacion=$identificacion&tipo_documento=$tipo_documento", '' );
        else
            mosRedirect( "index.php?option=credito&task=validador_preguntas_credid&identificacion=$identificacion&tipo_documento=$tipo_documento", '' );
        
    } else {             

        detenerCedulaDuplicada($identificacion,1);
        
        /*CREO LA INSTANCIA DE CLASE MOSIDCHECK*/
        $idCheck = new mosIDCheck();
        /*CREO INSTANCIA DE CLASE MOSEQUIFAX*/
        $equifax = new mosEquifax;
        /*OBTENGO DATOS DE TB TELETEC*/
        $estudioTbTeletec = obtenerEstudioTbTeletecByIdentificacion($identificacion);
        $idTeletec = $estudioTbTeletec->id;
        $telefono = $estudioTbTeletec->telefono;
    
        $identificacion_consulta = str_replace('-', '', $identificacion);
        $ArrayFromXML = $equifax->consultarEquifax($identificacion_consulta , $tipo_documento);

        /*VALIDAR SI EL SERVICIO EXPERTO ESTA ACTIVO*/
        $st_exp_act = 1;
        if(isset($ArrayFromXML->codigoRetorno) && $ArrayFromXML->codigoRetorno != '00')
            $st_exp_act = 0; //Falla en la consulta
        
        $database->setQuery("UPDATE tb_preautorizacion_teletec SET buro_experto_falla = $st_exp_act WHERE id='$idTeletec'");
        $database->query();
        
        /*OBTENER DATOS DE EQUIFAX EN UN ARRAY*/
        $arrayDatosEquifax = $equifax->getDatosFromArray($ArrayFromXML);
        /*OBTENER TODOS LOS TELEFONOS DE EXPERTO*/
        $equifax->savePhonesExpertoData($ArrayFromXML,$idTeletec,$identificacion);
        /*RESULTADO DE REGLAS ID CHECK*/
        $resolucionIDCheck = (object)array('codigoRes'=>$estudioTbTeletec->aviso_final_idck,'observaciones'=>$estudioTbTeletec->observaciones);
        /*AVISO ID CHECK*/
        $avisoTextIdCheck = $idCheck->getTextResolucion($estudioTbTeletec->aviso);
        /*RESOLUCION ID CHECK*/
        $resolucionTextIdCheck = getTextResolucionTeletec($resolucionIDCheck->codigoRes);
        /*COMENTARIO DE RESOLUCION ID CHECK*/
        $comentario_resolucion_idcheck = 'AVISO ID CHECK: '.$avisoTextIdCheck. ' [::] RESOLUCION ID CHECK: '.$resolucionTextIdCheck;
        $error = 0;
    
        /*GUARDAR DATOS DEL ESTUDIO EN TABLA*/
        $arrayIDCheck = (object)array('Aviso'=>(string)$estudioTbTeletec->aviso , 'EsDef'=>(string)$estudioTbTeletec->esDef , 'EsPep'=>(string)$estudioTbTeletec->esPep ,
                                        'codigoRes'=>$resolucionIDCheck->codigoRes , 'observaciones'=>$resolucionIDCheck->observaciones);
        $equifax->saveExpertoData($identificacion, $arrayDatosEquifax, $idTeletec);
    
        $data = array("idteletec"=>$idTeletec,"nombre"=>$arrayDatosEquifax->nombre,"apellidos"=>$arrayDatosEquifax->apellido1." ".$arrayDatosEquifax->apellido2,
            "fecha_nac"=>$arrayDatosEquifax->fecha_nac, "sexo"=>$arrayDatosEquifax->sexo, "provincia"=>$arrayDatosEquifax->provincia_desc,
            "provincia_code"=>ltrim($arrayDatosEquifax->provincia_code, '0'), "canton"=>$arrayDatosEquifax->canton_desc, 
            "canton_code"=>ltrim($arrayDatosEquifax->canton_code, '0'), "distrito"=>$arrayDatosEquifax->distrito_desc,
            "distrito_code"=>ltrim($arrayDatosEquifax->distrito_code, '0'), "direccion"=>$arrayDatosEquifax->direccion_general,
            "celular"=>$arrayDatosEquifax->celular, "telefono_fijo"=>$arrayDatosEquifax->telefono_fijo);
        
        $nombreTarjeta = generarNombreTarjeta($arrayDatosEquifax->nombre, $arrayDatosEquifax->apellido1, $arrayDatosEquifax->apellido2);
     
        //SE OBTIENEN DE NUEVO LOS DATOS DE PREAUTO_TELETEC PARA REFRESCAR CON DATOS DE EXPERTO
        $teletec = null;
        $database->setQuery("select * from tb_preautorizacion_teletec where id = '$idTeletec' and identificacion = '$identificacion';");
        $database->loadObject($teletec);
        $url_estudio='';
        $url_desc = 'VER BURO CREDITO';
        if(!empty($teletec->url_estudio)) {
            $url_estudio = $teletec->url_estudio;
            $url_estudio == 'NO INDICA ESTUDIO' ? $url_desc = 'ESTUDIO NO DISPONIBLE' : true;
        }
        $resolucionText = getTextResolucionTeletec($teletec->resolucion);
       
        /*VERIFICO SI SE DEBE RECHAZAR SOLICITUD POR EQUIFAX O IDCHECK, SINO ENTONCES CONSULTO TRANSUNION*/
        $denegarByTransunion = false;
        $rechazar_solicitud = false;
        $aplicaForzajeTrans = 0;
        $estimadorTransunion = '';
        //SI IDCHEK ES APROBADO, SE UTILIZA RESOLUCIÓN DE EXPERTO, SINO MANDA LA RESOLUCIÓN IDCHECK
       if($resolucionIDCheck->codigoRes == '1') {
            $resolucionPreliminar = $teletec->resolucion;
        } else {
            $resolucionPreliminar = $resolucionIDCheck->codigoRes;
        }
        
        /*Si ID Check resolucion Rechazar, no hay nada mas que validar y se rechaza*/
        if($resolucionIDCheck->codigoRes != '3') {
            /*VERIFICA LAS REFERENCIAS DE COMPORTAMIENTO EN CREDITOS DE TRANSUNION*/
            $transunion = new Transunion();
            $estudioTransunion = $transunion->getEstudioTransunion($identificacion);
            if(!empty($estudioTransunion))
            {
                $comportamientos_transunion = $estudioTransunion->comportamientos;
                $aplicaForzajeTrans = $estudioTransunion->aplicaForzaje;
                $estimadorTransunion = json_encode($estudioTransunion->estimadorIngresos);
                if( _CREDITO_TRANSUNION_FORZAJE_ == 1 && $aplicaForzajeTrans > 0)
                    $denegarByTransunion = false;
                else
                    $denegarByTransunion = $transunion->denegarPorComportamiento($comportamientos_transunion);
                /*GUARDO DATOS EN TB_TELETEC*/
                $transunion->saveInfoTransunion($idTeletec, $comportamientos_transunion, $estudioTransunion->estimadorIngresos,$aplicaForzajeTrans,$denegarByTransunion);
            }
        }
        
        /*Si IDCheck o Transunion resuelven rechazar, se rechaza preliminarmente*/
        if($resolucionIDCheck->codigoRes == '3' || $denegarByTransunion) {
            $resolucionPreliminar = 3;
        } else {
            if($resolucionIDCheck->codigoRes != '1' && $teletec->resolucion != '3')
                $resolucionPreliminar = $resolucionIDCheck->codigoRes;
            /*Forzar a Condicionado si Transunion Forzaje es codigo 2*/
            if($resolucionPreliminar == 1 && $aplicaForzajeTrans == 2) {
                $resolucionPreliminar = 2;
            }
        }

        /*SOLO INGRESAN LOS APROBADOS Y CONDICIONADOS O CASOS EN QUE SOLAMENTE ES RECHAZADO POR EXPERTO*/
        if(in_array($resolucionPreliminar,array(1,2)) || (!$denegarByTransunion && $resolucionIDCheck->codigoRes != '3')) {
            /*Forzaje Rechazar - Si salario es menor a 250,000, presenta códigos, y tiene forzaje*/
            $rechazoForzado = false;
            if(in_array($resolucionPreliminar, array(1,2))) {
                if($equifax->forzajeRechazarNegativo($arrayDatosEquifax->codigos_internos, $estimadorTransunion, $arrayDatosEquifax->es_forzaje, $aplicaForzajeTrans)) {
                    $resolucionPreliminar = 3;
                    $rechazoForzado = true;
                    error_log("Identificacion $identificacion ha sido rechazada por forzaje inverso (Forzaje Rechazar)");
                }
            }
        }
        
        /*Si no hubo rechazo forzado, verifica BDX*/
        $edadBureau = 0;
        $limitConecte = 0;        
        $bdxService = new BDX();
		$bdxResponse = $bdxService->getBDXResolution($identificacion, $teletec->codigos_internos);
		$limitConecte = $bdxResponse->limit;
        if($bdxResponse && isset($bdxResponse->resultBdx) && $bdxResponse->statusCode == '00') {
            $resolucionPreliminarConecte = $bdxService->formatResultBDX($bdxResponse->resultBdx);
            $limitConecte = $bdxResponse->limit;
            $edadBureau = $bdxResponse->edad;            
            $bdxService->saveBDXResult($idTeletec, $resolucionPreliminarConecte, $limitConecte);
            
            //Asiganar resultado Conecte
            if($resolucionPreliminar == 1){
                if($resolucionPreliminarConecte == 2 || $resolucionPreliminarConecte == 3) {
                    $resolucionPreliminar = $resolucionPreliminarConecte;
                    //$limitConecte = 0;
                }
            } else if($resolucionPreliminar == 2){
                //$limitConecte = 0;
                if($resolucionPreliminarConecte == 3) {
                    $resolucionPreliminar = $resolucionPreliminarConecte;
                }
            } else {
                //$limitConecte = 0;
            }
        } //Se condiciona al no hacer conección de conecte y el estado es aprobado
        else if($resolucionPreliminar == 1) {
            $resolucionPreliminar = 2;
        }
        
        //Validar edad para condicionar
        if($edadBureau == 0 && !empty($data['fecha_nac'])){
            $edadBureau = calculaedad($data['fecha_nac']); 
        }
        
        if($resolucionPreliminar == 1 && !empty($edadBureau) && $edadBureau <= 25){
            $resolucionPreliminar = 2;
        } 
        
        /**
         * Se guarda xml completo de conecte
         */
        try{           
            if($bdxResponse && isset($bdxResponse->studyType2) && !empty($bdxResponse->studyType2)){
                
                $type_rev = array("<type>success</type>");
                $bdxResponse->studyType2 = str_replace($type_rev, "", $bdxResponse->studyType2);
                            
                $query = "INSERT INTO `credixcrsgc`.`tb_conecte_xml`
                    (`cxl_IdTeletecFk`,`cxl_Identificacion`,`cxl_Xml`,`cxl_DateCreate`)
                    VALUES
                    ($teletec->id,'$identificacion','$bdxResponse->studyType2',CURRENT_TIMESTAMP)";
                $database->setQuery($query);
                $database->query();
                
                /*GUARDAR TELEFONOS DE CONECTE*/
                $xmlConecte = loadXML($bdxResponse->studyType2);
                $bdxService->savePhonesConecteData($xmlConecte, $identificacion, $teletec->id);
            }
        }catch(Exception $exception){
            error_log("Guardar xml de conecte".$exception);
        }
        
        $creditApp = new CreditApplication();
        $creditAttributes = $creditApp->selectCreditAttributes($resolucionPreliminar, $arrayDatosEquifax->es_forzaje, $aplicaForzajeTrans);
        $modelo = $creditAttributes->modelo;
        $agrupamiento = $creditAttributes->agrupamiento;
        $resolucionPreliminar = $creditAttributes->resolucion;
        
        /*FORZAJE PARA ENVIAR SOLICITUD A CONDICIONADO SI SALARIO ES MENOR A 250,001*/
        if($resolucionPreliminar == 1) {
            if($equifax->forzajeCondicionarNegativo($arrayDatosEquifax->codigos_internos, $estimadorTransunion)) {
                $resolucionPreliminar = 2;
                error_log("Identificacion $identificacion ha sido condicionada por forzaje inverso");
            }
        }
        
        //SI IDCHECK INDICA CONDICIONAR, DEBE RESPETARSE
        if($resolucionIDCheck->codigoRes == '2' && in_array($resolucionPreliminar,array(1,2))) {
            $resolucionPreliminar = 2;
            error_log("Identificacion $identificacion ha sido condicionada por IDCHECK");
        }
        
        /*SE DEFINE LA RESOLUCION FINAL EN BASE AL ULTIMO ESTADO DE LA RESOLUCIÓN PRELIMINAR*/
        $resolucionFinal = $resolucionPreliminar;
        
        if( $resolucionFinal != 3 && ($my->username == 'VFUENTEMUSICALGUAPILES' || mosGetParam($_POST, 'lugar_apertura') == 'FUENTE MUSICAL GUAPILES' ) ){
            $resolucionFinal = 2;               
        }

        /*AGREGAR RESOLUCION FINAL EN REGISTRO PREAUTO_TELETEC*/
        $query = "update tb_preautorizacion_teletec set resolucion_final = '$resolucionFinal' where id = '$teletec->id'";
        $database->setQuery($query);
        $database->query();
        
        /* Se procesa los datos retornados por CONECTE ***************/
        $params_buro = new stdClass();
        $params_buro->celular = $telefono." ".(!empty($data['celular']) ? $data['celular'] : "");
        $params_buro->telefono_f = (!empty($data['telefono_fijo']) ? $data['telefono_fijo'] : "");
        $params_buro->direccion_p = (!empty($data['direccion']) ? $data['direccion'] : "");
        $params_buro->ingreso = (!empty($bdxResponse->salario) ? $bdxResponse->salario.'00' : "");
        $params_buro->ant_laboral = (!empty($bdxResponse->antiquityMonths) ? $bdxResponse->antiquityMonths : "");
        $params_buro->lugar_labora = (!empty($bdxResponse->employerName) ? trim($bdxResponse->employerName) : "");
        $params_buro->referencia_consultado = null;
        $params_buro->referencia_1 = null;
        $params_buro->referencia_2 = null;
        $refencias_bdx = ($bdxResponse && isset($bdxResponse->references_people)) ? $bdxResponse->references_people : null;
        if($refencias_bdx != null){
           foreach ($refencias_bdx as $v) {
               if($v->relationship == 'Consultado(a)')
                   $params_buro->referencia_consultado = $v;
               else if($v->relationship == 'Conyuge') 
                   $params_buro->referencia_1 = $v;
               else if($v->relationship == 'Padre')
                   $params_buro->referencia_2 = $v;
           }
           if($params_buro->referencia_1 == null || $params_buro->referencia_2 != null){
               if($params_buro->referencia_1 == null)
                    $params_buro->referencia_1 = $params_buro->referencia_2;
               $params_buro->referencia_2 = null;
               foreach ($refencias_bdx as $v) {
                   if( !in_array($v->relationship,array('Consultado(a)','Conyuge','Padre')) ){
                       if($params_buro->referencia_1 == null)
                           $params_buro->referencia_1 = $v;
                       else if($params_buro->referencia_2 == null)
                           $params_buro->referencia_2 = $v;
                   }      
               }
            }
        }

        /*Si resolucion final es rechazar, se graba la solicitud y finaliza proceso*/
        if( $resolucionFinal == 3 && TEST_ALTERNO !='1') {
            $row = new mosPreautorizacion( $database );
            $row->id               = (int) $row->id;            
            $row->sexo = (!empty($data['sexo']) ? $data['sexo'] : "");
            $row->nombre = mosHTML::cambiarCaracterInvalido_sms((!empty($data['nombre']) ? $data['nombre'] : ""));
            $row->apellidos = mosHTML::cambiarCaracterInvalido_sms((!empty($data['apellidos']) ? $data['apellidos'] : ""));
            $row->fecha_nacimiento = str_replace("/", "",(!empty($data['fecha_nac']) ? $data['fecha_nac'] : ""));
            $row->identificacion = $identificacion;
            $row->tipodocumento = $tipo_documento;
            $row->dia_alta = date('d');
            $row->mes_alta = date('m');
            $row->ano_alta = date('Y');
            $row->agente_vendedor = $my->username;
            $row->establecimiento = $my->name;
            $row->entrada = 1;
            $row->estado         = "RECHAZADO" ;
            $row->estado_origen  = "RECHAZADO" ;
            $row->telefono  = $teletec->telefono;
            $row->tracking   = 70;
            $row->nombreTarjeta = (!empty($nombreTarjeta) ? $nombreTarjeta : "");
            $row->modelo = $modelo;
            $row->agrupamiento = $agrupamiento;
            $row->establecimiento_apertura = mosGetParam($_POST, 'lugar_apertura');
            $row->tipo_producto = mosGetParam($_POST, 'tipo_producto');
            $row->autentika = mosGetParam($_POST,"autentika");
            if (!$row->store()) {
              $error = 1 ;
            }
            /*INGRESO COMENTARIO CON RESOLUCION DE ID CHECK*/
            saveComentarioInicial($row->id,$comentario_resolucion_idcheck,'ID');
            ///if(!empty($teletec->codigos_internos))saveComentarioInicial($row->id , 'MOTIVO RESOLUCION: '.$teletec->codigos_internos, 'ID');
            $edad =  (!empty($data['fecha_nac']) ? calculaedad($data['fecha_nac']) : 0);
            $comentario_resolucion_teletec = 'RESOLUCION EXPERTO: '.$resolucionText . " :::::: EDAD: $edad :::::: URL: 
            [a href=*$url_estudio* target=*_blank*]".$url_desc."[=a]";
            saveComentarioInicial($row->id,$comentario_resolucion_teletec,'ID');
            $intentos_validador = idValidator::getIntentos($identificacion);
            if($intentos_validador >= 1)
            {
                $calificaciones_validador = idValidator::getCalificaciones($identificacion);
                saveComentarioInicial($row->id,"CUESTIONARIOS REALIZADOS:: $intentos_validador CALIFICACIONES OBTENIDAS $calificaciones_validador",'ID');
            }
            if(!empty($teletec->codigos_internos))saveComentarioInicial($row->id,'MOTIVO RESOLUCION: '.$teletec->codigos_internos,'ID');
            if($teletec->resolucion == '3' && $resolucionIDCheck->codigoRes == '3')
                $origen_rechazo = 'EXPERTO - ID CHECK';
            elseif($teletec->resolucion == '3')
                $origen_rechazo = 'EXPERTO';
            elseif($resolucionIDCheck->codigoRes == '3')
                $origen_rechazo = 'ID CHECK';
            elseif($denegarByTransunion) {
                $origen_rechazo = 'TRANSUNION';
            } else {
                $origen_rechazo = 'UNKNOWN_TYPE';
            }
            saveComentarioInicial($row->id,"SOLICITUD RECHAZADA POR ".$origen_rechazo,'ID');
            
            $database->setQuery("update tb_preautorizacion_teletec set id_preautorizacion='$row->id' where id = '$teletec->id';");
            $database->query(); 
        
            //*REDIRECCIONO A PANTALLA DE INFORMACION DE RECHAZO*/
            HTML_credito::gofourthcomercio($option,null,3);
            
        } else {
            // SE CREA PREAUTORIZACION TEMPORAL
            $row = new mosPreautorizaciont( $database );
            $row->id               = (int) $row->id;
            $row->sexo = (!empty($data['sexo']) ? $data['sexo'] : "");
            $row->nombre = mosHTML::cambiarCaracterInvalido_sms((!empty($data['nombre']) ? $data['nombre'] : ""));
            $row->apellidos = mosHTML::cambiarCaracterInvalido_sms((!empty($data['apellidos']) ? $data['apellidos'] : ""));
            $row->fecha_nacimiento = str_replace("/", "",(!empty($data['fecha_nac']) ? $data['fecha_nac'] : ""));
            $row->identificacion = $identificacion;
            $row->tipodocumento = $tipo_documento;
            $row->dia_alta = date('d');
            $row->mes_alta = date('m');
            $row->ano_alta = date('Y');
            $row->agente_vendedor = $my->username;
            $row->establecimiento = $my->name;
            $row->telefono = (!empty($params_buro->telefono_f) ? $params_buro->telefono_f : "");
            $row->celular = (!empty($params_buro->celular) ? $params_buro->celular : "");
            $row->email = $teletec->email;
            $row->entrada = 1;
            $row->agrupamiento = $agrupamiento;
            $row->modelo = $modelo;
            $row->establecimiento_apertura = $teletec->establecimiento_apertura;
            $row->autentika = $teletec->autentika;
            $row->tipo_producto = $teletec->tipo_producto;
            $row->idteletec = $teletec->id;
            $row->nombreTarjeta = $nombreTarjeta;
            
            //ESTADO CIVIL
            $estado_civil_bdx_id = 0;
            if ($bdxResponse && isset($bdxResponse->estado_civil)){
                $estado_civil_bdx = ucwords(strtolower($bdxResponse->estado_civil));
                if($estado_civil_bdx == 'Soltero(a)')
                    $estado_civil_bdx_id = 1;
                else if($estado_civil_bdx == 'Casado(a)')
                    $estado_civil_bdx_id = 2;
                else if($estado_civil_bdx == 'Viudo(a)')
                    $estado_civil_bdx_id = 3;
                else if($estado_civil_bdx == 'Separado(a)')
                    $estado_civil_bdx_id = 4;
                else if($estado_civil_bdx == 'Divorciado(a)')
                    $estado_civil_bdx_id = 5;
                else if($estado_civil_bdx == 'Union Libre(a)')
                    $estado_civil_bdx_id = 6;
            }

            $row->estado_civil = $estado_civil_bdx_id;
            
            $row->provincia_entrega =(!empty($data['provincia']) ? $data['provincia'] : "");    
            $row->canton_entrega    =(!empty($data['canton']) ? $data['canton'] : "");
            $row->distrito_entrega  =(!empty($data['distrito']) ? $data['distrito'] : "");
            $row->provincia = (!empty($data['provincia']) ? $data['provincia'] : "");
            $row->canton = (!empty($data['canton']) ? $data['canton'] : "");
            $row->distrito = (!empty($data['distrito']) ? $data['distrito'] : "");
            $row->provincia_code = (!empty($data['provincia_code']) ? $data['provincia_code'] : "");
            $row->canton_code = (!empty($data['canton_code']) ? $data['canton_code'] : "");
            $row->distrito_code = (!empty($data['distrito_code']) ? $data['distrito_code'] : "");
            $row->direccion = (!empty($params_buro->direccion_p) ? $params_buro->direccion_p : "");
            $row->ingreso_promedio = (!empty($params_buro->ingreso) ? $params_buro->ingreso : "");
            $row->antiguedad = (!empty($params_buro->ant_laboral) ? $params_buro->ant_laboral : "");
            $row->direcciont = (!empty($params_buro->lugar_labora) ? $params_buro->lugar_labora : "");

            if(!empty($params_buro->referencia_consultado)) {
                $row->dir_trabajo = $params_buro->referencia_consultado->workAddress;
                $row->telefonot = $params_buro->referencia_consultado->workPhone;
            }            
            if(!empty($params_buro->referencia_1)){
                $row->nombreref = $params_buro->referencia_1->fullName;
                $row->telefonoref = $params_buro->referencia_1->phone;
                $row->parentezcoref = $params_buro->referencia_1->relationship;
            }
            if(!empty($params_buro->referencia_2)){
                $row->nombreref2 = $params_buro->referencia_2->fullName;
                $row->telefonoref2 = $params_buro->referencia_2->phone;
                $row->parentezcoref2 = $params_buro->referencia_2->relationship;
            }                  

            $database->setQuery("select * from tb_preautorizacion_teletec where id = '$idPreautoTeletec';");
            $database->loadObject($teletec);
            
            $resultadoReglas = (object) array("resolucion"=>$teletec->resolucion_final
                    ,"monto_asignado"=>$limitConecte,"edad"=>$edadBureau);
            
            $row->limite_aprobado   = $resultadoReglas->monto_asignado;
            $row->limite_autorizado = str_replace(array(",","."),array("",""),$teletec->total_sugerido);

            if(!empty($teletec->codigos_internos))$row->codigos = 'MOTIVO RESOLUCION: '.$teletec->codigos_internos;
            $row->comentele = 'RESOLUCION EXPERTO: '.$resolucionText . " :::::: EDAD: $edadBureau :::::: URL: 
            [a href=*$url_estudio* target=*_blank*]".$url_desc."[=a]";
            $row->resolucion_idck = $comentario_resolucion_idcheck;            
            
            $continuar="0";
            $estado = "APROBADO";
            $codigos_extranjero_texto = "";
            
            if($tipo_documento != 'Cr')
            {
                if( $resultadoReglas->resolucion == 1 )
                {
                    $autocomment = "CREDITO APROBADO";
                    $continuar="1";
                    if($my->name == "EPA" || (mosHTML::tipo_permisoUsuario($my->username, $database, 'credito.inventario')!=0))
                    {
                        $row->tracking = "60";
                    }
                    else
                        $row->tracking = "10";
                }
                else
                {
                    $tracking = 0;
                    /*EXTRAJEROS :: VALIDO LA EDAD DEL SOLICITANTE*/
                    if($tipo_documento == 'Cr') {
                        $codigos_extranjero = array();
                        
                        /*EXTRANJEROS :: VALIDO LA ZONA DE RESIDENCIA DEL SOLICITANTE*/
                        $zona_extranjero = getCriterioDirecciones($data['provincia'], $data['canton'], $data['distrito']);
                        if($zona_extranjero == 2){
                            $codigos_extranjero[] = "A.51";
                            $resultadoReglas->resolucion = 2;
                        }else if($zona_extranjero == 1){
                            $codigos_extranjero[] = "A.50";
                            $resultadoReglas->resolucion = 3;
                        }
                        
                        $edad_extranjero = calculaEdad($data['fecha_nac']);
                        if($edad_extranjero < 26){
                            $codigos_extranjero[] = "A.42";
                            $resultadoReglas->resolucion = 3;
                        }elseif($edad_extranjero >= 75){
                            $codigos_extranjero[] = "A.49";
                            $resultadoReglas->resolucion = 3;
                        }

                        if(sizeof($codigos_extranjero) > 0) {
                            $codigos_extranjero_texto = arrayCodigosExtranjeroToText($codigos_extranjero);
                            $query = "update tb_preautorizacion_teletec set codigos_internos = '$codigos_extranjero_texto' where id = '$idPreautoTeletec';";
                            $database->setQuery($query);
                            $database->query();
                        }
                    }
                    //INGRESA AQUI SI LAS REGLAS INDICAN RECHAZADO
                    if($resultadoReglas->resolucion == 3)
                    {
                        $continuar ='3';
                        $estado      = "RECHAZADO" ;
                        $autocomment = "SOLICITUD RECHAZADA";
                        $row->tracking   = 70;
                    }
                    // INGRESA AQUI SI LAS REGLAS INDICAN ENVIADO A ESTUDIO
                    else
                    {
                        $estado = "PENDIENTE" ;
                        $autocomment = "SE HA ENVIADO LA PREAUTORIZACION A ESTUDIO DE 60 MIN";
                        $row->tracking   = 5;
                    }
                }
                $row->comentsac          = $autocomment;
                $row->estado             = $estado;
                $row->estado_origen      = $estado;

                if(strlen($codigos_extranjero_texto) > 0)
                    $row->codigos = "MOTIVO RESOLUCION: ".$codigos_extranjero_texto;
            } else {
               $continuar = 0;
               $row->estado             = "PENDIENTE";
               $row->estado_origen      = "PENDIENTE"; 
            }                
            if (TEST_ALTERNO == '1') {
                $resFlujoAlterno = FlujoAlterno($row->identificacion, calculaEdad($data['fecha_nac']), $row->ingreso_promedio, $teletec->codigos_internos, $row->limite_aprobado, $resultadoReglas->resolucion, $row->tipodocumento,$denegarByTransunion);

                $resFlujoAlterno = json_decode($resFlujoAlterno);
                $nota  = $resFlujoAlterno->nota;
                if($resFlujoAlterno->modelo != null){
                    $row->modelo = $resFlujoAlterno->modelo;
                }else{
                    $row->anualidad = '2';
                }
                if ($resFlujoAlterno->seguro != null){
                    $row->anualidad = $resFlujoAlterno->seguro;
                }
                $tracking = "";
                $estado = "";
                if ($nota > 40 && $nota <= 60) {
                    $resultadoReglas->resolucion = 2;
                    $resolucionFinal = 2;
                    $continuar = '0';
                    $estado = "PENDIENTE";
                    $row->estado = "PENDIENTE";
                    $row->tracking =5;
                    $autocomment = "SE HA ENVIADO LA PREAUTORIZACION A ESTUDIO DE 60 MIN - FLUJO ALTERNO";
                    $tracking = 5;
                }
                if ($nota <= 40) {
                    $continuar = '3';
                    $resultadoReglas->resolucion = 3;
                    $resolucionFinal = 3;
                    $estado = "RECHAZADO";
                    $row->estado = "RECHAZADO";
                    $row->tracking = 70;
                    $autocomment = "SOLICITUD RECHAZADA - FLUJO ALTERNO";
                    $tracking = 70;
                    
                }
                if ($nota > 60) {
                    $resultadoReglas->resolucion = 1;
                    $resolucionFinal = 1;
                    $estado = "APROBADO";
                    $autocomment = "SOLICITUD APROBADO";
                    $row->estado = "APROBADO";                    
                    $autocomment = "CREDITO APROBADO - FLUJO ALTERNO";
                    $continuar = "1";
                    if ($my->name == "EPA" || (mosHTML::tipo_permisoUsuario($my->username, $database, 'credito.inventario') != 0)) {
                        $tracking = "60";
                    } else
                        $tracking = "10";
                    
                    $row->tracking = $tracking;
                }
            }
            if(in_array($teletec->tipo_producto, array('5','9','10'))){
                $resolucionFinal = 2;
                $continuar = '0';
                $row->estado = "PENDIENTE";
                $row->tracking =5;
            }
            if (!$row->store()) {
                $error = 1 ;
            }     
            
            $rowInfo = array();
            $rowInfo['identificacion'] = $identificacion;
            $rowInfo['tipodocumento'] = $tipo_documento;
            $rowInfo['idPreautoTeletec'] = $idPreautoTeletec;
            $rowInfo['idPreautoTmp'] = $row->id ;
            $rowInfo['limite_aprobado'] = (!empty($resultadoReglas->monto_asignado) ? $resultadoReglas->monto_asignado : "");
            $rowInfo['modelo'] = $row->modelo;
            $rowInfo['anualidad'] = $row->anualidad;
            $rowInfo = (Object) $rowInfo;       
if ($resolucionFinal == 3 && TEST_ALTERNO == '1') {
                $row = null;
                $row = new mosPreautorizacion($database);
                $row->id = (int) $row->id;
                $row->sexo = (!empty($data['sexo']) ? $data['sexo'] : "");
                $row->nombre = mosHTML::cambiarCaracterInvalido_sms((!empty($data['nombre']) ? $data['nombre'] : ""));
                $row->apellidos = mosHTML::cambiarCaracterInvalido_sms((!empty($data['apellidos']) ? $data['apellidos'] : ""));
                $row->fecha_nacimiento = str_replace("/", "", (!empty($data['fecha_nac']) ? $data['fecha_nac'] : ""));
                $row->identificacion = $identificacion;
                $row->tipodocumento = $tipo_documento;
                $row->dia_alta = date('d');
                $row->mes_alta = date('m');
                $row->ano_alta = date('Y');
                $row->agente_vendedor = $my->username;
                $row->establecimiento = $my->name;
                $row->entrada = 1;
                $row->estado = "RECHAZADO";
                $row->estado_origen = "RECHAZADO";
                $row->telefono = $teletec->telefono;
                $row->tracking = 70;
                $row->nombreTarjeta = (!empty($nombreTarjeta) ? $nombreTarjeta : "");
                $row->modelo = $modelo;
                $row->agrupamiento = $agrupamiento;
                $row->establecimiento_apertura = mosGetParam($_POST, 'lugar_apertura');
                $row->tipo_producto = mosGetParam($_POST, 'tipo_producto');
                $row->autentika = mosGetParam($_POST, "autentika");
                if (!$row->store()) {
                    $error = 1;
                }
                /* INGRESO COMENTARIO CON RESOLUCION DE ID CHECK */
                saveComentarioInicial($row->id, $comentario_resolucion_idcheck, 'ID');
                ///if(!empty($teletec->codigos_internos))saveComentarioInicial($row->id , 'MOTIVO RESOLUCION: '.$teletec->codigos_internos, 'ID');
                $edad = (!empty($data['fecha_nac']) ? calculaedad($data['fecha_nac']) : 0);
                $comentario_resolucion_teletec = 'RESOLUCION EXPERTO: ' . $resolucionText . " :::::: EDAD: $edad :::::: URL: 
            [a href=*$url_estudio* target=*_blank*]" . $url_desc . "[=a]";
                saveComentarioInicial($row->id, $comentario_resolucion_teletec, 'ID');
                $intentos_validador = idValidator::getIntentos($identificacion);
                if ($intentos_validador >= 1) {
                    $calificaciones_validador = idValidator::getCalificaciones($identificacion);
                    saveComentarioInicial($row->id, "CUESTIONARIOS REALIZADOS:: $intentos_validador CALIFICACIONES OBTENIDAS $calificaciones_validador", 'ID');
                }
                if (!empty($teletec->codigos_internos))
                    saveComentarioInicial($row->id, 'MOTIVO RESOLUCION: ' . $teletec->codigos_internos, 'ID');
                if ($teletec->resolucion == '3' && $resolucionIDCheck->codigoRes == '3')
                    $origen_rechazo = 'EXPERTO - ID CHECK';
                elseif ($teletec->resolucion == '3')
                    $origen_rechazo = 'EXPERTO';
                elseif ($resolucionIDCheck->codigoRes == '3')
                    $origen_rechazo = 'ID CHECK';
                elseif ($denegarByTransunion) {
                    $origen_rechazo = 'TRANSUNION';
                } else {
                    $origen_rechazo = 'UNKNOWN_TYPE';
                }
                saveComentarioInicial($row->id, "SOLICITUD RECHAZADA POR " . $origen_rechazo, 'ID');


                $database->setQuery("update tb_preautorizacion_teletec set id_preautorizacion='$row->id' where id = '$teletec->id';");
				$database->query();
				

                //*REDIRECCIONO A PANTALLA DE INFORMACION DE RECHAZO*/
                //HTML_credito::gofourthcomercio($option, null, 3);
                $rowInfo = null;
            }
            HTML_credito::gofourthcomercio($option,$rowInfo,$continuar);
        } 
    }
}

function gofourthcomercioSuccess($option)
{
    global $database;
     
    $identificacion = mosGetParam($_POST,"identificacion");
    $tipo_documento = mosGetParam($_POST,"tipodocumento");
    $idTeletec = mosGetParam($_POST,"idPreautoTeletec");
    $idPreautoTmp = mosGetParam($_POST,"idPreautoTmp");

    $query = "select * from tb_preautorizacion_teletec where id = '$idTeletec' and identificacion = '$identificacion';";
    $database->setQuery($query);
    $database->loadObject($teletec);
    
    // Guardamos el id de la preauto tem para usarlo en el gosecond
    $query = "update tb_preautorizacion_teletec set id_preautorizacion = '$idPreautoTmp' where id = '$teletec->id';";
    $database->setQuery($query);
    $database->query();
    
    if($teletec->autentika == 'si' || $tipo_documento == 'Cr')
    {
        mosRedirect( "index.php?option=credito&task=gosecond&identificacion=$identificacion&tipo_documento=$tipo_documento", '' );
    } else {
              
        /*Si se hizo validacion de huella se debe adjuntar imagen, sino se realiza id validator cuestionario*/        
        if($teletec->huella == 1) 
            mosRedirect( "index.php?option=credito&task=agregar_imagen_huella&identificacion=$identificacion&tipo_documento=$tipo_documento", '' );
        else
            mosRedirect( "index.php?option=credito&task=validador_preguntas_credid&identificacion=$identificacion&tipo_documento=$tipo_documento", '' );          
    }  
}

function alertaCancelacion($identificacion){
	global $database,$my;
	$database->setQuery("select * from tb_preautorizacion where identificacion='$identificacion' and estado='CANCELADO' order by id desc limit 1");
	$database->loadObject($item);
	if(!empty($item)){
		$fecha = $item->ano_alta.$item->mes_alta.$item->dia_alta;
		$fecha2 = date('Y-m-j');
		$nuevafecha = strtotime ( '-6 month' , strtotime ( $fecha2 ) ) ;
		$nuevafecha = date ( 'Ymd' , $nuevafecha );		
		if($fecha > $nuevafecha){
			mosEmail::sendEmail('Alerta ingreso de cancelacion',array('from'=>'info@credix.com'),array(array('to'=>'documentos@credix.com')),'C&eacute;dula fue cancelada en los &uacute;ltimos seis y est&aacute; siendo ingresada nuevamente :'.$identificacion.", usuario: ".$my->username);
		}
	}
}
function calificar_validador($option) {
	global $my, $database;
	/*CAPTURA DE CEDULA Y TIPO DE CEDULA*/
	$identificacion = mosGetParam($_GET,"identificacion");
	$tipo_documento = mosGetParam($_GET,"tipo_documento");
    
    /*OBTENGO DATOS DE TB TELETEC*/
    $estudioTbTeletec = obtenerEstudioTbTeletecByIdentificacion($identificacion);
    $idTeletec = $estudioTbTeletec->id;
    $telefono = $estudioTbTeletec->telefono;
    $establecimiento_apertura8787 = $estudioTbTeletec->establecimiento_apertura;
    
	detenerCedulaDuplicada($identificacion ,1);
	/*SI YA APROBO EL VALIDADOR NO HACER NUEVAMENTE LAS PREGUNTAS*/
	if(idValidator::isApproved($identificacion))
		mosRedirect( "index.php?option=credito&task=gosecond&identificacion=$identificacion&tipo_documento=$tipo_documento", '' );
    
	$codigos = '';
	$respuestas = '';
	$nocontestadas = 0;
	for($i=1;$i<=5;$i++){
		$value = mosGetParam($_POST, 'pregunta'.$i);
		$codigos .= mosGetParam($_POST, 'codigo'.$i) . ',';
		if(!empty($value)){
			$respuestas .= mosGetParam($_POST, 'pregunta'.$i) . ',';
		}
		
		if(empty($value)){
			$nocontestadas ++;
			$respuestas .= '0,';
		}
	}
	$codigos = rtrim($codigos,',');
	$respuestas = rtrim($respuestas,',');
	$calificacion = idValidator::getCalificacion('1', $codigos ,$respuestas);
	$nota = (int)$calificacion->CALIFICACION;
	$resolucion = (String)$calificacion->RESULTADO;
	/*GUARDO EL INTENTO*/
	$row = new mosValidadorId( $database );
	$row->id	= (int) $row->id;
	$row->identificacion = $identificacion;
	$row->calificacion = $nota;
	$row->resultado = $resolucion;
	$row->sincontestar = $nocontestadas;
	$row->fecha = date('Y-m-d');
	$row->hora = date('H:i:s');
	$row->store();
	/*VALIDO INTENTOS, SI ES PRIMERO Y OBTIENE 40 o 60 TIENE OTRO INTENTO*/
	$query = "select count(*) from tb_validador_id where identificacion = '$identificacion' and estado='1';";
	$database->setQuery($query);
	$intentos = $database->loadResult();
	if( ($intentos == 1 && $nota >= 80) || ($intentos == 2 && $nota == 100) ){
		mosRedirect( "index.php?option=credito&task=gosecond&identificacion=$identificacion&tipo_documento=$tipo_documento", '' );
	}
	/*SI HIZO UN INTENTO Y CALIFICACION ES MAYOR O IGUAL A */
	elseif($intentos < 2 && $nota >= 40) {
		mosRedirect( "index.php?option=credito&task=validador_identidad&identificacion=$identificacion&tipo_documento=$tipo_documento", '' );
	} elseif(($intentos == 2 && $nota != 100) || ($intentos == 1 && $nota < 40 )) {
			$row = new mosPreautorizacion( $database );
			$row->id               = (int) $row->id;
			$row->sexo = 'N';
			$row->nombre = '';
			$row->apellidos = '';
			$row->fecha_nacimiento = '19000101';
			$row->identificacion = $identificacion;
			$row->tipodocumento = $tipo_documento;
			$row->dia_alta = date('d');
			$row->mes_alta = date('m');
			$row->ano_alta = date('Y');
			$row->agente_vendedor = $my->username;
			$row->establecimiento = $my->name;
			$row->entrada = 1;
			$row->telefono = $telefono;
			$row->estado		 = "RECHAZADO" ;
			$row->estado_origen  = "RECHAZADO" ;
			$row->tracking	 = 70;
                        $row->establecimiento_apertura = $establecimiento_apertura8787;
                        $row->tipo_producto = $estudioTbTeletec->tipo_producto;
			$row->store();
			
			$calificaciones = idValidator::getCalificaciones($identificacion);
                        
                        $database->setQuery("update tb_preautorizacion_teletec set id_preautorizacion='$row->id' where id = '$idTeletec' ;");
                        $database->query(); 
			
			$idCheck = new mosIDCheck();
			$idCheckData = obtenerEstudioTbTeletecByIdentificacion($identificacion);
			/*INGRESO COMENTARIO CON RESOLUCION DE ID CHECK*/
			/*AVISO ID CHECK*/
			$avisoTextIdCheck = $idCheck->getTextResolucion($idCheckData->aviso);
			/*RESOLUCION ID CHECK*/
			$resolucionTextIdCheck = getTextResolucionTeletec($idCheckData->aviso_final_idck);
			/*COMENTARIO DE RESOLUCION ID CHECK*/
			$comentario_resolucion_idcheck = 'AVISO ID CHECK: '.$avisoTextIdCheck. ' [::] RESOLUCION ID CHECK: '.$resolucionTextIdCheck;
			saveComentarioInicial($row->id,$comentario_resolucion_idcheck,'ID');
			saveComentarioInicial($row->id,"SOLICITUD RECHAZADA POR VALIDADOR IDENTIDAD",'ID');
			saveComentarioInicial($row->id,"CUESTIONARIOS REALIZADOS:: $intentos CALIFICACIONES OBTENIDAS $calificaciones",'ID');
			HTML_credito::gosecond($option,	'3',$row,'','',null);
		} 
		else {
			echo "<h2>Cedula ya ha realizado cuestionario en mas de 2 ocasiones. Favor comunicarse con Credix</h2>";
		}
}

function validador_identidad($option) {
	$identificacion = mosGetParam($_POST, 'identificacion');
	$tipo_identificacion = mosGetParam($_POST, 'tipo_identificacion');

	if(empty($identificacion)) {
		$identificacion = mosGetParam($_GET, 'identificacion');
		$tipo_identificacion = mosGetParam($_GET, 'tipo_documento');
	}

	detenerCedulaDuplicada($identificacion ,1);
	/*SI ES VALIDADOR HUELLA SE REDIRIGE A INGRESAR IMAGEN DE RESPALDO*/
	if(mosValidadorHuella::esValidadorHuella($identificacion))
		mosRedirect( "index.php?option=credito&task=agregar_imagen_huella&identificacion=$identificacion&tipo_documento=$tipo_identificacion", '' );
	/*SI YA APROBO EL VALIDADOR NO HACER NUEVAMENTE LAS PREGUNTAS*/
	if(idValidator::isApproved($identificacion))
		mosRedirect( "index.php?option=credito&task=gosecond&identificacion=$identificacion&tipo_documento=$tipo_identificacion", '' );
	
	$intentos_validador = idValidator::getIntentos($identificacion);
	if($intentos_validador >= 2)
	{
		echo "<script>alert('YA SE REALIZO LA CONSULTA A VALIDADOR EL MAXIMO DE 2 OCASIONES');location.href = 'index.php';</script>";
		exit();
	}
	
	$preguntas = idValidator::getPreguntas($identificacion,'1');

	HTML_credito::validador_identidad($option, $preguntas);
}


function activaciones($option){
	global $database, $mainframe, $my, $acl, $config_list_limit;
	$limit 				= intval( $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $config_list_limit ) );
	$limitstart      	= intval( $mainframe->getUserStateFromRequest( "view{$option}limitstart", 'limitstart', 0 ) );
	$cuenta				= mosGetParam($_POST,'cuenta1');
	$estado				= mosGetParam($_POST,'estado');
	$cuenta2				= mosGetParam($_POST,'cuenta2');
	$estado2			= mosGetParam($_POST,'estado2');
	$where = "";
    $query = "SELECT COUNT(*) FROM tb_preautorizacion p where p.llamada != 'NO REALIZAR' and p.tracking = 60 and p.completo = 1 ";

    //SI RE REALIZA ALGUNA BUSQUEDA
	if ($cuenta !='' )
    {
           $where .=" and numusu='$cuenta' ";    
	   
    }  elseif($cuenta2 !='' )
    {
           $where .=" and numusu='$cuenta2' ";    
           $cuenta = $cuenta2;
	   
    }

	if (!empty($estado) )
    {
           $where .=" and llamada='$estado' ";    
	   
    }  elseif(!empty($estado2) && !empty($estado))
    {
           $where .=" and llamada='$estado2' ";    
           $estado = $estado2;
	   
    }
	$query .= $where;
	$database->setQuery( $query );
	$total = $database->loadResult();
	
	require_once( $GLOBALS['config_absolute_path'] . '/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit  );

    $query = "SELECT * FROM tb_preautorizacion p where p.llamada != 'NO REALIZAR' and p.tracking = 60 and p.completo = 1 ";
    

	$query .= $where . " ORDER BY  p.llamada =  'FINALIZACION EXITOSA', p.llamada =  'CANCELADO', p.llamada =  'EN PROCESO',p.llamada =  'PENDIENTE', p.llamada =  'LLAMADA SALIENTE', p.ano_alta DESC, p.mes_alta DESC, p.dia_alta DESC";
	//echo $query;
	$database->setQuery( $query, $pageNav->limitstart, $pageNav->limit );
	$rows = $database->loadObjectList();

	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}

	HTML_credito::activaciones( $rows, $pageNav, $cuenta, $option, '', $estado);
	
}

function bloqueos($option){
	global $database, $mainframe, $my, $acl, $config_list_limit;
	$limit 				= intval( $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $config_list_limit ) );
	$limitstart      	= intval( $mainframe->getUserStateFromRequest( "view{$option}limitstart", 'limitstart', 0 ) );
	$cuenta				= mosGetParam($_POST,'cuenta1');
	$estado				= mosGetParam($_POST,'estado');
	$cuenta2			= mosGetParam($_POST,'cuenta2');
	$estado2			= mosGetParam($_POST,'estado2');
	$where = "";
    $query = "SELECT COUNT(*) FROM tb_preautorizacion p inner join tb_bloquear_tarjeta b on p.numusu=b.numusu where 1 ";

    //SI RE REALIZA ALGUNA BUSQUEDA
	if ($cuenta !='' )
    {
           $where .=" and p.numusu='$cuenta' ";    
	   
    }  elseif($cuenta2 !='' )
    {
           $where .=" and p.numusu='$cuenta2' ";    
           $cuenta = $cuenta2;
	   
    }

	if (!empty($estado) )
    {
           $where .=" and b.estado='$estado' ";    
	   
    }  elseif(!empty($estado2) && !empty($estado))
    {
           $where .=" and b.estado='$estado2' ";    
           $estado = $estado2;
	   
    }
	$query .= $where;

	$database->setQuery( $query );
	$total = $database->loadResult();
	
	require_once( $GLOBALS['config_absolute_path'] . '/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit  );

    $query = "SELECT p.*,b.estado as estadob FROM  tb_preautorizacion p inner join tb_bloquear_tarjeta b on p.numusu=b.numusu where 1 ";
    

	$query .= $where . " ORDER BY  b.estado =  'FINALIZACION EXITOSA', b.estado =  'CANCELADO', b.estado =  'EN PROCESO',b.estado =  'PENDIENTE'";
	//echo $query;
	$database->setQuery( $query, $pageNav->limitstart, $pageNav->limit );
	$rows = $database->loadObjectList();

	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}

	HTML_credito::bloqueos( $rows, $pageNav, $cuenta, $option, '', $estado);
	
}
function agregarvoucher($option) {
	$resultado = mosGetParam($_GET,"id");
HTML_credito::agregarvoucher($option,$resultado);	
	
}
function agregar_voucher($option){
	?>
	<script languaje="javascript"> 
function funcion_javascript(){ 
var padre=window.self; 
padre.opener = window.self; 
padre.close(); 
} 
</script>
	
	<?php
GLOBAL $database, $config_absolute_path;	
$id = mosGetParam($_POST,"id");
require_once($config_absolute_path."includes/upload/classFileUploader.php");
$tipo_archivo=$_FILES["orden"]["type"];
$extensions = array("image/jpeg","image/jpg","image/gif","image/bmp","image/png");
$database->setQuery("select * from tb_preautorizacion where id ='$id';");
$database->loadObject($ite);
$ruta =$config_absolute_path;
if($ite->voucher != ''){
$ruta.=$ite->voucher;
unlink($ruta);	
}
	if(is_uploaded_file($_FILES['orden']['tmp_name'])){
		require_once($config_absolute_path."includes/upload/classFileUploader.php");
		$tipo_archivo=$_FILES["orden"]["type"];
		$tipo_archivo = explode("/", $tipo_archivo);
		$extensions = array("application/pdf","image/jpeg","image/jpg","image/gif","image/bmp","image/png");	
		$ruta =$config_absolute_path."images/orden/";
		$upload = new fileUploader($ruta,"2408000",$extensions,$_FILES["orden"]);
		$ruta1 = "images/orden/".$_FILES["orden"]["name"];
		$query="update tb_preautorizacion set voucher='$ruta1' where id='$id'";
		$database->setQuery($query);
		$database->query();
	}

?> 
<script languaje="javascript"> 
funcion_javascript(); 
</script> 
<?php

}

function procesar_limitecredito($option){
	global $database,$config_absolute_path, $my;
	require_once($config_absolute_path."includes/upload/classFileUploader.php");
	$id = mosGetParam($_POST,"id");
	$row = new mosPreautorizacion( $database );
	$row->id = $id;		 
			$row->salario1 =mosGetParam($_POST,"salario1");
			$row->salario2 =mosGetParam($_POST,"salario2");
			$row->salario3 =mosGetParam($_POST,"salario3");
			$ruta1="";
			if(is_uploaded_file($_FILES['orden']['tmp_name'])){
			$tipo_archivo=$_FILES["orden"]["type"];
			$tipo_archivo = explode("/", $tipo_archivo);
			$extensions = array("application/pdf","image/jpeg","image/jpg","image/gif","image/bmp","image/png");	
			$ruta =$config_absolute_path."images/orden/";;
			//$row->estado= "PENDIENTE" ;
				$autocomment = "CLIENTE SOLICITO AUMENTO DE LIMITE";
			//$row->tracking	 = 5;
			while(file_exists($ruta.$_FILES["orden"]["name"])) {
			    $_FILES["orden"]["name"] = rand(1, 100000).$tipo_archivo[1];
			} 
			
			$upload = new fileUploader($ruta,"2408000",$extensions,$_FILES["orden"]);
			$row->rutaorden	 = "images/orden/".$_FILES["orden"]["name"];
			$row->orden=mosGetParam($_POST,"archivo");
			}
		if (!$row->check()) {
			echo "<script> alert('Error #2: ".$row->getError()."'); window.history.go(-1); </script>\n";
			exit();
		}
		if (!$row->store()) {
			echo "<script> alert('Error #3: ".$row->getError()."'); window.history.go(-1); </script>\n";
			exit();
		}
		$row->checkin();
		
		saveComentarioInicial($row->id,$autocomment,'ID');	
		$subject = "Solicitud de aumento de limite";
		ob_start();
		?>
		<html>
		<head>
		<meta http-equiv="Content-Type" content="text/html;" />
		</head>
		<body>
		<p>
			Estimados,<br /><br />
			Cliente solicita aumento de limite, No:<?php echo $id;?> de solicitud.<br /><br />
			

			El presente correo es un env&iacute;o autom&aacute;tico desde la herramienta Servicio al Cliente SAC. Por favor no responda el mismo. 
 			<br /><br />
 			
 			<b>
			Sistema Administrativo <br />
			Credix World, S.A<br />
			www.credix.com<br /><br />
			</b>
		</p>
		</body>
		</html>
		<?php
		$body = ob_get_contents();
		ob_clean();
		$to =mosEmail::getEmailList('aumento_limite');
		mosEmail::sendEmail($subject , array('from'=>'info@credix.com' , 'fromname'=>'Credix World S.A') , $to , $body);		
		
		/*SI USUARIO ESTA RESTRINGIDO PARA FINALIZAR SOLICITUD,
		* SE COLOCA EN ESTATUS APROBADA PERO PENDIENTE DE FINALIZAR*/
		if(mosHTML::tipo_permisoUsuario($my->username, $database, 'credito.preautorizacion.nofinalizar')!=0){
			mosRedirect( 'index.php?option=credito&task=showPreautorizaciones', 'LA SOLICITUD HA QUEDADO EN ESTADO PENDIENTE PARA SER FINALIZADA POSTERIORMENTE.');
		}
		
		mosRedirect( 'index.php?option=credito&task=gofifth&id_preautorizacion='.$id);		
		return;
}
function limitecredito($option){
	global $database;
	$id = mosGetParam($_POST,"id");
	$database->setQuery("select * from tb_preautorizacion_tmp where id = '$id';");
	$database->loadObject($preauto);
	$prueba=0;
	if($preauto->identificacion =='1-1111-1111' || $preauto->identificacion =='2-2222-2222' || $preauto->identificacion =='3-3333-3333'){
		$prueba = 1;
	}
	if($prueba==0){
		detenerCedulaDuplicada($preauto->identificacion ,1);	
	}
			$row2 = new mosPreautorizacion( $database );
			$row2->id               = (int) $row2->id;
			$row2->numero_autorizacion  =   $preauto->numero_autorizacion;
			$row2->mes_alta             =   $preauto->mes_alta;
			$row2->ano_alta      		=   $preauto->ano_alta;
			$row2->dia_alta 			=   $preauto->dia_alta;
			$row2->hora					=   $preauto->hora;
			$row2->agente_vendedor 		=   $preauto->agente_vendedor;
			$row2->ccno 				=   $preauto->ccno;
			$row2->limite_autorizado 	=   $preauto->limite_autorizado ;
			$row2->limite_solicitado 	=   $preauto->limite_solicitado ;
			$row2->limite_aprobado		=   $preauto->limite_aprobado		;
			$row2->establecimiento 		=   $preauto->establecimiento 		;
			$row2->monedaL 			    =   $preauto->monedaL 			    ;
			$row2->comentarios 			=   $preauto->comentarios 			;
			$row2->estado 				=   $preauto->estado 				;
			$row2->estado_origen		=   $preauto->estado_origen		;
			$row2->criterio 			=   $preauto->criterio 			;
			$row2->aff_group 			=   $preauto->aff_group 			;
			$row2->nombre				=   $preauto->nombre				;
			$row2->apellidos 			=   $preauto->apellidos 			;
			$row2->tipodocumento 		=   $preauto->tipodocumento 		;
			$row2->identificacion 		=   $preauto->identificacion 		;
			$row2->fecha_nacimiento		=   $preauto->fecha_nacimiento		;
			$row2->nacionalidad 		=   $preauto->nacionalidad 		;
			$row2->sexo 				=   $preauto->sexo 				;
			$row2->estado_civil 		=   $preauto->estado_civil 		;
			$row2->telefono				=   $preauto->telefono				;
			$row2->email 				=   $preauto->email 				;
			$row2->direccion 			=   $preauto->direccion 			;
			$row2->provincia 			=   $preauto->provincia 			;
			$row2->canton 				=   $preauto->canton 				;
			$row2->distrito 			=   $preauto->distrito 			;
			$row2->calificacion         =   $preauto->calificacion         ;
			$row2->modelo               =   $preauto->modelo               ;
			$row2->anualidad            =   $preauto->anualidad            ;
			$row2->localizable          =   $preauto->localizable          ;
			$row2->modificado			=   $preauto->modificado			;
			$row2->tracking				=   $preauto->tracking				;
			$row2->perfil               =   $preauto->perfil               ;
			$row2->activate_pin			=   $preauto->activate_pin			;
			$row2->email_trabajo		=   $preauto->email_trabajo		;
			$row2->direcciont			=   $preauto->direcciont			;
			$row2->dir_entrega           =   $preauto->dir_entrega;
			$row2->dir_trabajo           =   $preauto->dir_trabajo;
			$row2->telefonot 			=   $preauto->telefonot 			;
			$row2->identificacion_fiador=   $preauto->identificacion_fiador;
			$row2->nombre_fiador		=   $preauto->nombre_fiador		;
			$row2->direccion_fiador		=   $preauto->direccion_fiador		;
			$row2->email_fiador			=   $preauto->email_fiador			;
			$row2->telefono_fiador	    =   $preauto->telefono_fiador	    ;
			$row2->lugar_trabajo_fiador =   $preauto->lugar_trabajo_fiador ;
			$row2->tel_trabajo_fiador   =   $preauto->tel_trabajo_fiador   ;
			$row2->email_trabajo_fiador =   $preauto->email_trabajo_fiador ;
			$row2->rutaorden			=   $preauto->rutaorden			;
			$row2->salario1             =   $preauto->salario1             ;
			$row2->salario2             =   $preauto->salario2             ;
			$row2->salario3             =   $preauto->salario3             ;
			$row2->orden		        =   $preauto->orden		        ;
			$row2->cuotas		        =   $preauto->cuotas;
			$row2->numusu 				=   $preauto->numusu;
			$row2->entrada 				=   $preauto->entrada;
			$row2->telefonoref	        =   $preauto->telefonoref;
			$row2->ocupacion	=  $preauto->ocupacion;
			$row2->ingreso_promedio = $preauto->ingreso_promedio;
            $row2->ingreso_promedio_usr = $preauto->ingreso_promedio_usr;
			$row2->tipo_ingreso = $preauto->tipo_ingreso;
			$row2->antiguedad	= $preauto->antiguedad;
			$row2->provincia_entrega=$preauto->provincia_entrega;	
			$row2->canton_entrega	=$preauto->canton_entrega;		
			$row2->distrito_entrega	=$preauto->distrito_entrega;		
			$row2->nombreref		=$preauto->nombreref;			
			$row2->parentezcoref	=$preauto->parentezcoref;		
			$row2->nombreref2		=$preauto->nombreref2;			
			$row2->parentezcoref2	=$preauto->parentezcoref2;	
			$row2->telefonoref2        =   $preauto->telefonoref2;
			$row2->numtarjeta        =   $preauto->numtarjeta;
            $row2->establecimiento_apertura = $preauto->establecimiento_apertura;
            $row2->tipo_producto = $preauto->tipo_producto;
            $row2->autentika = $preauto->autentika;
			$row2->rutaidentificacion = $preauto->rutaidentificacion;
            
			if (!$row2->store()) {
				$error = 1 ;
			}
			if($preauto->resolucion_idck != '')saveComentarioInicial($row2->id,$preauto->resolucion_idck,'ID');
			$intentos_validador = idValidator::getIntentos($preauto->identificacion);
			if($intentos_validador >= 1)
			{
				$calificaciones_validador = idValidator::getCalificaciones($preauto->identificacion);
				saveComentarioInicial($row2->id,"CUESTIONARIOS REALIZADOS:: $intentos_validador CALIFICACIONES OBTENIDAS $calificaciones_validador",'ID');
			}
			if($preauto->comentele2!='')saveComentarioInicial($row2->id,$preauto->comentele2,'ID');	
			if($preauto->codigos!='')saveComentarioInicial($row2->id,$preauto->codigos,'ID');
			if($preauto->comentele!='')saveComentarioInicial($row2->id,$preauto->comentele,'ID');	
			if($preauto->comenteperfil!='')saveComentarioInicial($row2->id,$preauto->comenteperfil,'ID');
			
			$database->setQuery("update tb_preautorizacion_teletec set id_preautorizacion='$row2->id' where id = '$preauto->idteletec';");
			$database->query();	
			saveComentarioInicial($row2->id,$preauto->comentsac,'ID');
            
            if($preauto->establecimiento_apertura == 'SUCURSALES'){
    			$database->setQuery("select * from tb_confirmacion_email where email='$preauto->email' order by id desc limit 1");
    			$database->loadObject($res);
    			$database->setQuery("update tb_confirmacion_email set id_pre ='$row2->id' where id='$res->id' ");
    			$database->query();	

    			if(!empty($res)){
    				switch($res->estado){
    					case 0: saveComentarioInicial($row2->id, 'SE ENVIA EMAIL, PERO CLIENTE NO CONFIRMA EL EMAIL','ID');break;
    					case 1: 
    					{
    						saveComentarioInicial($row2->id, 'EL CLIENTE CONFIRMA EL EMAIL','ID');
    					//	mosEmail::sendEmail('Verificacion de email',array('from'=>'info@credix.com'),array(array('to'=>'documentos@credix.com')),'Cliente verifica el correo, su numero de autorizaci&oacute;n:'.$row2->id);
    					}					
    					break;
    					case 2: {						
    							mosEmail::sendEmail('Verificacion de email',array('from'=>'info@credix.com'),array(array('to'=>'documentos@credix.com')),'Cliente verifica el correo, su numero de autorizaci&oacute;n:'.$row2->id);
    						//	saveComentarioInicial($row2->id, 'SE CONFIRMA EL EMAIL DEL CLIENTE','ID');
    								
    							}
    					break;
    				}
    				
    			}else{
    				saveComentarioInicial($row2->id, 'NO SE ENVIA EMAIL AL CLIENTE POR PARTE DEL VENDEDOR','ID');
    			}
		} else {	
            saveComentarioInicial($row2->id, 'NO SE ENVIA EMAIL AL CLIENTE POR PARTE DEL VENDEDOR','ID');
        }
	HTML_credito::limitecredito( $option,$row2->id);
}

function rechazocredito($option){
	global $database,$my;
	$id = mosGetParam($_POST,"id");
	$otromotivo = mosGetParam($_POST,"otromotivo");
	$cancelo = mosGetParam($_POST,"cancelo");
	$tracking = 5;
	$estado = 'PRE APROBADO';
    $moti = "CANCELACION";
	if($cancelo == 'Limite insuficiente') {
		$tracking = 5;
		$estado = 'PENDIENTE';
	}
    
    $valida = 0;
    $estadofuera = mosGetParam($_POST,"newestadocredito");
    if(!empty($estadofuera) && $estadofuera != null){
        if($estadofuera == "CANCELADO"){
            $estado = "CANCELADO";
            $tracking = 70; 
            $valida = 1;           
        } else if($estadofuera == "RECHAZADO"){
            $cancelo = "Rechazado por el usuario ".$my->username;
            $moti = "RECHAZA";
            $estado = "RECHAZADO";
            $tracking = 70; 
            $valida = 2;  
        }
    }
		
	$database->setQuery("update tb_preautorizacion_tmp set tracking ='$tracking' , estado='$estado' where id ='$id'");	
	$database->query();
	$database->setQuery("select * from tb_preautorizacion_tmp where id = '$id';");
	$database->loadObject($preauto);
	$prueba=0;
	if($preauto->identificacion =='1-1111-1111' || $preauto->identificacion =='2-2222-2222' || $preauto->identificacion =='3-3333-3333'){
		$prueba = 1;
	}
	if($prueba==0){
		detenerCedulaDuplicada($preauto->identificacion ,1);	
	}
			$row2 = new mosPreautorizacion( $database );
			$row2->id               = (int) $row2->id;
			$row2->numero_autorizacion  =   $preauto->numero_autorizacion;
			$row2->mes_alta             =   $preauto->mes_alta;
			$row2->ano_alta      		=   $preauto->ano_alta;
			$row2->dia_alta 			=   $preauto->dia_alta;
			$row2->hora					=   $preauto->hora;
			$row2->agente_vendedor 		=   $preauto->agente_vendedor;
			$row2->ccno 				=   $preauto->ccno;
			$row2->limite_autorizado 	=   $preauto->limite_autorizado ;
			$row2->limite_solicitado 	=   $preauto->limite_solicitado ;
			$row2->limite_aprobado		=   $preauto->limite_aprobado		;
			$row2->establecimiento 		=   $preauto->establecimiento 		;
			$row2->monedaL 			    =   $preauto->monedaL 			    ;
			$row2->comentarios 			=   $preauto->comentarios 			;
			$row2->estado 				=   $preauto->estado 				;
			$row2->estado_origen		=   $preauto->estado_origen		;
			$row2->criterio 			=   $preauto->criterio 			;
			$row2->aff_group 			=   $preauto->aff_group 			;
			$row2->nombre				=   $preauto->nombre				;
			$row2->apellidos 			=   $preauto->apellidos 			;
			$row2->tipodocumento 		=   $preauto->tipodocumento 		;
			$row2->identificacion 		=   $preauto->identificacion 		;
			$row2->fecha_nacimiento		=   $preauto->fecha_nacimiento		;
			$row2->nacionalidad 		=   $preauto->nacionalidad 		;
			$row2->sexo 				=   $preauto->sexo 				;
			$row2->estado_civil 		=   $preauto->estado_civil 		;
			$row2->telefono				=   $preauto->telefono				;
			$row2->email 				=   $preauto->email 				;
			$row2->direccion 			=   $preauto->direccion 			;
			$row2->provincia 			=   $preauto->provincia 			;
			$row2->canton 				=   $preauto->canton 				;
			$row2->distrito 			=   $preauto->distrito 			;
			$row2->calificacion         =   $preauto->calificacion         ;
			$row2->modelo               =   $preauto->modelo               ;
			$row2->anualidad            =   $preauto->anualidad            ;
			$row2->localizable          =   $preauto->localizable          ;
			$row2->modificado			=   $preauto->modificado			;
			$row2->tracking				=   $preauto->tracking				;
			$row2->perfil               =   $preauto->perfil               ;
			$row2->activate_pin			=   $preauto->activate_pin			;
			$row2->email_trabajo		=   $preauto->email_trabajo		;
			$row2->direcciont			=   $preauto->direcciont			;
			$row2->dir_entrega           =   $preauto->dir_entrega;
			$row2->dir_trabajo           =   $preauto->dir_trabajo;
			$row2->telefonot 			=   $preauto->telefonot 			;
			$row2->identificacion_fiador=   $preauto->identificacion_fiador;
			$row2->nombre_fiador		=   $preauto->nombre_fiador		;
			$row2->direccion_fiador		=   $preauto->direccion_fiador		;
			$row2->email_fiador			=   $preauto->email_fiador			;
			$row2->telefono_fiador	    =   $preauto->telefono_fiador	    ;
			$row2->lugar_trabajo_fiador =   $preauto->lugar_trabajo_fiador ;
			$row2->tel_trabajo_fiador   =   $preauto->tel_trabajo_fiador   ;
			$row2->email_trabajo_fiador =   $preauto->email_trabajo_fiador ;
			$row2->rutaorden			=   $preauto->rutaorden			;
			$row2->salario1             =   $preauto->salario1             ;
			$row2->salario2             =   $preauto->salario2             ;
			$row2->salario3             =   $preauto->salario3             ;
			$row2->orden		        =   $preauto->orden		        ;
			$row2->cuotas		        =   $preauto->cuotas;
			$row2->numusu 				=   $preauto->numusu;
			$row2->entrada 				=   $preauto->entrada;
			$row2->telefonoref	        =   $preauto->telefonoref;
			$row2->ocupacion	=  $preauto->ocupacion;
			$row2->ingreso_promedio = $preauto->ingreso_promedio;
            $row2->ingreso_promedio_usr = $preauto->ingreso_promedio_usr;
			$row2->tipo_ingreso = $preauto->tipo_ingreso;
			$row2->antiguedad	= $preauto->antiguedad;
			$row2->provincia_entrega=$preauto->provincia_entrega;	
			$row2->canton_entrega	=$preauto->canton_entrega;		
			$row2->distrito_entrega	=$preauto->distrito_entrega;		
			$row2->nombreref		=$preauto->nombreref;			
			$row2->parentezcoref	=$preauto->parentezcoref;	
			$row2->nombreref2		=$preauto->nombreref2;			
			$row2->parentezcoref2	=$preauto->parentezcoref2;	
			$row2->telefonoref2        =   $preauto->telefonoref2;
			$row2->numtarjeta        =   $preauto->numtarjeta;
			$row2->agrupamiento		= $preauto->agrupamiento;
            $row2->establecimiento_apertura = $preauto->establecimiento_apertura;
            $row2->tipo_producto = $preauto->tipo_producto;
            $row2->autentika = $preauto->autentika;
            $row2->rutaidentificacion = $preauto->rutaidentificacion;
            
			if (!$row2->store()) {
				$error = 1 ;
			}

			if($preauto->resolucion_idck != '')saveComentarioInicial($row2->id,$preauto->resolucion_idck,'ID');
			$intentos_validador = idValidator::getIntentos($preauto->identificacion);
			if($intentos_validador >= 1)
			{
				$calificaciones_validador = idValidator::getCalificaciones($preauto->identificacion);
				saveComentarioInicial($row2->id,"CUESTIONARIOS REALIZADOS:: $intentos_validador CALIFICACIONES OBTENIDAS $calificaciones_validador",'ID');
			}
			if($preauto->comentele2!='')saveComentarioInicial($row2->id,$preauto->comentele2,'ID');	
			if($preauto->codigos!='')saveComentarioInicial($row2->id,$preauto->codigos,'ID');
			if($preauto->comentele!='')saveComentarioInicial($row2->id,$preauto->comentele,'ID');	
			if($preauto->comenteperfil!='')saveComentarioInicial($row2->id,$preauto->comenteperfil,'ID');		
			$database->setQuery("update tb_preautorizacion_teletec set id_preautorizacion='$row2->id' where id = '$preauto->idteletec';");
			$database->query();	
			saveComentarioInicial($row2->id,$preauto->comentsac,'ID');	
			$database->setQuery("select * from tb_confirmacion_email where email='$preauto->email' order by id desc limit 1");
			$database->loadObject($res);
            
            if(!empty($res)){
    			$database->setQuery("update tb_confirmacion_email set id_pre ='$row2->id' where id='$res->id' ");
    			$database->query();	
			
				switch($res->estado){
					case 0: saveComentarioInicial($row2->id, 'SE ENVIA EMAIL, PERO CLIENTE NO CONFIRMA EL EMAIL','ID');break;
					case 1: saveComentarioInicial($row2->id, 'EL CLIENTE CONFIRMA EL EMAIL','ID');	break;
					case 2: saveComentarioInicial($row2->id, 'SE CONFIRMA EL EMAIL DEL CLIENTE','ID'); break;
				}
				
			}else{
				saveComentarioInicial($row2->id, 'NO SE ENVIA EMAIL AL CLIENTE POR PARTE DEL VENDEDOR','ID');
			}	
	if(!empty($cancelo) && $cancelo !='O'){
		saveComentarioInicial($row2->id,"MOTIVO DE ".$moti.": ".$cancelo,'ID');
		
	}else{
		saveComentarioInicial($row2->id, "MOTIVO DE ".$moti.": ".$otromotivo,'ID');
	}
    
    if($valida == 1){
        HTML_credito::gofourthcomercio($option,null,15);
    } else if($valida == 2) {
        HTML_credito::gofourthcomercio($option,null,3);
    } else{
    	mosRedirect( 'index.php');		
    	return;
    }
}
function finish( $option ) 
	{
	global $database, $my, $TABLA_IMPRESION, $IMPR_ATRIB, $IMP_CUSTODIA, $IMP_STAND;

	$establecimiento    = mosGetParam($_POST,"establecimiento");
	$finalizador 	    = mosGetParam($_POST,"finalizador");
	$retira			    = mosGetParam($_POST,"comentarios");
	$fechapago 	        = mosGetParam($_POST,"fechapago");
	$idp                = mosGetParam($_POST,"idp");
	$anualidad			= mosGetParam($_POST, 'anualidad');
	$cedula                = mosGetParam($_POST,"cedula");
	$afinidad           = mosGetParam($_POST,"aff_group");
	$sucursal           = mosGetParam($_POST,"sucursal");

	$verificacion           = mosGetParam($_POST,"verificacion");


	$database->setQuery("select * from tb_preautorizacion where id = '$idp';");
	$database->loadObject($pre);
    if(TEST_ALTERNO == '1' && (in_array($pre->modelo, array('106', '107')))){
        $anualidad = $pre->anualidad;
    }
	$database->setQuery("select * from tb_preautorizacion where id = '$idp';");
    $database->loadObject($pre);
    if(TEST_ALTERNO == '1'){
        $anualidad = $pre->anualidad;
    }

	if($verificacion != 4){
		$sms 		            = mosGetParam($_POST,"sms");
		$email 		            = mosGetParam($_POST,"email");
		$query = "select * from tb_codigo_verificacion where preautorizacioIdFk='$idp'  order by idPk desc limit 1";
		$database->setQuery($query);
		$database->loadObject($codigo_verificacion);
		$ok = 0;
		if($verificacion==1 && trim($sms)==$codigo_verificacion->sms && trim($email)==$codigo_verificacion->email){
			$ok = 1;
		}
		if($verificacion==2 && trim($sms)==$codigo_verificacion->sms){
			$ok = 1;
		}
		if($verificacion==3 && trim($email)==$codigo_verificacion->email){
			$ok = 1;
		}
		$query="update tb_codigo_verificacion set estado='$ok',verificacion='$verificacion' where idPk='$codigo_verificacion->idPk'";
		$database->setQuery($query);
		$database->query();
	}
	$establecimiento1='';
	$estadoEmbozado = 20;
	$hoy = date('Y-m-d');
	$lugarImpresion = $IMP_STAND;
	$imprimir =mosGetParam($_POST,"imprimir");
	if($imprimir=='1'){
		$establecimiento1=$establecimiento;
		$establecimiento='IMPRESORA';
	}
	$database->setQuery("select * from tb_ccpool where used = '$idp';");
	$database->loadObject($temporal);
	
	if(!empty($temporal)){
		mosRedirect( 'index.php?option=credito&task=showPreautorizaciones', 'YA SELECCIONO UNA FECHA DE PAGO PARA LA SOLICITUD DE CREDITO.');
	}
	$usaPoolAuxiliar = false;
	/*Valido fecha de pago si es auxiliar*/
	if(strlen($fechapago) > 2) {
		if(substr($fechapago, strlen($fechapago) -3,3) == 'Aux') {
			$fechapago = rtrim(substr($fechapago, 0,2));
			$limite_aprobado = '1000';
			$usaPoolAuxiliar = true;
		}
	}
	
	// SE CAMBIA la forma de ASIGNAR POOLES para el sistema de EMBOSADO
	//$query = "SELECT * FROM	tb_ccpool WHERE used = 0 AND fechapago = " . $fechapago . " AND establecimiento = '$establecimiento' ";
	$query = "SELECT * FROM	tb_ccpool WHERE used = 0 AND fechapago = '$fechapago' ";
	/*CONSULTAR EL LIMITE DE CREDITO ASIGNADO PARA EXTRAER DE CCPOOL LA TARJETA CON LIMITE PREASIGNADO*/
	if(usuarioSucursalImpresion() && !$usaPoolAuxiliar) {
		$queryLimite = "select limite_aprobado from tb_preautorizacion where id = '$idp';";
		$database->setQuery($queryLimite);
		$limite_aprobado = $database->loadResult();
		/*CONCATENAR AL QUERY PARA OBTENER TARJETA DEL POOL CON EL LIMITE APROBADO*/
		$query .= " AND puntaje = '$limite_aprobado' ";
	} else {
		$query .= " AND puntaje = 1000 ";
	}
	$query .= " ORDER BY id ASC ";
	$database->setQuery($query);
	$result = $database->loadObjectList();

	if ($database->getErrorNum()) {
		echo $database->stderr();
		return array();
	}
	
	// Verificar existencia de tarjetas en el corte y límites indicados	
	if(empty($result)) {
		mosRedirect( 'index.php?option=credito&task=gofifth&id_preautorizacion='.$idp, 'ERROR: NO HAY TARJETAS DISPONIBLES PARA FECHA DE PAGO ' . $fechapago . ' EN EL INVENTARIO ' . $establecimiento);
		//mosRedirect( 'index.php?option=credito&task=gofifth&id_preautorizacion='.$idp, 'ERROR: NO HAY TARJETAS DISPONIBLES PARA FECHA DE PAGO ' . $fechapago . ' EN EL INVENTARIO');		
		return;
	} else {
		// Envio de notificacion a analistas
		if($usaPoolAuxiliar) {
			$to = mosEmail::getEmailList('alertas.operaciones.poolauxiliar');
			$subject = "Alerta de Pool Auxiliar";
			$from = array('from'=>'noreply@credix.com','fromname'=>'Credix World S.A');
			$message = "Se ha utilizado una tarjeta de pool auxiliar, fecha de pago $fechapago, establecimiento $establecimiento, preautorizacion #$idp";
			mosEmail::sendEmail($subject,$from,$to,$message);
		}
	}
	$result = $result[0];

	$vars['numerocuenta'] 		= getCuenta($result->ccno);
	$vars['numerotarjeta']      = $result->ccno;
	$vars['fechavencimiento']   = $result->vence;
	$vars['fechapago']          = $fechapago;
		$row = new mosPreautorizacion( $database );
		$row->id = $idp ;
		$row->ccno = $result->ccno;
		$row->estado = "APROBADO";
		$row->dia_alta = date("d");
		$row->mes_alta = date("m");
		$row->ano_alta = date("Y");
		$row->aff_group = getAfinidadByUsuario($my->username);
		$row->modificado = '0';
		$row->comentarios = $retira;
		$row->establecimiento = $establecimiento;
		$row->extension = 1;
		$row->numusu = getCuenta($result->ccno);
		$row->anualidad	= $anualidad;
		// FINALIZADOR
		$row->finalizado_por  = $my->username;
		
	
		$row->finalizado_por  = $my->username;		
		//SI ESTABLECIMEINTO ES EPA O NIKE ESCAZU SE PONE EN ESTADO ENTREGADO AL CLIENTE		
		if($my->name == "EPA" || in_array($my->username,array("VNIKEESCAZU","VALISSZAPOTE1","VALISSESCAZU1","VALISSPASEODELASFLORES","VALISSCITYMALL","VALISSGUAPILES")))
        {
			$row->tracking = "60";
		}
		else
			$row->tracking = "10";
		
		// Si es usuario ALISS => tracking = 100 (Entregado al Cliente / Documentación Pendiente)
		if(strpos($my->username, 'ALISS')) {
			$row->tracking = "100";
		}
		
		if (!$row->check()) {
			echo "<script> alert('Error #2: ".$row->getError()."'); window.history.go(-1); </script>\n";
			exit();
		}
		if (!$row->store()) {
			echo "<script> alert('Error #3: ".$row->getError()."'); window.history.go(-1); </script>\n";
			exit();
		}
		$row->checkin();
		/*TODAS LAS SOLICITUDES DEBEN INGRESAR A COLA DE ACTIVACIONES*/
		$database->setQuery("update tb_preautorizacion set llamada = 'LLAMADA SALIENTE'  where id = '$idp';");
		$database->query();
		saveComentarioPreautorizacionById($idp , "SE CAMBIA EL ESTADO DE LLAMADA A: LLAMADA SALIENTE" , $my->username);
		/*SE MARCA LA TARJETA ASIGNADA COMO USADA EN CCPOOL*/
		$query = "UPDATE tb_ccpool SET used = " .$row->id . " WHERE ccno= " . $result->ccno;
		$database->setQuery($query);
		$result = $database->query();

		if ($database->getErrorNum()) 
			{
			echo $database->stderr();
			return array();
			}
 	//Actualizando modelo de la cuenta
    $numusu = getCuenta($result->ccno);
    $query = "update tb_cuenta set modelo = '$pre->modelo' where numusu = '$numusu';";
    $database->setQuery($query);
    $database->query();
 	// Registrar Persona que Finaliza el Crédito
 	if($finalizador != '') {
	 	$query = "INSERT INTO tb_finalizadores_credito (preauto_id, finalizador) VALUES ($idp, '$finalizador');";
		$database->setQuery($query);
		$database->query();
	}
 	
 	$database->setQuery("select * from tb_preautorizacion where id='$idp'");
	$database->loadObject($row);
	saveComentarioPreautorizacionById($row->id , "PROCESO DE SOLICITUD COMPLETO." , $my->username);	
	emailCuentaAprobada($row);
	emailSolicitud($row);
	emailBienvenida($row->nombre." ".$row->apellidos,$my->name,$row->limite_aprobado."00",$fechapago,$vars['numerocuenta'],$row->email,$vars['numerotarjeta']);
	
	//INSERCIÓN DEL APLICANTE EN LA NUEVA ARQUITECTURA
	$creditApp = new CreditApplication();
	$creditApp->createApplicant($row->numusu, $row->tipodocumento, $row->nacionalidad, $row->identificacion,
								$row->nombre, $row->apellidos, $row->sexo, $row->estado_civil, $row->fecha_nacimiento,
								$row->nombreTarjeta, $row->email, $row->direcciont, $row->ocupacion, $row->telefono);
								
	/**
	 * Notificaciones Acciones Lealtad con Aperturas
	 */
	 try{
	 	$phones_canales = mosSMS::getPhoneCliente($row->numusu);     
	    if(!empty($phones_canales))
	    {
	        foreach($phones_canales as $phone)
	        {	            
				$msjNotitycation = mosWSCanales::sendSmsLoyaltyActions(4,$row->numusu,date("Y")."-".date("m")."-".date("d"),0,0,0,"",$phone);				                  
	        }                           
	    }
	 }catch(ex $e){}	
	
	$pin = mosWSMobtion::generaPin($row->ccno);

	$usuario_comercio= $my->username;

	if($retira=='MENSAJERIA EXTERNA'){
		$cobro = true;
		$lugarImpresion = $IMP_CUSTODIA;
		$database->setQuery("SELECT count(*) FROM tb_users WHERE  name LIKE  '%icon%' AND username =  '$usuario_comercio'");
		$icon = $database->loadResult();
		$database->setQuery("SELECT count(*) FROM tb_users WHERE  name LIKE  '%ishop%' AND username =  '$usuario_comercio'");
		$ishop = $database->loadResult();
		$limite= ($row->limite_aprobado*0.40)+$row->limite_aprobado;
		if ($limite >= 500000 && ($ishop > 0 || $icon > 0)){
			$cobro = false;
		}

		if($limite >= 1000000 && $ishop < 1 && $icon < 1){
			$cobro = false;
		}
		if($cobro){
		    $aj = new mosAjusteFinanciero( $database );
		    $aj->numusu = $row->numusu;
		    $aj->codoper = '900060';
		    $aj->dia = date("d");
		    $aj->mes = date("m");
		    $aj->ano = date("Y");
		    $aj->fecha = date('Ymd H:i:s'); 
		    $aj->moneda = '188';
		    $aj->importe = '700000';
		    $aj->observaciones = 'COBRO DE CARGO MENSAJERIA EXTERNA';
		    $aj->username = "SAC";
		    $aj->codajuste = '104';
		   if (!$aj->store()) {
		        die("ERROR AL GUARDAR AJUSTE QUICKPASS ".$row->numusu);
		    }			
		}
	}
	$os = explode(",",_UNICO_LINEA_);
	if(!empty($result) && ! in_array($row->agrupamiento, $os)) {
		// EMBOSADO de TARJETA
		global $database, $my, $config_impresora_host, $config_impresora_ssap, $config_impresora_resu, $config_impresora_name, $config_absolute_path, $TABLA_IMPRESION, $IMPR_ATRIB, $TABLA_MYSQL, $TABLA_SQLSERVER;
		// Obtener datos de la tarjeta
		// Obtener las fechas DESDE y HASTA
		$query = "SELECT fdesde, fhasta FROM tb_tarjeta WHERE numtar_19 = '$row->ccno'";
		$database->setQuery($query);
		$database->loadObject($fechas);
		$cedula = $row->identificacion;
		// ESTADO PENDIENTE
		$estadoEmbozado = 20;
		$fuente = strpos($my->username, 'ALISS') === false ? (usuarioSucursalImpresion() ? 'SUCURSAL' : 'COMERCIO') : 'ALISS';
		// Finalización de crédito por parte de ADMINISTRADORES
		if ($_SESSION['session_gid'] == 'admin' && mosHTML::permisosBygrupos('credito.finalizar', 1) > 0) {
			$fuente = 'ADMIN';
		}
		// Insertar Registro de impresión de tarjeta
		$query = "
			INSERT INTO $TABLA_IMPRESION 
			$IMPR_ATRIB
			VALUES ('$row->ccno', '$hoy', '0', '$row->numusu', '$estadoEmbozado', '$row->aff_group', '$fechas->fdesde', '$fechas->fhasta', '0', '$lugarImpresion', 'ALTA', '$fuente', '$cedula')
		";
		//echo $query; die();
		$database->setQuery($query);
		$result = $database->query();
		$idRegistro = mysql_insert_id();
		cambiarTrackingEmbozado($idRegistro, 'EMBOZADO', $estadoEmbozado, "Tarjeta Cargada. Pendiente de Imprimir");
		
		// Indagar si se está finalizando la solicitud desde una SUCURSAL de IMPRESIÓN
		if(!usuarioSucursalImpresion()) {
			// No es SUCURSAL. Si es comercio se debe solamente ingresar la impresión en estado PENDIENTE DE IMPRESIÓN
		}
		else {
			// Si se finaliza desde SUCURSAL se realizan todos los pasos de impresión
			// Parámetros de la impresión
			$consumo = 1;
			$establecimiento = mosGetParam($_POST, 'sucursal');
			$aff_group = mosGetParam($_POST, 'aff_group');
			// Cambiar Tracking a Verificada
			cambiarTrackingEmbozado($idRegistro, 'EMBOZADO', 21, 'Tarjeta Verificada para Impresion');
			// Obtener datos de la tarjeta a imprimir
			$query = "SELECT id, numtar, numusu, aff_group, fdesde, fhasta, cedula FROM $TABLA_IMPRESION WHERE id = $idRegistro";
			//echo "<br /><br />$query<br /><br />";
			$database->setQuery($query);
	    	$infoImpresion = $database->loadObjectList();
			$infoImpresion = $infoImpresion[0];
			//var_dump($infoImpresion);
			// Obtener datos de la Tabla de Impresión
			$consulta = "SELECT T.tabla, T.tipo, S.id, S.nombre
						FROM tb_emb_tablasImpresion  AS T
						INNER JOIN tb_emb_sucursal_impresion AS S
						ON T.idSucursalPFk = '$establecimiento'
						AND T.idSucursalPFk = S.id
			";
			$database->setQuery($consulta);
			$database->loadObject($infoTabla);
			$tipoTabla = $infoTabla->tipo;
			$sucursalMYSQL = ($tipoTabla == $TABLA_SQLSERVER ? false : true);		
			// Seleccionar Sucursal y Tabla para Impresión
			$establecimientoStand = $infoTabla->nombre;
			$sucursalTabla = $infoTabla->tabla;
			// Registrar Impresión en Tabla Respectiva
			$impresionRegistrada = enviarTarjetaAImpresora($infoImpresion, $sucursalTabla, $infoTabla->id, $aff_group, $sucursalMYSQL);
			// Acciones POST-IMPRESIÓN
			if(!$impresionRegistrada) {
				// ERROR de Impresión
				mosRedirect("index.php?option=credito&task=clear", "ERROR: no se pudo imprimir la tarjeta");
			}
			else {		
				// Si se finaliza desde SUCURSAL se ingresa la tarjeta con estado PENDIENTE, luego IMPRESA y tracking ENTREGADO AL CLIENTE
				// Actualizar estado de tarjeta a IMPRESA
				$estadoEmbozado = 22;
				$query = "UPDATE $TABLA_IMPRESION SET fk_estado_renovacion = '$estadoEmbozado', plasticos_consumidos = plasticos_consumidos + 1  WHERE id = $idRegistro";
				$database->setQuery($query);
				$result = $database->query();
				// Cambiar Tracking a Impresa
				cambiarTrackingEmbozado($idRegistro, $my->username, $estadoEmbozado, "Tarjeta Impresa en $infoTabla->nombre", $infoTabla->id);
				// Cambiar Tracking a Entregado al Cliente
				cambiarTrackingEmbozado($idRegistro, 'EMBOZADO', 23, "Tarjeta Entregada al Cliente en $infoTabla->nombre", $infoTabla->id);
				
				
				//----- Manejo de INVENTARIOS ----//
				if($establecimiento >= 1 && $establecimiento <= 7) {
					$inventarios = array(1 => 'CUSTODIA', 2 => 'EPA TIBAS', 3 => 'EPA BELEN', 4 => 'EPA ESCAZU', 5 => 'EPA CURRIDABAT', 6 => 'EPA DESAMPARADOS', 7 => 'KIOSKOS');				
					$query = "UPDATE tb_ccpool SET establecimiento = '$inventarios[$establecimiento]' WHERE ccno = '$row->ccno';";
					$database->setQuery($query);
					$result = $database->query();
					$query = "UPDATE tb_preautorizacion SET establecimiento = '$inventarios[$establecimiento]' WHERE id = '$row->id';";
					$database->setQuery($query);
					$result = $database->query();
				}
				else {
					
				}
								
				// Rebajo de PLÁSTICO del inventario si amerita
				if($consumo == 1) {
					$query= "
						SELECT D.id AS design 
						FROM tb_emb_plasticos_design AS D
						WHERE D.aff_group = '$aff_group'
						;
					";
					$database->setQuery($query);
					$diseño = $database->loadResult();
					$estado = ($establecimiento == 1 ? 'NO ASIGNADO' : 'RECIBIDO');
					// Disminuir cantidad de plásticos
					$query = "UPDATE tb_emb_plasticos_sucursal SET cantidad = cantidad - 1 
					WHERE id_sucursal = '$establecimiento' AND id_design = '$diseño' AND estado = '$estado'";
					$database->setQuery($query);
					$database->query();
				}

				/*update Tracking Preautorizacion*/
				if($fuente != "ALISS")
				{
					$tracking_impresa = 121;
					saveCambioTrackingPreautorizacion($idp, $row->numusu, $my->username, $tracking_impresa);
				}
			}
		}
	}

	//TICKET DE PRESTAMOS DEPENDIENDO SI ES UNICO LINEA
		
		if (in_array($row->agrupamiento, $os)) {
			$prestamos = null;
			$query="select * from tb_preautorizacion where id='$row->id'";
			$database->setQuery($query);
			$database->loadObject($prestamos);
			$creditos = null;
			$query="select * from tb_prestamos_personales where numusu='$row->id'";
			$database->setQuery($query);
			$database->loadObject($creditos);
			$query="select * from tb_prestamos_personales_comisiones where cuota='$creditos->plazo' and tipo='$creditos->tipo'";
			$database->setQuery($query);
			$database->loadObject($comisiones);
			$query="update tb_prestamos_personales set numusu='$row->numusu' where idPk='$creditos->idPk'";
			$database->setQuery($query);
			$database->query();

			
			$id_prestamo = $creditos->idPk;

			$descripcion= "NOMBRE: ".$row->nombre." ".$row->apellidos." CED: ".$row->identificacion. " 
			TASA: $comisiones->tasa MONTO VASA: ".$creditos->comision+$creditos->importe." MONTO DEPOSITO: ".$creditos->importe." PLAZO: ".$creditos->plazo." MESES METODO ".$creditos->metodo ;
			if($creditos->sinpe != ''){
				$descripcion.=" SINPE: ".$creditos->sinpe;
			}
            $fecha          = date("Ymd H:i:s");
            $database->setQuery("select encargado from tb_ticket where (encargado='ncampos' or encargado='jpena') order by id desc limit 1");
            $encargado_operaciones = $database->loadResult();

            if($encargado_operaciones=='jpena'){
                $encargado_operaciones = 'ncampos';
            }else{
                $encargado_operaciones='jpena';
            }
			$row8 = new mosTicket( $database );
			$row8->fecha 		= $fecha;
			$row8->creador		= $my->username;
			$row8->numusu		= $numusu ;
			$row8->id_categoria  = "460";
			$row8->descripcion   = $descripcion ;
			$row8->origen		= "40";
			$row8->encargado		= $encargado_operaciones;
			$row8->fecha_cambio	= $fecha;
			$row8->referencia = $id_prestamo;


			if (!$row8->store()) 
				{
				echo "<script> alert('Error #3: ".$row->getError()."'); window.history.go(-1); </script>\n";
				exit();
				}
			$row8->checkin();

			//INSERTO COMENTARIO
			$row9 = new mosTicketComentarios( $database );
			$row9->id_ticket	= $row8->id;
			$row9->comentario	= "EL TICKET HA SIDO CREADO";
			$row9->fecha		= date("Ymd H:i:s");;
			$row9->creador		= $my->username;
			if (!$row9->store()) 
				{
				echo "<script> alert('Error #3: ".$row2->getError()."'); window.history.go(-1); </script>\n";
				exit();
				}
			$row9->checkin();
			//INSERTO COMENTARIO EN COMENTARIOS DE CUNETA/PREAUTORIZACION
			$comentario = "EL TICKET $row8->id HA SIDO CREADO";
			$query = "insert into tb_preautorizacion_comentarios(numusu,id_preautorizacion,comentario,fecha_creado,creador,visible_comercio) values('$row->numusu', '0',	'$comentario', '".date("dmY H:i:s")."', '$my->username','0');";
			$database->setQuery($query);
			$database->query();

		}
	HTML_credito::finish( $option, $row->id ,$pin,$imprimir,$establecimiento1,$row->agrupamiento);
}



function gofifth($option){
	global $database,$my, $config_absolute_path;
	$prueba=0;
	$id =mosGetParam($_POST,"id");
    
    if($id==''){
        $id =mosGetParam($_GET,"id_preautorizacion_tmp");
    }
	if($id!=''){
		$database->setQuery("select * from tb_preautorizacion_tmp where id = '$id';");
		$database->loadObject($preauto);
		if($preauto->identificacion =='1-1111-1111' || $preauto->identificacion =='2-2222-2222' || $preauto->identificacion =='3-3333-3333'){
			$prueba = 1;
		}
		if($prueba==0){
			detenerCedulaDuplicada($preauto->identificacion ,1);	
		}
		
		$row2 = new mosPreautorizacion( $database );
		$row2->id               = (int) $row2->id;
		$row2->numero_autorizacion  =   $preauto->numero_autorizacion;
		$row2->mes_alta             =   $preauto->mes_alta;
		$row2->ano_alta      		=   $preauto->ano_alta;
		$row2->dia_alta 			=   $preauto->dia_alta;
		$row2->hora					=   $preauto->hora;
		$row2->agente_vendedor 		=   $preauto->agente_vendedor;
		$row2->ccno 				=   $preauto->ccno;
		$row2->limite_autorizado 	=   $preauto->limite_autorizado ;
		$row2->limite_solicitado 	=   $preauto->limite_solicitado ;
		$row2->limite_aprobado		=   $preauto->limite_aprobado		;
		$row2->establecimiento 		=   $preauto->establecimiento 		;
		$row2->monedaL 			    =   $preauto->monedaL 			    ;
		$row2->comentarios 			=   $preauto->comentarios 			;
		$row2->estado 				=   $preauto->estado 				;
		$row2->estado_origen		=   $preauto->estado_origen		;
		$row2->criterio 			=   $preauto->criterio 			;
		$row2->aff_group 			=   $preauto->aff_group 			;
		$row2->nombre				=   $preauto->nombre				;
		$row2->apellidos 			=   $preauto->apellidos 			;
		$row2->tipodocumento 		=   $preauto->tipodocumento 		;
		$row2->identificacion 		=   $preauto->identificacion 		;
		$row2->fecha_nacimiento		=   $preauto->fecha_nacimiento		;
		$row2->nacionalidad 		=   $preauto->nacionalidad 		;
		$row2->sexo 				=   $preauto->sexo 				;
		$row2->estado_civil 		=   $preauto->estado_civil 		;
		$row2->telefono				=   $preauto->telefono				;
        $row2->celular              =   $preauto->celular               ;
		$row2->email 				=   $preauto->email 				;
		$row2->direccion 			=   $preauto->direccion 			;
		$row2->provincia 			=   $preauto->provincia 			;
		$row2->canton 				=   $preauto->canton 				;
		$row2->distrito 			=   $preauto->distrito 			;
		$row2->calificacion         =   $preauto->calificacion         ;
		$row2->modelo               =   $preauto->modelo               ;
		$row2->anualidad            =   $preauto->anualidad            ;
		$row2->localizable          =   $preauto->localizable          ;
		$row2->modificado			=   $preauto->modificado			;
		$row2->tracking				=   $preauto->tracking				;
		$row2->perfil               =   $preauto->perfil               ;
		$row2->activate_pin			=   $preauto->activate_pin			;
		$row2->email_trabajo		=   $preauto->email_trabajo		;
		$row2->direcciont			=   $preauto->direcciont			;
		$row2->dir_entrega           =   $preauto->dir_entrega;
		$row2->dir_trabajo           =   $preauto->dir_trabajo;
		$row2->telefonot 			=   $preauto->telefonot 			;
		$row2->identificacion_fiador=   $preauto->identificacion_fiador;
		$row2->nombre_fiador		=   $preauto->nombre_fiador		;
		$row2->direccion_fiador		=   $preauto->direccion_fiador		;
		$row2->email_fiador			=   $preauto->email_fiador			;
		$row2->telefono_fiador	    =   $preauto->telefono_fiador	    ;
		$row2->lugar_trabajo_fiador =   $preauto->lugar_trabajo_fiador ;
		$row2->tel_trabajo_fiador   =   $preauto->tel_trabajo_fiador   ;
		$row2->email_trabajo_fiador =   $preauto->email_trabajo_fiador ;
		$row2->rutaorden			=   $preauto->rutaorden			;
		$row2->salario1             =   $preauto->salario1             ;
		$row2->salario2             =   $preauto->salario2             ;
		$row2->salario3             =   $preauto->salario3             ;
		$row2->orden		        =   $preauto->orden		        ;
		$row2->cuotas		        =   $preauto->cuotas;
		$row2->numusu 				=   $preauto->numusu;
		$row2->entrada 				=   $preauto->entrada;
		$row2->extension			= 	'0';
		$row2->telefonoref	        =   $preauto->telefonoref;
		$row2->ocupacion	=  $preauto->ocupacion;
		$row2->ingreso_promedio = $preauto->ingreso_promedio;
        $row2->ingreso_promedio_usr = $preauto->ingreso_promedio_usr;
		$row2->tipo_ingreso = $preauto->tipo_ingreso;
		$row2->antiguedad	= $preauto->antiguedad;
		$row2->provincia_entrega=$preauto->provincia_entrega;	
		$row2->canton_entrega	=$preauto->canton_entrega;		
		$row2->distrito_entrega	=$preauto->distrito_entrega;		
		$row2->nombreref		=$preauto->nombreref;			
		$row2->parentezcoref	=$preauto->parentezcoref;	
		$row2->nombreref2		=$preauto->nombreref2;			
		$row2->parentezcoref2	=$preauto->parentezcoref2;	
		$row2->telefonoref2        =   $preauto->telefonoref2;
		$row2->numtarjeta        =   $preauto->numtarjeta;
		$row2->nombreTarjeta = $preauto->nombreTarjeta;
		$row2->agrupamiento		=$preauto->agrupamiento;
        $row2->establecimiento_apertura = $preauto->establecimiento_apertura;
        $row2->tipo_producto = $preauto->tipo_producto;
        $row2->autentika = $preauto->autentika;
		$row2->rutaidentificacion = $preauto->rutaidentificacion;
		
		if (!$row2->store()) {
			$error = 1 ;
		}
		if($preauto->resolucion_idck != '')saveComentarioInicial($row2->id,$preauto->resolucion_idck,'ID');	
		$intentos_validador = idValidator::getIntentos($preauto->identificacion);
		if($intentos_validador >= 1)
		{
			$calificaciones_validador = idValidator::getCalificaciones($preauto->identificacion);
			saveComentarioInicial($row2->id,"CUESTIONARIOS REALIZADOS:: $intentos_validador CALIFICACIONES OBTENIDAS $calificaciones_validador",'ID');
		}
		if($preauto->comentele2!='')saveComentarioInicial($row2->id,$preauto->comentele2,'ID');	
		if($preauto->codigos!='')saveComentarioInicial($row2->id,$preauto->codigos,'ID');
		if($preauto->comentele!='')saveComentarioInicial($row2->id,$preauto->comentele,'ID');	
		if($preauto->comenteperfil!='')saveComentarioInicial($row2->id,$preauto->comenteperfil,'ID');		
		$database->setQuery("update tb_preautorizacion_teletec set id_preautorizacion='$row2->id' where id = '$preauto->idteletec';");
		$database->query();	
		saveComentarioInicial($row2->id,$preauto->comentsac,'ID');		
		$id = $row2->id;
		$database->setQuery("select * from tb_confirmacion_email where email='$preauto->email' order by id desc limit 1");
		$database->loadObject($res);
		if(!empty($res)) {
			$database->setQuery("update tb_confirmacion_email set id_pre ='$row2->id' where id='$res->id' ");
			$database->query();
		}

		if(!empty($res)){
			switch($res->estado){
				case 0: saveComentarioInicial($row2->id, 'SE ENVIA EMAIL, PERO CLIENTE NO CONFIRMA EL EMAIL','ID');break;
				case 1: saveComentarioInicial($row2->id, 'EL CLIENTE CONFIRMA EL EMAIL','ID');break;
				case 2: saveComentarioInicial($row2->id, 'SE CONFIRMA EL EMAIL DEL CLIENTE','ID');break;
			}	
		}else{
			saveComentarioInicial($row2->id, 'NO SE ENVIA EMAIL AL CLIENTE POR PARTE DEL VENDEDOR','ID');
		}		
		/*SI USUARIO ESTA RESTRINGIDO PARA FINALIZAR SOLICITUD,
		 * SE COLOCA EN ESTATUS APROBADA PERO PENDIENTE DE FINALIZAR*/
		if(mosHTML::tipo_permisoUsuario($my->username, $database, 'credito.preautorizacion.nofinalizar')!=0){
			mosRedirect( 'index.php?option=credito&task=showPreautorizaciones', 'LA SOLICITUD HA QUEDADO EN ESTADO PENDIENTE PARA SER FINALIZADA POSTERIORMENTE.');
		}
	}
	$id_pre =mosGetParam($_GET,"id_preautorizacion");
	if($id_pre!=''){
		$id=$id_pre;
	}
	/*OBTENER DATOS DE LA PREAUTORIZACION*/
	$database->setQuery("select * from tb_preautorizacion where id = '$id';"); //en lugar de row2->id debe ir la variable $id
	//comentarios para aplicar el cambio en el repositorio.
	$database->loadObject($preauto);
	$unico = $preauto->agrupamiento;
	/*CONCATENAR AL QUERY DE BUSCAR EN CCPOOL EL LIMITE DE CREDITO ASIGNADO*/
	$query_limite = "";
	if( in_array( $_SESSION['session_gid'], ['supervisor', 'ventas_especial'] ) ) {
		$query_limite = " AND puntaje = '$preauto->limite_aprobado'";
	} else {
		$query_limite = " AND puntaje = 1000";
	}
        //Fechas de pago disponibles
        $fechasPago = [2,16];
        //Pooles disponibles
        $poolDisponible = [];
        //Pool designado
        $poolDesignado = '';
        //Validar cantidad de tarjetas existentes por fecha de pago
        foreach( $fechasPago as $fpago) {
            $cantidadCcpool = 0;
            //Obtener cantidad de tarkeas
            $query = "SELECT COUNT(1) FROM tb_ccpool where used = '0' and fechapago = '$fpago'" . $query_limite;
            $database->setQuery( $query );
            $cantidadCcpool = $database->loadResult();
            if( $cantidadCcpool > 0 ) {
                $poolDisponible[] = $fpago;
            }
        }
        //Se crea el componente de seleccion con uno de los pooles disponibles al random
        if( sizeof( $poolDisponible ) > 0 ) {
            $posicionRandom = array_rand($poolDisponible, 1);
            $poolDesignado = $poolDisponible[$posicionRandom];
            $fechas[] = mosHTML::makeOption( $poolDesignado, $poolDesignado . ' de cada mes');
            if (in_array($_SESSION['session_gid'],array('supervisor','admin','creditos','ventas_especial'))) {
                $fechas[] = mosHTML::makeOption( $poolDesignado . ' Aux', $poolDesignado . ' de cada mes *Pool Auxiliar');
            }
        } else {
            //Fechas de pago de pool auxiliar
            if (in_array($_SESSION['session_gid'],array('supervisor','admin','creditos','ventas_especial'))) {
                $posicionRandom = array_rand($fechasPago, 1);
                $poolDesignado = $fechasPago[$posicionRandom];
                $fechas[] = mosHTML::makeOption( $poolDesignado . ' Aux', $poolDesignado . ' de cada mes *Pool Auxiliar');
            }
        }
        
	$vars['fechapago'] = mosHTML::selectList( $fechas, 'fechapago', 'class="inputbox" size="1" id="fechapago"', 'value', 'text', $poolDesignado );

	if (in_array($_SESSION['session_gid'],array('supervisor','admin','creditos')))
		{
			$establecimientos_origen = getEstablecimientoOrigenOriginacion();
			foreach($establecimientos_origen as $estab_orig) {
				$establecimientos[] 	= mosHTML::makeOption( $estab_orig->nombre, $estab_orig->nombre);
			}
			$vars['establecimiento'] = mosHTML::selectList( $establecimientos, 'establecimiento', 'class="inputbox" size="1" id="establecimiento"', 'value', 'text', 'CREDIX' );
		}
	if (in_array($my->username,array("VNIKEESCAZU")))
		{
		$establecimientos[] 	= mosHTML::makeOption( 'CREDIX', 'CREDIX');
		$establecimientos[] 	= mosHTML::makeOption( 'NIKE', 'NIKE MULT. ESCAZU');
		$vars['establecimiento'] = mosHTML::selectList( $establecimientos, 'establecimiento', 'class="inputbox" size="1" id="establecimiento"', 'value', 'text', 'NIKE' );
		}
	if(in_array($_SESSION['session_gid'],array('ventas_especial'))) {
		$inventarioFisico = getInventarioFisicoUsuario($my->username);
		$establecimientos[]     = mosHTML::makeOption( 'CREDIX', 'CREDIX');
		if ($inventarioFisico) {
       		$establecimientos[]     = mosHTML::makeOption( $inventarioFisico, $inventarioFisico);
       		$vars['establecimiento'] = mosHTML::selectList( $establecimientos, 'establecimiento', 'class="inputbox" size="1" id="establecimiento"', 'value', 'text', $inventarioFisico );
       	}
	}
	$query = "SELECT *
		FROM 
			tb_establecimiento
		WHERE
			retiro_tarjeta = 1
		ORDER BY 
			nombre ASC";
	
	$database->setQuery($query);
	$rows = $database->loadObjectList();

	if ($database->getErrorNum())
		{
		echo $database->stderr();
		return false;
		}

	// Si es diferente a supervisor y aliss	
	$array_aliss = array("VALISSSANRAMON","VALISSSANRAMON2","VALISSDESAMPA1","VALISSDESAMP21","VALISSDESAMPA3","VALISSESCAZU1","VALISSESCAZU2","VALISSZAPOTE1","VALISSZAPOTE2",
	"VALISSCARIARI1","VALISSCARIARI2","VALISSTERRAMALL1","VALISSTERRAMALL2","VALISSTERRAMALL3","VALISSPASEODELASFLORES","VALISSCITYMALL","VALISSGUAPILES");

	if($_SESSION['session_gid']=='ventas_especial' || in_array($my->username,$array_aliss))
		$retira[] 	= mosHTML::makeOption( 'COMERCIO ORIGEN', 'RETIRA EN EL MISMO COMERCIO DE ORIGEN');
	foreach ($rows as $key => $value)
		{
		$retira[] 	= mosHTML::makeOption( $value->nombre, $value->nombre);
		}	
	
	if (!in_array($_SESSION['session_gid'],array('supervisor','admin')) && !in_array($my->username,$array_aliss)){
		$retira[] 	= mosHTML::makeOption( 'MENSAJERIA EXTERNA', 'MENSAJERIA EXTERNA');	
	}
	$vars['retira'] = mosHTML::selectList( $retira, 'comentarios', 'class="inputbox" size="1"', 'value', 'text', 1 );

	//Opciones de selección para tipo de cargo por administración de cuenta
	$admin_cuenta[] 	= mosHTML::makeOption( 0, 'Seleccione una opci&oacute;n');
	$admin_cuenta[] 	= mosHTML::makeOption( 1, _CARGO_MEMBRESIA1_LABEL_ );
	$admin_cuenta[] 	= mosHTML::makeOption( 2, _CARGO_MEMBRESIA2_LABEL_ );
	$vars['administracion_cuenta'] = mosHTML::selectList( $admin_cuenta, 'anualidad', 'class="inputbox" style="display:none" size="1" id="anualidad"', 'value', 'text', 2 );

	$database->setQuery("select * from tb_ccpool where used = '$id';");
	$database->loadObject($temporal);
	
	if(!empty($temporal)){
		mosRedirect( 'index.php?option=credito&task=showPreautorizaciones', 'YA SELECCIONO UNA FECHA DE PAGO PARA LA SOLICITUD DE CREDITO.');		
	}
	
	$filtrosAdicionales = ' AND id <> 1 ';
	$filtrosAdicionales .= (strpos($my->username, 'ALISS') === FALSE ? '' : " AND nombre LIKE '%ALISS%'");
	
	
	$info['nombreTarjeta'] = $preauto->nombreTarjeta;
	$info['id'] = $preauto->identificacion;
	
	$query = "SELECT * FROM tb_emb_sucursal_impresion WHERE tipo = 'SUCURSAL' $filtrosAdicionales";
	$database->setQuery($query);
	$sucursales = $database->loadObjectList();
	// Lista para grupos de afinidad
	$query = "SELECT grupo, comercio FROM tb_aff_group2 WHERE categoria = 'COMERCIO' ORDER BY comercio";
		$database->setQuery($query);
    	$aff_group = $database->loadObjectList();
	foreach($aff_group as $item) {
		$grupoafinidad[] = mosHTML::makeOption($item->grupo, strtoupper($item->comercio));
	}
	
	if($preauto->establecimiento_apertura != 'SUCURSALES')
	   $grupoPredeterminado = 2100;
    else
	   $grupoPredeterminado = getAfinidadByUsuario($my->username);
	$grupos_aff = mosHTML::selectList($grupoafinidad, 'aff_group', 'class="inputbox" size="1" id="aff_group"', 'value', 'text',  $grupoPredeterminado);
	
	/* ENVIO DE DATOS DE VERIFICACION */
	/*
	0 - ENVIADO

	ID - SMS - EMAIL - ESTADO

	*/

	$codigo = hash('sha512', $id.rand());
	$numero = substr($codigo,0,5);
	$codigo = hash('sha512', $id.rand());
	$numero2 = substr($codigo,0,5);	
	$query = "insert into tb_codigo_verificacion (preautorizacioIdFk,sms,email,estado) values ('$id','$numero','$numero2','0')";
	$database->setQuery($query);
	$database->query();
    $subject = "Verificacion de email";
    $email = $preauto->email;
                   ob_start();
                   ?>
                    <br>
                    <p>Estimado(a) <?php echo strtoupper($preauto->nombre." ".$preauto->apellidos);?></p>      
                    <p>
                    Su c&oacute;digo de verificaci&oacute;n es: <b><?php echo $numero2?></b>
                    </p>
                    <p>
                    Cualquier consulta, estamos para servirle.
                    </p>
                    <p>
                    Credix World S.A.<br>
                    22-CREDIX (2227-3349)<br>
                    info@credix.com<br>
                    </p>
                   <?php
                    $body = ob_get_contents();
                    ob_clean();
	email_informativo( $body,$subject,'correo.jpg',$email,false,'',array());
	$arraySms= array();
	$telefonos = explode(" ", $preauto->telefono);
	if(!empty($telefonos[0])){
		foreach($telefonos as $telefono){
			$arraySms[] = (object)array("number"=>$telefono,"text"=>"Credix le informa: su codigo de verificacion es ".$numero);
		}
	}
	mosSMS::sendSMSInit($arraySms,0,2,true);
	HTML_credito::gofifth($option,$id,$vars,$preauto->perfil, $grupos_aff, $sucursales, $info,$unico);
}
function gosixth($option){
	global $database;
	$id =mosGetParam($_GET,"id_preautorizacion");
	$database->setQuery("select * from tb_preautorizacion where id='$id'");
	$database->loadObject($row);
	$permite=true;
	HTML_credito::gosixth($option,$row,$permite);
}		
function gofourth($option){
	global $database;
	$database->setQuery("select * from tb_preautorizacion where id='1138397'");
	$database->loadObject($row);
	HTML_credito::finish($option, $row->id, "",0,"ALISS",$row->agrupamiento);
}
function gothird($option){
	global $database, $my,$config_absolute_path;
	require_once($config_absolute_path."includes/upload/classFileUploader.php");
	$nombre =mosGetParam($_POST,"nombre");
	$id =mosGetParam($_POST,"id");
	$idteletec =mosGetParam($_POST,"idteletec");
	$apellidos =mosGetParam($_POST,"apellidos");
	$criterio =mosGetParam($_POST,"criterio");
	$comentarioinicial =mosGetParam($_POST,"comentarioinicial");
	$monto_solicitado =mosGetParam($_POST,"limite_solicitado");
	$id_scorecard =mosGetParam($_POST,"limite_autorizado");
	$cuotas =mosGetParam($_POST,"cuotas");
	$fecha_nacimiento_form = mosGetParam($_POST,"fecha_nacimiento");
    
	$cantidad = '1';
	$analisishora ="";
	$nivel="";      
	$descripcion="";
	$puntaje="";    
	
    $query = "SELECT * FROM tb_scorecard_item where id = $id_scorecard";
    $database->setQuery($query);
    $database->loadObject($scorecard);
    $analisishora = $scorecard->analisishora;
    $nivel = $scorecard->nivel;
    $descripcion = $scorecard->descripcion;
    $puntaje = $scorecard->puntaje;
    $comentario_perfil = html_entity_decode("PERFIL: " . $descripcion);

    $row = new mosPreautorizaciont($database);
    $row->id = $id;
    $row->perfil = $descripcion;
    $row->telefono = mosGetParam($_POST, "telefono") . " " . mosGetParam($_POST, "telefonoc");
    $row->celular = mosGetParam($_POST, "telefonoc");
    $telefono642 = mosGetParam($_POST, "telefono");
    $telephone642 = mosGetParam($_POST, "telefonoc");
    $row->sexo = mosGetParam($_POST, "sexo");
    $row->estado_civil = mosGetParam($_POST, "estado_civil");
    $row->email = mosGetParam($_POST, "email");
    $email642 = mosGetParam($_POST, "email");
    $row->provincia = strtoupper(mosGetParam($_POST, "provincia"));
    $row->canton = strtoupper(mosGetParam($_POST, "canton"));
    $row->email_trabajo = mosGetParam($_POST, "email_trabajo");
    $row->dir_entrega = mosGetParam($_POST, "dir_entrega");
    $row->dir_trabajo = mosGetParam($_POST, "dir_trabajo");
    $row->direcciont = mosGetParam($_POST, "direcciont");
    $row->direccion = mosGetParam($_POST, "direccion");
    $row->distrito = strtoupper(mosGetParam($_POST, "distrito"));
    $row->telefonot = mosGetParam($_POST, "telefonot");
    $row->telefonoref = mosGetParam($_POST, "telefonoref");
    $row->fecha_nacimiento = str_replace("/", "", $fecha_nacimiento_form);
    $row->nacionalidad = mosGetParam($_POST, "nacionalidad");
    $row->ocupacion = mosGetParam($_POST, "ocupacion");
    $row->tipo_ingreso = mosGetParam($_POST, "tipo_ingreso");
    $promedio = mosGetParam($_POST, "ingreso_promedio");
    $row->ingreso_promedio_usr = str_replace(array(",", "."), "", $promedio);
    $row->antiguedad = mosGetParam($_POST, "antiguedad");
    $row->provincia_entrega = strtoupper(mosGetParam($_POST, "provincia_entrega"));
    $row->canton_entrega = strtoupper(mosGetParam($_POST, "canton_entrega"));
    $row->distrito_entrega = strtoupper(mosGetParam($_POST, "distrito_entrega"));
    $row->nombreref = mosGetParam($_POST, "nombreref");
    $row->parentezcoref = mosGetParam($_POST, "parentezcoref");
    $row->nombreref2 = mosGetParam($_POST, "nombreref2");
    $row->parentezcoref2 = mosGetParam($_POST, "parentezcoref2");
    $row->telefonoref2 = mosGetParam($_POST, "telefonoref2");
    $row->numtarjeta = mosGetParam($_POST, "numtarjeta");
    $row->nombreTarjeta = mosGetParam($_POST, "nombretar");

    $row->comentele2 = $comentarioinicial;
    $row->comenteperfil = $comentario_perfil;
    $row->idteletec = $idteletec;
    $archivo = mosGetParam($_POST, "archivo");
    $row->orden = $archivo;
    if ($archivo == '2') {
        $row->salario1 = mosGetParam($_POST, "salario1");
        $row->salario2 = mosGetParam($_POST, "salario2");
        $row->salario3 = mosGetParam($_POST, "salario3");
    }
    $ruta1 = "";
    if (is_uploaded_file($_FILES['adjunto']['tmp_name'])) {
        $tipo_archivo = $_FILES["adjunto"]["type"];
        $tipo_archivo = explode("/", $tipo_archivo);
        $extensions = array("application/pdf", "image/jpeg", "image/jpg", "image/gif", "image/bmp", "image/png");
        $ruta = $config_absolute_path . "images/orden/";
        while (file_exists($ruta . $_FILES["adjunto"]["name"])) {
            $_FILES["adjunto"]["name"] = rand(1, 100000) . "." . $tipo_archivo[1];
        }
        $upload = new fileUploader($ruta, "2408000", $extensions, $_FILES["adjunto"]);
        $row->rutaorden = "images/orden/" . $_FILES["adjunto"]["name"];
    }

    /*     * Adjuntar multiples archivos ************************************************************* */
    for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
        if(is_uploaded_file($_FILES['file']['tmp_name'][$i])){
            $tipo_archivo=$_FILES["file"]["type"][$i];
            $tipo_archivo = explode("/", $tipo_archivo);
            $extensions = array("application/pdf","image/jpeg","image/jpg","image/gif","image/bmp","image/png");    
            $ruta =$config_absolute_path."images/documentos/";
            while(file_exists($ruta.$_FILES["file"]["name"][$i])) {
                $_FILES["file"]["name"][$i] = rand(1, 100000).".".$tipo_archivo[1];
            }

            if ($_FILES["file"]["name"][$i] != "") {
                // Verify extensions admitted
                $tof = false;
                foreach($extensions as $k => $v) {
                    if ($v == $_FILES["file"]["type"][$i]) {
                        $tof = true;
                    }
                }
                
                if ($tof) {
                    // Verify file size
                    $tof = false;
                    if ($_FILES["file"]["size"][$i] <= 2408000) {
                        $tof = true;
                    }
                    if ($tof) {                        
                        if (@copy($_FILES['file']['tmp_name'][$i],$ruta.$_FILES['file']['name'][$i])) {
                            true;
                        }
                    } 
                } 
            }
            $row->rutaidentificacion .= "images/documentos/".$_FILES["file"]["name"][$i]."|";
        }
    }
    
	$database->setQuery("select * from tb_preautorizacion_tmp where id = '$id';");
	$database->loadObject($preauto);
	$database->setQuery("select * from tb_preautorizacion_teletec where id = '$idteletec';");
	$database->loadObject($teletec);
        
        $isValid = false;
        if($teletec->resolucion_final == 1 && $criterio == 1)
	{
            $isValid = true;
        }
        
        $data642 = array();
        if($teletec->resolucion_final == 1 || $teletec->resolucion_final == 2)
	{
            $data642 = mosCreditoDao::ws_validate_duplicate_data($teletec->identificacion,$email642,$telephone642,$telefono642);
            if($data642 && isset($data642) && !empty($data642) && $data642 != null){
                if(isset($data642->type) && $data642->type == 'success'
                    && isset($data642->status) && $data642->status == 2){
                    $isValid = true;
                }                
            }            
        }
        
        //SI ES MARCADO CRITERIO SE ENVIA A ESTUDIO
	if($isValid)
	{
            $database->setQuery("update tb_preautorizacion_teletec set resolucion_final = '2' where id = '$idteletec';");
            $database->query();
            $database->setQuery("update tb_preautorizacion_tmp set limite_aprobado = '0' where id = '$id';");
            $database->query();
	}
        $database->setQuery("select * from tb_preautorizacion_tmp where id = '$id';");
	$database->loadObject($preauto);
        $database->setQuery("select * from tb_preautorizacion_teletec where id = '$idteletec';");
	$database->loadObject($teletec);

	$fecha_nacimiento = substr($preauto->fecha_nacimiento, 0,4)."/".substr($preauto->fecha_nacimiento, 4,2)."/".substr($preauto->fecha_nacimiento, 6,2);
	$salario_neto = str_replace(array(',','.'), array('',''), $teletec->total_neto);
	$salario_neto > 0 ? $salario_neto = true : $salario_neto = false;
	
        $resultadoReglas = (object) array("resolucion"=>$teletec->resolucion_final
                    ,"monto_asignado"=>$preauto->limite_aprobado);
        
	$resultado         = $resultadoReglas->resolucion;
	$row->limite_aprobado   = $resultadoReglas->monto_asignado;
	$row->limite_autorizado = str_replace(array(",","."),array("",""),$teletec->total_sugerido);	
	$row->nombre = $nombre;
	$row->apellidos= $apellidos;
	$row->cuotas = $cuotas;
	$row->criterio = $criterio;
	$row->limite_solicitado=str_replace(array(",","."),"",$monto_solicitado)/100;
    $row->establecimiento_apertura = $teletec->establecimiento_apertura;
	
	$database->setQuery("select * from tb_users where username='$my->username';");
	$database->loadObject($usuario);	
	$continuar="0";
	$estado = "APROBADO";
	$codigos_extranjero_texto = "";
	if( $resultadoReglas->resolucion == 1 && $usuario->pendiente != '1')
	{
		$autocomment = "CREDITO APROBADO";
		$continuar="1";
		if($my->name == "EPA" || (mosHTML::tipo_permisoUsuario($my->username, $database, 'credito.inventario')!=0))
        {
			$row->tracking = "60";
		}
		else
			$row->tracking = "10";
    }
    else {
        $tracking = 0;
        /* EXTRAJEROS :: VALIDO LA EDAD DEL SOLICITANTE */
        if ($preauto->tipodocumento == 'Cr') {
            $codigos_extranjero = array();

            /* EXTRANJEROS :: VALIDO LA ZONA DE RESIDENCIA DEL SOLICITANTE */
            $zona_extranjero = getCriterioDirecciones($row->provincia, $row->canton, $row->distrito);
            if ($zona_extranjero == 2) {
                $codigos_extranjero[] = "A.51";
                $resultadoReglas->resolucion = 2;
            } else if ($zona_extranjero == 1) {
                $codigos_extranjero[] = "A.50";
                $resultadoReglas->resolucion = 3;
            }

            $edad_extranjero = calculaEdad($fecha_nacimiento_form);
            if ($edad_extranjero < 26) {
                $codigos_extranjero[] = "A.42";
                $resultadoReglas->resolucion = 3;
            } elseif ($edad_extranjero >= 75) {
                $codigos_extranjero[] = "A.49";
                $resultadoReglas->resolucion = 3;
            }

            if (sizeof($codigos_extranjero) > 0) {
                $codigos_extranjero_texto = arrayCodigosExtranjeroToText($codigos_extranjero);
                $query = "update tb_preautorizacion_teletec set codigos_internos = '$codigos_extranjero_texto' where id = '$idteletec';";
                $database->setQuery($query);
                $database->query();
            }
        }
        //INGRESA AQUI SI LAS REGLAS INDICAN RECHAZADO
        if ($resultadoReglas->resolucion == 3) {
            $continuar = '3';
            $estado = "RECHAZADO";
            $autocomment = "SOLICITUD RECHAZADA";
            $row->tracking = 70;
        }
        // INGRESA AQUI SI LAS REGLAS INDICAN ENVIADO A ESTUDIO
        else {
            $estado = "PENDIENTE";
            $autocomment = "SE HA ENVIADO LA PREAUTORIZACION A ESTUDIO DE 60 MIN";
            $row->tracking = 5;
        }
    }
    $row->comentsac = $autocomment;
    $row->estado = $estado;
    $row->estado_origen = $estado;
    if (!$row->store()) {
        $error = 1;
    }
    $database->setQuery("select * from tb_preautorizacion_tmp where id = '$id';");
    $database->loadObject($preauto);
    if (strlen($codigos_extranjero_texto) > 0)
        $preauto->codigos = "MOTIVO RESOLUCION: " . $codigos_extranjero_texto;
    //sino guardo la preautorizacion
        if (TEST_ALTERNO == '1' && !$isValid) {
            $resFlujoAlterno  = FlujoAlterno($preauto->identificacion, calculaEdad($fecha_nacimiento_form), $preauto->ingreso_promedio, $teletec->codigos_internos,$preauto->limite_aprobado,$resultadoReglas->resolucion, $preauto->tipodocumento,$teletec->resolucionTransunion);

            $resFlujoAlterno = json_decode($resFlujoAlterno);
            $nota  = $resFlujoAlterno->nota;
            if($resFlujoAlterno->modelo != null){
                $preauto->modelo = $resFlujoAlterno->modelo;
            }else{
                $preauto->anualidad = '2';
            }
            if ($resFlujoAlterno->seguro != null){
                $preauto->anualidad = $resFlujoAlterno->seguro;
            }


            $tracking = "";
            $estado = "";
            if ($nota > 40 && $nota <= 60) {
		$resultadoReglas->resolucion = 2;
		$continuar = '0';
                $estado = "PENDIENTE";
                $autocomment = "SE HA ENVIADO LA PREAUTORIZACION A ESTUDIO DE 60 MIN - FLUJO ALTERNO";
                $tracking = 5;
            }
            if ($nota <= 40) {
                $continuar = '3';
		$resultadoReglas->resolucion = 3;
                $estado = "RECHAZADO";
                $autocomment = "SOLICITUD RECHAZADA - FLUJO ALTERNO";
                $tracking = 70;
            }
            if ($nota > 60) {
		$resultadoReglas->resolucion = 1;
                $estado = "APROBADO";
                $autocomment = "SOLICITUD APROBADO";
                $autocomment = "CREDITO APROBADO - FLUJO ALTERNO";
                $continuar = "1";
                if ($my->name == "EPA" || (mosHTML::tipo_permisoUsuario($my->username, $database, 'credito.inventario') != 0)) {
                   $tracking = "60";
                } else
                   $tracking = "10";
			}
			if ($isValid) {
				$resultadoReglas->resolucion = 2;
				$continuar = '0';
				$estado = "PENDIENTE";
				$autocomment = "SE HA ENVIADO LA PREAUTORIZACION A ESTUDIO DE 60 MIN - FLUJO ALTERNO";
				$tracking = 5;
				$database->setQuery("update tb_preautorizacion_teletec set resolucion_final = '2' where id = '$idteletec';");
				$database->query();
				$database->setQuery("update tb_preautorizacion_tmp set limite_aprobado = '0' where id = '$id';");
				$database->query();
			}
            $database->setQuery("update tb_preautorizacion_tmp set anualidad='$preauto->anualidad', modelo='$preauto->modelo' where id = '$id';");
            $database->query();
        }

    if(in_array($preauto->tipo_producto, array('5','9','10'))){
        $continuar = '0';
        $estado = "PENDIENTE";
        $tracking = 5;
    }

        $database->setQuery("update tb_preautorizacion_tmp set estado='$estado', tracking='$tracking' where id = '$id';");
        $database->query();
        $database->setQuery("select * from tb_preautorizacion_tmp where id = '$id';");
        $database->loadObject($preauto);
    if ($resultadoReglas->resolucion == 1 && $usuario->pendiente != '1') {
        $validar_flujo = true;       
        true;
    }
	else
	{
        $validar_flujo = false;
		detenerCedulaDuplicada($preauto->identificacion ,1);	

        $row2 = new mosPreautorizacion($database);
        $row2->id = (int) $row2->id;
        $row2->numero_autorizacion = $preauto->numero_autorizacion;
        $row2->mes_alta = $preauto->mes_alta;
        $row2->ano_alta = $preauto->ano_alta;
        $row2->dia_alta = $preauto->dia_alta;
        $row2->hora = $preauto->hora;
        $row2->agente_vendedor = $preauto->agente_vendedor;
        $row2->ccno = $preauto->ccno;
        $row2->limite_autorizado = $preauto->limite_autorizado;
        $row2->limite_solicitado = $preauto->limite_solicitado;
        $row2->limite_aprobado = $preauto->limite_aprobado;
        $row2->establecimiento = $preauto->establecimiento;
        $row2->monedaL = $preauto->monedaL;
        $row2->comentarios = $preauto->comentarios;
        $row2->estado = $preauto->estado;
        $row2->estado_origen = $preauto->estado_origen;
        $row2->criterio = $preauto->criterio;
        $row2->aff_group = $preauto->aff_group;
        $row2->nombre = $preauto->nombre;
        $row2->apellidos = $preauto->apellidos;
        $row2->tipodocumento = $preauto->tipodocumento;
        $row2->identificacion = $preauto->identificacion;
        $row2->fecha_nacimiento = $preauto->fecha_nacimiento;
        $row2->nacionalidad = $preauto->nacionalidad;
        $row2->sexo = $preauto->sexo;
        $row2->estado_civil = $preauto->estado_civil;
        $row2->telefono = $preauto->telefono;
        $row2->celular = $preauto->celular;
        $row2->email = $preauto->email;
        $row2->direccion = $preauto->direccion;
        $row2->provincia = $preauto->provincia;
        $row2->canton = $preauto->canton;
        $row2->distrito = $preauto->distrito;
        $row2->calificacion = $preauto->calificacion;
        $row2->modelo = $preauto->modelo;
        $row2->anualidad = $preauto->anualidad;
        $row2->localizable = $preauto->localizable;
        $row2->modificado = $preauto->modificado;
        $row2->tracking = $preauto->tracking;
        $row2->perfil = $preauto->perfil;
        $row2->activate_pin = $preauto->activate_pin;
        $row2->email_trabajo = $preauto->email_trabajo;
        $row2->direcciont = $preauto->direcciont;
        $row2->telefonot = $preauto->telefonot;
        $row2->identificacion_fiador = $preauto->identificacion_fiador;
        $row2->nombre_fiador = $preauto->nombre_fiador;
        $row2->direccion_fiador = $preauto->direccion_fiador;
        $row2->email_fiador = $preauto->email_fiador;
        $row2->telefono_fiador = $preauto->telefono_fiador;
        $row2->lugar_trabajo_fiador = $preauto->lugar_trabajo_fiador;
        $row2->tel_trabajo_fiador = $preauto->tel_trabajo_fiador;
        $row2->email_trabajo_fiador = $preauto->email_trabajo_fiador;
        $row2->rutaorden = $preauto->rutaorden;
        $row2->salario1 = $preauto->salario1;
        $row2->salario2 = $preauto->salario2;
        $row2->salario3 = $preauto->salario3;
        $row2->orden = $preauto->orden;
        $row2->cuotas = $preauto->cuotas;
        $row2->numusu = $preauto->numusu;
        $row2->entrada = $preauto->entrada;
        $row2->telefonoref = $preauto->telefonoref;
        $row2->dir_entrega = $preauto->dir_entrega;
        $row2->dir_trabajo = $preauto->dir_trabajo;
        $row2->ocupacion = $preauto->ocupacion;
        $row2->ingreso_promedio = $preauto->ingreso_promedio;
        $row2->ingreso_promedio_usr = $preauto->ingreso_promedio_usr;
        $row2->tipo_ingreso = $preauto->tipo_ingreso;
        $row2->antiguedad = $preauto->antiguedad;
        $row2->provincia_entrega = $preauto->provincia_entrega;
        $row2->canton_entrega = $preauto->canton_entrega;
        $row2->distrito_entrega = $preauto->distrito_entrega;
        $row2->nombreref = $preauto->nombreref;
        $row2->parentezcoref = $preauto->parentezcoref;
        $row2->nombreref2 = $preauto->nombreref2;
        $row2->parentezcoref2 = $preauto->parentezcoref2;
        $row2->telefonoref2 = $preauto->telefonoref2;
        $row2->numtarjeta = $preauto->numtarjeta;
        $row2->nombreTarjeta = $preauto->nombreTarjeta;
        $row2->agrupamiento = $preauto->agrupamiento;
        $row2->establecimiento_apertura = $preauto->establecimiento_apertura;
        $row2->tipo_producto = $preauto->tipo_producto;
        $row2->autentika = $preauto->autentika;
		$row2->rutaidentificacion = $preauto->rutaidentificacion;

		if (!$row2->store()) {
			$error = 1 ;
		}
                // Se procesa la direccion por la funcion que reemplaza los caracteres especiales
                $query_fnt = "select fnt_remover_acentos('$row2->direccion') as 'direccion_fnt';";
		$database->setQuery($query_fnt);
                $direccion_fnt=	$database->loadResult();
                
                // Se actualiza la direccion
                $database->setQuery("update tb_preautorizacion set direccion='$direccion_fnt' where id='$row2->id'");
                $database->query();
                
                
        if(TEST_ALTERNO == '1' && ($row2->modelo == '106' || $row2->modelo == '107')){
            // Se actualiza la anualidad
            $database->setQuery("update tb_preautorizacion set anualidad='3' where id='$row2->id'");
            $database->query();
        }		// Registrar la hora en la que ingresa el estado a pendiente
		if($row2->estado == "PENDIENTE") {
			registrarTiempoSolicitud($row2->id);
		}
		if($preauto->resolucion_idck != '')saveComentarioInicial($row2->id,$preauto->resolucion_idck,'ID');
		$intentos_validador = idValidator::getIntentos($preauto->identificacion);
		if($intentos_validador >= 1)
		{
			$calificaciones_validador = idValidator::getCalificaciones($preauto->identificacion);
			saveComentarioInicial($row2->id,"CUESTIONARIOS REALIZADOS:: $intentos_validador CALIFICACIONES OBTENIDAS $calificaciones_validador",'ID');
		}
		if($comentarioinicial!='')saveComentarioInicial($row2->id,$comentarioinicial,'ID');	
		if($preauto->codigos!='')saveComentarioInicial($row2->id,$preauto->codigos,'ID');
		if($preauto->comentele!='')saveComentarioInicial($row2->id,$preauto->comentele,'ID');	
		if($preauto->comenteperfil!='')saveComentarioInicial($row2->id,$preauto->comenteperfil,'ID');		
                
                $database->setQuery("update tb_preautorizacion_teletec set id_preautorizacion='$row2->id' where id = '$preauto->idteletec';");
		$database->query();
                
                //Comentario: condicionar punto de venta Fuentes musicales guapiles
                if($my->username == 'VFUENTEMUSICALGUAPILES' || $preauto->establecimiento_apertura == 'FUENTE MUSICAL GUAPILES'){
                    saveComentarioInicial($row2->id,'SOLICITUD CONDICIONADA POR ORIGINACIÓN PDV:FUENTE MUSICAL GUAPILES','ID');               
                }
                
                if($data642 && isset($data642) && !empty($data642) && $data642 != null){
                    if(isset($data642->type) && $data642->type == 'success'
                        && isset($data642->status) && $data642->status == 2
                            && isset($data642->commentary)){
                        foreach ($data642->commentary as $comment) {
                            saveComentarioInicial($row2->id,strtoupper($comment),'ID');
                        }
                    }
                }
                
		saveComentarioInicial($row2->id,$preauto->comentsac,'ID');
		$database->setQuery("select * from tb_confirmacion_email where email='$preauto->email' order by id desc limit 1");
		$database->loadObject($res);
		if(!empty($res)) {
			$database->setQuery("update tb_confirmacion_email set id_pre ='$row2->id' where id='$res->id' ");
			$database->query();	
		}

		if(!empty($res)){
			switch($res->estado){
				case 0: saveComentarioInicial($row2->id, 'SE ENVIA EMAIL, PERO CLIENTE NO CONFIRMA EL EMAIL','ID');break;
				case 1: 
				{
					saveComentarioInicial($row2->id, 'EL CLIENTE CONFIRMA EL EMAIL','ID');
					if($row2->estado='PENDIENTE'){
						mosEmail::sendEmail('Verificacion de email',array('from'=>'info@credix.com'),array(array('to'=>'documentos@credix.com')),'Cliente verifica el correo, su numero de autorizaci&oacute;n:'.$row2->id);
					}
				}					
				break;
				case 2: {
							if($row2->estado='PENDIENTE'){
								mosEmail::sendEmail('Verificacion de email',array('from'=>'info@credix.com'),array(array('to'=>'documentos@credix.com')),'Cliente verifica el correo, su numero de autorizaci&oacute;n:'.$row2->id);
							}
							saveComentarioInicial($row2->id, 'SE CONFIRMA EL EMAIL DEL CLIENTE','ID');
							
						}
				break;
			}
			
		}else{
			saveComentarioInicial($row2->id, 'NO SE ENVIA EMAIL AL CLIENTE POR PARTE DEL VENDEDOR','ID');
		}
			
	}

//  ES CREDIX UNICO LINEA?
    $os = explode(",", _UNICO_LINEA_);
    if (in_array($row->agrupamiento, $os) && $preauto->estado == 'APROBADO') {
        $row2 = new mosPreautorizacion($database);
        $row2->id = (int) $row2->id;
        $row2->numero_autorizacion = $preauto->numero_autorizacion;
        $row2->mes_alta = $preauto->mes_alta;
        $row2->ano_alta = $preauto->ano_alta;
        $row2->dia_alta = $preauto->dia_alta;
        $row2->hora = $preauto->hora;
        $row2->agente_vendedor = $preauto->agente_vendedor;
        $row2->ccno = $preauto->ccno;
        $row2->limite_autorizado = $preauto->limite_autorizado;
        $row2->limite_solicitado = $preauto->limite_solicitado;
        $row2->limite_aprobado = $preauto->limite_aprobado;
        $row2->establecimiento = $preauto->establecimiento;
        $row2->monedaL = $preauto->monedaL;
        $row2->comentarios = $preauto->comentarios;
        $row2->estado = $preauto->estado;
        $row2->estado_origen = $preauto->estado_origen;
        $row2->criterio = $preauto->criterio;
        $row2->aff_group = $preauto->aff_group;
        $row2->nombre = $preauto->nombre;
        $row2->apellidos = $preauto->apellidos;
        $row2->tipodocumento = $preauto->tipodocumento;
        $row2->identificacion = $preauto->identificacion;
        $row2->fecha_nacimiento = $preauto->fecha_nacimiento;
        $row2->nacionalidad = $preauto->nacionalidad;
        $row2->sexo = $preauto->sexo;
        $row2->estado_civil = $preauto->estado_civil;
        $row2->telefono = $preauto->telefono;
        $row2->email = $preauto->email;
        $row2->direccion = $preauto->direccion;
        $row2->provincia = $preauto->provincia;
        $row2->canton = $preauto->canton;
        $row2->distrito = $preauto->distrito;
        $row2->calificacion = $preauto->calificacion;
        $row2->modelo = $preauto->modelo;
        $row2->anualidad = $preauto->anualidad;
        $row2->localizable = $preauto->localizable;
        $row2->modificado = $preauto->modificado;
        $row2->tracking = $preauto->tracking;
        $row2->perfil = $preauto->perfil;
        $row2->activate_pin = $preauto->activate_pin;
        $row2->email_trabajo = $preauto->email_trabajo;
        $row2->direcciont = $preauto->direcciont;
        $row2->telefonot = $preauto->telefonot;
        $row2->identificacion_fiador = $preauto->identificacion_fiador;
        $row2->nombre_fiador = $preauto->nombre_fiador;
        $row2->direccion_fiador = $preauto->direccion_fiador;
        $row2->email_fiador = $preauto->email_fiador;
        $row2->telefono_fiador = $preauto->telefono_fiador;
        $row2->lugar_trabajo_fiador = $preauto->lugar_trabajo_fiador;
        $row2->tel_trabajo_fiador = $preauto->tel_trabajo_fiador;
        $row2->email_trabajo_fiador = $preauto->email_trabajo_fiador;
        $row2->rutaorden = $preauto->rutaorden;
        $row2->salario1 = $preauto->salario1;
        $row2->salario2 = $preauto->salario2;
        $row2->salario3 = $preauto->salario3;
        $row2->orden = $preauto->orden;
        $row2->cuotas = $preauto->cuotas;
        $row2->numusu = $preauto->numusu;
        $row2->entrada = $preauto->entrada;
        $row2->telefonoref = $preauto->telefonoref;
        $row2->dir_entrega = $preauto->dir_entrega;
        $row2->dir_trabajo = $preauto->dir_trabajo;
        $row2->ocupacion = $preauto->ocupacion;
        $row2->ingreso_promedio = $preauto->ingreso_promedio;
        $row2->ingreso_promedio_usr = $preauto->ingreso_promedio_usr;
        $row2->tipo_ingreso = $preauto->tipo_ingreso;
        $row2->antiguedad = $preauto->antiguedad;
        $row2->provincia_entrega = $preauto->provincia_entrega;
        $row2->canton_entrega = $preauto->canton_entrega;
        $row2->distrito_entrega = $preauto->distrito_entrega;
        $row2->nombreref = $preauto->nombreref;
        $row2->parentezcoref = $preauto->parentezcoref;
        $row2->nombreref2 = $preauto->nombreref2;
        $row2->parentezcoref2 = $preauto->parentezcoref2;
        $row2->telefonoref2 = $preauto->telefonoref2;
        $row2->numtarjeta = $preauto->numtarjeta;
        $row2->nombreTarjeta = $preauto->nombreTarjeta;
        $row2->agrupamiento = $preauto->agrupamiento;
        $row2->establecimiento_apertura = $preauto->establecimiento_apertura;
        $row2->tipo_producto = $preauto->tipo_producto;
        $row2->autentika = $preauto->autentika;
		$row2->rutaidentificacion = $preauto->rutaidentificacion;

		if (!$row2->store()) {
			$error = 1 ;
		}
		$permite = false;
		if($_SESSION['session_gid'] == 'supervisor' || $_SESSION['session_gid'] == 'ventas_especial'){
			$permite = true;	
		}
        /***Plan piloto de edecanes */
        $database->setQuery("update tb_preautorizacion_teletec set id_preautorizacion='$row2->id' where id = '$preauto->idteletec';");
        $database->query(); 
        
		HTML_credito::gosixth($option,$row2,$permite);		
	}else{
	    if($preauto->establecimiento_apertura == 'SUCURSALES' || $continuar == 3 || $continuar == 0){
		  HTML_credito::gofourth($option,$preauto,$continuar);
        }else{                
            if($validar_flujo){
               mosRedirect( "index.php?option=credito&task=gofifth&id_preautorizacion_tmp=$row->id", '' ); 
            } else {
                mosRedirect( "index.php?option=credito&task=gofifth&id_preautorizacion=$row2->id", '' );
            }           
        }
	}

			

}
function solicitudcredito($option){
	global $database,$config_absolute_path, $IP_BD_SQL_SERVER, $NAME_BD_SQL_SERVER, $USER_BD_SQL_SERVER, $PASS_BD_SQL_SERVER;
    
    $query = "SELECT pdv.pdv, pdv.nombre FROM tb_pdv pdv
            INNER JOIN tb_pdv_apertura_solicitudes pdv_aper
                ON pdv.pdv = pdv_aper.pdvNumero
            WHERE
                pdv_aper.estado = 1 
            ORDER BY nombre ASC;";
    
    $database->setQuery($query);
    $rows = $database->loadObjectList();

    $lugar_apertura[]   = mosHTML::makeOption('SUCURSALES', 'SUCURSAL');
    foreach ($rows as $key => $value)
        $lugar_apertura[]   = mosHTML::makeOption( $value->nombre, $value->nombre);
    
    $lists['lugar_apertura'] = mosHTML::selectList( $lugar_apertura, 'lugar_apertura', 'class="inputbox" id="lugar_apertura" size="1"', 'value', 'text', 'SUCURSALES' );
    
    //Catalogos de tipos de producctos
    require_once( $config_absolute_path . '/includes/database/mssqls.php' );
    $conexion = new mssqlserver("$IP_BD_SQL_SERVER", "$USER_BD_SQL_SERVER", "$PASS_BD_SQL_SERVER", "$NAME_BD_SQL_SERVER");
	
    $query = "SELECT [PRU_Id] AS id,[PRU_Name] AS name FROM [ORIGINATION].[PRU_PRODUCT] WHERE [PRU_IsActive] = 1;";
				
    $conexion->setQueryMssql($query);
    $cur = $conexion->queryMssqlReturn();
    if(!$esComercio){
        while ($row = mssql_fetch_object( $cur ))
        {
            $tipos_productos[]   = mosHTML::makeOption( $row->id, utf8_encode($row->name));
        }
    }
    mssql_free_result( $cur );
    $lists['tipos_productos'] = mosHTML::selectList( $tipos_productos, 'tipo_producto', 'class="inputbox" id="tipo_producto" size="1"', 'value', 'text', 1 );
    
    HTML_credito::solicitudcredito($option,$lists);
}
function gosecond($option){
	global $database,$my,$config_absolute_path;

	$modelo = null;
	$agrupamiento = null;
	$resolucionPreliminar = 2;
	$resolucionBDX = null;
        $lists['burosHealth']['experto'] = 1;//Registro del estado de los buros
	
        /*CAPTURA DE CEDULA Y TIPO DE CEDULA*/	
        $identificacion = mosGetParam($_POST, 'identificacion');
	$tipo_documento = mosGetParam($_POST, 'tipo_documento');

	if(empty($identificacion)) {
		$identificacion = mosGetParam($_GET,"identificacion");
                $tipo_documento = mosGetParam($_GET,"tipo_documento");
	}
    
    /*OBTENGO DATOS DE TB TELETEC*/
    $estudioTbTeletec = obtenerEstudioTbTeletecByIdentificacion($identificacion);
    $idTeletec = $estudioTbTeletec->id;
    $telefono = $estudioTbTeletec->telefono;
    
    if($estudioTbTeletec->establecimiento_apertura != 'SUCURSALES'){
        $id_preauto_tmp = $estudioTbTeletec->id_preautorizacion;
        $database->setQuery("select * from tb_preautorizacion_tmp where id = '$id_preauto_tmp';");
        $database->loadObject($row);
        
        $data = array("idteletec"=>$idTeletec,"nombre"=>$row->nombre,"apellidos"=>$row->apellidos,
            "fecha_nac"=>$row->fecha_nacimiento, "sexo"=>$row->sexo, "provincia"=>$row->provincia,
            "provincia_code"=>ltrim($row->provincia_code, '0'), "canton"=>$row->canton, 
            "canton_code"=>ltrim($row->canton_code, '0'), "distrito"=>$row->distrito,
            "distrito_code"=>ltrim($row->distrito_code, '0'), "direccion"=>$row->direccion,
            "celular"=>$row->celular, "telefono_fijo"=>$row->telefono);
            
        $resolucionFinal = $estudioTbTeletec->resolucion_final;
        
        $lists['burosHealth']['experto'] = $estudioTbTeletec->buro_experto_falla;          
    } else {
        detenerCedulaDuplicada($identificacion,1);

        /*CREO LA INSTANCIA DE CLASE MOSIDCHECK*/
        $idCheck = new mosIDCheck();
        /*CREO INSTANCIA DE CLASE MOSEQUIFAX*/
        $equifax = new mosEquifax;
    
        $identificacion_consulta = str_replace('-', '', $identificacion);
        $ArrayFromXML = $equifax->consultarEquifax($identificacion_consulta , $tipo_documento);
    
        /*VALIDAR SI EL SERVICIO EXPERTO ESTA ACTIVO*/
        if(isset($ArrayFromXML->codigoRetorno) && $ArrayFromXML->codigoRetorno != '00') {
            $lists['burosHealth']['experto'] = 0;
        }
        
        /*GUARDAMOS SI CONSULTA EQUIFAX*/
        $query = "UPDATE tb_preautorizacion_teletec SET buro_experto_falla = ".$lists['burosHealth']['experto']." WHERE id = ".$idTeletec;
        $database->setQuery($query);
        $database->query();
        
        /*OBTENER DATOS DE EQUIFAX EN UN ARRAY*/
        $arrayDatosEquifax = $equifax->getDatosFromArray($ArrayFromXML);
        /*OBTENER TODOS LOS TELEFONOS DE EXPERTO*/
        $equifax->savePhonesExpertoData($ArrayFromXML,$idTeletec,$identificacion);
        /*RESULTADO DE REGLAS ID CHECK*/
        $resolucionIDCheck = (object)array('codigoRes'=>$estudioTbTeletec->aviso_final_idck,'observaciones'=>$estudioTbTeletec->observaciones);
        /*AVISO ID CHECK*/
        $avisoTextIdCheck = $idCheck->getTextResolucion($estudioTbTeletec->aviso);
        /*RESOLUCION ID CHECK*/
        $resolucionTextIdCheck = getTextResolucionTeletec($resolucionIDCheck->codigoRes);
        /*COMENTARIO DE RESOLUCION ID CHECK*/
        $comentario_resolucion_idcheck = 'AVISO ID CHECK: '.$avisoTextIdCheck. ' [::] RESOLUCION ID CHECK: '.$resolucionTextIdCheck;
        $error = 0;
    
        /*GUARDAR DATOS DEL ESTUDIO EN TABLA*/
        $arrayIDCheck = (object)array('Aviso'=>(string)$estudioTbTeletec->aviso , 'EsDef'=>(string)$estudioTbTeletec->esDef , 'EsPep'=>(string)$estudioTbTeletec->esPep ,
                                        'codigoRes'=>$resolucionIDCheck->codigoRes , 'observaciones'=>$resolucionIDCheck->observaciones);
        $equifax->saveExpertoData($identificacion, $arrayDatosEquifax, $idTeletec);
    
        $data = array("idteletec"=>$idTeletec,"nombre"=>$arrayDatosEquifax->nombre,"apellidos"=>$arrayDatosEquifax->apellido1." ".$arrayDatosEquifax->apellido2,
            "fecha_nac"=>$arrayDatosEquifax->fecha_nac, "sexo"=>$arrayDatosEquifax->sexo, "provincia"=>$arrayDatosEquifax->provincia_desc,
            "provincia_code"=>ltrim($arrayDatosEquifax->provincia_code, '0'), "canton"=>$arrayDatosEquifax->canton_desc, 
            "canton_code"=>ltrim($arrayDatosEquifax->canton_code, '0'), "distrito"=>$arrayDatosEquifax->distrito_desc,
            "distrito_code"=>ltrim($arrayDatosEquifax->distrito_code, '0'), "direccion"=>$arrayDatosEquifax->direccion_general,
            "celular"=>$arrayDatosEquifax->celular, "telefono_fijo"=>$arrayDatosEquifax->telefono_fijo);
        
        $nombreTarjeta = generarNombreTarjeta($arrayDatosEquifax->nombre, $arrayDatosEquifax->apellido1, $arrayDatosEquifax->apellido2);
        
        //SE OBTIENEN DE NUEVO LOS DATOS DE PREAUTO_TELETEC PARA REFRESCAR CON DATOS DE EXPERTO
        $teletec = null;
        $database->setQuery("select * from tb_preautorizacion_teletec where id = '$idTeletec' and identificacion = '$identificacion';");
        $database->loadObject($teletec);
        $url_estudio='';
        $url_desc = 'VER BURO CREDITO';
        if(!empty($teletec->url_estudio)) {
            $url_estudio = $teletec->url_estudio;
            $url_estudio == 'NO INDICA ESTUDIO' ? $url_desc = 'ESTUDIO NO DISPONIBLE' : true;
        }
        $resolucionText = getTextResolucionTeletec($teletec->resolucion);
        
        /*VERIFICO SI SE DEBE RECHAZAR SOLICITUD POR EQUIFAX O IDCHECK, SINO ENTONCES CONSULTO TRANSUNION*/
        $denegarByTransunion = false;
        $rechazar_solicitud = false;
        $aplicaForzajeTrans = 0;
        $estimadorTransunion = '';
        //SI IDCHEK ES APROBADO, SE UTILIZA RESOLUCIÓN DE EXPERTO, SINO MANDA LA RESOLUCIÓN IDCHECK
        if($resolucionIDCheck->codigoRes == '1') {
            $resolucionPreliminar = $teletec->resolucion;
        } else {
            $resolucionPreliminar = $resolucionIDCheck->codigoRes;
        }
        
        /*Si ID Check resolucion Rechazar, no hay nada mas que validar y se rechaza*/
        if($resolucionIDCheck->codigoRes != '3') {
            /*VERIFICA LAS REFERENCIAS DE COMPORTAMIENTO EN CREDITOS DE TRANSUNION*/
            $transunion = new Transunion();
            $estudioTransunion = $transunion->getEstudioTransunion($identificacion);
            if(!empty($estudioTransunion))
            {
                $comportamientos_transunion = $estudioTransunion->comportamientos;
                $aplicaForzajeTrans = $estudioTransunion->aplicaForzaje;
                $estimadorTransunion = json_encode($estudioTransunion->estimadorIngresos);
                if( _CREDITO_TRANSUNION_FORZAJE_ == 1 && $aplicaForzajeTrans > 0)
                    $denegarByTransunion = false;
                else
                    $denegarByTransunion = $transunion->denegarPorComportamiento($comportamientos_transunion);
                /*GUARDO DATOS EN TB_TELETEC*/
                $transunion->saveInfoTransunion($idTeletec, $comportamientos_transunion, $estudioTransunion->estimadorIngresos,$aplicaForzajeTrans,$denegarByTransunion);
            }
        }
        
        /*Si IDCheck o Transunion resuelven rechazar, se rechaza preliminarmente*/
        if($resolucionIDCheck->codigoRes == '3' || $denegarByTransunion) {
            $resolucionPreliminar = 3;
        } else {
            if($resolucionIDCheck->codigoRes != '1' && $teletec->resolucion != '3')
                $resolucionPreliminar = $resolucionIDCheck->codigoRes;
            /*Forzar a Condicionado si Transunion Forzaje es codigo 2*/
            if($resolucionPreliminar == 1 && $aplicaForzajeTrans == 2) {
                $resolucionPreliminar = 2;
            }
        }
        
        /*SOLO INGRESAN LOS APROBADOS Y CONDICIONADOS O CASOS EN QUE SOLAMENTE ES RECHAZADO POR EXPERTO*/
        if(in_array($resolucionPreliminar,array(1,2)) || (!$denegarByTransunion && $resolucionIDCheck->codigoRes != '3')) {
            /*Forzaje Rechazar - Si salario es menor a 250,000, presenta códigos, y tiene forzaje*/
            $rechazoForzado = false;
            if(in_array($resolucionPreliminar, array(1,2))) {
                if($equifax->forzajeRechazarNegativo($arrayDatosEquifax->codigos_internos, $estimadorTransunion, $arrayDatosEquifax->es_forzaje, $aplicaForzajeTrans)) {
                    $resolucionPreliminar = 3;
                    $rechazoForzado = true;
                    error_log("Identificacion $identificacion ha sido rechazada por forzaje inverso (Forzaje Rechazar)");
                }
            }            
        }
        
        /*Si no hubo rechazo forzado, verifica BDX*/
        $edadBureau = 0;
		$limitConecte = 0;
        $bdxService = new BDX();
		$bdxResponse = $bdxService->getBDXResolution($identificacion, $teletec->codigos_internos);
		$limitConecte = $bdxResponse->limit;
        if($bdxResponse && isset($bdxResponse->resultBdx) && $bdxResponse->statusCode == '00') {
            $resolucionPreliminarConecte = $bdxService->formatResultBDX($bdxResponse->resultBdx);
            $edadBureau = $bdxResponse->edad;            
            $bdxService->saveBDXResult($idTeletec, $resolucionPreliminarConecte, $limitConecte);
            
            //Asiganar resultado Conecte
            if($resolucionPreliminar == 1){
                if($resolucionPreliminarConecte == 2 || $resolucionPreliminarConecte == 3) {
                    $resolucionPreliminar = $resolucionPreliminarConecte;
                    //$limitConecte = 0;
                }
            } else if($resolucionPreliminar == 2){
               	//$limitConecte = 0;
                if($resolucionPreliminarConecte == 3) {
                    $resolucionPreliminar = $resolucionPreliminarConecte;
                }
            } else {
                //$limitConecte = 0;
            }
        }//Se condiciona al no hacer conección de conecte y el estado es aprobado
        else if($resolucionPreliminar == 1) {
            $resolucionPreliminar = 2;
        }
        
        //Validar edad para condicionar
        if($edadBureau == 0 && !empty($data['fecha_nac'])){
            $edadBureau = calculaedad($data['fecha_nac']); 
        }
        
        if($resolucionPreliminar == 1 && !empty($edadBureau) && $edadBureau <= 25){
            $resolucionPreliminar = 2;
        } 
        
        /**
         * Se guarda xml completo de conecte
         */
        try{          
            if($bdxResponse && isset($bdxResponse->studyType2) && !empty($bdxResponse->studyType2)){
                
                $type_rev = array("<type>success</type>");
                $bdxResponse->studyType2 = str_replace($type_rev, "", $bdxResponse->studyType2);
                            
                $query = "INSERT INTO `credixcrsgc`.`tb_conecte_xml`
                    (`cxl_IdTeletecFk`,`cxl_Identificacion`,`cxl_Xml`,`cxl_DateCreate`)
                    VALUES
                    ($teletec->id,'$identificacion','$bdxResponse->studyType2',CURRENT_TIMESTAMP)";
                $database->setQuery($query);
                $database->query();
                
                /*GUARDAR TELEFONOS DE CONECTE*/
                $xmlConecte = loadXML($bdxResponse->studyType2);
                $bdxService->savePhonesConecteData($xmlConecte, $identificacion, $teletec->id);
            }            
        }catch(Exception $exception){
            error_log("Guardar xml de conecte".$exception);
        }
        
        $creditApp = new CreditApplication();
        $creditAttributes = $creditApp->selectCreditAttributes($resolucionPreliminar, $arrayDatosEquifax->es_forzaje, $aplicaForzajeTrans);
        $modelo = $creditAttributes->modelo;
        $agrupamiento = $creditAttributes->agrupamiento;
        $resolucionPreliminar = $creditAttributes->resolucion;
        
        /*FORZAJE PARA ENVIAR SOLICITUD A CONDICIONADO SI SALARIO ES MENOR A 250,001*/
        if($resolucionPreliminar == 1) {
            if($equifax->forzajeCondicionarNegativo($arrayDatosEquifax->codigos_internos, $estimadorTransunion)) {
                $resolucionPreliminar = 2;
                error_log("Identificacion $identificacion ha sido condicionada por forzaje inverso");
            }
        }
        
        //SI IDCHECK INDICA CONDICIONAR, DEBE RESPETARSE
        if($resolucionIDCheck->codigoRes == '2' && in_array($resolucionPreliminar,array(1,2))) {
            $resolucionPreliminar = 2;
            error_log("Identificacion $identificacion ha sido condicionada por IDCHECK");
        }
        
        //Validar la edad de la persona
        if(in_array($resolucionPreliminar,array(1,2)) && $edadBureau <= 25){
            $resolucionPreliminar = 2;
        }
        
        /*SE DEFINE LA RESOLUCION FINAL EN BASE AL ULTIMO ESTADO DE LA RESOLUCIÓN PRELIMINAR*/
        $resolucionFinal = $resolucionPreliminar;
        
        /*AGREGAR RESOLUCION FINAL EN REGISTRO PREAUTO_TELETEC*/
        $query = "update tb_preautorizacion_teletec set resolucion_final = '$resolucionFinal' where id = '$teletec->id'";
        $database->setQuery($query);
        $database->query();
        /*Si resolucion final es rechazar, se graba la solicitud y finaliza proceso*/
        if( $resolucionFinal == 3  && TEST_ALTERNO != '1') {
            $row = new mosPreautorizacion( $database );
            $row->id               = (int) $row->id;
            $row->sexo = $data['sexo'];
            $row->nombre = mosHTML::cambiarCaracterInvalido_sms($data['nombre']);
            $row->apellidos = mosHTML::cambiarCaracterInvalido_sms($data['apellidos']);
            $row->fecha_nacimiento = str_replace("/", "",$data['fecha_nac']);
            $row->identificacion = $identificacion;
            $row->tipodocumento = $tipo_documento;
            $row->dia_alta = date('d');
            $row->mes_alta = date('m');
            $row->ano_alta = date('Y');
            $row->agente_vendedor = $my->username;
            $row->establecimiento = $my->name;
            $row->entrada = 1;
            $row->estado         = "RECHAZADO" ;
            $row->estado_origen  = "RECHAZADO" ;
            $row->telefono  = $teletec->telefono;
            $row->tracking   = 70;
            $row->nombreTarjeta = $nombreTarjeta;
            $row->modelo = $modelo;
            $row->agrupamiento = $agrupamiento;
            $row->establecimiento_apertura = $teletec->establecimiento_apertura;
            $row->tipo_producto = $teletec->tipo_producto;
            $row->autentika = $teletec->autentika;
            if (!$row->store()) {
              $error = 1 ;
            }
            /*INGRESO COMENTARIO CON RESOLUCION DE ID CHECK*/
            saveComentarioInicial($row->id,$comentario_resolucion_idcheck,'ID');
            ///if(!empty($teletec->codigos_internos))saveComentarioInicial($row->id , 'MOTIVO RESOLUCION: '.$teletec->codigos_internos, 'ID');
            $edad =  calculaedad($data['fecha_nac']);
            $comentario_resolucion_teletec = 'RESOLUCION EXPERTO: '.$resolucionText . " :::::: EDAD: $edad :::::: URL: 
            [a href=*$url_estudio* target=*_blank*]".$url_desc."[=a]";
            saveComentarioInicial($row->id,$comentario_resolucion_teletec,'ID');
            $intentos_validador = idValidator::getIntentos($identificacion);
            if($intentos_validador >= 1)
            {
                $calificaciones_validador = idValidator::getCalificaciones($identificacion);
                saveComentarioInicial($row->id,"CUESTIONARIOS REALIZADOS:: $intentos_validador CALIFICACIONES OBTENIDAS $calificaciones_validador",'ID');
            }
            if(!empty($teletec->codigos_internos))saveComentarioInicial($row->id,'MOTIVO RESOLUCION: '.$teletec->codigos_internos,'ID');
            if($teletec->resolucion == '3' && $resolucionIDCheck->codigoRes == '3')
                $origen_rechazo = 'EXPERTO - ID CHECK';
            elseif($teletec->resolucion == '3')
                $origen_rechazo = 'EXPERTO';
            elseif($resolucionIDCheck->codigoRes == '3')
                $origen_rechazo = 'ID CHECK';
            elseif($denegarByTransunion) {
                $origen_rechazo = 'TRANSUNION';
            } else {
                $origen_rechazo = 'UNKNOWN_TYPE';
            }
            saveComentarioInicial($row->id,"SOLICITUD RECHAZADA POR ".$origen_rechazo,'ID');
                       
            /* Registrar el idPreautorizacion en Telec*/
            $database->setQuery("update tb_preautorizacion_teletec set id_preautorizacion='$row->id' where id = '$teletec->id';");
            $database->query();
            
        } else {
            if(TEST_ALTERNO == '1' ){
                $resolucionFinal = 2;
            }
            // SE CREA PREAUTORIZACION TEMPORAL
            $row = new mosPreautorizaciont( $database );
            $row->id               = (int) $row->id;
            $row->sexo = $data['sexo'];
            $row->nombre = mosHTML::cambiarCaracterInvalido_sms($data['nombre']);
            $row->apellidos = mosHTML::cambiarCaracterInvalido_sms($data['apellidos']);
            $row->fecha_nacimiento = str_replace("/", "",$data['fecha_nac']);
            $row->identificacion = $identificacion;
            $row->tipodocumento = $tipo_documento;
            $row->dia_alta = date('d');
            $row->mes_alta = date('m');
            $row->ano_alta = date('Y');
            $row->agente_vendedor = $my->username;
            $row->establecimiento = $my->name;
            $row->telefono = $teletec->telefono;
            $row->email = $teletec->email;
            $row->entrada = 1;
            $row->agrupamiento = $agrupamiento;
            $row->modelo = $modelo;
            $row->establecimiento_apertura = $teletec->establecimiento_apertura;
            $row->tipo_producto = $teletec->tipo_producto;
            $row->autentika = $teletec->autentika;
            $row->idteletec = $teletec->id;
            $row->limite_aprobado = $limitConecte;
            $row->ingreso_promedio = (!empty($bdxResponse->salario) ? $bdxResponse->salario.'00' : "");
            
            if(!empty($teletec->codigos_internos))$row->codigos = 'MOTIVO RESOLUCION: '.$teletec->codigos_internos;
            $edad =  calculaedad($data['fecha_nac']);
            $row->comentele = 'RESOLUCION EXPERTO: '.$resolucionText . " :::::: EDAD: $edadBureau :::::: URL: 
            [a href=*$url_estudio* target=*_blank*]".$url_desc."[=a]";
            $row->resolucion_idck = $comentario_resolucion_idcheck;
            if (!$row->store()) {
              $error = 1 ;
            }
        }
     }
    
    /*Se crean inputs de pantalla de completado de datos personales*/
    $query = "SELECT * FROM tb_scorecard_item order by id asc";
    $database->setQuery($query);
    $scorecard_items = $database->loadObjectList(); 
    if ($database->getErrorNum()) 
        {
        echo $database->stderr();
        return array();
        }

    if (empty($scorecard_items))
        {
        return; 
        }
    for($i=0;$i<count($scorecard_items);$i++){
        $item=$scorecard_items[$i];
        $puntaje[] = mosHTML::makeOption( $item->id, $item->descripcion);
    }   
    $lists['puntaje']   = mosHTML::selectList( $puntaje, 'limite_autorizado', ' class="inputbox" size="14" id="tarjetas"', 'value', 'text' );

    $provincias[]       = mosHTML::makeOption( '', 'Seleccione Provincia');
    $provincias[]       = mosHTML::makeOption( 'SAN JOSE', 'San Jos&eacute;');
    $provincias[]       = mosHTML::makeOption( 'ALAJUELA', 'Alajuela');
    $provincias[]       = mosHTML::makeOption( 'CARTAGO', 'Cartago');
    $provincias[]       = mosHTML::makeOption( 'HEREDIA', 'Heredia');
    $provincias[]       = mosHTML::makeOption( 'GUANACASTE', 'Guanacaste');
    $provincias[]       = mosHTML::makeOption( 'PUNTARENAS', 'Puntarenas');
    $provincias[]       = mosHTML::makeOption( 'LIMON', 'Lim&oacute;n');
    $lists['provincias'] = mosHTML::selectList( $provincias, 'provincia', 'class="inputbox" id="provincia" size="1"', 'value', 'text', $data['provincia'] );
    $lists['provincia_entrega'] = mosHTML::selectList( $provincias, 'provincia_entrega', 'class="inputbox" id="provincia_entrega" size="1"', 'value', 'text', $data['provincia'] );
    
    //CANTONES
    $database->setQuery("select distinct canton from tb_direccion where provincia = '".ucwords(strtolower($data['provincia']))."' order by canton;");
    $cantones = $database->loadObjectList();
    $cantones = & $cantones ;
    $canton[] = mosHTML::makeOption( '', 'Seleccione Cant&oacute;n');
    foreach ($cantones as $key=>$item)
        {
        $canton[] = mosHTML::makeOption( $item->canton, $item->canton);
        }
    $database->setQuery("SELECT nombre FROM tb_cantones WHERE cod_provincia = '".$data['provincia_code']."' AND codigo = '".$data['canton_code']."' ");
    $nombre_canton = $database->loadResult();
    $lists['canton'] = mosHTML::selectList( $canton, 'canton', 'class="inputbox" id="canton" size="1"', 'value', 'text', $nombre_canton );
    $lists['canton_entrega'] = mosHTML::selectList( $canton, 'canton_entrega', 'class="inputbox" id="canton_entrega" size="1"', 'value', 'text', $nombre_canton );
    
    //DISTRITOS
    $database->setQuery("select distinct distrito from tb_direccion where canton = '".ucwords(strtolower($nombre_canton))."' order by distrito;");
    $ditritos = $database->loadObjectList();
    $ditritos = & $ditritos ;
    $distrito[] = mosHTML::makeOption( '', 'Seleccione Distrito');
    foreach ($ditritos as $key=>$item) {
        $distrito[] = mosHTML::makeOption( $item->distrito, $item->distrito);
    }
    $database->setQuery("SELECT nombre FROM tb_distritos WHERE cod_provincia = '".$data['provincia_code']."' AND cod_canton = '".$data['canton_code']."' AND codigo = '".$data['distrito_code']."' ");
    $nombre_distrito = $database->loadResult();
    $lists['distrito'] = mosHTML::selectList( $distrito, 'distrito', 'class="inputbox" id="distrito" size="1"', 'value', 'text', $nombre_distrito );
    $lists['distrito_entrega'] = mosHTML::selectList( $distrito, 'distrito_entrega', 'class="inputbox" id="distrito_entrega" size="1"', 'value', 'text', $nombre_distrito );
    
    //NACIONALIDAD
    $database->setQuery("select * from tb_paises order by nombre asc;");
    $paises = $database->loadObjectList();

    if ($database->getErrorNum()) 
        {
        echo $database->stderr();
        return array();
        }
        
    $nacionalidad[] = mosHTML::makeOption( '', 'Seleccione la nacionalidad');
    foreach ($paises as $key=>$item)
        {
        $nacionalidad[] = mosHTML::makeOption( $item->codigo, $item->nombre);
        }
    $lists['nacionalidad'] = mosHTML::selectList( $nacionalidad, 'nacionalidad', 'id="nacionalidadList" class="inputbox" size="1"', 'value', 'text', '188' );
    
    //OCUPACION 
    $database->setQuery("select * from tb_ocupacion;");
    $ocupaciones = $database->loadObjectList();
    $ocupaciones = & $ocupaciones;
    if($estudioTbTeletec->establecimiento_apertura != 'SUCURSALES'){
        $ocupacion = array();
        if(!empty($ocupaciones)){
            foreach ($ocupaciones as $item) {
                $item = & $item;
                $ocupacion[] = array('value'=>$item->numero,'label'=>$item->ocupacion);
            }
        }
        $ocupacion = json_encode($ocupacion);
        $lists['ocupacion'] = $ocupacion;
    } else {
        $ocupacion[] = mosHTML::makeOption( '', 'Seleccione Una Ocupacion');
        foreach ($ocupaciones as $key=>$item) {
            $ocupacion[] = mosHTML::makeOption( $item->numero, $item->ocupacion);
        }
        $lists['ocupacion'] = mosHTML::selectList( $ocupacion, 'ocupacion', 'class="inputbox" id="ocupacion" size="1"', 'value', 'text', '' );     
    }
    
    //SEXO
    $sexo=array();
    $sexo[]         = mosHTML::makeOption( '', 'Seleccione el sexo');
    $sexo[]         = mosHTML::makeOption( 'M', 'Masculino');
    $sexo[]         = mosHTML::makeOption( 'F', 'Femenino');
    $lists['sexo'] = mosHTML::selectList( $sexo, 'sexo', 'class="inputbox" size="1" id="sexo" ', 'value', 'text', $row->sexo );
    
    //ESTADO CIVIL
    $estado_civil_bdx_id = 0;
    if($estudioTbTeletec->establecimiento_apertura != 'SUCURSALES'){
        $estado_civil_bdx_id = $row->estado_civil;
    } else {
        if($bdxResponse && isset($bdxResponse->estado_civil)) {
            $estado_civil_bdx = ucwords(strtolower($bdxResponse->estado_civil));
            if($estado_civil_bdx == 'Soltero(a)')
                $estado_civil_bdx_id = 1;
            else if($estado_civil_bdx == 'Casado(a)')
                $estado_civil_bdx_id = 2;
            else if($estado_civil_bdx == 'Viudo(a)')
                $estado_civil_bdx_id = 3;
            else if($estado_civil_bdx == 'Separado(a)')
                $estado_civil_bdx_id = 4;
            else if($estado_civil_bdx == 'Divorciado(a)')
                $estado_civil_bdx_id = 5;
            else if($estado_civil_bdx == 'Union Libre(a)')
                $estado_civil_bdx_id = 6;    
        }        
    }

    $estadocivil[]      = mosHTML::makeOption( '', 'Seleccione estado civil');
    $estadocivil[]      = mosHTML::makeOption( '0', 'No Informado');
    $estadocivil[]      = mosHTML::makeOption( '1', 'Soltero');
    $estadocivil[]      = mosHTML::makeOption( '2', 'Casado');
    $estadocivil[]      = mosHTML::makeOption( '3', 'Viudo');
    $estadocivil[]      = mosHTML::makeOption( '4', 'Separado');
    $estadocivil[]      = mosHTML::makeOption( '5', 'Divorciado');
    $estadocivil[]      = mosHTML::makeOption( '6', 'Union Libre');
    $lists['estado_civil'] = mosHTML::selectList( $estadocivil, 'estado_civil', 'id="estado_civilList" class="inputbox" size="1"', 'value', 'text', $estado_civil_bdx_id);
    $lists['fecha']=substr($row->fecha_nacimiento, 0,4)."/".substr($row->fecha_nacimiento, 4,2)."/".substr($row->fecha_nacimiento, 6,2);        
    
    //TIPO INGRESO
    $tipo_ingreso[] = mosHTML::makeOption('', 'Seleccione un tipo de ingreso');
    $tipo_ingreso[] = mosHTML::makeOption('ASALARIADO', 'Asalariado');
    $tipo_ingreso[] = mosHTML::makeOption('INGRESO PROPIO', 'Ingreso Propio');
    $tipo_ingreso[] = mosHTML::makeOption('PENSIONADO', 'Pensionado');
    $lists['tipo_ingreso'] = mosHTML::selectList( $tipo_ingreso, 'tipo_ingreso', 'id="tipo_ingreso" class="inputbox" size="1"', 'value', 'text', 'ASALARIADO');
    
    $params_buro = new stdClass();    
    $params_buro->telefono_f = $data['telefono_fijo'];
    $params_buro->direccion_p = $data['direccion'];
    
    if($estudioTbTeletec->establecimiento_apertura != 'SUCURSALES'){
        
        $params_buro->celular = $data['celular'];
        $params_buro->ingreso = $row->ingreso_promedio;
        $params_buro->ant_laboral = $row->antiguedad;
        $params_buro->lugar_labora = trim($row->direcciont);
        $params_buro->referencia_1 = new stdClass();
        $params_buro->referencia_2 = new stdClass();
        $params_buro->referencia_consultado = new stdClass();
        
        $params_buro->referencia_consultado->workPhone = $row->telefonot;
        $params_buro->referencia_consultado->workAddress = $row->dir_trabajo;       
        $params_buro->referencia_1->fullName = $row->nombreref;
        $params_buro->referencia_1->phone = $row->telefonoref;
        $params_buro->referencia_1->relationship = $row->parentezcoref;
        $params_buro->referencia_2->fullName = $row->nombreref2;
        $params_buro->referencia_2->phone = $row->telefonoref2;
        $params_buro->referencia_2->relationship = $row->parentezcoref2;
        
    } else {
        
        $params_buro->celular = $telefono." ".$data['celular'];
        $params_buro->ingreso = 0;
        $params_buro->ant_laboral = ($bdxResponse && isset($bdxResponse->antiquityMonths)) ? $bdxResponse->antiquityMonths : "";
        $params_buro->lugar_labora = ($bdxResponse && isset($bdxResponse->employerName)) ? trim($bdxResponse->employerName) : "";
        $params_buro->referencia_consultado = null;
        $params_buro->referencia_1 = null;
        $params_buro->referencia_2 = null;
        $refencias_bdx = ($bdxResponse && isset($bdxResponse->references_people)) ? $bdxResponse->references_people : null;
        if($refencias_bdx != null){
           foreach ($refencias_bdx as $v) {
               if($v->relationship == 'Consultado(a)')
                   $params_buro->referencia_consultado = $v;
               else if($v->relationship == 'Conyuge') 
                   $params_buro->referencia_1 = $v;
               else if($v->relationship == 'Padre')
                   $params_buro->referencia_2 = $v;
           }
           if($params_buro->referencia_1 == null || $params_buro->referencia_2 != null){
               if($params_buro->referencia_1 == null)
                    $params_buro->referencia_1 = $params_buro->referencia_2;
               $params_buro->referencia_2 = null;
               foreach ($refencias_bdx as $v) {
                   if( !in_array($v->relationship,array('Consultado(a)','Conyuge','Padre')) ){
                       if($params_buro->referencia_1 == null)
                           $params_buro->referencia_1 = $v;
                       else if($params_buro->referencia_2 == null)
                           $params_buro->referencia_2 = $v;
                   }      
               }
            }
        } 
    }     
    if(TEST_ALTERNO == '1'){
        switch($row->estado){
            case 'PENDIENTE':
                $resolucionFinal = 2;
                break;
            case 'APROBADO':
                $resolucionFinal = 1;
                break;
            case 'RECHAZADO':
                $resolucionFinal = 3;
                if( $resolucionFinal == 3) {
                    $row = new mosPreautorizacion( $database );
                    $row->id               = (int) $row->id;
                    $row->sexo = $data['sexo'];
                    $row->nombre = mosHTML::cambiarCaracterInvalido_sms($data['nombre']);
                    $row->apellidos = mosHTML::cambiarCaracterInvalido_sms($data['apellidos']);
                    $row->fecha_nacimiento = str_replace("/", "",$data['fecha_nac']);
                    $row->identificacion = $identificacion;
                    $row->tipodocumento = $tipo_documento;
                    $row->dia_alta = date('d');
                    $row->mes_alta = date('m');
                    $row->ano_alta = date('Y');
                    $row->agente_vendedor = $my->username;
                    $row->establecimiento = $my->name;
                    $row->entrada = 1;
                    $row->estado         = "RECHAZADO" ;
                    $row->estado_origen  = "RECHAZADO" ;
                    $row->telefono  = $teletec->telefono;
                    $row->tracking   = 70;
                    $row->nombreTarjeta = $nombreTarjeta;
                    $row->nombreTarjeta = eliminar_tildes($row->nombreTarjeta);
                    $row->modelo = $modelo;
                    $row->agrupamiento = $agrupamiento;
                    $row->establecimiento_apertura = $teletec->establecimiento_apertura;
                    $row->tipo_producto = $teletec->tipo_producto;
                    $row->autentika = $teletec->autentika;
                    if (!$row->store()) {
                      $error = 1 ;
                    }
                    /*INGRESO COMENTARIO CON RESOLUCION DE ID CHECK*/
                    saveComentarioInicial($row->id,$comentario_resolucion_idcheck,'ID');
                    ///if(!empty($teletec->codigos_internos))saveComentarioInicial($row->id , 'MOTIVO RESOLUCION: '.$teletec->codigos_internos, 'ID');
                    $edad =  calculaedad($data['fecha_nac']);
                    $comentario_resolucion_teletec = 'RESOLUCION EXPERTO: '.$resolucionText . " :::::: EDAD: $edad :::::: URL: 
                    [a href=*$url_estudio* target=*_blank*]".$url_desc."[=a]";
                    saveComentarioInicial($row->id,$comentario_resolucion_teletec,'ID');
                    $intentos_validador = idValidator::getIntentos($identificacion);
                    if($intentos_validador >= 1)
                    {
                        $calificaciones_validador = idValidator::getCalificaciones($identificacion);
                        saveComentarioInicial($row->id,"CUESTIONARIOS REALIZADOS:: $intentos_validador CALIFICACIONES OBTENIDAS $calificaciones_validador",'ID');
                    }
                    if(!empty($teletec->codigos_internos))saveComentarioInicial($row->id,'MOTIVO RESOLUCION: '.$teletec->codigos_internos,'ID');
                    if($teletec->resolucion == '3' && $resolucionIDCheck->codigoRes == '3')
                        $origen_rechazo = 'EXPERTO - ID CHECK';
                    elseif($teletec->resolucion == '3')
                        $origen_rechazo = 'EXPERTO';
                    elseif($resolucionIDCheck->codigoRes == '3')
                        $origen_rechazo = 'ID CHECK';
                    elseif($denegarByTransunion) {
                        $origen_rechazo = 'TRANSUNION';
                    } else {
                        $origen_rechazo = 'UNKNOWN_TYPE';
                    }
                    saveComentarioInicial($row->id,"SOLICITUD RECHAZADA POR ".$origen_rechazo,'ID');

                    /* Registrar el idPreautorizacion en Telec*/
                    $database->setQuery("update tb_preautorizacion_teletec set id_preautorizacion='$row->id' where id = '$teletec->id';");
                    $database->query();

                } 
                break;
        }
    }
    
    HTML_credito::gosecond($option, $resolucionFinal,$row,$lists,$idTeletec, $params_buro);
}

function openPdfExperto() {
	$pdfFileName = mosGetParam($_GET,'file');
	getPdfExpertoFromUrl($pdfFileName);
}

function imagenorden($option) {
	$resultado = mosGetParam($_GET,"id");
HTML_credito::imagenorden($option,$resultado);	
	
}
function agregarorden($option){
	?>
	<script languaje="javascript"> 
function funcion_javascript(){ 
var padre=window.self; 
padre.opener = window.self; 
padre.close(); 
} 
</script>
	
	<?php
GLOBAL $database, $config_absolute_path;	
$id = mosGetParam($_POST,"id");
require_once($config_absolute_path."includes/upload/classFileUploader.php");
$tipo_archivo=$_FILES["orden"]["type"];
$extensions = array("image/jpeg","image/jpg","image/gif","image/bmp","image/png");
$database->setQuery("select * from tb_preautorizacion where id ='$id';");
$database->loadObject($ite);
$ruta =$config_absolute_path;
if($ite->rutaorden != ''){
$ruta.=$ite->rutaorden;
unlink($ruta);	
}
	if(is_uploaded_file($_FILES['orden']['tmp_name'])){
		require_once($config_absolute_path."includes/upload/classFileUploader.php");
		$tipo_archivo=$_FILES["orden"]["type"];
		$tipo_archivo = explode("/", $tipo_archivo);
		$extensions = array("application/pdf","image/jpeg","image/jpg","image/gif","image/bmp","image/png");	
		$ruta =$config_absolute_path."images/orden/";
		$upload = new fileUploader($ruta,"2408000",$extensions,$_FILES["orden"]);
		$ruta1 = "images/orden/".$_FILES["orden"]["name"];
		$query="update tb_preautorizacion set rutaorden='$ruta1' where id='$id'";
		$database->setQuery($query);
		$database->query();
	}

?> 
<script languaje="javascript"> 
funcion_javascript(); 
</script> 
<?php

}

	function buscarReintegro($option){
		//$criteria[] = mosHTML::makeOption( 0, 'Nombre');
	$criteria[] = mosHTML::makeOption( 1, 'Cuenta');

		
	$lists['criteria'] = mosHTML::selectList( $criteria, 'filter_criteria', 'class="inputbox" size="1"', 'value', 'text', 1 );
	
	HTML_credito::buscarReintegro( $option, $lists);
	}

//------------------------------------------------------------------------------------------------//
// Melvin Fallas

function showSolicitudCreditoPersonas($option) {
	$id = mosGetParam($_POST,"id");
	HTML_credito::showSolicitudCredito( $option,$id);
}

function showReporteMensajeria($option) {	
	global $database;
	// Obtener por post los establecimientos seleccionados si los hay
	$establecimientos = (isset($_POST['establecimientos']) ? $_POST['establecimientos'] : '');	
	$vistas = (isset($_POST['vistas']) ? $_POST['vistas'] : '');
	
	$vistas = explode(',', $vistas);
	/*
	foreach ($vistas as $value) {
		echo $value . '<br/>';	}
	*/
			
	if($establecimientos == '') {
		// Realizar Consulta		
		$query = "SELECT DISTINCT agente_vendedor AS local, REPLACE(REPLACE(name, \"'\", '*'), '\"', '+') AS nombre, COUNT(*) AS total FROM tb_preautorizacion, tb_users
			WHERE tracking IN ('20', '100', '10') 
			AND CONCAT(ano_alta, mes_alta, dia_alta) >= '20130101'
			AND (gid = 'ventas_operador' OR gid = 'ventas_especial' OR gid = 'supervidor' OR gid = 'ventas_auxiliar' 
				OR gid = 'ventas_epa' OR gid = 'ventas_supervisor')
			AND agente_vendedor = username
			AND ccno <> '' 			
			AND name <> 'CREDIX'			
			AND estado_mensajeria = 'pendiente'			
			GROUP BY name ORDER BY name";
		
		$database->setQuery($query);
		$rows = $database->loadObjectList();
		$rows = &$rows;
		for($i=0;$i<count($rows);$i++) {
			$result = &$rows[$i];
			$establecimientos[] = utf8_encode($result->nombre);
		}
		// Consulta
		//$query = "SELECT establecimiento AS local, COUNT(*) AS total FROM tb_preautorizacion WHERE estado_mensajeria = 'pendiente' GROUP BY establecimiento;";
	}
	else {
		if(!is_array($establecimientos)) {
			$establecimientos = (array) unserialize(($establecimientos));
		}
		$establecimientos[0] = str_replace(array('*', '+'), array("'", '"'), $establecimientos[0]);
		$where = (strpos($establecimientos[0], '"') === false ? " name = \"" . $establecimientos[0] . "\"" : " name = '" . $establecimientos[0] . "'");
		$query = "SELECT DISTINCT agente_vendedor AS local, REPLACE(REPLACE(name, \"'\", '*'), '\"', '+') AS nombre, COUNT(*) AS total FROM tb_preautorizacion, tb_users
			WHERE tracking IN ('20', '100', '10') 
			AND CONCAT(ano_alta, mes_alta, dia_alta) >= '20130101'
			AND (gid = 'ventas_operador' OR gid = 'ventas_especial' OR gid = 'supervidor' OR gid = 'ventas_auxiliar' 
				OR gid = 'ventas_epa' OR gid = 'ventas_supervisor')
			AND agente_vendedor = username
			AND ccno <> '' 			
			AND name <> 'CREDIX'			
			AND estado_mensajeria = 'pendiente'
			AND agente_vendedor IN (
				SELECT DISTINCT username 
				FROM tb_users 
				WHERE $where";
			for($i = 1, $total = count($establecimientos); $i < $total; $i++ ) {
				$establecimientos[$i] = str_replace(array('*', '+'), array("'", '"'), $establecimientos[$i]);
				$query .= (strpos($establecimientos[$i], '"') === false ? " OR name = \"" . $establecimientos[$i] . "\"" : " OR name = '" . $establecimientos[$i] . "'");
				$establecimientos[$i] = str_replace(array("'", '"'), array('*', '+'), $establecimientos[$i]);
			}
		$query .= ") GROUP BY name ORDER BY name;";
	}
	//echo $query;
	// Realizar Consulta
	$database->setQuery($query);
	$rows = $database->loadObjectList();
	$rows = &$rows;
	HTML_credito::showReporteMensajeria($option, $rows, $establecimientos, $vistas);
}

function showMensajeriaProcesada($option) {	
	global $database;
	
	// Obtener por post los establecimientos seleccionados si los hay
	$establecimientos = (isset($_POST['establecimientos']) ? $_POST['establecimientos'] : '');	
	$vistas = (isset($_POST['listado']) ? $_POST['listado'] : '');
	$vistas = explode(',', $vistas);
	/*
	foreach ($vistas as $value) {
		echo $value . '<br/>';	}
	*/
		
	if($establecimientos == '') {
		// Realizar Consulta
		/*
		$query = "SELECT DISTINCT agente_vendedor AS local, REPLACE(REPLACE(name, \"'\", '*'), '\"', '+') AS nombre, COUNT(*) AS total FROM tb_preautorizacion, tb_users
			WHERE tracking IN ('20', '100', '10') 
			AND CONCAT(ano_alta, mes_alta, dia_alta) >= '20130101'
			AND estado_mensajeria = 'procesada'
			AND gid = 'ventas_operador'
			AND agente_vendedor = username
			AND ccno <> '' 			
			AND name <> 'CREDIX' 
			AND name NOT LIKE '%EPA%'
			GROUP BY name ORDER BY name";
		*/
		$query = "SELECT DISTINCT agente_vendedor AS local, REPLACE(REPLACE(name, \"'\", '*'), '\"', '+') AS nombre, COUNT(*) AS total FROM tb_preautorizacion, tb_users
			WHERE estado_mensajeria = 'procesada'
			AND agente_vendedor = username
			GROUP BY name ORDER BY name";
		$database->setQuery($query);
		$rows = $database->loadObjectList();
		$rows = &$rows;
		for($i=0;$i<count($rows);$i++) {
			$result = &$rows[$i];
			$establecimientos[] = utf8_encode($result->nombre);
		}
	}
	else {
		if(!is_array($establecimientos)) {
			$establecimientos = (array) unserialize(($establecimientos));
		}
		$establecimientos[0] = str_replace(array('*', '+'), array("'", '"'), $establecimientos[0]);
		$where = (strpos($establecimientos[0], '"') === false ? " name = \"" . $establecimientos[0] . "\"" : " name = '" . $establecimientos[0] . "'");		
		$query = "SELECT DISTINCT agente_vendedor AS local, REPLACE(REPLACE(name, \"'\", '*'), '\"', '+') AS nombre, COUNT(*) AS total FROM tb_preautorizacion, tb_users
			WHERE estado_mensajeria = 'procesada'
			AND agente_vendedor = username
			AND agente_vendedor IN (
				SELECT DISTINCT username 
				FROM tb_users 
				WHERE $where";
			for($i = 1, $total = count($establecimientos); $i < $total; $i++ ) {
				$establecimientos[$i] = str_replace(array('*', '+'), array("'", '"'), $establecimientos[$i]);
				$query .= (strpos($establecimientos[$i], '"') === false ? " OR name = \"" . $establecimientos[$i] . "\"" : " OR name = '" . $establecimientos[$i] . "'");
				$establecimientos[$i] = str_replace(array("'", '"'), array('*', '+'), $establecimientos[$i]);
			}
		$query .= ") GROUP BY name ORDER BY name;";
		
	}
	// Realizar Consulta
	$database->setQuery($query);
	$rows = $database->loadObjectList();
	$rows = &$rows;
	HTML_credito::showMensajeriaProcesada($option, $rows, $establecimientos, $vistas);
}

function showBusquedaMensajeria($option) {
	global $database, $mainframe, $my, $acl, $config_list_limit;
	$search         	= $mainframe->getUserStateFromRequest( "filter{$option}search", 'search', '' ) ;
	$criterio       	= $mainframe->getUserStateFromRequest( "filter{$option}criteria", 'filter_criteria', '' ) ;
	$desde		 = mosGetParam($_POST, 'desde');
    $hasta   	 = mosGetParam($_POST, 'hasta');
    //$listado		 = mosGetParam($_POST, 'listado');
    $listado = (isset($_POST['listado']) ? $_POST['listado'] : '');
    if($listado != '') {
    	//$listado = array(930518, 925310);
		$listado = (array) unserialize(($listado));
    	$query = "SELECT * FROM tb_preautorizacion WHERE 0";
		foreach ($listado as $id) {
			$query .= " OR id = '$id'";
		}
		";";    	
    }
	else {    
		if($search != '') {
			if($criterio == 'tarjeta') {			
				$query = "SELECT * FROM tb_preautorizacion WHERE ccno = '$search' and estado_mensajeria = 'procesada';";
			}
			else {
				if($criterio == 'cuenta') {
					$query = "SELECT * FROM tb_preautorizacion AS p 
								WHERE ccno IN (
									SELECT numtar_19 FROM tb_tarjeta_maestro AS m WHERE m.numusu = '$search'
								) 
								AND p.estado_mensajeria = 'procesada';";
				}	
			}
		}
		else {
			if($desde != '' && $hasta != '') {
				$desde = str_replace("-","", $desde);
				$hasta = str_replace("-","", $hasta);
				$query = "SELECT * FROM tb_preautorizacion AS p WHERE estado_mensajeria = 'procesada' and CONCAT(p.ano_alta,p.mes_alta,p.dia_alta) >= '$desde' and CONCAT(p.ano_alta,p.mes_alta,p.dia_alta) <= '$hasta' ";
			}
			else {
				$query = '';
			}
		}
	}
	
	// Realizar Consulta
	$database->setQuery($query);
	$rows = $database->loadObjectList();
	$rows = &$rows;
	
	$listado = array();
	foreach($rows as $row) {
		$listado[] = $row->id;
	}
	
	HTML_credito::showPreautorizacionesBusqueda($option, $rows, $listado);
}



function showMensajeriaPreautorizacion($option) {
	
	global $database;
	$preautorizacion = $_POST['id'];
	$establecimientos = (isset($_POST['establecimientos']) ? $_POST['establecimientos'] : '');
	$establecimientos = unserialize(($establecimientos));
	$vistas = (isset($_POST['vistas']) ? $_POST['vistas'] : '');
	$vistas = explode(',', $vistas);
	
	$query = "SELECT * FROM tb_preautorizacion_comentarios_mensajeria where id_preautorizacion = $preautorizacion ORDER BY id DESC";
	$database->setQuery($query);
	$comentarios = $database->loadObjectList();
	
	$query = "SELECT * FROM tb_preautorizacion where id = $preautorizacion";
	$database->setQuery($query);
	$datos = $database->loadObjectList();
	$datos = &$datos[0];
	
	$query = "SELECT * FROM tb_documentacion_mensajeria where id_preautorizacion = $preautorizacion";
	$database->setQuery($query);
	$doc = $database->loadObjectList();
	$doc = &$doc[0];
	
	$query = "SELECT name FROM tb_users AS u, tb_preautorizacion AS p WHERE p.id = '$preautorizacion' AND p.agente_vendedor = u.username;";
	$database->setQuery($query);
	$local = $database->loadObjectList();
	$local = $local[0]->name;
	
	// TIPO DOCUMENTO
	$estado_documentacion[] 		= mosHTML::makeOption( 'pendiente', 'PENDIENTE');
	$estado_documentacion[] 		= mosHTML::makeOption( 'procesada', 'PROCESADA');
	$estado = mosHTML::selectList( $estado_documentacion, 'estado_documentacion', 'class="inputbox" id="estado_documentacion" size="1"', 'value', 'text', $datos->estado_mensajeria  );
	
	HTML_credito::showMensajeriaPreautorizacion($option, $preautorizacion, $doc, $datos, $estado, $comentarios, $establecimientos, $vistas, $local);
}

function showPreautorizacionProcesada($option) {	
	global $database;
	$preautorizacion = $_POST['id'];
	
	$listado = (isset($_POST['vistas']) ? $_POST['vistas'] : '');	
	$modalidad = (isset($_POST['modalidad']) ? $_POST['modalidad'] : '');
	
	$query = "SELECT * FROM tb_preautorizacion_comentarios_mensajeria where id_preautorizacion = $preautorizacion ORDER BY id DESC";
	$database->setQuery($query);
	$comentarios = $database->loadObjectList();
	
	$query = "SELECT * FROM tb_preautorizacion where id = $preautorizacion";
	$database->setQuery($query);
	$datos = $database->loadObjectList();
	$datos = &$datos[0];
	
	$query = "SELECT * FROM tb_documentacion_mensajeria where id_preautorizacion = $preautorizacion";
	$database->setQuery($query);
	$doc = $database->loadObjectList();
	$doc = &$doc[0];
	
	$query = "SELECT name FROM tb_users AS u, tb_preautorizacion AS p WHERE p.id = '$preautorizacion' AND p.agente_vendedor = u.username;";
	$database->setQuery($query);
	$local = $database->loadObjectList();
	$local = $local[0]->name;
	
	// TIPO DOCUMENTO
	$estado_documentacion[] 		= mosHTML::makeOption( 'pendiente', 'PENDIENTE');
	$estado_documentacion[] 		= mosHTML::makeOption( 'procesada', 'PROCESADA');
	$estado = mosHTML::selectList( $estado_documentacion, 'estado_documentacion', 'class="inputbox" id="estado_documentacion" size="1"', 'value', 'text', $datos->estado_mensajeria  );
	
	HTML_credito::showPreautorizacionProcesada($option, $preautorizacion, $doc, $datos, $estado, $comentarios, $listado, $local, $modalidad);
}


function guardarEstadoMensajeria($option) {
	
    global $database , $my ;
	$id = mosGetParam($_POST, 'id');
    $estado = mosGetParam($_POST, 'estado_documentacion');
	$agente = mosGetParam($_POST, 'agente');
	$numusu = (int) mosGetParam($_POST, 'numusu');
	$fecha = date('dmY h:i:s');
	
	// Obtener por post los establecimientos seleccionados si los hay
	$establecimientos = (isset($_POST['establecimientos']) ? $_POST['establecimientos'] : '');
	if(!is_array($establecimientos)) {
		$establecimientos = (array) unserialize(($establecimientos));
	}
	$vistas = (isset($_POST['vistas']) ? $_POST['vistas'] : '');
	$vistas = explode(',', $vistas);
	
	$query = "UPDATE tb_preautorizacion SET estado_mensajeria = '$estado' WHERE id = '$id';";
    $database->setQuery($query);
	$database->query();
	
	$accion = "El estado de la documentación fue registrado como $estado";
	$accion = utf8_decode($accion);
		
	$query = "INSERT INTO tb_preautorizacion_comentarios_mensajeria (numusu, id_preautorizacion, comentario, fecha_creado, creador)
	VALUES ($numusu, $id, '$accion', '$fecha', '$agente');";
	$database->setQuery($query);
	$database->query();
	
	// Finalización del Proceso
	if($estado == 'procesada') {
		$accion = "---------------------------------- Proceso Finalizado ----------------------------------";
		$accion = utf8_decode($accion);
		$query = "INSERT INTO tb_preautorizacion_comentarios_mensajeria (numusu, id_preautorizacion, comentario, fecha_creado, creador)
		VALUES ($numusu, $id, '$accion', '$fecha', '$agente');";
		$database->setQuery($query);
		$database->query();
	}
	
	//showReporteMensajeria($option);
	//echo 'dfddddf';
	HTML_credito::guardarEstadoMensajeria($option, $establecimientos, $vistas);
	//showMensajeriaPreautorizacion($option);
    //mosRedirect( "index.php?option=credito&task=show_mensajeriaPreautorizacion&id=$id", "Se actualiz&oacute; el estado de la documentaci&oacute;n a $estado" );
}

function buscarMensajeriaPendiente($option) {
    global $database , $my;
	//$query = "SELECT DISTINCT agente_vendedor AS local FROM tb_preautorizacion WHERE estado_mensajeria = 'pendiente' AND ccno <> '' ORDER BY local";
	$query = "SELECT DISTINCT name AS local FROM tb_preautorizacion, tb_users
			WHERE tracking IN ('20', '100', '10')  
			AND CONCAT(ano_alta, mes_alta, dia_alta) >= '20130101'
			AND estado_mensajeria = 'pendiente'
			AND (gid = 'ventas_operador' OR gid = 'ventas_especial' OR gid = 'supervidor' OR gid = 'ventas_auxiliar' 
				OR gid = 'ventas_epa' OR gid = 'ventas_supervisor')
			AND agente_vendedor = username
			AND ccno <> '' 			
			AND name <> 'CREDIX'			
			GROUP BY name ORDER BY name;";
	$database->setQuery($query);
	$rows = $database->loadObjectList();
	$rows = &$rows;
	
	HTML_credito::buscarMensajeriaPendiente($option, $rows);
}

function buscarMensajeriaProcesada($option) {
    global $database , $my;
	/*
	$query = "SELECT DISTINCT name AS local FROM tb_preautorizacion, tb_users
			WHERE tracking IN ('20', '100', '10')  
			AND CONCAT(ano_alta, mes_alta, dia_alta) >= '20130101'
			AND estado_mensajeria = 'procesada'
			AND gid = 'ventas_operador'
			AND agente_vendedor = username			
			AND ccno <> '' 			
			AND name <> 'CREDIX' 
			AND name NOT LIKE '%EPA%'			
			GROUP BY name ORDER BY name;";
	*/
	$query = "SELECT DISTINCT name AS local FROM tb_preautorizacion, tb_users
			WHERE estado_mensajeria = 'procesada'
			AND agente_vendedor = username			
			GROUP BY name ORDER BY name;";
	$database->setQuery($query);
	$rows = $database->loadObjectList();
	$rows = &$rows;
	
	HTML_credito::buscarMensajeriaProcesada($option, $rows);
}

function searchMensajeriaProcesada( $option ) {
	$modalidad = mosGetParam($_POST, 'modalidad');
	$criteria[] = mosHTML::makeOption( 'cuenta', 'Cuenta');
	$criteria[] = mosHTML::makeOption( 'tarjeta', 'Tarjeta');
	$lists['criteria'] = mosHTML::selectList( $criteria, 'filter_criteria', 'class="inputbox" size="1"  id="id_filter_criteria"', 'value', 'text', 5 );
	HTML_credito::showBusquedaMensajeria( $option, $lists, $modalidad );
}

//------------------------------------------------------------------------------------------------//
//Karol Leal

function gotracking($option){
	    global $database, $my;
	    $mensaje= "";
		$tarjeta = mosGetParam($_POST,"entregada");
		$nombre = mosGetParam($_POST,"nombree");
		$tarjeta = ereg_replace("[-]", "", $tarjeta);
		$comentario = mosGetParam($_POST,"comentario");
		$establecimiento = mosGetParam($_POST,"establecimiento");
		$fecha= date("Ymd");
		$database->setQuery("select * from tb_preautorizacion where numusu in (select numusu from tb_tarjeta_posicion where numtar='$tarjeta');");
		$database->loadObject($item);			
		if($item->tracking != "60"){
			$query = "update tb_preautorizacion set tracking = 60 where numusu = '$item->numusu';";
			$database->setQuery($query);
			$database->query();
			saveComentarioPreautorizacionById($item->id , "SE HA CAMBIADO A ESTADO DE TRACKING ENTREGADO AL CLIENTE" , $my->username);
		}

		if($comentario!=""){
			saveComentarioPreautorizacionById($item->id , $comentario , $my->username);	
		}
		
		//BUSCAR SI ESTA EN RENOVACION Y CAMBIARLO A ENTREGADA AL CLIENTE
		$query="SELECT * FROM  `tb_impresion_tarjeta` where numtar ='$tarjeta' and tipo_novedad = 'RENOVACION' limit 1";
		$database->setQuery($query);
		$database->loadObject($renovacion);

		if(!empty($renovacion)){
			echo fnt_save_Tracking2($renovacion->id, $my->username,'5', '0');

		}	



		//ADD REPORTE TARJETAS ENTREGADAS
		
		
		$database->setQuery("select * from tb_reporte_entrega_tarjetas where numtar='$tarjeta';");
		$database->loadObject($reporte);
		
		if(empty($reporte)){
			$database->setQuery("INSERT INTO tb_reporte_entrega_tarjetas(fecha, nombreComentario, numtar, username,establecimiento,comentario) VALUES ('$fecha', '$nombre', '$tarjeta','$my->username','$establecimiento','$comentario');");
			$database->query();		
			$database->setQuery("update tb_tarjeta_inventario set entregado='1',username='$my->username',fecha_entregado='$fecha' where tarjeta ='$tarjeta'");
			$database->query();	
			
		}else{
			$mensaje = "Tarjeta ya habia sido entregada.";
			mosRedirect( 'index.php?option=credito&task=entrega_tarjeta', $mensaje );
		}

	
		HTML_credito::boletaTarjeta($tarjeta);		
			
	}
	

	function entrega_tarjeta($option){

	HTML_credito::searchEntrega_tarjeta($option);
		
	}

	function fnt_save_Tracking2($id, $usr, $tck, $oth)
	{
		global $database, $TABLA_RENOVACION, $TABLA_LOG;
		
		try
		{
				
				$query = "SELECT tipo FROM `tb_catalogos` WHERE id = $tck";
				$database->setQuery($query);
		    	$esTracking = $database->loadObjectList();
				$esTracking = $esTracking[0];
				
				if($esTracking->tipo != "tracking_renovacion")
				{
					return "El valor seleccionado no es un tracking correcto";
				}
				
				$query = "UPDATE $TABLA_LOG SET `ultimo_estado`=0 WHERE id_renovacion = $id";
				$database->setQuery($query);
				$database->query();
				switch($tck)
				{
					case 5: 
							$stand = getStand($oth);
							$pos = strpos($stand, 'Stand');
							if($pos === false)
							{
								$query = "INSERT INTO $TABLA_LOG (`id_catalogo`, `fecha`, `hora`, `username`, `id_renovacion`, `ultimo_estado`) 
							          VALUES (5, '".date('Y-m-d')."', '".date('H:i:s')."', '$usr', $id, 1)";
								$database->setQuery($query);
								$database->query();
							}
							else
							{
								$query = "INSERT INTO $TABLA_LOG (`id_catalogo`, `fecha`, `hora`, `username`, `id_renovacion`, `ultimo_estado`) 
						          VALUES (5, '".date('Y-m-d')."', '".date('H:i:s')."', '$usr', $id, 1)";
								$database->setQuery($query);
								$database->query();
							}
							$query = "UPDATE $TABLA_RENOVACION SET `stand_courier`=$oth, `fk_estado_renovacion`= 10 WHERE `id` = $id";
							$database->setQuery($query);
							$database->query();
							break;

				}
			
			return 'OK';
		}
		catch(Exception $ex)
		{
			return $ex->getMessage();
		}
	}
	function getStand($standcode)
	{
		global $database;
		
		$query = "SELECT tipo, `Descripcion` FROM `tb_catalogos` WHERE `id` = $standcode";
		$database->setQuery($query);
    	$stand = $database->loadObjectList();
		$stand = $stand[0];
		
		if($stand->tipo == "tracking_renovacion_stand")
		{
			return $stand->Descripcion;
		}
		else
		{
			return $standcode;
		}
	}
//------------------------------------------------------------------------------------------------//

function anularReintegro( $option, $id='' ) 
	{
	global $database, $my;
	if ($id == '')
		{
		mosRedirect( 'index.php?option=credito&task=show_reintegros', 'Parametros erroneos');		
		return;
		}
    $usuarioElimina       = $my->username;


	$query = "UPDATE tb_reintegro SET eliminado = '" . $usuarioElimina . "', activo = 0 WHERE id=" . $id;
	
	$database->setQuery($query);
	$result = $database->query();
	
	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}

	mosRedirect( 'index.php?option=credito&task=show_reintegros', 'Bonificaci&oacute;n Anulada Exit&oacute;samente');		
	}
	

	function show_solicitudes_credixcel($option){
		global $database, $mainframe, $my, $config_list_limit;

	$limit 				= intval( $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $config_list_limit ) );
	$limitstart      	= intval( $mainframe->getUserStateFromRequest( "view{$option}limitstart", 'limitstart', 0 ) );

	// get the total number of records
	$query = "SELECT COUNT(*) FROM tb_credixcel_solicitudes";
	
	$database->setQuery( $query );
	$total = $database->loadResult();

	require_once( $GLOBALS['config_absolute_path'] . '/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit  );
	
	$query = "select * from tb_credixcel_solicitudes order by id desc";

	$database->setQuery( $query, $pageNav->limitstart, $pageNav->limit );
	$rows = $database->loadObjectList();

	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}

	HTML_credito::show_solicitudes_credixcel( $option, $rows, $pageNav );
		
	}

	function solicitudCredixcelCredito($option){ini_set('display_error',1);
		global $database ;
		$id = mosGetParam($_POST, 'id');
		$telefono = mosGetParam($_POST, 'telefonoCredixcel');
		//SI TELEFONO YA ESTA ASOCIADO A CREDIXCEL NO SE PROCESA SOLICITUD//
		$hasPhoneCredixcel = mosCredixcel::hasPhoneCredixcel($telefono);
		if($hasPhoneCredixcel)
			mosRedirect("index.php?option=credito&task=show_editPreautorizacion&id=$id","TELEFONO YA SE ENCUENTRA ASOCIADO A UNA CUENTA CREDIXCEL");
		//OBTENGO TARJETA DE PREAUTORIZACION//
		$query = "select ccno,identificacion,nombre,apellidos,nacionalidad,email from tb_preautorizacion where id = '$id';";
		$database->setQuery( $query );
		$database->loadObject($pr);
		if ($database->getErrorNum()) 
		{
			echo "<script>alert('Ocurrio un error'); document.location.href='index.php'</script>\n";
			exit();
		}
		$hasCredixcelByCedula = mosCredixcel::hasCredixcel($pr->identificacion);
		if($hasCredixcelByCedula)
			mosRedirect("index.php?option=credito&task=show_editPreautorizacion&id=$id","CEDULA YA SE ENCUENTRA ASOCIADA A UNA CUENTA CREDIXCEL");
		$numusu = getNumusuFromCcno($pr->ccno);
		$telefonoCredixcel = mosCredixcel::hasSolicitudCredixcel($numusu);
		
			$tarjetaCredixcel = mosCredixcel::getTarjetaCredixcelNoAsignada($numusu);
			//SI YA TIENE TARJETA ADICIONAL CREDIXCEL CREADA SOLO HAGO LA INSCRIPCION//
			if($tarjetaCredixcel){
				$credenciales = getCredencialesTarjeta($tarjetaCredixcel);
				$expireDate = $credenciales->fhasta;
				$expireDate = explode('/', $expireDate);
				$expireDate = $expireDate[0].$expireDate[1];
				$cvv = $credenciales->cvv2;
				$country = getPais($pr->nacionalidad);
				$apellidos = explode(' ', $pr->apellidos);
				mosLog::saveAction($id.'****'.$numusu.'****'.$tarjetaCredixcel.'****'.$expireDate.'****'.$cvv.'****'.$pr->identificacion.'****'.$pr->nombre.'****'.$apellidos[0].'****'.$apellidos[1].'****'.$country.'****'.$telefono.'****'.$pr->email);
				$res = mosWSMobtion::insertCuentaCredixcel($id,$numusu,$tarjetaCredixcel,$expireDate,$cvv,$pr->identificacion,$pr->nombre,$apellidos[0],$apellidos[1],$country,$telefono,$pr->email);
				if($res != 'OK')
					mosRedirect("index.php?option=credito&task=show_editPreautorizacion&id=$id","NO FUE POSIBLE AFILIAR CREDIXCEL ($res)");
				ob_start();
				HTML_credito::email_activacion_credixcel_credito($pr);
				$email = ob_get_contents();
				ob_clean();
				mosEmail::sendEmail('Solicitud de Activacion Credixcel Credito',array('from'=>'sac@credix.com','fromname'=>'Credix Wolrd S.A'),array(array('to'=>'sistemas@credix.com'),array('to'=>'8000@credix.com')),$email);
				ob_start();
				HTML_credito::email_confirmacion_activacion_credixcel_cliente($pr);
				$email_c = ob_get_contents();
				ob_clean();
				$email_cliente = getEmail($numusu);
				mosEmail::sendEmail('Credixcel esta activado',array('from'=>'noreply@credix.com','fromname'=>'Credix Wolrd S.A'),array(array('to'=>$email_cliente)),$email_c);
                $arraySms[] = (object)array("number"=>$telefono,"text"=>'CREDIX LE INFORMA QUE SU CREDIXCEL ESTA ACTIVADO, YA PUEDE UTILIZARLO');
				mosSMS::sendSMSInit($arraySms,1,2);
				mosRedirect("index.php?option=credito&task=show_editPreautorizacion&id=$id","SOLICITUD PROCESADA EXITOSAMENTE, EL PRODUCTO CREDIXEL EST&Aacute; LIST&Oacute;");
			}else{
				if(!$telefonoCredixcel){
				$row = new mosCredixcelSolicitudes( $database );
				$row->id = (int) $row->id;
				$row->id_preautorizacion = $id;
				$row->numusu = $numusu;
				$row->numtar = $pr->ccno;
				$row->telefono = $telefono;
				$row->identificacion = mosHTML::onlyNumbers($pr->identificacion);
				$row->fecha = date("Ymd H:i:s");
				if (!$row->store()) {
					echo "<script> alert('Error #3: ".$row->getError()."'); window.history.go(-1); </script>\n";
					exit();
				}
				mosRedirect("index.php?option=credito&task=show_editPreautorizacion&id=$id","SOLICITUD PROCESADA EXITOSAMENTE, EL PRODUCTO CREDIXCEL ESTAR&Aacute; DISPONIBLE EN 48 HORAS");
			}else{
				mosRedirect("index.php?option=credito&task=show_editPreautorizacion&id=$id","CLIENTE YA TIENE SOLICITUD CREDIXCEL");
			}
		}
	}

	function show_cuenta_seguimiento_legal($option)
	{
		global $database ,$my;
		$numusu = mosGetParam($_POST,'numusu');
		$data = array();
		//OBTENGO LOS DATOS DE LA PREAUTORIZACION//
		$query = "select numtar_19 from tb_tarjeta_maestro where numusu = '$numusu';";
		$database->setQuery( $query );
		$cards = $database->loadObjectList();
		$tarj = '';
		foreach($cards as $card)
		{
			$tarj .= $card->numtar_19.",";
		}
		$tarj = rtrim($tarj,',');
		$query = "select * from tb_preautorizacion where ccno in ($tarj);";
		$database->setQuery( $query );
		$database->loadObject( $preauto );
		if(!empty($preauto))
		{
			$data['numusu'] 			= $numusu;
			$data['id_preautorizacion'] = $preauto->id;
			$data['nombre'] 			= $preauto->nombre." ".$preauto->apellidos;
			$data['identificacion'] 	= $preauto->identificacion;
			$data['calificacion']		= $preauto->calificacion;
			$data['modelo']				= $preauto->modelo;
			$data['cod_pais'] 			= $preauto->nacionalidad;
			$data['telefonos'] 			= $preauto->telefono;
			$data['email'] 				= $preauto->email;
			$data['limcompra']			= $preauto->limite_aprobado."00";
			$data['provincia_canton']	= $preauto->provincia." ".$preauto->canton;
			$data['distrito']			= $preauto->distrito;
			$data['direccion']			= $preauto->direccion;
			$data['aff_group']			= $preauto->aff_group;
		}
		//SI NO ENCUENTRO PREAUTORIZACION OBTENGO LOS DATOS DE LA CUENTA//
		else
		{
			$query = "select * from tb_cuenta where numusu = '$numusu';";
			$database->setQuery( $query );
			$database->loadObject( $cuenta );
			$data['numusu'] 			= $numusu;
			$data['id_preautorizacion'] = 0;
			$data['nombre'] 			= $cuenta->denocta;
			$data['identificacion'] 	= $cuenta->cuit;
			$data['calificacion']		= $cuenta->calificacion;
			$data['modelo']				= $cuenta->modelo;
			$data['cod_pais'] 			= $cuenta->cod_pais;
			$data['telefonos'] 			= $cuenta->telefono;
			$data['email'] 				= $cuenta->email_usuario."@".$cuenta->email_dominio;
			$data['limcompra']			= $cuenta->limcomp;
			$data['provincia_canton']	= $cuenta->ciudad_localidad;
			$data['distrito']			= $cuenta->barrio_comuna;
			$data['direccion']			= $cuenta->domicilio1."".$cuenta->domicilio2.$cuenta->domicilio3 ;
			$data['aff_group']			= $cuenta->aff_group;
		}
		$data = (object)$data;
		
		$query = "select * from tb_seguimiento_legal where numusu = '$numusu'";
		$database->setQuery( $query );
		$database->loadObject( $seguimiento );
		
		//ESTADOS DE TRAMITE
		$estado_tramite[] 		= mosHTML::makeOption( _SL_AL_DIA_, _SL_AL_DIA_TXT_);
		$estado_tramite[] 		= mosHTML::makeOption( _SL_VENCIDA_, _SL_VENCIDA_TXT_);
		$estado_tramite[] 		= mosHTML::makeOption( _SL_COBRO_JUDICIAL_, _SL_COBRO_JUDICIAL_TXT_);
		$estado_tramite[] 		= mosHTML::makeOption( _SL_CONCLUIDO_, _SL_CONCLUIDO_TXT_);
		$lists['estado_tramite'] = mosHTML::selectList( $estado_tramite, 'estado_tramite', 'class="inputbox" size="1" id="estado_tramite"', 'value', 'text', $seguimiento->estado_tramite );

		//GESTORES DE COBRO
		$query = "select id,nombre from tb_gestores_cobro where activo = 1;";
		$database->setQuery($query);
		$gestores = $database->loadObjectList();
		$gestores = & $gestores;
		$gestor_cobro = array();
		$enable = '';
		if( in_array($_SESSION['session_gid'], ['cobros_gestor', 'cobros_televentas']) )
			$enable = 'disabled';
		for($i=0;$i<count($gestores);$i++)
		{
			$gestor = &$gestores[$i];
		$gestor_cobro[] 		= mosHTML::makeOption( $gestor->id, $gestor->nombre);
		}
		$lists['gestor_cobro'] = mosHTML::selectList( $gestor_cobro, 'gestor_cobro', 'class="inputbox" size="1" id="gestor_cobro" '.$enable, 'value', 'text', $seguimiento->gestor_cobro );
		
		//ESTADO PROCESAL
		$estado_procesal[] 		= mosHTML::makeOption( 'NO ASIGNADO', 'NO ASIGNADO');
		$estado_procesal[] 		= mosHTML::makeOption( 'ACTIVO', 'ACTIVO');
		$estado_procesal[] 		= mosHTML::makeOption( 'CANCELADO', 'CANCELADO');
		$estado_procesal[] 		= mosHTML::makeOption( 'ARREGLO EXTRAJUDICIAL', 'ARREGLO EXTRAJUDICIAL');
		$estado_procesal[] 		= mosHTML::makeOption( 'INCOBRABLE', 'INCOBRABLE');
		$lists['estado_procesal'] = mosHTML::selectList( $estado_procesal, 'estado_procesal', 'class="inputbox" size="1" id="estado_procesal"', 'value', 'text', $seguimiento->estado_procesal );
		
		//CLASE DE BIENES EMBARGADOS
		$clase_embargo[] 		= mosHTML::makeOption( 'NO ASIGNADO', 'NO ASIGNADO');
		$clase_embargo[] 		= mosHTML::makeOption( 'CUENTAS BANCARIAS', 'CUENTAS BANCARIAS');
		$clase_embargo[] 		= mosHTML::makeOption( 'BIENES INMUEBLES', 'BIENES INMUEBLES');
		$clase_embargo[] 		= mosHTML::makeOption( 'BIENES MUEBLES', 'BIENES MUEBLES');
		$lists['clase_embargo'] = mosHTML::selectList( $clase_embargo, 'clase_embargo', 'class="inputbox" size="1" id="clase_embargo"', 'value', 'text', $seguimiento->clase_embargo );
		
		//CLASE DE BIENES EMBARGADOS
		$estado_notificacion[] 		= mosHTML::makeOption( 'NO ASIGNADO', 'NO ASIGNADO');
		$estado_notificacion[] 		= mosHTML::makeOption( 'DILIGENCIADA', 'DILIGENCIADA');
		$estado_notificacion[] 		= mosHTML::makeOption( 'SIN DILIGENCIAR', 'SIN DILIGENCIAR');
		$estado_notificacion[] 		= mosHTML::makeOption( 'PERDIDO O AUSENTE', 'PERDIDO O AUSENTE');
		$lists['estado_notificacion'] = mosHTML::selectList( $estado_notificacion, 'estado_notificacion', 'class="inputbox" size="1" id="estado_notificacion"', 'value', 'text', $seguimiento->estado_notificacion );
		
		HTML_credito::show_cuenta_seguimiento_legal($option,$data,$lists,$seguimiento,$my->username);
	}
	
	function show_cuentas_seguimiento_legal($option)
	{
		global $database, $mainframe, $my, $config_list_limit;

	$limit 				= intval( $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $config_list_limit ) );
	$limitstart      	= intval( $mainframe->getUserStateFromRequest( "view{$option}limitstart", 'limitstart', 0 ) );
	$cuenta         	= mosGetParam($_POST,'search_cuenta');
	$gestor_c			= mosGetParam($_POST,'gestor_cobro');
	$antigued			= mosGetParam($_POST,'antiguedad');
	$estado_proc		= mosGetParam($_POST,'estado_procesal');
	$estado_tram	    = mosGetParam($_POST,'estado_tramite');
	$clase_emb  	    = mosGetParam($_POST,'clase_embargo');

	$where = search_cuentas_seguimiento($cuenta,$gestor_c,$antigued,$estado_proc,$estado_tram);
	
	// get the total number of records
	$query = "SELECT COUNT(*) FROM tb_seguimiento_legal sl where 1" .$where;
	
	$database->setQuery( $query );
	$total = $database->loadResult();

	require_once( $GLOBALS['config_absolute_path'] . '/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit  );
	
	$query = "	SELECT
					sl.*,c.denocta,c.cuit
				FROM tb_seguimiento_legal sl INNER JOIN tb_cuenta c 
				ON
				   sl.numusu = c.numusu 
				AND
				   (sl.estado_tramite = '"._SL_COBRO_JUDICIAL_."' OR sl.estado_tramite = '"._SL_CONCLUIDO_."')
					".$where."
				ORDER BY c.denocta ASC"
	;

	$database->setQuery( $query, $pageNav->limitstart, $pageNav->limit );
	$rows = $database->loadObjectList();

	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}
	$query = "select id,nombre from tb_gestores_cobro where activo = 1;";
	$database->setQuery($query);
	$gestores = $database->loadObjectList();
	$gestores = & $gestores;
	$gestor_cobro = array();
	$enable = '';
	if( in_array($_SESSION['session_gid'], ['cobros_gestor','cobros_televentas']))
	{
		$enable = 'disabled';
		$gestor_c = getGestorCobroByUsername($my->username);
		$gestor_c = $gestor_c->id;
	}
	$gestor_cobro[] 		= mosHTML::makeOption( 'todo', 'Todos');
	for($i=0;$i<count($gestores);$i++)
	{
		$gestor = &$gestores[$i];
	$gestor_cobro[] 		= mosHTML::makeOption( $gestor->id, $gestor->nombre);
	}
	$lists['gestor_cobro'] = mosHTML::selectList( $gestor_cobro, 'gestor_cobro', 'class="inputbox" size="1" id="gestor_cobro" '.$enable, 'value', 'text', $gestor_c );
	
	//ESTADO PROCESAL
	$estado_procesal[] 		= mosHTML::makeOption( 'todo', 'TODOS');
	$estado_procesal[] 		= mosHTML::makeOption( 'NO ASIGNADO', 'NO ASIGNADO');
	$estado_procesal[] 		= mosHTML::makeOption( 'ACTIVO', 'ACTIVO');
	$estado_procesal[] 		= mosHTML::makeOption( 'CANCELADO', 'CANCELADO');
	$estado_procesal[] 		= mosHTML::makeOption( 'ARREGLO EXTRAJUDICIAL', 'ARREGLO EXTRAJUDICIAL');
	$estado_procesal[] 		= mosHTML::makeOption( 'INCOBRABLE', 'INCOBRABLE');
	$lists['estado_procesal'] = mosHTML::selectList( $estado_procesal, 'estado_procesal', 'class="inputbox" size="1" id="estado_procesal"', 'value', 'text', $estado_proc );
	
	//ESTADO TRAMITE
	$estado_tramite[] 		= mosHTML::makeOption( 'todo', 'TODOS');
	$estado_tramite[] 		= mosHTML::makeOption( _SL_COBRO_JUDICIAL_, strtoupper(_SL_COBRO_JUDICIAL_TXT_));
	$estado_tramite[] 		= mosHTML::makeOption( _SL_CONCLUIDO_, strtoupper(_SL_CONCLUIDO_TXT_));
	$lists['estado_tramite'] = mosHTML::selectList( $estado_tramite, 'estado_tramite', 'class="inputbox" size="1" id="estado_tramite"', 'value', 'text', $estado_tram );
	
	//ANTIGUEDAD LABORAL
	$antiguedad[] 		= mosHTML::makeOption( 'todo', 'TODOS');
	$antiguedad[] 		= mosHTML::makeOption( '5', '5');
	$antiguedad[] 		= mosHTML::makeOption( '10', '10');
	$antiguedad[] 		= mosHTML::makeOption( '15', '15');
	$lists['antiguedad'] = mosHTML::selectList( $antiguedad, 'antiguedad', 'class="inputbox" size="1" id="antiguedad"', 'value', 'text', $antigued );
	
	//CLASE DE BIENES EMBARGADOS
	$clase_embargo[] 		= mosHTML::makeOption( 'todo', 'TODOS');
	$clase_embargo[] 		= mosHTML::makeOption( 'CUENTAS BANCARIAS', 'CUENTAS BANCARIAS');
	$clase_embargo[] 		= mosHTML::makeOption( 'BIENES INMUEBLES', 'BIENES INMUEBLES');
	$clase_embargo[] 		= mosHTML::makeOption( 'BIENES MUEBLES', 'BIENES MUEBLES');
	$lists['clase_embargo'] = mosHTML::selectList( $clase_embargo, 'clase_embargo', 'class="inputbox" size="1" id="clase_embargo"', 'value', 'text', $clase_emb );
	
	$lists['search_cuenta'] = "<input type='text' class='inputbox' name='search_cuenta' value='".$cuenta."'></input>";

	HTML_credito::show_cuentas_seguimiento_legal( $rows, $pageNav, $lists ,$option );
	}
	
	function search_cuentas_seguimiento($cuenta,$gestor,$antiguedad,$estado_procesal,$estado_tramite)
	{
		global $my;
		$where = '';
		if(!empty($cuenta) && $cuenta != '')
		{
			$where .= " and sl.numusu like '$cuenta' ";
		}
		if((!empty($gestor) && $gestor != 'todo') || (is_numeric($gestor) && $gestor == 0))
		{
			$where .= " and sl.gestor_cobro = '$gestor' ";
		}
		if($estado_procesal != '' && $estado_procesal != 'todo')
		{
			$where .= " and sl.estado_procesal = '$estado_procesal' ";
		}
		if($estado_tramite != '' && $estado_tramite != 'todo')
		{
			$where .= " and sl.estado_tramite = '$estado_tramite' ";
		}
		if(!empty($antiguedad) && $antiguedad != 'todo')
		{
			$where .= " and ";
		}
		if(in_array($_SESSION['session_gid'], ['cobros_gestor','cobros_televentas']))
		{
			$dataGestor = getGestorCobroByUsername($my->username);
			$where .= " and sl.gestor_cobro = '$dataGestor->id' ";
		}
		return $where;	
	}
	
	function alta_reintegro_ajuste()
	{
		global $database , $my;
		$checks		 = mosGetParam($_POST,'cid');
		if(!empty($checks))
		{
			foreach($checks as $id_bon)
			{
				$query = "select numusu,importe,porcentaje_reintegro from tb_reintegro where id = '$id_bon';";
				$database->setQuery( $query );
				$database->loadObject( $bon );
				$importe = mosHTML::formatMoney($bon->importe,FALSE,FALSE,FALSE,FALSE) ;
				$importe = str_replace(array(".",","),array("","."),$importe);
				$bonificacion = number_format($importe * (int)$bon->porcentaje_reintegro/100,2) ;
				$bonificacion = str_replace(array(",","."),array("",""),$bonificacion);
				$row = new mosAjusteFinanciero( $database );
				$row->numusu	 = $bon->numusu ;
				$row->codoper	 = "700001";
				$row->dia		 = date("d");
				$row->mes		 = date("m");
				$row->ano		 = date("Y");
				$row->fecha	     = date("Ymd H:i:s");
				$row->moneda	 = "188";
				$row->importe	 = $bonificacion ;
				$row->observaciones = html_entity_decode("Promoci&oacute;n Devoluci&oacute;n $bon->porcentaje_reintegro%");
				$row->username   = $my->username ;
				$row->codajuste  = "106";
				if (!$row->store()) 
				{
				echo "<script> alert('Error #3: ".$row->getError()."'); window.history.go(-1); </script>\n";
				exit();
				}
				$query = "update tb_reintegro set proc_ajuste = '1' where id = '$id_bon';";
				$database->setQuery( $query );
				$database->query();
				if ($database->getErrorNum()) 
				{
					die("Ocurrio un error al marcar ajuste 3x33334x44");
				}
			}
		}
		mosRedirect( 'index.php?option=credito&task=show_reintegros', "Se han procesado ".count($checks)." ajustes exitosamente." );
	}
	
	function showReintegros($option)
	{
		global $database, $mainframe, $my, $config_list_limit;
	
		require_once( $GLOBALS['config_absolute_path'] . '/includes/pageNavigation.php' );
		$limit 				= intval( $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $config_list_limit ) );
		$limitstart      	= intval( $mainframe->getUserStateFromRequest( "view{$option}limitstart", 'limitstart', 0 ) );
		$search         	= mosGetParam($_POST,'search');
	    $criteria			= mosGetParam($_POST,'filter_criteria');	
		$where = "";
	    if(isset($search) && $search !== null && $search !== ''){
	    	$where .= " and numusu =$search";
	    }
	    
	    $query = "select COUNT(*) from tb_reintegro where activo = 1 $where;";
		$database->setQuery($query);
		$total = $database->loadResult();
		$pageNav = new mosPageNav( $total, $limitstart, $limit  );
	    if(isset($search) && $search !== null && $search !== ''){
	    	$where = " and r.numusu =$search";
	    }		
		$query = "select r.*,c.cuit from tb_reintegro r inner join tb_cuenta c ON r.numusu = c.numusu and r.activo = 1 $where order by id desc ";

		$database->setQuery( $query, $pageNav->limitstart, $pageNav->limit );
		$rows = $database->loadObjectList();
		$rows = & $rows ;
		HTML_credito::showReintegros($option, $pageNav , $rows);
	}
	
	function reintegro_alta($option)
	{
		HTML_credito::reintegro_alta($option);
	}
	
	function go_reintegro_alta($option)
	{
		global $database , $my;
		$numusu			= mosGetParam($_POST,'numusu');
		$factura		= mosGetParam($_POST,'factura');
		$importe		= mosGetParam($_POST,'importe');
		$establecimiento= mosGetParam($_POST,'establecimiento');
		$fecha_factura	= mosGetParam($_POST,'fecha_factura');
		$fecha_factura	= str_replace("/","",$fecha_factura);
		$porcentaje_reintegro = mosGetParam($_POST,'porcentaje_reintegro');
		
		$row = new mosReintegro( $database );
			if (!$row->bind( $_POST )) {
				echo "<script> alert('Error #1: ".$row->getError()."'); window.history.go(-1); </script>\n";
				exit();
			}
		    // sanitise fields
		    $row->numusu          = $numusu ;
		    $row->factura		  = $factura ;
		    $row->importe         = str_replace(array(",","."),array("",""),$importe) ;
		    $row->fecha			  = date("Ymd");
		    $row->username		  = $my->username ;
		    $row->fecha_factura   = $fecha_factura ;
		    $row->establecimiento = $establecimiento ;
		    $row->porcentaje_reintegro = $porcentaje_reintegro;
			if (!$row->store()) {
				echo "<script> alert('Error #3: ".$row->getError()."'); window.history.go(-1); </script>\n";
				exit();
			}
		$to = "supervisoradeventas@credix.com,gerentedeventas@credix.com";
		$nameto = "Sistemas";
		$from = "info@credix.com";
		$namefrom = "SGC Credix";
		$subject = "Promocion Reintegro $porcentaje_reintegro%";
	
		ob_start();
			HTML_credito::printEmailHeader();
			HTML_credito::emailReintegro($row);
			HTML_credito::printEmailFooter();
			$message = ob_get_contents();
		ob_end_clean();
		$response = mosMainBody_authSendEmail($from, $namefrom, $to, $nameto, $subject, $message);
		HTML_credito::print_reintegro_alta( $option , $row);
	}
	
function cambiar_tracking($option)
{
	global $database ,$my;
	$checks		 = mosGetParam($_POST,'cid');
	$tracking	 = mosGetParam($_POST,'trackingdest');
	$tarjetas = "";
	$i=1;
	if(!empty($checks))
	{
		foreach($checks as $numtar)
		{
			$tarjetas .= $numtar;
			if(count($checks) != $i)
				$tarjetas.=",";
				$i++;
		}
	$database->setQuery("update tb_preautorizacion set tracking = '$tracking' where ccno in ($tarjetas);");
	$database->query();
	if ($database->getErrorNum()) {
		mosRedirect( 'index.php?option=credito&task=tracking_tarjetas', 'OCURRIO UN ERROR AL PROCESAR .. 20110214x01' );
	}
	$database->setQuery("select identificacion,ccno,contrato from tb_preautorizacion where ccno in ($tarjetas);");
	$rows = $database->loadObjectList();
	$rows = & $rows ;
	//AGREGO LOG PARA CADA TARJETA
	foreach($rows as $row)
	{
		$row = & $row ;
		//AGREGO COMENTARIO
		$estado = getTracking($tracking);
		saveComentarioInicial($row->identificacion , "SE HA CAMBIADO A ESTADO DE TRACKING ".$estado);
	}
	//SI TRACKING DESTINO ES IMPRESO ESPERANDO DCO, ENTONCES VERIFICO SI YA TIENE CONTRATO PARA PASARLO A PRE RUTA
	if($tracking == 20)
	{
		foreach($rows as $row)
		{
			if($row->contrato == 1)
			{
				$database->setQuery("update tb_preautorizacion set tracking = '30' where ccno = '$row->ccno';");
				$database->query();
				if ($database->getErrorNum()) {
					mosRedirect( 'index.php?option=credito&task=tracking_tarjetas', 'OCURRIO UN ERROR AL PROCESAR .. 20110209x023' );
				}
				saveComentarioInicial($row->identificacion , "SE HA CAMBIADO A ESTADO DE TRACKING PRE RUTA (TIENE CONTRATO)");
			}
		}
	}
	//SI SE HA PASADO A ESTAD ENVIADO CON MENSAJERO,ENTONCES SE ENVIA EL EMAIL NOTIFICANDO//
	if($tracking == 40)
	{
		$n = 0;
		$telefonos = array();
	foreach($checks as $numtar)
		{
			$database->setQuery("select pr.id,pr.nombre,pr.apellidos,pr.email,pr.telefono,p.numusu from tb_preautorizacion pr inner join tb_tarjeta_posicion p on pr.ccno = '$numtar' and pr.ccno = p.numtar");
			$database->loadObject($preautorizacion);
			$message = emailTracking($preautorizacion->id,$preautorizacion->numusu,$preautorizacion->nombre." ".$preautorizacion->apellidos);
			$response = mosMainBody_authSendEmail("info@credix.com", "Info", $preautorizacion->email, $preautorizacion->email, "Su tarjeta Credix esta en ruta de entrega",$message);
			$telefonos[$n] = (object)array("telefono"=>$preautorizacion->telefono,"id"=>$preautorizacion->id) ;
			$n++ ;
		}
		$mensajesms  = "Estimado Cliente, El dia de hoy estara siendo trasladada su tarjeta Credix a ";
		$mensajesms2 = ". Debe retirarla a partir de manana. Gracias!";
		$telefonos = (object)$telefonos ;
        $arraySms = array();
			foreach($telefonos as $linea){
				$telefonosArray = mosSMS::getPhoneOfString($linea->telefono);
					if(!empty($telefonosArray[0])){
						foreach($telefonosArray as $tel){
							$texto = $mensajesms.strtoupper(getComercioRetira($linea->id)).$mensajesms2;
							$arraySms[] = (object)array("number"=>$tel,"text"=>$texto);
						}
					}
			}
            mosSMS::sendSMSInit($arraySms,1,2);
	}
	}
	mosRedirect( 'index.php?option=credito&task=tracking_tarjetas', "SE HA COMPLETADO EL CAMBIO DE TRACKING EXITOSAMENTE PARA ".($i-1)." TARJETAS" );
}
	
function tracking_tarjetas($option)
{
	$tracking = mosGetParam($_POST,'tracking');
	$rows = null ;
	$post = false;
	if(!empty($tracking))
	{
		global $database ;
		if($tracking == 5 || $tracking == 70)
			$database->setQuery("select id,ccno,tracking,nombre,apellidos,contrato,preautorizacion,ccedula,ordenpatronal,dia_alta,mes_alta,ano_alta,agente_vendedor,comentarios from tb_preautorizacion where tracking = '$tracking'  order by agente_vendedor desc;");
		else
			$database->setQuery("select id,ccno,tracking,nombre,apellidos,contrato,preautorizacion,ccedula,ordenpatronal,dia_alta,mes_alta,ano_alta,agente_vendedor,comentarios from tb_preautorizacion where tracking = '$tracking'  and ccno is not null  order by agente_vendedor desc;");
		$rows = $database->loadObjectList();
		$rows = & $rows ;
		$post = true ;
	}else 
	{
		$tracking = 10 ;
	}
	$lists = null ;
	$trackings = tiposTracking();
	foreach($trackings as $track)
	{
		$tracks[] 		= mosHTML::makeOption( $track->value, $track->name);
	}
	$lists['tracking'] = mosHTML::selectList( $tracks, 'tracking', 'class="inputbox" id="tracking" size="1" style="width:100%;" ', 'value', 'text', $tracking );
	$lists['trackingdest'] = mosHTML::selectList( $tracks, 'trackingdest', 'class="inputbox" id="trackingdest" size="1"', 'value', 'text', 10 );
	
	HTML_credito::tracking_tarjetas( $option, $lists, $rows, $post );
}

function showPreautorizaciones( $option, $where= '' ) {
	global $database, $mainframe, $my, $acl, $config_list_limit;
    $where = '';
	$limit 				= intval( $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $config_list_limit ) );
	$limitstart      	= intval( $mainframe->getUserStateFromRequest( "view{$option}limitstart", 'limitstart', 0 ) );
	$search         	= $mainframe->getUserStateFromRequest( "filter{$option}search", 'search', '' ) ;
	$criteria       	= $mainframe->getUserStateFromRequest( "filter{$option}criteria", 'filter_criteria', '' ) ;
	$match         		= $mainframe->getUserStateFromRequest( "filter{$option}match", 'match', '' ) ;
	$desde		 = mosGetParam($_POST,'desde');
    $hasta   	 = mosGetParam($_POST,'hasta');
    $check_Docs  = mosGetParam($_POST,'docs');
    $fechas = "";
	$where1="";
	$adelantos =0;
        
    //Alerta de cuenta cartera vendida
    if(in_array($criteria, [1,5])) {
        if($criteria == 1) { //Identificacion
            $whereField = 'identificacion';
        } else if($criteria == 5) { //Cuenta
            $whereField = 'numusu';
        }
        $query = "select count(1) from tb_CuentasVendidas where $whereField = '$search'";
        $database->setQuery($query);
        $countVendida = $database->loadResult();
        if($countVendida > 0) {
            echo "<script>alert('". _MSG_ALERTA_CUENTA_VENDIDA_ ."');javascript:location.href='index.php';</script>";
        }
    }
        
    if($desde != '' && $hasta != ''){
   		$desde = str_replace("-","", $desde);
		$hasta = str_replace("-","", $hasta);
		$fechas = " and CONCAT(p.ano_alta,p.mes_alta,p.dia_alta) >= '$desde' and CONCAT(p.ano_alta,p.mes_alta,p.dia_alta) <= '$hasta' ";
    } 
	if($_SESSION['session_gid'] == "ventas_operador"){
	    $where1 .=  " and p.agente_vendedor = '$my->username' ";
	}
	//Si el usuario es afiliado se muestran de los creadores donde name = $my->name
	if($_SESSION['session_gid'] == "afiliado"){
		$where1 .=  " and p.agente_vendedor in( select username from tb_users where name = '$my->name') ";
	}  
    $query = "SELECT COUNT(*) FROM tb_preautorizacion p where 1 ";
    
    //SI RE REALIZA ALGUNA BUSQUEDA
    if(!empty($criteria) && $criteria != '')
    {
       if($criteria=="5"){
           $query = "select COUNT(*) from tb_preautorizacion p INNER JOIN tb_tarjeta_posicion t ON t.numusu = '$search' and p.ccno = t.numtar where 1 ";
			$fecha8 = date('Y-m-d');
			$nuevafecha = strtotime ( '-6 month' , strtotime ( $fecha8 ) ) ;
			$fecha8 = date ( 'Ymd' , $nuevafecha );
			$sentencia = "SELECT count(*) FROM `tb_servinet` WHERE `numusu` = '$search' AND `grupomov` = 'ADE' and fecha >= '$fecha8'";
			$database->setQuery( $sentencia );
			$adelantos = $database->loadResult();           



       }
	   elseif($criteria=="9")
	   {
	   	   if(empty($check_Docs) || $check_Docs == null)
	   	   {
	   	      if(isset($_SESSION['check_Docs']))
	   	      {
	   	         $check_Docs = $_SESSION['check_Docs'];
	   	         unset($_SESSION['check_Docs']);
	   	      }
	   	      else
	   	      {
	   	      	$check_Docs = null;
	   	      }
	   	   }
	   	   $query="SELECT COUNT(*) FROM tb_preautorizacion p WHERE p.ccno IS NOT NULL AND p.estado = 'APROBADO' AND ".mosHTML::ArrayToQuery_DocsFalt($check_Docs);
	   }
       else{
	       $where .= ' and '.goSearch($criteria, $search);
       }
    }

	//Si el usuario es de ventas_operador solo se muestran las preautorizaciones hechas por el

	if($search=='' && $criteria != "9"){
		$query = "SELECT COUNT(*) FROM tb_preautorizacion p where 1 ";
		$where ="";
	}	

    $query .= $where.$where1;
    $query .= $fechas;
	$database->setQuery( $query );
	$total = $database->loadResult();
	
	require_once( $GLOBALS['config_absolute_path'] . '/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit  );
	
	
	$query = "SELECT idPk, motivo 
					FROM tb_motivo_Cancelacion 
					ORDER BY idPk ASC
		";
		$database->setQuery($query);
		$listadoMotivos = $database->loadObjectList();
		// List Box para los motivos de cancelacion
		$arrayMotivos = array();
		$arrayMotivos[] = mosHTML::makeOption(0, 'SELECCIONE UN MOTIVO');
		foreach($listadoMotivos as $motivo) {
		$arrayMotivos[] = mosHTML::makeOption($motivo->idPk, strtoupper($motivo->motivo));
		}
		$arrayMotivos[] = mosHTML::makeOption(4, 'OTROS');
	$motivos = mosHTML::selectList($arrayMotivos, 'listaMotivos', 'class="inputbox" id="listaMotivos" size="1"', 'value', 'text', 0);	
	
    $query = "SELECT * FROM tb_preautorizacion p where 1 ";
    
    //SI RE REALIZA ALGUNA BUSQUEDA
    if(!empty($criteria) && $criteria != '')
    {
        if($criteria=="5"){
           $query = "select p.* from tb_preautorizacion p INNER JOIN tb_tarjeta_posicion t ON t.numusu = '$search' and p.ccno = t.numtar where 1 ";
		}
		elseif($criteria=="9")
		{
			$query="SELECT * FROM tb_preautorizacion p WHERE p.ccno IS NOT NULL AND p.estado = 'APROBADO' AND ".mosHTML::ArrayToQuery_DocsFalt($check_Docs);
		}
    }
	if($search=='' && $criteria != "9"){
		$query = "SELECT * FROM tb_preautorizacion p where 1 ";
		$where ="";
	}	
	if($_SESSION['session_gid'] == "ventas_operador" || $_SESSION['session_gid'] == "ventas_especial"){
	    $where .=  " and p.agente_vendedor = '$my->username' ";
	}
	//Si el usuario es afiliado se muestran de los creadores donde name = $my->name
	if($_SESSION['session_gid'] == "afiliado"){
		$where .=  " and p.agente_vendedor in( select username from tb_users where name = '$my->name') ";
	}
	$query .= $where.$where1. $fechas . " order by p.estado = 'PENDIENTE' DESC , p.id DESC";
	//echo $query;
	$database->setQuery( $query, $pageNav->limitstart, $pageNav->limit );
	$rows = $database->loadObjectList();

	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}
	$_SESSION['check_Docs'] = $check_Docs;
	HTML_credito::showPreautorizaciones( $rows, $pageNav, $search, $option, '', $criteria, $match ,$desde,$hasta, mosHTML::ArrayToQuery_DocsFalt($check_Docs),$adelantos,$motivos);
}

function showPreautorizacionesEstudio( $option, $where= '' ) {
	global $database, $mainframe, $my, $acl, $config_list_limit;

	$limit 				= intval( $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $config_list_limit ) );
	$limitstart      	= intval( $mainframe->getUserStateFromRequest( "view{$option}limitstart", 'limitstart', 0 ) );
	$search         	= $mainframe->getUserStateFromRequest( "filter{$option}search", 'search', '' ) ;
	$criteria       	= $mainframe->getUserStateFromRequest( "filter{$option}criteria", 'filter_criteria', '' ) ;
	$match         		= $mainframe->getUserStateFromRequest( "filter{$option}match", 'match', '' ) ;

	$where= goSearchEstudio($match, $criteria, $search, '');

	// get the total number of records
	$query = "SELECT COUNT(*) FROM tb_preautorizacion pr INNER JOIN tb_preautorizacion_teletec t ON pr.id = t.id_preautorizacion";
	
	if (isset($where) && $where !== null && $where !== '') 
		{
		$query = $query . " AND ";
		$query .= $where;
		}
	$database->setQuery( $query );
	$total = $database->loadResult();

	require_once( $GLOBALS['config_absolute_path'] . '/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit  );

	$query = "SELECT pr.*,t.total_liquido,t.total_neto,t.total_sugerido,t.codigos_internos,t.resolucion,t.url_estudio FROM tb_preautorizacion pr INNER JOIN tb_preautorizacion_teletec t ON pr.id = t.id_preautorizacion";
	if (isset($where) && $where !== null && $where !== '') 
		{
		$query = $query . " AND ";
		$query .= $where;
		}

	$query = $query . " Order by id DESC";

	$database->setQuery( $query, $pageNav->limitstart, $pageNav->limit );
	$rows = $database->loadObjectList();

	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}

	HTML_credito::showPreautorizacionesEstudio( $rows, $pageNav, $search, $option, '', $criteria, $match );
}

function showEditPreautorizacion( $option )
{
	$id     = mosGetParam($_GET , "id") ;
	$numusu = mosGetParam($_GET,'numusu');
	$lists = null;
	GLOBAL $database ,$my, $config_absolute_path, $IP_BD_SQL_SERVER, $NAME_BD_SQL_SERVER, $USER_BD_SQL_SERVER, $PASS_BD_SQL_SERVER;	
        
        require_once( $config_absolute_path . '/includes/database/mssqls.php' );
        $conexion = new mssqlserver("$IP_BD_SQL_SERVER", "$USER_BD_SQL_SERVER", "$PASS_BD_SQL_SERVER", "$NAME_BD_SQL_SERVER");
        
        $query = "  SELECT [CRN_Id] id,[CRN_Name] name FROM [ORIGINATION].[CRN_CANCELLATIONREASONANALYST] WHERE [CRN_IsActive] = 1;";
        $conexion->setQueryMssql($query);
        $cur = $conexion->queryMssqlReturn();
	if($cur){
            while ($rowmss = mssql_fetch_object( $cur )) 
            {
                $cancelationReason[] = $rowmss;
            }
        }
	$lists['cancelationReason'] = (Object) $cancelationReason;
	 
		//SI VIENE DE MAESTRO DE CUENTAS OBTENGO EL ID DE LA PREAUTORIZACION
	if($numusu != null){
	$query = "SELECT pr.id FROM tb_preautorizacion pr inner join tb_tarjeta_maestro tm where tm.numusu = '$numusu' and pr.ccno = tm.numtar_19";
	$database->setQuery( $query);
	$id = $database->loadResult();
	}
        
        /*Usuario que puede acceder a información extra, en actualizacion de datos*/
        $updatePreautoCredixpay = ' disabled="disabled" ';
        if(mosHTML::permisosBygrupos('update.preautorizacion.analisis.credixpay',1) > 0){
            $updatePreautoCredixpay = '';
        }
        $updatePreautoSyn = ' readonly="readonly" onclick="alertaSinPermisosupdateSQL()" ';
        if(mosHTML::permisosBygrupos('update.preautorizacion.analisis.operaciones',1) > 0){
            $updatePreautoSyn = '';
        }

	//Bitacora eventos
	guardarBitacoraSistema('1', $id, $my->username);

	//OBTENGO DATOS DE LA PREAUTORIZACION
	$query = "SELECT * FROM tb_preautorizacion where id = '$id'";
	$database->setQuery( $query);
	$database->loadObject($row);
	if(!empty($row)){
	$provincias[] 		= mosHTML::makeOption( 'SAN JOSE', 'San Jos&eacute;');
	$provincias[] 		= mosHTML::makeOption( 'ALAJUELA', 'Alajuela');
	$provincias[] 		= mosHTML::makeOption( 'CARTAGO', 'Cartago');
	$provincias[] 		= mosHTML::makeOption( 'HEREDIA', 'Heredia');
	$provincias[] 		= mosHTML::makeOption( 'GUANACASTE', 'Guanacaste');
	$provincias[] 		= mosHTML::makeOption( 'PUNTARENAS', 'Puntarenas');
	$provincias[] 		= mosHTML::makeOption( 'LIMON', 'Lim&oacute;n');

	$lists['provincias'] = mosHTML::selectList( $provincias, 'provincia', $updatePreautoCredixpay.'class="inputbox" id="provincia" size="1"', 'value', 'text', $row->provincia );
	$lists['provincia_entrega'] = mosHTML::selectList( $provincias, 'provincia_entrega', 'class="inputbox" id="provincia_entrega" size="1"', 'value', 'text', $row->provincia_entrega );
	//CANTONES
	$database->setQuery("select distinct canton from tb_direccion where provincia = '$row->provincia' order by canton;");
	$cantones = $database->loadObjectList();
	$cantones = & $cantones ;
	foreach ($cantones as $key=>$item)
		{
		$canton[] = mosHTML::makeOption( strtoupper(trim($item->canton)), $item->canton);
		}
	$lists['canton'] = mosHTML::selectList( $canton, 'canton', $updatePreautoCredixpay.'class="inputbox" id="canton" size="1"', 'value', 'text', strtoupper($row->canton) );
	//CANTONES
	$database->setQuery("select distinct canton from tb_direccion where provincia = '$row->provincia_entrega' order by canton;");
	$cantones = $database->loadObjectList();
	$cantones = & $cantones ;
	$canton = array();
	foreach ($cantones as $key=>$item)
		{
		$canton[] = mosHTML::makeOption( strtoupper(trim($item->canton)), $item->canton);
		}
	$lists['canton_entrega'] = mosHTML::selectList( $canton, 'canton_entrega', 'class="inputbox" id="canton_entrega" size="1"', 'value', 'text', strtoupper($row->canton_entrega) );	
	//DISTRITOS
	$database->setQuery("select distinct distrito from tb_direccion where canton = '$row->canton' order by distrito;");
	$ditritos = $database->loadObjectList();
	$ditritos = & $ditritos ;
	foreach ($ditritos as $key=>$item)
		{
		$distrito[] = mosHTML::makeOption( strtoupper(trim($item->distrito)), $item->distrito);
		}
	$lists['distrito'] = mosHTML::selectList( $distrito, 'distrito', $updatePreautoCredixpay.'class="inputbox" id="distrito" size="1"', 'value', 'text', strtoupper($row->distrito) );
	$database->setQuery("select distinct distrito from tb_direccion where canton = '$row->canton_entrega' order by distrito;");
	$ditritos = $database->loadObjectList();
	$ditritos = & $ditritos ;
	$distrito= array();
	foreach ($ditritos as $key=>$item)
		{
		$distrito[] = mosHTML::makeOption( strtoupper(trim($item->distrito)), $item->distrito);
		}
	$lists['distrito_entrega'] = mosHTML::selectList( $distrito, 'distrito_entrega', 'class="inputbox" id="distrito_entrega" size="1"', 'value', 'text', strtoupper($row->distrito_entrega) );
		//NACIONALIDAD
	
	$database->setQuery("select * from tb_paises order by nombre asc;");
	$paises = $database->loadObjectList();
		
	foreach ($paises as $key=>$item)
		{
		$nacionalidad[] = mosHTML::makeOption( $item->codigo, $item->nombre);
		}
	$lists['nacionalidad'] = mosHTML::selectList( $nacionalidad, 'nacionalidad', $updatePreautoCredixpay.' class="inputbox" size="1"', 'value', 'text', $row->nacionalidad );
	//OCUPACION
	//-----
	$database->setQuery("select * from tb_ocupacion;");
	$ocupaciones = $database->loadObjectList();
	$ocupaciones = & $ocupaciones ;
	foreach ($ocupaciones as $key=>$item)
		{
		$ocupacion[] = mosHTML::makeOption( $item->numero, $item->ocupacion);
		}
	$lists['ocupacion'] = mosHTML::selectList( $ocupacion, 'ocupacion', $updatePreautoCredixpay.'class="inputbox" id="ocupacion" size="1" ', 'value', 'text',$row->ocupacion);		
	//SEXO
	$sexo[] 		= mosHTML::makeOption( 'M', 'Masculino');
	$sexo[] 		= mosHTML::makeOption( 'F', 'Femenino');
	$lists['sexo'] = mosHTML::selectList( $sexo, 'sexo', $updatePreautoCredixpay.' class="inputbox" size="1"', 'value', 'text', $row->sexo );
	
	//MONEDA LIMITE DE COMPRA
	$monedaL[] 		= mosHTML::makeOption( 'L', 'Colones');
	$monedaL[] 		= mosHTML::makeOption( 'D', 'D&oacute;lares');
	$lists['monedaL'] = mosHTML::selectList( $monedaL, 'monedaL', 'class="inputbox" size="1"', 'value', 'text', $row->monedaL );
	
	//TIPO DOCUMENTO
	$tipodocumento[] 		= mosHTML::makeOption( 'Ci', 'Nacional');
	$tipodocumento[] 		= mosHTML::makeOption( 'Cr', 'Extranjero');
	$lists['tipodocumento'] = mosHTML::selectList( $tipodocumento, 'tipodocumento', $updatePreautoSyn.'class="inputbox" id="tipodocumento" size="1"', 'value', 'text', $row->tipodocumento );
	
	//GRUPO AFINIDAD
	$database->setQuery("select * from tb_aff_group2");
	$aff_groups = $database->loadObjectList();
	foreach ($aff_groups as $key=>$item)
		{
			$grupoafinidad[] 		= mosHTML::makeOption( $item->grupo, $item->comercio);
		}
	$lists['aff_group'] = mosHTML::selectList( $grupoafinidad, 'aff_group', 'class="inputbox" size="1"', 'value', 'text', $row->aff_group );
	
	//ESTADO CIVIL
	$estadocivil[] 		= mosHTML::makeOption( '0', 'No Informado');
	$estadocivil[] 		= mosHTML::makeOption( '1', 'Soltero');
	$estadocivil[] 		= mosHTML::makeOption( '2', 'Casado');
	$estadocivil[] 		= mosHTML::makeOption( '3', 'Viudo');
	$estadocivil[] 		= mosHTML::makeOption( '4', 'Separado');
	$estadocivil[] 		= mosHTML::makeOption( '5', 'Divorciado');
	$estadocivil[] 		= mosHTML::makeOption( '6', 'Union Libre');
	$lists['estado_civil'] = mosHTML::selectList( $estadocivil, 'estado_civil', $updatePreautoCredixpay.' class="inputbox" size="1"', 'value', 'text', $row->estado_civil );
	
	//CALIFICACION
	$calificacion[] 		= mosHTML::makeOption( 'A', 'A');
	$calificacion[] 		= mosHTML::makeOption( 'C', 'C');
	$calificacion[] 		= mosHTML::makeOption( 'D', 'D');
	$calificacion[] 		= mosHTML::makeOption( 'E', 'E');
	$lists['calificacion'] = mosHTML::selectList( $calificacion, 'calificacion', 'class="inputbox" size="1"', 'value', 'text', $row->calificacion );
	//tipo de llamada
	$llamada[] 		= mosHTML::makeOption( 'NO REALIZAR', 'NO REALIZAR');
	$llamada[] 		= mosHTML::makeOption( 'LLAMADA SALIENTE', 'LLAMADA SALIENTE');

	$lists['llamada'] = mosHTML::selectList( $llamada, 'llamada', 'class="inputbox" id="llamada" size="1"', 'value', 'text', $row->llamada );	
	
        
        //MODELO
        $numusu0410 = getCuenta($row->ccno);
	$modelo0410="";
        if($numusu0410!=''){
            $database->setQuery("select modelo from tb_cuenta where numusu='$numusu0410'");
            $database->loadObject($cuenta0410);
            if(!empty($cuenta0410)){
                $modelo0410=$cuenta0410->modelo;
            } else {
                $modelo[] = mosHTML::makeOption( '-1', "No definido");
            }
        } else {
            $modelo[] = mosHTML::makeOption( '-1', "No definido");
        }
        $database->setQuery("SELECT DISTINCT(modelo) FROM tb_cuenta ORDER BY modelo;");
	$modelosPre = $database->loadObjectList();
	$modelosPre = & $modelosPre ;
        foreach ($modelosPre as $key=>$item)
        {
            $modelo[] = mosHTML::makeOption( trim($item->modelo), $item->modelo);
        }

	$lists['modelo'] = mosHTML::selectList( $modelo, 'modelo0410', 'class="inputbox" id="modelo0410" size="1"', 'value', 'text', $modelo0410 );
	
        
	//LUGAR DE RETIRO TARJETA
	$retiro_tar[] 		= mosHTML::makeOption( 'COMERCIO ORIGEN', 'COMERCIO ORIGEN');
	$retiro_tar[] 		= mosHTML::makeOption( 'EPA ESCAZU', 'EPA ESCAZU');
	$retiro_tar[] 		= mosHTML::makeOption( 'EPA BELEN', 'EPA BELEN');
	$retiro_tar[] 		= mosHTML::makeOption( 'EPA CURRIDABAT', 'EPA CURRIDABAT');
	$retiro_tar[] 		= mosHTML::makeOption( 'EPA TIBAS', 'EPA TIBAS');
	$retiro_tar[] 		= mosHTML::makeOption( 'EPA DESAMPARADOS', 'EPA DESAMPARADOS');
	$retiro_tar[]  	= mosHTML::makeOption( 'MENSAJERIA EXTERNA', 'MENSAJERIA EXTERNA');
	$lists['retiro_tar'] = mosHTML::selectList( $retiro_tar, 'retiro_tar', 'class="inputbox" size="1" id="retiro_tar"', 'value', 'text', $row->comentarios );
	
	$row->cartera = getCartera(getCuenta($row->ccno));
	
	$tracking = tiposTracking();
	foreach($tracking as $track)
	{
		$trackinglist[] 		= mosHTML::makeOption( $track->value, $track->name);
	}
	$lists['tracking'] = mosHTML::selectList( $trackinglist, 'tracking', 'class="inputbox" size="1" id="tracking"', 'value', 'text', $row->tracking );
	
	$ilocalizable=1;
	$cuenta= null;
	$cantidad =null;
	if(!empty($row->ccno)){
	$query="select p.numusu from tb_preautorizacion pre inner join tb_tarjeta_posicion p on pre.ccno=p.numtar where pre.ccno=".$row->ccno;

	$database->setQuery($query);
	$database->loadObject($cuenta);
	if(!empty($cuenta)){
	$query="select count(*) as cantidad from tb_noedc where numusu=".$cuenta->numusu;
	$database->setQuery($query);
	$database->loadObject($cantidad);
	if(!empty($cantidad)){
	if($cantidad->cantidad>0){
		$ilocalizable=0;
	}
	}
	}		
	}
	
	//ESTADOS DE GESTIONES
	$query = "select parametro,valor from tb_parametros_sistema where grupo = 'preautorizacion.estados.gestiones' order by parametro asc;";
	$database->setQuery($query);
	$rowsGestiones = $database->loadObjectList();
	$estados_gestiones = array();
	for($i=0;$i<count($rowsGestiones);$i++) {
		$rg = $rowsGestiones[$i];
		$estados_gestiones[]	= mosHTML::makeOption( $rg->parametro, $rg->valor);
	}
	$lists['estados_gestiones'] = mosHTML::selectList( $estados_gestiones, 'estados_gestiones', 'class="inputbox" size="1" id="estados_gestiones" onchange="changeEstadoGestion(this.value,this.options[this.selectedIndex].text)"', 'value', 'text', $row->estado_gestion );
	
}

	if(!empty($numusu) && empty($id)){
		$query = "SELECT id,comentario,fecha_creado,creador,visible_comercio,categoria FROM tb_preautorizacion_comentarios where numusu = '$numusu' ";
	}

	if(empty($numusu) && !empty($id)){
		$query = "SELECT id,comentario,fecha_creado,creador,visible_comercio,categoria FROM tb_preautorizacion_comentarios where id_preautorizacion = '$id' ";
	}
	if(!empty($numusu) && !empty($id)){
		$query = "
		SELECT id,comentario,fecha_creado,creador,visible_comercio,categoria FROM tb_preautorizacion_comentarios where id_preautorizacion = '$id'
		UNION
		SELECT id,comentario,fecha_creado,creador,visible_comercio,categoria FROM tb_preautorizacion_comentarios where numusu = '$numusu'";
	}
	if(in_array($_SESSION['session_gid'],array("ventas_operador","afiliado","ventas_especial"))) $query.= " and visible_comercio = 1 "; 
	$query.=" order by id DESC;";

	$database->setQuery( $query);
	$comentarios = $database->loadObjectList();
	
	if($numusu != null)
	{
		$query = "select * from tb_seguimiento_legal where numusu = '$numusu';";
		$database->setQuery($query);
		$database->loadObject($seguimiento);
	}
	else
	{
		if($row->ccno != null)
		{
			$query = "select numusu from tb_tarjeta_maestro where numtar_19 = '$row->ccno';";
			$database->setQuery($query);
			$cuenta = $database->loadResult();
			$query = "select * from tb_seguimiento_legal where numusu = '$cuenta';";
			$database->setQuery($query);
			$database->loadObject($seguimiento);
		}
		else $seguimiento = null;
	}
	if(empty($seguimiento))
	{
		$seguimiento = (object)array('estado_tramite'=>_SL_AL_DIA_,'gestor_cobro'=>'0','estado_procesal'=>'NO ASIGNADO','clase_embargo'=>'NO ASIGNADO',
		'estado_notificacion'=>'NO ASIGNADO','fec_pres_demanda'=>'','fec_resolucion'=>'','fec_ejecucion'=>'','fec_notificacion'=>'','no_expediente'=>'');
	}
	//ESTADOS DE TRAMITE
	$estado_tramite[] 		= mosHTML::makeOption( _SL_AL_DIA_, _SL_AL_DIA_TXT_);
	$estado_tramite[] 		= mosHTML::makeOption( _SL_VENCIDA_, _SL_VENCIDA_TXT_);
	$estado_tramite[] 		= mosHTML::makeOption( _SL_COBRO_JUDICIAL_, _SL_COBRO_JUDICIAL_TXT_);
	$estado_tramite[] 		= mosHTML::makeOption( _SL_CONCLUIDO_, _SL_CONCLUIDO_TXT_);
	$lists['estado_tramite'] = mosHTML::selectList( $estado_tramite, 'estado_tramite', 'class="inputbox" size="1" id="estado_tramite"', 'value', 'text', $seguimiento->estado_tramite );
	
	//GESTORES DE COBRO
	$query = "select id,nombre from tb_gestores_cobro where activo = 1;";
	$database->setQuery($query);
	$gestores = $database->loadObjectList();
	$gestores = & $gestores;
	$gestor_cobro = array();
	for($i=0;$i<count($gestores);$i++)
	{
		$gestor = &$gestores[$i];
	$gestor_cobro[] 		= mosHTML::makeOption( $gestor->id, $gestor->nombre);
	}
	
	$lists['gestor_cobro'] = mosHTML::selectList( $gestor_cobro, 'gestor_cobro', 'class="inputbox" size="1" id="gestor_cobro" ', 'value', 'text', $seguimiento->gestor_cobro );
	
	//ESTADO PROCESAL
	$estado_procesal[] 		= mosHTML::makeOption( 'NO ASIGNADO', 'NO ASIGNADO');
	$estado_procesal[] 		= mosHTML::makeOption( 'ACTIVO', 'ACTIVO');
	$estado_procesal[] 		= mosHTML::makeOption( 'CANCELADO', 'CANCELADO');
	$estado_procesal[] 		= mosHTML::makeOption( 'ARREGLO EXTRAJUDICIAL', 'ARREGLO EXTRAJUDICIAL');
	$estado_procesal[] 		= mosHTML::makeOption( 'INCOBRABLE', 'INCOBRABLE');
	$lists['estado_procesal'] = mosHTML::selectList( $estado_procesal, 'estado_procesal', 'class="inputbox" size="1" id="estado_procesal"', 'value', 'text', $seguimiento->estado_procesal );
	
	//CLASE DE BIENES EMBARGADOS
	$clase_embargo[] 		= mosHTML::makeOption( 'NO ASIGNADO', 'NO ASIGNADO');
	$clase_embargo[] 		= mosHTML::makeOption( 'CUENTAS BANCARIAS', 'CUENTAS BANCARIAS');
	$clase_embargo[] 		= mosHTML::makeOption( 'BIENES INMUEBLES', 'BIENES INMUEBLES');
	$clase_embargo[] 		= mosHTML::makeOption( 'BIENES MUEBLES', 'BIENES MUEBLES');
	$lists['clase_embargo'] = mosHTML::selectList( $clase_embargo, 'clase_embargo', 'class="inputbox" size="1" id="clase_embargo"', 'value', 'text', $seguimiento->clase_embargo );
	
	//CLASE DE BIENES EMBARGADOS
	$estado_notificacion[] 		= mosHTML::makeOption( 'NO ASIGNADO', 'NO ASIGNADO');
	$estado_notificacion[] 		= mosHTML::makeOption( 'DILIGENCIADA', 'DILIGENCIADA');
	$estado_notificacion[] 		= mosHTML::makeOption( 'SIN DILIGENCIAR', 'SIN DILIGENCIAR');
	$estado_notificacion[] 		= mosHTML::makeOption( 'PERDIDO O AUSENTE', 'PERDIDO O AUSENTE');
	$lists['estado_notificacion'] = mosHTML::selectList( $estado_notificacion, 'estado_notificacion', 'class="inputbox" size="1" id="estado_notificacion"', 'value', 'text', $seguimiento->estado_notificacion );
	
	$query = "select codigo, descripcion from tb_agrupamiento";
	$database->setQuery($query);
	$codigos_agrupamiento = $database->loadObjectList();
	$agrupamientos = array();
	$agrupamientos[] = mosHTML::makeOption( '', 'Seleccione Agrupamiento');
	foreach ($codigos_agrupamiento as $key=>$item)
		{
		$agrupamientos[] = mosHTML::makeOption( $item->codigo, $item->descripcion);
		}
	$lists['codigos_agrupamiento'] = mosHTML::selectList( $agrupamientos, 'agrupamiento', 'class="inputbox" id="codigos_agrupamiento" size="1"', 'value', 'text', $row->agrupamiento );
	
	//Lista de tipos de cobro por administración de cuenta
	$admin_cuenta[] = mosHTML::makeOption( 0, 'No Aplica' );
	$admin_cuenta[] = mosHTML::makeOption( 1, _CARGO_MEMBRESIA1_LABEL_ );
	$admin_cuenta[] = mosHTML::makeOption( 2, _CARGO_MEMBRESIA2_LABEL_ );
	$lists['administracion_cuenta'] = mosHTML::selectList( $admin_cuenta, 'anualidad', 'class="inputbox" id="anualidad" size="1"', 'value', 'text', $row->anualidad );
	$preautorizacion_updates = null;
	$query = "select * from tb_update_preautorizacion where id_pre='$id' order by fecha desc";
	$database->setQuery($query);
	$preautorizacion_updates = $database->loadObjectList();	
	$lists['preautorizacion_updates'] =	$preautorizacion_updates;	
	HTML_credito::edit_preautorizacion( $row , $lists ,$comentarios, $seguimiento,$ilocalizable);
}

function changeEstadoGestionPreautorizacion($option) {
	global $database, $my;
	$id = mosGetParam($_POST, 'id');
	$estado_gestion = mosGetParam($_POST, 'estado');
	$text_estado = mosGetParam($_POST, 'text');
	//Cambio estado de la gestion en preautorizacion
	$query = "update tb_preautorizacion set estado_gestion = '$estado_gestion' where id = '$id';";
	$database->setQuery($query);
	$database->query();
	//Inserto comentario del cambio de estado
	$mensaje = "EL ESTADO DE UNA GESTION HA SIDO CAMBIADO A ".strtoupper($text_estado);
	saveComentarioInicialById($id,$mensaje);
	displayCommmentsPreautorizacion($option);
}

function displayCommmentsPreautorizacion($option) {
	global $my, $database;
	$id_preautorizacion = mosGetParam($_POST, 'id');
	$query = "select numusu from tb_preautorizacion where id = $id_preautorizacion;";
	$database->setQuery($query);
	$numusu = $database->loadResult();
	$username = $my->username;
	//Obtengo gid
	$query = "select gid from tb_users where username = '$username';";
	$database->setQuery($query);
	$gid = $database->loadResult();
	$permiso= $gid;
	error_log("My GID:".$gid);
	$query = "select * from tb_preautorizacion_comentarios where ((id_preautorizacion = '$id_preautorizacion' && id_preautorizacion != '0')  or (numusu = '$numusu' && numusu != '0')) ";
	if(in_array($gid, ['cobros_gestor','cobros_televentas']))
	$query.=" and creador = '$username'";
	$query.=" order by id DESC;";
	$database->setQuery($query);error_log($query);
	$comentarios = $database->loadObjectList();

	if ($database->getErrorNum())
	{
	echo $database->stderr();
	return array();
	}
	$comentarios = & $comentarios;
	?>
	<table class="adminlist" style="width:80%">
		<tr>
			<th class="title" style='width:60%'>COMENTARIO</th><th class="title">FECHA</th><th class="title">CREADO POR</th><th>VISIBLE AL COMERCIO</th>
		</tr>
		<?php 
		$k = 0;
		for ($i=0, $n=count( $comentarios ); $i < $n; $i++) 
	{
		$i%2 == 0? $k =0 : $k = 1 ;
			$comentario 	=& $comentarios[$i];
		?>
		<tr <?php echo "class='row$k'"; ?>>
				<td  style='width:60%' ><?php
				if (($permiso != 'admin') ){		
					$posicion = 0;
					$posicion = strpos($comentario->comentario, 'URL:');
					if($posicion!=0){
					echo strtoupper(substr($comentario->comentario.$permiso, 0,$posicion-1));
					}else{
					echo strtoupper(mosHTML::formatHTML($comentario->comentario));
					}
				}else{
					echo mosHTML::formatHTML($comentario->comentario);
				}?></td>
				<td><?php echo mosHTML::formatFecha(substr($comentario -> fecha_creado, 0, 8), "DDMMAAAA") . "&nbsp;&nbsp;&nbsp;&nbsp;" . substr($comentario -> fecha_creado, 8, 9); ?></td><td><?php echo $comentario -> creador; ?></td><td style="text-align:center;"><?php
			if ($comentario -> visible_comercio == 1)
				echo "<img src='../images/bloqueado.png'></img>";
			else
				echo "&nbsp;";
		?></td>
		</tr>
		<?php } ?>
	</table>
	<?php
}

function editPreautorizacion( $option )
{
			GLOBAL $database , $mainframe,$my ;
			$id = $mainframe->getUserStateFromRequest( "id", 'id', '' ) ;
			$database->setQuery("select * from tb_preautorizacion where id = '$id' ;");
			$database->loadObject($rowp);
			$array1 = array();

			foreach ($rowp as $key => $value) {
				$array1[$key]=$value;
			}


			if ($database->getErrorNum()) 
			{
			echo $database->stderr();
			return array();
			}
			$row = new mosPreautorizacion( $database );
			if (!$row->bind( $_POST )) {
				echo "<script> alert('Error #1: ".$row->getError()."'); window.history.go(-1); </script>\n";
				exit();
			}
			$ruta1="";				    // sanitise fields
		    $row->modificado          =       '2';
			$limite_aprobado          =       $mainframe->getUserStateFromRequest( "limite_aprobado", 'limite_aprobado', '' );
			$limite_aprobado = str_replace(array(',','.'), array('',''),$limite_aprobado);
			$limite_aprobado = substr($limite_aprobado,0,strlen($limite_aprobado)-2);
			$retiro_tar		          =       $mainframe->getUserStateFromRequest( "retiro_tar", 'retiro_tar', '' );
			$row->limite_aprobado     = $limite_aprobado;
			$row->comentarios		  = $retiro_tar;
			$row->nombreTarjeta		  = $mainframe->getUserStateFromRequest("nombretar", 'nombretar', '' );
                        
                        $modelo0410 = $mainframe->getUserStateFromRequest("modelo0410", 'modelo0410', '' );
                        if($modelo0410 && isset($modelo0410) && !empty($modelo0410)){
                            if($modelo0410 != '-1'){
                                $row->modelo = $modelo0410;
                            }
                        }
                        
                        $fecha_nacimiento = $mainframe->getUserStateFromRequest( "fecha_nacimiento", 'fecha_nacimiento', '' );
                        $row->fecha_nacimiento = str_replace("/","", $fecha_nacimiento);
                        
			if (!$row->check()) {
				echo "<script> alert('Error #2: ".$row->getError()."'); window.history.go(-1); </script>\n";
				exit();
			}
			if (!$row->store()) {
				echo "<script> alert('Error #3: ".$row->getError()."'); window.history.go(-1); </script>\n";
				exit();
			}
			$row->checkin();
			$database->setQuery("select * from tb_preautorizacion where id = '$id' ;");
			$database->loadObject($rowd);
			$array2 = array();

			foreach ($rowd as $key => $value) {
				$array2[$key]=$value;
			}
			$cambios=" ";
			foreach ($array1 as $key => $valor) {
				if($array1[$key] != $array2[$key])
					$cambios.= "  $key - ".$array1[$key] . " - ".$array2[$key].". ";
			}
			if($cambios !=''){
				$fecha = date('Y-m-d h:i:s');
				$query="insert into tb_update_preautorizacion (id_pre,nuevo,usuario,fecha) values ('$id','$cambios','$my->username','$fecha')";
				$database->setQuery($query);
				$database->query();
			}
			saveComentarioInicialById($id,"LA PREAUTORIZACION HA SIDO MODIFICADA");
} 
 

function searchPreautorizaciones( $option ) {
	
	$criteria[] = mosHTML::makeOption( 8, 'Nombre');
	$criteria[] = mosHTML::makeOption( 6, 'Autorizaci&oacute;n');
	$criteria[] = mosHTML::makeOption( 1, 'Identificaci&oacute;n');
	$criteria[] = mosHTML::makeOption( 2, 'Tarjeta');
	$criteria[] = mosHTML::makeOption( 3, 'Email');
	$criteria[] = mosHTML::makeOption( 4, 'Agente Vendedor');
	$criteria[] = mosHTML::makeOption( 5, 'Cuenta');
	$criteria[] = mosHTML::makeOption( 7, 'Estado');
	$criteria[] = mosHTML::makeOption( 9, 'Documentos faltantes');
	$criteria[] = mosHTML::makeOption( 10, 'Tel&eacute;fono');
	$lists['criteria'] = mosHTML::selectList( $criteria, 'filter_criteria', 'class="inputbox" size="1"  id="id_filter_criteria"', 'value', 'text', 5 );

	HTML_credito::showSearch( $option, $lists );
}

function searchPreautorizacionesEstudio( $option ) {

	$criteria[] = mosHTML::makeOption( 0, 'Nombre');
	$criteria[] = mosHTML::makeOption( 1, 'Identificaci&oacute;n');
	$criteria[] = mosHTML::makeOption( 2, 'Tarjeta');
	$criteria[] = mosHTML::makeOption( 3, 'Email');
	$criteria[] = mosHTML::makeOption( 4, 'Agente Vendedor');
	
	$lists['criteria'] = mosHTML::selectList( $criteria, 'filter_criteria', 'class="inputbox" size="1"', 'value', 'text', 0 );

	HTML_credito::showSearchEstudio( $option, $lists );
}

function goSearchTasaCero( $criteria, $search ) {

	if (!isset($criteria) || !isset($search) || $criteria==='' ) {
		return null;
	}

	switch ( $criteria ) {
		case 0:
			$where = " AND tb_tasacero_autorizacion.numtar in (select numtar_19 from tb_tarjeta where numusu = '$search' ) ";
			break;
		case 1:
			$where = " AND tb_tasacero_autorizacion.numtar like '%$search%' ";
			break;
	}
	
	return $where;
}

function goSearch( $criteria, $search ) {

	if (!isset($criteria) || !isset($search) || $criteria==='' ) {
		return '';
	}

	switch ( $criteria ) {
		case 6:
			$field= "p.id";
			break;
		case 7:
			$field= "p.estado";
			break;
		case 8:
			$field= "p.nombre";
			break;
		case 1:
			$field= "p.identificacion";
			break;
		case 2:
			$field= "p.ccno";
			break;
		case 3:
			$field= "p.email";
			break;
		case 4:
			$field= "p.agente_vendedor";
			break;
		case 10:
			$field= "p.telefono";
			break;
	}

	$search = trim($search);

	if ($field == 'p.nombre')
		{
		$has_space = strpos($search, ' ');
		if ($has_space) 
			{
			$first 	= substr($search,0,$has_space); 
			$last 	= substr($search, $has_space + 1, strlen($search) - $has_space + 1);

			$where = " (p.nombre like '%". $first . "%' OR p.apellidos like '%". $last . "%')";
			}
		else
			{
			$where = "(p.nombre like '%". $search . "%' OR p.apellidos like '%". $search . "%')";
			}
		}
	else
		{
		$where = $field . " like '%". $search . "%' ";
		}
	return $where;
}

function goSearchEstudio( $match, $criteria, $search, $month ) {

	if (!isset($criteria) || !isset($search) || $criteria==='' ) {
		return null;
	}

	switch ( $criteria ) {
		case 0:
			$field= "pr.nombre";
			break;
		case 1:
			$field= "pr.identificacion";
			break;
		case 2:
			$field= "pr.ccno";
			break;
		case 3:
			$field= "pr.email";
			break;
		case 4:
			$field= "pr.agente_vendedor";
			break;
	}

	$search = trim($search);

	if ($field == 'nombre')
		{
		$has_space = strpos($search, ' ');
		if ($has_space) 
			{
			$first 	= substr($search,0,$has_space); 
			$last 	= substr($search, $has_space + 1, strlen($search) - $has_space + 1);

			$where = " (pr.nombre like '%". $first . "%' OR pr.apellidos like '%". $last . "%')";
			}
		else
			{
			$where = "(pr.nombre like '%". $search . "%' OR pr.apellidos like '%". $search . "%')";
			}
		}
	else
		{
		$where = $field . " like '%". $search . "%'";
		}
	return $where;
}
	
/*REGLAS DE MATRIZ PARA MUJERES*/
	function processRulesPreautorizacion($nivel,$fecha_nac,$monto_scorecard,$monto_sugerido,$reporta_salario,$resolucion_teletec,$criterio,$cedula,$tipoIdentidad,$estimadoTranunion)
	{
		$resolucion     = 1;
		$monto_asignado = 0;
        $mensaje        = '';
		$edad = calculaedad($fecha_nac);
		$genero = 2;
		//SI RESOLUCION TELECTEC ES CERO POR NO TENER ESTUDIO O TELETEC LO ENVIO A ESTUDIO//
        if(in_array($resolucion_teletec,array(0,2)))
			$resolucion = 2;
		//SI RESOLUCION TELETEC ES RECHAZADO, SIEMPRE SE RECHAZA
		if($resolucion_teletec == 3)
			$resolucion = 3;
		//SI ES MARCADO CRITERIO SE ENVIA A ESTUDIO
		if($criterio == 1 && $resolucion_teletec < 3)
		{
			$resolucion = 2;
		}
		//SI RESOLUCION TELETEC ES APROBADO
		if($resolucion == 1)
		{
			/*TODOS LOS MENORES DE 26 AÑOS SE CONDICIONAN*/
			if($edad <= 25) {
				$resolucion = 2;
				error_log("La identificacion $cedula ha sido condicionada por regla Menor de 26 anos");
			} else {
				/*SI APLICA PARA LIMITE POR ESTIMADOR, SINO SE APLICA MATRIZ DE MONTOS*/
				$transunionLimite = 0;
				$transunion = new Transunion();
				$transunionLimite = $transunion->getLimiteByEstimadoIngreso($estimadoTranunion);
				if($transunionLimite > 0) {
					if($transunionLimite == 1)
						$monto_asignado = 265000;
					else
						$monto_asignado = $transunionLimite;
				} else {
					//SI ES TARJETA PLATINO Y TIPO IDENTIF ES RESIDENCIA, SE ENVIA A ESTUDIO
					if($nivel == 70 && $tipoIdentidad == 'Cr') {
						$resolucion = 2;
					} elseif($edad <= 25) {
						$resolucion = 2;
					} else {
						$rango_edad = obtenerRangoEdadPrecalificador($edad);
						$monto_asignado = obtenerLimitePorPrecalificador($nivel, $genero, $rango_edad);
					}
				}
			}
		}
		return (object)array("resolucion"=>$resolucion,"monto_asignado"=>$monto_asignado,"edad"=>$edad,'mensaje'=>$mensaje);
	}
//APLICA SOLO PARA HOMBRES
function processRulesPreautorizacion2($nivel,$fecha_nac,$monto_scorecard,$monto_sugerido,$reporta_salario,$resolucion_teletec,$criterio,$cedula,$tipoIdentidad,$estimadoTranunion){
	$monto_asignado = 0;
	$resolucion = 1;
	$edad = calculaedad($fecha_nac);
    $mensaje = '';
	$genero = 1;
	//SI RESOLUCION TELECTEC ES CERO POR NO TENER ESTUDIO O TELETEC LO ENVIO A ESTUDIO//
	if(in_array($resolucion_teletec,array(0,2)))
		$resolucion = 2;
	//SI RESOLUCION TELETEC ES RECHAZADO, SIEMPRE SE RECHAZA
	if($resolucion_teletec == 3)
		$resolucion = 3;
	//SI ES MARCADO CRITERIO SE ENVIA A ESTUDIO
	if($criterio == 1 && $resolucion_teletec < 3)
	{
		$resolucion = 2;
	}
	if($resolucion == 1)
	{
		/*TODOS LOS MENORES DE 26 AÑOS SE CONDICIONAN*/
		if($edad <= 25) {
			$resolucion = 2;
			error_log("La identificacion $cedula ha sido condicionada por regla Menor de 26 anos");
		} else {
			/*SI APLICA PARA LIMITE POR ESTIMADOR, SINO SE APLICA MATRIZ DE MONTOS*/
			$transunionLimite = 0;
			$transunion = new Transunion();
			$transunionLimite = $transunion->getLimiteByEstimadoIngreso($estimadoTranunion);
			if($transunionLimite > 0) {
				if($transunionLimite == 1)
					$monto_asignado = 265000;
				else
					$monto_asignado = $transunionLimite;
			} else {
				//SI ES TARJETA PLATINO Y TIPO IDENTIF ES RESIDENCIA, SE ENVIA A ESTUDIO 
				if($nivel == 70 && $tipoIdentidad == 'Cr') {
					$resolucion = 2;
				} elseif($edad <= 25) {
					$resolucion = 2;
				} else {
					$rango_edad = obtenerRangoEdadPrecalificador($edad);
					$monto_asignado = obtenerLimitePorPrecalificador($nivel, $genero, $rango_edad);
				}
			}
		}
	}
    return (object)array("resolucion"=>$resolucion,"monto_asignado"=>$monto_asignado,"edad"=>$edad);
}
	
function gotoScorecard_SCREEN2_CRITERIO($option){
	$id         	= mosGetParam($_GET,'id');
	$nombre         = mosGetParam($_GET,'nombre');
	$identificacion = mosGetParam($_GET,'identificacion');
	$resultado      = mosGetParam($_GET,'resultado');
	$datos = (object) array("id" => $id, "nombre"=>$nombre,"identificacion"=>$identificacion,"resultado"=>$resultado);
	HTML_credito::gotoScorecard_SCREEN2_CRITERIO($option , $datos);
}

function detenerCedulaDuplicada($cedula,$paso=0){
	global $database;

	//****** VERIFICO SI CEDULA YA HA SIDO INGRESADA AL SISTEMA ******//
	$existe = false;
	$query = "select estado,tracking from tb_preautorizacion where identificacion = '$cedula';";
	$database->setQuery( $query );
	$rows = $database->loadObjectList();
	$rows = &$rows ;
	$correo = 0;
	if(!empty($rows))
	{
		foreach($rows as $row)
		{
			$row = &$row;

			if($row->estado == 'RECHAZADO' || ($row->estado == 'CANCELADO' && $row->tracking == 70))
			{
			     $correo = 1;
			}

			if(($row->estado != 'CANCELADO' && $row->estado != 'REVALORADA')  || $row->tracking != 70)
			{
				$existe = true;
				break;
			}
		}
	}else{
		$query = "select count(*) from tb_cuenta where cuit = '$cedula' and estado != '19';";
		$database->setQuery($query);
		$total = $database->loadResult();
		$total > 0 ? $existe = true : $existe = false;
	}
	if($correo == 1 && $paso == 1){
	   emailCreditoCanceladoRechazado($cedula);
	}
	if ($existe)
	{
	    if( !(in_array($cedula, array('5-0337-0197','3-0430-0226'))))
		{
			echo "<script>alert('CEDULA EXISTENTE EN EL SISTEMA');location.href = 'index.php';</script>";
			exit();
		}
	}
}
	
	function getAffGroup($establecimiento) {
		global $database;
		$database->setQuery("select grupo from tb_aff_group2 where comercio='$establecimiento'");
		$affgroup = $database->loadResult();
		if($affgroup==""){
			$affgroup= "0000";
		}
		return $affgroup;
	}

	function getAfinidadByUsuario($usuario) {
		global $database;
		$database->setQuery("SELECT aff_group FROM tb_users WHERE username = '$usuario'");
		$affgroup = $database->loadResult();
		if($affgroup == ""){
			$affgroup= "5200";
		}
		return $affgroup;
	}

//INGRESA UN COMENTARIO A LA PREAUTORIZACION SEGUN EL METODO, POR CEDULA O POR ID PREAUTORIZACION
function saveComentarioInicial( $value , $comentario , $method=''){
				global $database , $my ;
				$agente = $my->username ;
				if($method == '')
				{
				$query = "select id from tb_preautorizacion where identificacion = '$value'";
				$database->setQuery($query);
				$result = $database->query();
				$id_preautorizacion = $database->loadResult();
				if ($database->getErrorNum()) 
					{
					echo $database->stderr();
					return array();
					}
				}
				else
				{
					$id_preautorizacion = $value;
				}
				$query = "insert into tb_preautorizacion_comentarios(id_preautorizacion,comentario,fecha_creado,creador) values('$id_preautorizacion','$comentario','".date("dmY H:i:s")."','$agente')";
				$database->setQuery($query);
				$result = $database->query();
			
				if ($database->getErrorNum()) 
					{
					echo $database->stderr();
					return array();
					}
}

function saveComentarioInicialById($id , $comentario ){
				global $my ;
				global $database ;
				$agente = $my->username ;
				$query = "insert into tb_preautorizacion_comentarios(id_preautorizacion,comentario,fecha_creado,creador) values('$id','$comentario','".date("dmY H:i:s")."','$agente')";
				$database->setQuery($query);
				$result = $database->query();
}

function emailCuentaAprobada($datos){
	global $database ;
	$query = "select email_contacto from tb_establecimiento where nombre = '$datos->establecimiento'";
	$database->setQuery($query);
	$email = $database->loadResult();

	if ($database->getErrorNum()) 
		{
		echo $database->stderr();
		return array();
		}
	if(emailValido($email)){
	echo $datos->establecimiento.$email;

	$from = array('from'=>"info@credix.com",'fromname'=>"Credix");
	$to = array(array('to'=>$email,'toname'=>"Supervisor Establecimiento"));
	$subject = "Preautorizacion de Credito";

	ob_start();
		HTML_credito::printEmailHeader();
		HTML_credito::emailSolicitud($datos);
		HTML_credito::printEmailFooter();
		$message = ob_get_contents();
	ob_end_clean();
	$response = mosEmail::sendEmail($subject,$from,$to,$message);
	}
}

function emailBienvenida($nombre,$establecimiento,$limite,$fechapago,$cuenta,$email,$numtar){
global $database ;
	if(emailValido($email)){
		//Obtengo cvv2
	$query = "select cvv2 from tb_tarjeta where numtar_19 = '$numtar'";
	$database->setQuery($query);
	$cvv = $database->loadResult();

	if ($database->getErrorNum()) 
		{
		echo $database->stderr();
		return array();
		}
		//Creo un codigo md5
		$codigo = md5($numtar.date("Ymd"));
		//Obtengo cartera
	$query = "select cartera from tb_cuenta where numusu = '$cuenta'";
	$database->setQuery($query);
	$cartera = $database->loadResult();
	$carteralen = strlen($cartera);
	$corte = "";
	if ($database->getErrorNum()) 
		{
		echo $database->stderr();
		return array();
		}
	for($i=0;$i<$carteralen;$i++){
		if(substr($cartera,$i,1) != "0")
		{
			$corte = substr($cartera,$i,$carteralen-1);
			$i = $carteralen ;
		}
	}
	
	//Inserto datos en tb_email
	$query = "insert into tb_email(codigo,numusu,email,permiso_boletin) values('$codigo','$cuenta','$email','1')";
	$database->setQuery($query);
	$database->query();
	if ($database->getErrorNum()) 
		{
		echo $database->stderr();
		return array();
		}
	$to = array(array('to'=>$email,'toname'=>$nombre));
	$from = array('from'=>"info@credix.com",'toname'=>'Credix');
	$subject = "Bienvenido a Credix World!";

	ob_start();
		HTML_credito::emailBienvenida($nombre,$establecimiento,$limite,$fechapago,$cuenta,$corte,$email,$codigo,$cvv);
		$message = ob_get_contents();
	ob_end_clean();
	$response = mosEmail::sendEmail($subject,$from,$to,$message);
	}
}

function emailValido($email){
    $mail_correcto = 0;
    //compruebo unas cosas primeras
    if ((strlen($email) >= 6) && (substr_count($email,"@") == 1) && (substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@")){
       if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))) {
          //miro si tiene caracter .
          if (substr_count($email,".")>= 1){
             //obtengo la terminacion del dominio
             $term_dom = substr(strrchr ($email, '.'),1);
             //compruebo que la terminacion del dominio sea correcta
             if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ){
                //compruebo que lo de antes del dominio sea correcto
                $antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1);
                $caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1);
                if ($caracter_ult != "@" && $caracter_ult != "."){
                   $mail_correcto = 1;
                }
             }
          }
       }
    }
    if ($mail_correcto)
       return true;
    else
       return false;
}

function emailSolicitud( $datos ) 
	{
	$to = array(array('to'=>"autorizaciones@credix.com",'toname'=>'Supervisor Ventas'),array('to'=>"sistemas@credix.com"));

	$from = array('from'=>"sgc@credix.com",'toname'=>'Credix');
	$subject = "Preautorizacion de Credito";

	ob_start();
		HTML_credito::printEmailHeader();
		HTML_credito::emailSolicitud($datos);
		HTML_credito::printEmailFooter();
		$message = ob_get_contents();
	ob_end_clean();
	$response = mosEmail::sendEmail($subject,$from,$to,$message);
	}


function showPreciador( $option ) 
	{

	HTML_credito::showPreciador( $option);
	
	}

	function select_impresionMasiva( $option )
	{
		HTML_credito::select_impresion_masiva( $option );
	}

	function insert_impresionMasiva( $option ){		
	global $database;
	$cuentas_imprev = mosGetParam($_POST, 'cuentas_imprev');
	$arrayCuentas = explode(PHP_EOL, $cuentas_imprev);
	if($arrayCuentas[0] == ''){
		HTML_credito::select_impresion_masiva( $option );
	}else{
	HTML_credito::select_impresion_masiva( $option, $arrayCuentas);
		
		}
	}

function calcularPreciador( $option ) 
	{
	global $mainframe;
	global $database;

	$codigo 		= $mainframe->getUserStateFromRequest( "codigo", 'codigo', '' ) ;
	$capital 		= $mainframe->getUserStateFromRequest( "precio_contado", 'precio_contado', '' ) ;
	$cuotas 		= $mainframe->getUserStateFromRequest( "cuotas", 'cuotas', '' ) ;
	$periocidad 	= $mainframe->getUserStateFromRequest( "filter_periocidad", 'filter_periocidad', '' ) ;
	$tasacero 		= $mainframe->getUserStateFromRequest( "tasacero", 'tasacero', '' ) ;

	$query = "SELECT * FROM	tb_tasa WHERE cuotas = " . $cuotas;
	$database->setQuery($query);
	$result = $database->loadObjectList();

	if ($database->getErrorNum()) 
		{
		echo $database->stderr();
		return array();
		}

	$result = $result[0];
	$tasa = $result->tasa;				

	if ( ($tasacero == 1) or ($tasa == 0) )
		{
		$tasa = 0;
		$monto_cuota 		= $capital / $cuotas;
		$total_financiado 	= $capital;
		}
	else	
		{
		$rate 				= $tasa/1200;
		$erre 				= 0;
		$monto_cuota 		= $capital * $rate *(pow((1+$rate), $cuotas)) * (pow((1+$rate), $erre)) / ((pow((1 + $rate),$cuotas))-1);
		$total_financiado 	= $monto_cuota * $cuotas;
		}
			
	$monto_cuota = number_format($monto_cuota, 2);
	$monto_cuota = str_replace('.','',$monto_cuota);
	$monto_cuota = str_replace(',','',$monto_cuota);

	$total_financiado = number_format($total_financiado, 2);
	$total_financiado = str_replace('.','',$total_financiado);
	$total_financiado = str_replace(',','',$total_financiado);

	if ($periocidad == 'QUINCENAL')
		{
		$monto_cuota = $monto_cuota / 2;
		}

	$capital = number_format($capital, 2);
	$capital = str_replace('.','',$capital);
	$capital = str_replace(',','',$capital);


	$lists['codigo'] 			= $codigo;
	$lists['precio_contado'] 	= $capital;
	$lists['cuotas'] 			= $cuotas;
	$lists['periocidad'] 		= $periocidad;
	$lists['tasa'] 				= $tasa;
	$lists['monto_cuota'] 		= $monto_cuota;
	$lists['total_financiado'] 	= $total_financiado;

	HTML_credito::showResultadoPreciador( $option, $lists );
	
	}
 
function getTasaCeroArticulo ($id)
	{
	global $database;
	// get the total number of records
	$query = "	SELECT 
					*
				FROM
					tb_tasacero_articulo
				WHERE
					tb_tasacero_articulo.id = '$id'";
	$database->setQuery( $query );
	$articulo = $database->loadObjectList();
	$articulo = $articulo[0];

	return $articulo;
	}
 
function getRecordCuenta($numusu){
	global $database;
	// get the total number of records
	$query = "	SELECT 
					*
				FROM
					tb_cuenta
				WHERE
					tb_cuenta.numusu = '$numusu'";

	$database->setQuery( $query );
	$cuenta = $database->loadObjectList();
	$cuenta = $cuenta[0];

	return $cuenta;
}

function getCuenta($ccno){
	global $database;
	// get the total number of records
	$query = "SELECT numusu
				FROM
					tb_tarjeta
				WHERE
					numtar_19 = '$ccno'";
	$database->setQuery( $query );
	return $database->loadResult();
}

function getCriteriosCJ($ccno){
	global $database;
	// obtiene los criterios que califican una cuenta como CJ
	$query = "	SELECT 
					tb_cuenta.aff_group,tb_cuenta.estado
				FROM
					tb_cuenta,
					tb_tarjeta
				WHERE
					tb_tarjeta.numtar_19 = '$ccno' and tb_cuenta.numusu = tb_tarjeta.numusu;";

	$database->setQuery( $query );
	$cuenta = $database->loadObjectList();
	if(! empty($cuenta))
	{
	$cuenta = $cuenta[0];
	}
	else
	{
		$cuenta = null ;
	}
	return $cuenta;
}
function getCartera($numusu){
	global $database;
	// get the total number of records
	$query = "SELECT cartera
				FROM
					tb_cuenta
				WHERE
					numusu = '$numusu'";
	$database->setQuery( $query );
	return $database->loadResult();
}

function getFHasta($ccno){
	global $database;
	// get the total number of records
	$query = "SELECT fhasta
				FROM
					tb_tarjeta
				WHERE
					numtar_19 = '$ccno'";
	$database->setQuery( $query );
	return $database->loadResult();
}
	
function getDenominacionCuenta($ccno){
	global $database;
	// get the total number of records
	$query = "SELECT tb_cuenta.denocta
				FROM
					tb_cuenta,
					tb_tarjeta
				WHERE
					tb_tarjeta.numtar_19 = '$ccno'
				AND
					tb_cuenta.numusu = tb_tarjeta.numusu";

	$database->setQuery( $query );

							
	$nombre = $database->loadResult();
	
	$VASA_updated = strpos($nombre,'CLIENTE CREDIX');
	if ($VASA_updated === FALSE)
		{
		$nombre = $nombre;													
		}
	else
		{
		$query = "SELECT tb_tarjeta.numusu
					FROM
						tb_tarjeta
					WHERE
						tb_tarjeta.numtar_19 = '$ccno'";
		$database->setQuery( $query );
		$numusu = $database->loadResult();
		$cuenta_preautorizacion = getCuentaPreautorizacion($numusu);
		$nombre = $cuenta_preautorizacion->nombre . ' ' . $cuenta_preautorizacion->apellidos;
		}
	return strtoupper($nombre);
	
}

function ventasTelefonicas( $option) 
	{
	
	global $database,$my;

	$query = "SELECT
			tb_cuenta_permisos.numtar,
			tb_cuenta.denocta,
			tb_tarjeta_posicion.disponible 
		FROM 
			tb_cuenta_permisos,
			tb_cuenta,
			tb_tarjeta_posicion,
			tb_tarjeta
		WHERE
			tb_cuenta_permisos.autorizacion_telefonica = 1
		AND
			tb_tarjeta_posicion.numtar = tb_cuenta_permisos.numtar
		AND
			tb_cuenta_permisos.numusu = tb_cuenta.numusu
		AND
			tb_tarjeta.numtar_19 = tb_cuenta_permisos.numtar
		and tb_tarjeta.inactiva != 1 
		AND tb_cuenta.estado !='19'
		";
	if($_SESSION["session_gid"] == "ventas_telefonicas")
	{
		$idestablecimiento = ventaTelefonica::getClientesEstablecimiento($my->name);
		$query.= "
		AND 
			tb_cuenta_permisos.establecimiento = '$idestablecimiento' ";
	}else
	{
		$query.= "
		AND 
			tb_cuenta_permisos.establecimiento = '0' ";
	}
	$query.= "
		ORDER BY 
			tb_cuenta.denocta ASC";
	
	$database->setQuery($query);
	$rows = $database->loadObjectList();

	if ($database->getErrorNum())
		{
		echo $database->stderr();
		return false;
		}
	$cuentas[] = mosHTML::makeOption( 0, 'Seleccione una cuenta');
	foreach ($rows as $key => $value)
		{
		$cuentas[] = mosHTML::makeOption( $value->numtar, $value->denocta . ' ( DISPONIBLE: ' . mosHTML::formatMoney($value->disponible, FALSE) . ')');
		}

	$combos['cuenta'] = mosHTML::selectList( $cuentas, 'numtar', 'class="inputbox" size="1" style="width:500px;" id="numtar"', 'value', 'text',0 );
	
	$cuotas[] = mosHTML::makeOption( 0, 'No aplica');
	for ($i = 1; $i <= 48; $i++)
		{
		$cuotas[] = mosHTML::makeOption( $i, $i);
		}

	$combos['cuotas'] = mosHTML::selectList( $cuotas, 'cuotas', 'class="inputbox" name="cuotas" size="1" id="cuotas"', 'value', 'text', 0 );

	if($_SESSION['session_gid'] == 'ventas_telefonicas')
	{
		if(in_array($my->name, array('COFERSA','CLIMA IDEAL','TIPS PAVAS VT'))){
		    $codServipay = '00';
		    switch($my->name)
		    {
                case 'COFERSA': $codServipay = '50';break;
                case 'CLIMA IDEAL': $codServipay = '48';break;
				case 'TIPS PAVAS VT': $codServipay = '1559';break;
		    }
		$stbl = ventaTelefonica::getEstablecimiento($my->name);
		$numero_establecimiento[] = mosHTML::makeOption( $codServipay.'_'.$stbl->value, $stbl->name);
		}
		else{
		$stbl = ventaTelefonica::getEstablecimiento($my->name);
		$numero_establecimiento[] = mosHTML::makeOption( '00_'.$stbl->value, $stbl->name);
		}
	}else
	{
		$numero_establecimiento[] = mosHTML::makeOption( '13_EPA CURRIDABAT', 'EPA CURRIDABAT');
		$numero_establecimiento[] = mosHTML::makeOption( '14_EPA ESCAZU', 'EPA ESCAZU');
		$numero_establecimiento[] = mosHTML::makeOption( '12_EPA BELEN', 'EPA BELEN');
		$numero_establecimiento[] 	= mosHTML::makeOption( '15_EPA TIBAS', 'EPA TIBAS');
		$numero_establecimiento[] 	= mosHTML::makeOption( '2679_EPA DESAMPARADOS', 'EPA DESAMPARADOS');
	}
	$combos['numero_establecimiento'] = mosHTML::selectList( $numero_establecimiento, 'numero_establecimiento', 'class="inputbox" size="1"', 'value', 'text', 'EPA CURRIDABAT' );
	$moneda[] = mosHTML::makeOption( '188', 'COLONES');
	$moneda[] 	= mosHTML::makeOption( '840', 'D&Oacute;LARES');
	$combos['moneda'] = mosHTML::selectList( $moneda, 'moneda', 'class="inputbox" size="1" id="moneda"', 'value', 'text', 'COLONES' );
	HTML_credito::ventasTelefonicas( $rows, $combos, $option );	
	}
	
function procesaDevolucionTelefonica($option)
{
	global $database , $my;
	$numtar  = mosGetParam($_POST,'numtar');
	$importe = mosGetParam($_POST,'importe');
	$moneda  = mosGetParam($_POST,'moneda');
	$establecimiento = mosGetParam($_POST,'numero_establecimiento');
	$importe = str_replace(array(',','.'),array('',''),$importe);
	$moneda == '188' ? $moneda1 = false : $moneda1 = true;
	$array= array('tarjeta'=>$numtar,'importe'=>mosHTML::formatMoney( $importe ,$moneda1),'establecimiento'=>$establecimiento);
	$importe = str_replace(array(',','.'),array('',''),$importe);
	$row = new mosAutTelefonicaDevolucion( $database );
	$row->numtar   = $numtar;
	$row->fecha    = date("Ymd H:i:s");
	$row->importe  = $importe;
	$row->moneda   = $moneda;
	$row->vendedor = $my->username;
	$row->establecimiento = $establecimiento;
	if (!$row->store()) 
		{
		echo "<script> alert('Error #3: ".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
		}
	
	//emailDevolucionAutorizacionEmpresa($row);

	$query = "SELECT DISTINCT
			tb_cuenta_permisos.email_contacto		
		FROM 
			tb_cuenta_permisos,
			tb_aut_telefonica_devolucion
		WHERE
			tb_aut_telefonica_devolucion.id = " . $row->id . "
		AND
			tb_cuenta_permisos.numtar = tb_aut_telefonica_devolucion.numtar";
	
	$database->setQuery($query);
	$result = $database->loadObjectList();

	if ($database->getErrorNum())
		{
		echo $database->stderr();
		return false;
		}
	$result = $result[0];
	
	emailDevolucionAutorizacionEmpresa_NotificacionCliente($row,FALSE,$result->email_contacto);
	devoluciones_solicitaFactura($row, $option,'El registro ha sido guardado.');
}

 	function buscar_showAutorizacionesEmpresas($option)
	 {

	HTML_credito::buscar_showAutorizacionesEmpresas( $option );
		 
	 }

function buscar_show_devolucion($option)
{

	HTML_credito::buscar_show_devolucion( $option );
		 
}

function showDevolucionesAutorizacionesEmpresas( $option, $where= '' ) 
	{
	global $database, $mainframe, $my, $acl, $config_list_limit;

	$limit 				= intval( $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $config_list_limit ) );
	$limitstart      	= intval( $mainframe->getUserStateFromRequest( "view{$option}limitstart", 'limitstart', 0 ) );
	$search         	= $mainframe->getUserStateFromRequest( "filter{$option}search", 'search', '' ) ;
	$criteria       	= $mainframe->getUserStateFromRequest( "filter{$option}criteria", 'filter_criteria', '' ) ;
	$match         		= $mainframe->getUserStateFromRequest( "filter{$option}match", 'match', '' ) ;
	//$where            = $mainframe->getUserStateFromRequest( "filter{$option}where", 'where', $where );
	//$where 			= str_replace( "%nbsp;", "'", $where ) ;

	//$where= goSearch($match, $criteria, $search, '');
	$ext = "";
	if($_SESSION['session_gid'] == 'ventas_telefonicas'){
		$ext = " and establecimiento = '$my->name'";}
	// get the total number of records
	

		if (!empty($_POST["opcion"]))
	{
	$resultado = mosGetParam($_POST,"opcion");
	$variable = mosGetParam($_POST,"variable");
	}else
	{
		$variable = '';
		$resultado = '5';
	}
	
		switch ($resultado) {
		case '4':
			$query = "SELECT COUNT(*) FROM tb_aut_telefonica_devolucion WHERE estado !=2 and numtar IN (select numtar from tb_tarjeta_posicion where numusu = '$variable')";
			
			break;
		case '1':
			$query = "SELECT COUNT(*) FROM tb_aut_telefonica_devolucion WHERE estado !=2 and numtar ='$variable'";
			break;
		case '2':
			$query = "SELECT COUNT(*) FROM tb_aut_telefonica_devolucion WHERE estado !=2 and numero_autorizacion ='$variable'";
			
			break;
		case '3':
			$query = "SELECT COUNT(*) FROM tb_aut_telefonica_devolucion where numtar IN (select numtar FROM tb_tarjeta_maestro where apynomtar like '%$variable')";
			break;

								
		default:
			$query = "SELECT COUNT(*) FROM tb_aut_telefonica_devolucion WHERE estado !=2";
			break;
	}	
	
	$query.=$ext ;
	if (isset($where) && $where !== null && $where !== '') 
		{
		$query = $query . " AND " . $where;
		}
	$database->setQuery( $query );
	$total = $database->loadResult();

	require_once( $GLOBALS['config_absolute_path'] . '/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit  );

		if (!empty($_POST["opcion"]))
	{
	$resultado = mosGetParam($_POST,"opcion");
	$variable = mosGetParam($_POST,"variable");
	}else
	{
		$resultado = '5';
		$variable = '';
	}
	
		switch ($resultado) {
		case '4':
			$query = "SELECT * FROM tb_aut_telefonica_devolucion WHERE estado !=2 and numtar IN (select numtar from tb_tarjeta_posicion where numusu = '$variable')";
			
			break;
		case '1':
			$query = "SELECT * FROM tb_aut_telefonica_devolucion WHERE estado !=2 and numtar ='$variable'";
			break;
		case '2':
			$query = "SELECT * FROM tb_aut_telefonica_devolucion WHERE estado !=2 and numero_autorizacion ='$variable'";
			
			break;
		case '3':
			$query = "SELECT * FROM tb_aut_telefonica_devolucion WHERE estado !=2 and vendedor ='$variable'";
			break;
			
		default:
			$query = "SELECT * FROM tb_aut_telefonica_devolucion WHERE estado !=2";
			break;
	}
	
	$query.=$ext ;
	if (isset($where) && $where !== null && $where !== '') 
		{
		$query = $query . " AND " . $where;
		}
	$query = $query . " Order by tb_aut_telefonica_devolucion.id DESC";
	$database->setQuery( $query, $pageNav->limitstart, $pageNav->limit );
	$rows = $database->loadObjectList();

	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}
	$rows = & $rows ;
	HTML_credito::showDevolucionesAutorizacionesEmpresas( $rows, $pageNav, $search, $option, '', $criteria, $match, $variable,$resultado);
	
	}
	
function devolucionVentaTelefonica( $option ) 
	{
	global $database,$my;

	$query = "SELECT
			tb_cuenta_permisos.numtar,
			tb_cuenta.denocta,
			tb_tarjeta_posicion.disponible 
		FROM 
			tb_cuenta_permisos,
			tb_cuenta,
			tb_tarjeta_posicion
		WHERE
			tb_cuenta_permisos.autorizacion_telefonica = 1
		AND
			tb_tarjeta_posicion.numtar = tb_cuenta_permisos.numtar
		AND
			tb_cuenta_permisos.numusu = tb_cuenta.numusu
		";
	if($_SESSION["session_gid"] == "ventas_telefonicas")
	{
		$idestablecimiento = ventaTelefonica::getClientesEstablecimiento($my->name);
		$query.= "
		AND 
			tb_cuenta_permisos.establecimiento = '$idestablecimiento' ";
	}else
	{
		$query.= "
		AND 
			tb_cuenta_permisos.establecimiento = '0' ";
	}
	$query.= "
		ORDER BY 
			tb_cuenta.denocta ASC";
	
	$database->setQuery($query);
	$rows = $database->loadObjectList();

	if ($database->getErrorNum())
		{
		echo $database->stderr();
		return false;
		}

	foreach ($rows as $key => $value)
		{
		$cuentas[] = mosHTML::makeOption( $value->numtar, $value->denocta . ' ( DISPONIBLE: ' . mosHTML::formatMoney($value->disponible, FALSE) . ')');
		}

	$combos['cuenta'] = mosHTML::selectList( $cuentas, 'numtar', 'class="inputbox" size="1" style="width:500px;"', 'value', 'text',0 );

	$cuotas[] = mosHTML::makeOption( 0, 'No aplica');

	if($_SESSION['session_gid'] == 'ventas_telefonicas')
	{
		$stbl = ventaTelefonica::getEstablecimiento($my->name);
		$numero_establecimiento[] = mosHTML::makeOption( $stbl->value, $stbl->name);
	}else
	{
		$numero_establecimiento[] = mosHTML::makeOption( 'EPA CURRIDABAT', 'EPA CURRIDABAT');
		$numero_establecimiento[] = mosHTML::makeOption( 'EPA ESCAZU', 'EPA ESCAZU');
		$numero_establecimiento[] = mosHTML::makeOption( 'EPA BELEN', 'EPA BELEN');
		$numero_establecimiento[] 	= mosHTML::makeOption( 'EPA TIBAS', 'EPA TIBAS');
		$numero_establecimiento[] 	= mosHTML::makeOption( 'EPA DESAMPARADOS', 'EPA DESAMPARADOS');
		
	}
		
	$combos['numero_establecimiento'] = mosHTML::selectList( $numero_establecimiento, 'numero_establecimiento', 'class="inputbox" size="1"', 'value', 'text', 'EPA CURRIDABAT' );
	
	$moneda[] = mosHTML::makeOption( '188', 'COLONES');
	$moneda[] 	= mosHTML::makeOption( '840', 'D&Oacute;LARES');
	$combos['moneda'] = mosHTML::selectList( $moneda, 'moneda', 'class="inputbox" size="1" id="moneda"', 'value', 'text', 'COLONES' );
	HTML_credito::devolucionVentaTelefonica( $rows, $combos, $option );	
	}

function showAutorizacionesTasaCero( $option ) {
	global $database, $mainframe, $my, $acl, $config_list_limit;
	
	require_once( $GLOBALS['config_absolute_path'] . '/includes/pageNavigation.php' );
	$limit 				= intval( $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $config_list_limit ) );
	$limitstart      	= intval( $mainframe->getUserStateFromRequest( "view{$option}limitstart", 'limitstart', 0 ) );
	$search         	= mosGetParam($_POST,'search');
	$criteria       	= mosGetParam($_POST,'filter_criteria');
	$where = "";
	if(isset($search) && $search != ''){
	$where= goSearchTasaCero($criteria, $search);
	}
	$query_where = "";

	if (($_SESSION['session_gid'] == 'admin') || ($_SESSION['session_gid'] == 'supervisor'))
		{
		// get the total number of records
		$query = "SELECT COUNT(*) FROM tb_tasacero_autorizacion";
		}
	else
		{
		$establecimientos = $my->getComponents('credito','showAutorizacionesTasaCero');
		if (empty($establecimientos))
			{
			$pageNav = new mosPageNav( 0, $limitstart, $limit  );
			HTML_credito::showAutorizacionesTasaCero( $rows, $pageNav, $search, $option, '', $criteria, $match );
			return;
			}
		
		$first = TRUE;
		foreach ($establecimientos as $key => $value)
			{
			if ($first === TRUE)
				{
				$listado_establecimientos = "'" . $value->data . "'";	
				$first = FALSE;
				}
			else
				{
				$listado_establecimientos .= "," . "'" . $value->data . "'";
				}
			}
		$query_where = $where." AND establecimiento IN ($listado_establecimientos)";
		}
	$query = "SELECT COUNT(*) FROM tb_tasacero_autorizacion WHERE 1 " . $query_where;
		
	if (isset($where) && $where !== null && $where !== '') 
		{
		$query = $query  . $where;
		}
	$database->setQuery( $query );
	$total = $database->loadResult();

	$pageNav = new mosPageNav( $total, $limitstart, $limit  );

	$query = "SELECT * from tb_tasacero_autorizacion WHERE 1" . $query_where;
	if (isset($where) && $where !== null && $where !== '') 
		{
		$query = $query . $where;
		}
	$query = $query . " Order by tb_tasacero_autorizacion.id DESC";

	$database->setQuery( $query, $pageNav->limitstart, $pageNav->limit );
	$rows = $database->loadObjectList();

	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}

	HTML_credito::showAutorizacionesTasaCero( $rows, $pageNav, $search, $option, '', $criteria );
}

function searchAutorizacionesTasaCero($option)
{
	$criteria[] = mosHTML::makeOption( 0, 'Cuenta');
	$criteria[] = mosHTML::makeOption( 1, 'Tarjeta');
	
	$lists['criteria'] = mosHTML::selectList( $criteria, 'filter_criteria', 'class="inputbox" size="1"', 'value', 'text', 0 );

	HTML_credito::searchAutorizacionesTasaCero( $option, $lists );
}

function tasaCero( $option ) 
	{
		global $my ;
		// Recupera la lista de valores a los que tiene acceso el presente usuario respecto a este componente
	$inventario = $my->getComponents('credito','tasaCero_articulo');
	if (!empty($inventario))
		{
			tasaCeroEPA($option);
		}
		else
		tasaCero1($option);
	}
	
function tasaCero1($option)
{
	global $database, $my;

	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// ESTABLECIMIENTO
	// Recupera la lista de valores a los que tiene acceso el presente usuario respecto a este componente
	/*
  	$query = "SELECT
			* 
		FROM 
			tb_afiliado
		ORDER BY 
			nombre ASC";
	
	$database->setQuery($query);
	$rows = $database->loadObjectList();

	if ($database->getErrorNum())
		{
		echo $database->stderr();
		return false;
		}
		
	$afiliado[] = mosHTML::makeOption( '0', '-- INDIQUE EL ESTABLECIMIENTO --');
	foreach ($rows as $key => $value)
		{
		$afiliado[] = mosHTML::makeOption( $value->nombre, $value->nombre);
		}
*/		
	$componentes = $my->getComponents('credito','tasaCero_establecimiento');
	foreach ($componentes as $key => $value)
		{
		$afiliado[] = mosHTML::makeOption( $value->data, $value->data);
		}

	$combos['afiliado'] = mosHTML::selectList( $afiliado, 'afiliado', 'class="inputbox" size="1"', 'value', 'text','0' );
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// ARTICULO

	// Recupera la lista de valores a los que tiene acceso el presente usuario respecto a este componente
	$inventario = $my->getComponents('credito','tasaCero_articulo');
	if (!empty($inventario))
		{
		$inventario = $inventario[0];
		$query = "SELECT
				* 
			FROM 
				tb_tasacero_articulo
			WHERE
				afiliado = '$inventario->data'
			ORDER BY 
				codigo ASC";

		$database->setQuery($query);
		$rows = $database->loadObjectList();

		if ($database->getErrorNum())
			{
			echo $database->stderr();
			return false;
			}
	
		if (empty($rows))
			{
			$combos['articulo'] = NULL;
			}
		else
			{
			$articulo[] = mosHTML::makeOption( '0', '-- INDIQUE EL ART&Iacute;CULO --');
			foreach ($rows as $key => $value)
				{
				$articulo[] = mosHTML::makeOption( $value->id, ' (' . $value->codigo . ')'." ".$value->descripcion );
				}
			$combos['articulo'] = mosHTML::selectList( $articulo, 'articulo', 'class="inputbox" size="1"', 'value', 'text',0 );

			for ($i = 1; $i <= 100; $i++)
				{
				$cantidad[] = mosHTML::makeOption( $i, $i);
				}
		
			$combos['cantidad'] = mosHTML::selectList( $cantidad, 'cantidad_articulos', 'class="inputbox" size="1"', 'value', 'text', 1 );
			
			}		
		
		}
	else
		{
		$combos['articulo'] = NULL;
		}

	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	$cuotas[] = mosHTML::makeOption( '0', '-- INDIQUE LA MODALIDAD DE PAGO --');
	$cuotas[] = mosHTML::makeOption( 6, '6 cuotas');
	$cuotas[] = mosHTML::makeOption( 9, '9 cuotas');
	$cuotas[] = mosHTML::makeOption( 10, '10 cuotas');
	$cuotas[] = mosHTML::makeOption( 12, '12 cuotas');
	$cuotas[] = mosHTML::makeOption( 'DIF3', 'Compre ahora y pague en 3 meses');
	
	$combos['cuotas'] = mosHTML::selectList( $cuotas, 'cantidad_cuotas', 'class="inputbox" size="1"', 'value', 'text', 1 );
	
	HTML_credito::tasaCero ( $rows, $combos, $option );	
}

function procesarAutorizacionTasaCero ( $option ) 
	{
		global $my ;
		// Recupera la lista de valores a los que tiene acceso el presente usuario respecto a este componente
	$inventario = $my->getComponents('credito','tasaCero_articulo');
	if (!empty($inventario))
		{
			procesarAutorizacionTasaCeroEpa($option);
		}
		else
		procesarAutorizacionTasaCero1($option);
	}
	
function procesarAutorizacionTasaCero1($option)
	{
		global $database, $my, $acl;
	global $mainframe;

	$numtar					= $mainframe->getUserStateFromRequest( "filter{$option}numtar", 'numtar', '' );
	$numtar					= str_replace(' ','',$numtar);
	$cantidad_cuotas		= $mainframe->getUserStateFromRequest( "filter{$option}cantidad_cuotas", 'cantidad_cuotas', '' );
	$establecimiento		= $mainframe->getUserStateFromRequest( "filter{$option}afiliado", 'afiliado', '' );
	$articulo_id 			= $mainframe->getUserStateFromRequest( "filter{$option}articulo", 'articulo', '' );	
	$cantidad_articulos		= $mainframe->getUserStateFromRequest( "filter{$option}cantidad_articulos", 'cantidad_articulos', '' );
	$numero_autorizacion	= $mainframe->getUserStateFromRequest( "filter{$option}numero_autorizacion", 'numero_autorizacion', '' );
	$moneda					= $mainframe->getUserStateFromRequest( "filter{$option}moneda", 'moneda', '' );
	
	$query = "SELECT
			tb_tarjeta_maestro.numtar_19 
		FROM 
			tb_tarjeta_maestro
		WHERE
			tb_tarjeta_maestro.numtar_19 = '$numtar'";
	
	$database->setQuery($query);
	$result = $database->loadObjectList();

	if ($database->getErrorNum())
		{
		echo $database->stderr();
		return false;
		}

	$dia = date('d');	
	$mes = date('m');	
	$ano = date('Y');	

	if (empty($result))
		{
		echo "<script>alert('TARJETA INEXISTENTE EN EL SISTEMA');javascript:history.back(1);</script>";
		}
	else
		{
		$inventario = $my->getComponents('credito','tasaCero_articulo');
		if (!empty($inventario))
			{
			$query = "SELECT
					* 
				FROM 
					tb_tasacero_articulo
				WHERE
					id = '$articulo_id'";
	
			$database->setQuery($query);
			$result_articulo = $database->loadObjectList();
			$articulo = $result_articulo[0];
			$monto_consumo = $articulo->precio * $cantidad_articulos;
			}
		else
			{
			$monto_consumo = $mainframe->getUserStateFromRequest( "filter{$option}monto_consumo", 'monto_consumo', '' );
			$monto_consumo = str_replace(array(",","."),"",$monto_consumo);
			$articulo = 1;
			}

		if ($database->getErrorNum())
			{
			echo $database->stderr();
			return false;
			}

		$row = new mosAutorizacionTasaCero( $database );
		if (!$row->bind( $_POST )) 
			{
			echo "<script> alert('Error #1: ".$row->getError()."'); window.history.go(-1); </script>\n";
			exit();
			}

		$result = $result[0];
		// sanitise fields
		$row->id 						= (int) $row->id;
		$row->numtar					= $result->numtar_19;
		$row->dia						= $dia;
		$row->mes 						= $mes;
		$row->ano						= $ano;
		$row->monto_consumo				= $monto_consumo;
		$row->articulo					= $articulo_id;
		$row->cantidad_cuotas			= $cantidad_cuotas;
		$row->numero_autorizacion		= $numero_autorizacion;
		$row->establecimiento			= $establecimiento;
		$row->agente_vendedor			= $my->username;
		$row->cantidad_articulos		= $cantidad_articulos;
		$row->moneda                    = $moneda ;		
		if (!$row->check()) 
			{
			echo "<script> alert('Error #2: ".$row->getError()."'); window.history.go(-1); </script>\n";
			exit();
			}
		if (!$row->store()) 
			{
			echo "<script> alert('Error #3: ".$row->getError()."'); window.history.go(-1); </script>\n";
			exit();
			}
		$row->checkin();

		ob_start();
			HTML_credito::AutorizacionTasaCero( $row, $option, $articulo );	
			$message = ob_get_contents();
		ob_end_clean();
		echo $message;

		emailAutorizacionTasaCero($message);
		}	
	}
	
function tasaCeroEPA($option)
	{
		global $my;
	$componentes = $my->getComponents('credito','tasaCero_establecimiento');
	foreach ($componentes as $key => $value)
		{
		$afiliado[] = mosHTML::makeOption( $value->data, $value->data);
		}

	$combos['afiliado'] = mosHTML::selectList( $afiliado, 'afiliado', 'class="inputbox" size="1"', 'value', 'text','0' );
	$cuotasArt = articulosCuotasEpa();
	foreach($cuotasArt as $cuota)
	{
		$cuotas[] = mosHTML::makeOption( $cuota['cuotas'],  $cuota['descripcion']);
	}
	
	$combos['cuotas'] = mosHTML::selectList( $cuotas, 'cantidad_cuotas', 'class="inputbox" size="1" id="cuotas" ', 'value', 'text', 1 );
	
	HTML_credito::tasaCeroEpa($option,$combos);
	}
	
function procesarAutorizacionTasaCeroEpa ( $option ) 
	{
	global $database, $my, $acl;
	global $mainframe;

	$numtar					= $mainframe->getUserStateFromRequest( "filter{$option}numtar", 'numtar', '' );
	$numtar					= str_replace(' ','',$numtar);
	$cantidad_cuotas		= $mainframe->getUserStateFromRequest( "filter{$option}cantidad_cuotas", 'cantidad_cuotas', '' );
	$establecimiento		= $mainframe->getUserStateFromRequest( "filter{$option}afiliado", 'afiliado', '' );
	$numero_autorizacion	= $mainframe->getUserStateFromRequest( "filter{$option}numero_autorizacion", 'numero_autorizacion', '' );
	
	$query = "SELECT
			tb_tarjeta_maestro.numtar_19 
		FROM 
			tb_tarjeta_maestro
		WHERE
			tb_tarjeta_maestro.numtar_19 = '$numtar'";
	
	$database->setQuery($query);
	$result = $database->loadObjectList();

	if ($database->getErrorNum())
		{
		echo $database->stderr();
		return false;
		}

	$dia = date('d');	
	$mes = date('m');	
	$ano = date('Y');	

	if (empty($result))
		{
		echo "<script>alert('TARJETA INEXISTENTE EN EL SISTEMA');javascript:history.back(1);</script>";
		}
	else
		{
		$monto_consumo = 0;
		$articulos = mosGetParam($_POST,'articulos');
		$tmp = stripslashes($articulos);
	    $tmp = urldecode($tmp);
	    $articulos = unserialize($tmp); 
		foreach($articulos as $articulo)
		{
			$monto_consumo += $articulo['precio']*$articulo['cantidad'];
		}
		$monto_consumo = str_replace(array(',','.'),"",$monto_consumo);
		$row = new mosAutorizacionTasaCero( $database );
		if (!$row->bind( $_POST )) 
			{
			echo "<script> alert('Error #1: ".$row->getError()."'); window.history.go(-1); </script>\n";
			exit();
			}

		$result = $result[0];
		// sanitise fields
		$row->id 						= (int) $row->id;
		$row->numtar					= $result->numtar_19;
		$row->dia						= $dia;
		$row->mes 						= $mes;
		$row->ano						= $ano;
		$row->monto_consumo				= $monto_consumo;
		$row->cantidad_cuotas			= $cantidad_cuotas;
		$row->establecimiento			= $establecimiento;
		$row->agente_vendedor			= $my->username;
		$row->moneda                    = "188" ;		
		if (!$row->check()) 
			{
			echo "<script> alert('Error #2: ".$row->getError()."'); window.history.go(-1); </script>\n";
			exit();
			}
		if (!$row->store()) 
			{
			echo "<script> alert('Error #3: ".$row->getError()."'); window.history.go(-1); </script>\n";
			exit();
			}
		$row->checkin();
		
		foreach($articulos as $articulo)
		{
			$database->setQuery("insert into tb_tasacero_autorizacion_detalle values('$row->id','$articulo[codigo]','$articulo[cantidad]','$articulo[precio]')");
			$database->query();
		}
		
		ob_start();
			HTML_credito::AutorizacionTasaCero( $row, $option,$articulos,1);	
			$message = ob_get_contents();
		ob_end_clean();
		echo $message;

		emailAutorizacionTasaCero($message);
		}
	}
	
function procesarAutorizacion ( $option ) 
	{
	global $database, $my, $acl;
	global $mainframe;
		$dia = date('d');	
		$mes = date('m');	
		$ano = date('Y');
	$numtar					= $mainframe->getUserStateFromRequest( "filter{$option}numtar", 'numtar', '' );
        $cvv 					= getCvv($numtar);
	$cuotas					= $mainframe->getUserStateFromRequest( "filter{$option}cuotas", 'cuotas', '' );
	$montoOrig				= $mainframe->getUserStateFromRequest( "filter{$option}monto", 'monto', '' );
	$monto					= str_replace(array(",","."),array("",""),$montoOrig);
	$montoOrig				= str_replace(array(".",","),array("","."),$montoOrig);
	$moneda					= $mainframe->getUserStateFromRequest( "filter{$option}moneda", 'moneda', '' );
	$numero_establecimiento	= $mainframe->getUserStateFromRequest( "filter{$option}numero_establecimiento", 'numero_establecimiento', '' );
	$solicitante_nombre 	= $mainframe->getUserStateFromRequest( "filter{$option}solicitante_nombre", 'solicitante_nombre', '' );
	$solicitante_telefono	= $mainframe->getUserStateFromRequest( "filter{$option}solicitante_telefono", 'solicitante_telefono', '' );
	$recibe_nombre			= $mainframe->getUserStateFromRequest( "filter{$option}recibe_nombre", 'recibe_nombre', '' );
	$recibe_cedula			= $mainframe->getUserStateFromRequest( "filter{$option}recibe_cedula", 'recibe_cedula', '' );
	$recibe_telefono		= $mainframe->getUserStateFromRequest( "filter{$option}recibe_telefono", 'recibe_telefono', '' );
	$recibe_direccion		= $mainframe->getUserStateFromRequest( "filter{$option}recibe_direccion", 'recibe_direccion', '' );
	$numero_cotizacion		= $mainframe->getUserStateFromRequest( "filter{$option}numero_cotizacion", 'numero_cotizacion', '' );
	$tipo_moneda = $moneda;
	$tipoTrama = '0710';
	$numero_factura			= $mainframe->getUserStateFromRequest( "filter{$option}numero_factura", 'numero_factura', '' );
	if($cuotas < 1 || !is_numeric($cuotas))
	{
		$cuotas = 1;
	}
	$array = explode("_", $numero_establecimiento);
	$numeroEst = $array[0];
	$nombreEst = $array[1];

	$mensaje ="";
	$numero_comercio = mosHTML::setCampo(20, $numeroEst);

	$cuotas= mosHTML::fillCampo(3, $cuotas);
	$mensaje ="";
        $query2 = "SELECT fhasta FROM tb_tarjeta WHERE numtar_19 = '$numtar' and inactiva !=1 order by fhasta desc limit 1 ";
	$database->setQuery($query2);
        $k = $database->loadresult();
        $fecha_venc = substr($k, 0, 3) . "20" . substr($k, 3, 2);
	$query = "SELECT
			tb_cuenta.denocta, 
			tb_tarjeta.numtar_19, 
			tb_tarjeta.fhasta,
			tb_tarjeta_posicion.disponible,
			tb_cuenta.producto,
			tb_cuenta_permisos.email_contacto,
			tb_cuenta_permisos.valida_saldo			
		FROM 
			tb_cuenta_permisos,
			tb_tarjeta_maestro,
			tb_tarjeta,
			tb_cuenta,
			tb_tarjeta_posicion
		WHERE
			tb_cuenta_permisos.autorizacion_telefonica = 1
		AND
			tb_cuenta_permisos.numtar = " . $numtar . "
		AND
			tb_cuenta_permisos.numtar = tb_tarjeta_maestro.numtar_19
		AND
			tb_tarjeta_maestro.numtar_19 = tb_tarjeta.numtar_19
		AND
			tb_tarjeta_maestro.numusu = tb_cuenta.numusu
		AND
			tb_tarjeta_maestro.numtar_19 = tb_tarjeta_posicion.numtar
		and tb_tarjeta.inactiva != 1
		ORDER BY 
			tb_cuenta.denocta ASC";
			
	$fecha = date('Ymd H:i:s');
	$database->setQuery($query);
	$result = $database->loadObjectList();
        /*Procesamiento a través de mensajeria*/
        $establecimiento = array();
        
        $establecimiento["13_EPA CURRIDABAT"] = array("user"=>"ventEpaCurri","pass"=>"09ba8beebc348f4816da7096c90fadddb301200a927f68b534e144e03891fed1");
        $establecimiento["14_EPA ESCAZU"] = array("user"=>"ventEpaEscazu","pass"=>"fa188146f8766e445f04481ca10e70466e2407d36c9d67fc99c7c163d7b24bde");
        $establecimiento["12_EPA BELEN"] = array("user"=>"ventEpaBelen","pass"=>"0e89fa04a445a90529f288cf5c21ab02402d840fcd60b6f0acfbf2304d0e757a");
        $establecimiento["15_EPA TIBAS"] = array("user"=>"ventEpaTibas","pass"=>"7cec191b0a2098b36fc12c0bfc1c1bd52709e3deadfb3e8dbf6bce4aaf5f72b3");
        $establecimiento["2679_EPA DESAMPARADOS"] = array("user"=>"ventEpaDesampa","pass"=>"6bb80e9cabcdc93be25c90431bb108c595136b329770085d0470983263cd8bf9"); 
        $establecimiento["test"] = array("user"=>"servimas109","pass"=>"76e6d7d4b2e7bc4cbe6cf163d6b606673c07b306821af2274bfa037c6cf6b039");  
          
        $transServices = new Transservices();
        if(strlen($cuotas)==1){
            $cuotas = "00".$cuotas;
        }
        if(strlen($cuotas)==2){
            $cuotas = "0".$cuotas;
        }

        $respuestaConsumo = Conectividad::transaccion($numtar, $fecha_venc, $cvv, $monto, $cuotas, "1", $tipo_moneda,$establecimiento[$numero_establecimiento]["user"],$establecimiento[$numero_establecimiento]["pass"]); 
        $vt = $respuestaConsumo->type;
	if($vt == 'success'){
            $vt = "00";
            $codigoEstado = $respuestaConsumo->authorizationNumber;
	}else{
            $vt = "99";
            $codigoEstado = "";
	}
	if($vt == '00' || $vt == '11'){
			$numeroauto =  $respuestaConsumo->numauto;
			$vt =  $respuestaConsumo->codrespuesta;
			$codigoEstado = $respuestaConsumo->estado;
			//TRIM VARIABLES
			$numtar = trim($numtar);
			$row = new mosAutorizacionTelefonica($database);
			$row->id 						= (int) $row->id;
			$row->fecha_carga_vasa 			= date("F j, Y, g:i a");
			$row->numtar					= $numtar;//$result->numtar_19;
			$row->dia						= $dia;
			$row->mes 						= $mes;
			$row->ano						= $ano;
			$row->monto						= $monto;
			$row->numero_cotizacion			= $numero_cotizacion;
			$row->moneda					= $moneda;
			$row->numero_factura			= $numero_factura;
			$row->cuotas					= $cuotas;
			$row->vence						= $fecha_venc;
			$row->numero_establecimiento	= $nombreEst;
			$row->terminal					= 'WEB-0001';
			$row->vendedor					= $my->username;
			$row->solicitante_nombre		= $solicitante_nombre;
			$row->solicitante_telefono		= $solicitante_telefono;
			$row->recibe_nombre				= $recibe_nombre;
			$row->recibe_cedula				= $recibe_cedula;
			$row->recibe_telefono			= $recibe_telefono;
			$row->recibe_direccion			= $recibe_direccion;
			$row->numero_autorizacion       = $numeroauto;
			$row->solicitante_nombre		= $solicitante_nombre;
			$row->solicitante_telefono		= $solicitante_telefono;
			$row->recibe_nombre				= $recibe_nombre;
			$row->recibe_cedula				= $recibe_cedula;
			$row->recibe_telefono			= $recibe_telefono;
			$row->recibe_direccion			= $recibe_direccion;	
			$row->estado  					= 1;	
			$row->agente_credix             = "Sac Servipay";
		if (!$row->check()) 
			{
			echo "<script> alert('Error #2: ".$row->getError()."'); window.history.go(-1); </script>\n";
			exit();
			}
		if (!$row->store()) 
			{
			echo "<script> alert('Error #3: ".$row->getError()."'); window.history.go(-1); </script>\n";
			exit();
			}
		$row->checkin();			
			 ventasTelefonicas_solicitaFactura ($row->id, $option,$mensaje);		
	} else {
		$mensaje = 'TRANSACCION DENEGADA';
			switch ($vt) {
				case '14':
					$mensaje.= "TARJETA INVALIDA";
					break;
				case '49':
					$mensaje.= "ERROR FECHA VENCIMIENTO";
					break;
				case '51':
					$mensaje.= "FONDOS INSUFICIENTES";
					break;
			}
						
			mosRedirect( 'index.php?option=credito&task=ventasTelefonicas', $mensaje);
	}					
			
}



function autorizacionDenegada( $aut, $option )
	{
	global $task;
	$task = 'autorizacionDenegada';
	HTML_credito::autorizacionDenegada( $aut, $option );	
	}
function devoluciones_solicitaFactura( $array, $option,$mensaje ) 
	{
	HTML_credito::devoluciones_solicitaFactura( $array, $option,$mensaje );	
	}					
function ventasTelefonicas_solicitaFactura( $aut, $option,$mensaje ) 
	{
	HTML_credito::ventasTelefonicas_solicitaFactura( $aut, $option,$mensaje );	
	}
	
function finalizaAutorizacionTelefonica( $option ) 
	{
	global $database;
	global $mainframe;

	$aut			= $mainframe->getUserStateFromRequest( "filter{$option}aut", 'aut', '' );
	$numero_factura	= $mainframe->getUserStateFromRequest( "filter{$option}numero_factura", 'numero_factura', '' );

	$query = "UPDATE tb_autorizacion_telefonica SET numero_factura = " . $numero_factura . " WHERE id=" . $aut;

	$database->setQuery($query);
	$result = $database->query();
	
	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}
	
	$query = "SELECT *			
		FROM 
			tb_autorizacion_telefonica
		WHERE
			tb_autorizacion_telefonica.id = " . $aut;
	
	$database->setQuery($query);
	$row = $database->loadObjectList();
	$row = $row[0];
	
	emailAutorizacionEmpresa($row);

	$query = "SELECT DISTINCT
			tb_cuenta_permisos.email_contacto		
		FROM 
			tb_cuenta_permisos,
			tb_autorizacion_telefonica
		WHERE
			tb_autorizacion_telefonica.id = " . $aut . "
		AND
			tb_cuenta_permisos.numtar = tb_autorizacion_telefonica.numtar";
	
	$database->setQuery($query);
	$result = $database->loadObjectList();

	if ($database->getErrorNum())
		{
		echo $database->stderr();
		return false;
		}
	$result = $result[0];
	
	emailAutorizacionEmpresa_NotificacionCliente($row,FALSE,$result->email_contacto);
	HTML_credito::resultadoAutorizacion( $row, $option );	
	}
	
function viewAutorizacion( $option, $id='' ) 
	{
	if ($id == '')
		{
		mosRedirect( 'index.php?option=credito&task=showAutorizacionesEmpresas', 'Parametros erroneos');		
		return;
		}
	
	global $database;
	
	$query = "SELECT * FROM tb_autorizacion_telefonica WHERE id = ". $id;

	$database->setQuery( $query);

	$row = $database->loadObjectList();

	$row = $row[0];

	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}

	HTML_credito::resultadoAutorizacion( $row, $option );	
	}
	
	function viewDevolucionAutorizacion( $option, $id='' ) 
	{
		if ($id == ''){
			mosRedirect( 'index.php?option=credito&task=showAutorizacionesEmpresas', 'Parametros erroneos');		
			return;
		}		
		global $database;		
		$query = "SELECT * FROM tb_aut_telefonica_devolucion WHERE id = ". $id;	
		$database->setQuery( $query);	
		$row = $database->loadObjectList();	
		$row = $row[0];
	
		if ($database->getErrorNum()) {
			echo $database->stderr();
			return false;
		}
	
		HTML_credito::viewDevolucionAutorizacion( $row, $option );
	}
	
function anularAutorizacion( $option, $id='' ) 
	{
	global $database, $my;
	if ($id == '')
		{
		mosRedirect( 'index.php?option=credito&task=showAutorizacionesEmpresas', 'Parametros erroneos');		
		return;
		}
    $agente_credix       = $my->username;
	$fecha_carga_vasa    = date("F j, Y, g:i a");

	$query = "UPDATE tb_autorizacion_telefonica SET agente_credix = '" . $agente_credix . "', fecha_carga_vasa = '" . $fecha_carga_vasa . "', estado = 2 WHERE id=" . $id;
	
	$database->setQuery($query);
	$result = $database->query();
	
	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}
	// Inicio de Notificaciones
	$query = "SELECT * FROM tb_autorizacion_telefonica WHERE id = ". $id;

	$database->setQuery($query);

	$row = $database->loadObjectList();

	$row = $row[0];

	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}
	$query = "SELECT DISTINCT
			tb_cuenta_permisos.email_contacto		
		FROM 
			tb_cuenta_permisos,
			tb_autorizacion_telefonica
		WHERE
			tb_autorizacion_telefonica.id = '" . $id . "'
		AND
			tb_cuenta_permisos.numtar = tb_autorizacion_telefonica.numtar";
	
	$database->setQuery($query);
	$result = $database->loadObjectList();
	$result = $result[0];
	emailAutorizacionEmpresa($row, TRUE);
	emailAutorizacionEmpresa_NotificacionCliente($row,TRUE,$result->email_contacto);
	// Fin de Notificaciones

	mosRedirect( 'index.php?option=credito&task=showAutorizacionesEmpresas', 'Autorizaci&oacute;n Anulada Exit&oacute;samente');		
	}
	
function anularDevolucionAutorizacion( $option, $id='' ) 
	{
	global $database, $my;
	if ($id == '')
		{
		mosRedirect( 'index.php?option=credito&task=showDevolucionesAutorizacionesEmpresas', 'Parametros erroneos');		
		return;
		}
	
    $agente_credix       = $my->username;
	$fecha_carga_vasa    = date("F j, Y, g:i a");

	$query = "UPDATE tb_aut_telefonica_devolucion SET agente_credix = '" . $agente_credix . "', fecha_carga_vasa = '" . $fecha_carga_vasa . "', estado = 2 WHERE id=" . $id;
	
	$database->setQuery($query);
	$result = $database->query();
	
	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}

	// Inicio de Notificaciones
	$query = "SELECT * FROM tb_aut_telefonica_devolucion WHERE id = ". $id;

	$database->setQuery( $query);

	$row = $database->loadObjectList();

	$row = $row[0];

	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}
	$query = "SELECT DISTINCT
			tb_cuenta_permisos.email_contacto		
		FROM 
			tb_cuenta_permisos,
			tb_aut_telefonica_devolucion
		WHERE
			tb_aut_telefonica_devolucion.id = '" . $id . "'
		AND
			tb_cuenta_permisos.numtar = tb_aut_telefonica_devolucion.numtar";
	
	$database->setQuery($query);
	$result = $database->loadObjectList();
	$result = $result[0];
	emailDevolucionAutorizacionEmpresa($row, TRUE);
	emailDevolucionAutorizacionEmpresa_NotificacionCliente($row,TRUE,$result->email_contacto);
	// Fin de Notificaciones

	mosRedirect( 'index.php?option=credito&task=showDevolucionesAutorizacionesEmpresas', 'Devoluci&oacute;n Anulada Exit&oacute;samente');		
	}
 
function AutorizacionTelefonica_Carga ( $option )
	{
	global $mainframe, $database, $my;
		
    $agente_credix       = $my->username;
	$fecha_carga_vasa    = date("F j, Y, g:i a");
	$ids = $mainframe->getUserStateFromRequest("ids",'ids','');
	$numauts = $mainframe->getUserStateFromRequest("numero_autorizacion",'numero_autorizacion','');

    foreach ($ids as $key => $id)
        {
        $numero_autorizacion = $numauts[$key];
        $numero_autorizacion = trim($numero_autorizacion);
        if ($numero_autorizacion != '')
            {
        	$query = "UPDATE tb_autorizacion_telefonica SET numero_autorizacion = '" .$numero_autorizacion . "', agente_credix = '" . $agente_credix . "', fecha_carga_vasa = '" . $fecha_carga_vasa . "', estado = 1 WHERE id = " . $id;
        	$database->setQuery($query);
        	$result = $database->query();
        
        	if ($database->getErrorNum()) 
        		{
        		echo $database->stderr();
        		return array();
        		}
            }
        }

	echo "<script>javascript:history.back(1);</script>";

	}
	
function DevolucionAutorizacionTelefonica_Carga ( $option )
	{
	global $mainframe, $database, $my;
		
    $agente_credix       = $my->username;
	$fecha_carga_vasa    = date("F j, Y, g:i a");
	$ids = $mainframe->getUserStateFromRequest("ids",'ids','');
	$numauts = $mainframe->getUserStateFromRequest("numero_autorizacion",'numero_autorizacion','');

    foreach ($ids as $key => $id)
        {
        $numero_autorizacion = $numauts[$key];
        $numero_autorizacion = trim($numero_autorizacion);
        if ($numero_autorizacion != '')
            {
        	$query = "UPDATE tb_aut_telefonica_devolucion SET numero_autorizacion = '" .$numero_autorizacion . "', agente_credix = '" . $agente_credix . "', fecha_carga_vasa = '" . $fecha_carga_vasa . "', estado = 1 WHERE id = " . $id;
        	$database->setQuery($query);
        	$result = $database->query();
        
        	if ($database->getErrorNum()) 
        		{
        		echo $database->stderr();
        		return array();
        		}
            }
        }

	echo "<script>javascript:history.back(1);</script>";

	}
	
function showAutorizacionesEmpresas( $option, $where= '' ) 
	{
	global $database, $mainframe, $my, $acl, $config_list_limit;

	$limit 				= intval( $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $config_list_limit ) );
	$limitstart      	= intval( $mainframe->getUserStateFromRequest( "view{$option}limitstart", 'limitstart', 0 ) );
	$search         	= $mainframe->getUserStateFromRequest( "filter{$option}search", 'search', '' ) ;
	$criteria       	= $mainframe->getUserStateFromRequest( "filter{$option}criteria", 'filter_criteria', '' ) ;
	$match         		= $mainframe->getUserStateFromRequest( "filter{$option}match", 'match', '' ) ;
	//$where            = $mainframe->getUserStateFromRequest( "filter{$option}where", 'where', $where );
	//$where 			= str_replace( "%nbsp;", "'", $where ) ;

	//$where= goSearch($match, $criteria, $search, '');
	$ext = "";
	if($_SESSION['session_gid'] == 'ventas_telefonicas'){
		$ext = " and numero_establecimiento = '$my->name'";}
	// get the total number of records
		if (!empty($_POST["opcion"]))
	{
	$resultado = mosGetParam($_POST,"opcion");
	$variable = mosGetParam($_POST,"variable");
	}else
	{
		$resultado = '5';
		$variable = '';
	}
	
		switch ($resultado) {
		case '4':
			$query = "SELECT COUNT(*) FROM tb_autorizacion_telefonica WHERE estado !=2 and numtar IN (select numtar from tb_tarjeta_posicion where numusu = '$variable')";
			
			break;
		case '1':
			$query = "SELECT COUNT(*) FROM tb_autorizacion_telefonica WHERE estado !=2 and numtar ='$variable'";
			break;
		case '2':
			$query = "SELECT COUNT(*) FROM tb_autorizacion_telefonica WHERE estado !=2 and numero_autorizacion ='$variable'";
			
			break;
		case '3':
			$query = "SELECT COUNT(*) FROM tb_autorizacion_telefonica WHERE estado !=2 and vendedor in (select username from tb_users where name = '$variable');";
			break;
								
		default:
			$query = "SELECT COUNT(*) FROM tb_autorizacion_telefonica WHERE estado !=2";
			break;
	}

	$query.=$ext ;
	if (isset($where) && $where !== null && $where !== '') 
		{
		$query = $query . " AND " . $where;
		}
	$database->setQuery( $query );
	$total = $database->loadResult();

	require_once( $GLOBALS['config_absolute_path'] . '/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit  );

		if (!empty($_POST["opcion"]))
	{
	$resultado = mosGetParam($_POST,"opcion");
	$variable = mosGetParam($_POST,"variable");
	}else
	{
		$resultado = '5';
		$variable = '';
	}
	
		switch ($resultado) {
		case '4':
			$query = "SELECT * FROM tb_autorizacion_telefonica WHERE estado !=2 and numtar IN (select numtar from tb_tarjeta_posicion where numusu = '$variable')";
			
			break;
		case '1':
			$query = "SELECT * FROM tb_autorizacion_telefonica WHERE estado !=2 and numtar ='$variable'";
			break;
		case '2':
			$query = "SELECT * FROM tb_autorizacion_telefonica WHERE estado !=2 and numero_autorizacion ='$variable'";
			
			break;
		case '3':
			$query = "SELECT * FROM tb_autorizacion_telefonica WHERE estado !=2 and vendedor IN (select username from tb_users where name = '$variable')";
			break;
								
		default:
			$query = "SELECT * FROM tb_autorizacion_telefonica WHERE estado !=2";
			break;
	}
	$query.=$ext ;
	if (isset($where) && $where !== null && $where !== '') 
		{
		$query = $query . " AND " . $where;
		}
	
	$query = $query . " Order by tb_autorizacion_telefonica.id DESC";
	$database->setQuery( $query, $pageNav->limitstart, $pageNav->limit );
	$rows = $database->loadObjectList();

	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}
	$rows = & $rows ;
	HTML_credito::showAutorizacionesEmpresas( $rows, $pageNav, $search, $option, '', $criteria, $match, $variable, $resultado );
	}

function emailAutorizacionEmpresa( $datos, $anulacion = FALSE ) 
	{

	$to = "ventastelefonicas@credix.com";

	$nameto = "Supervisor Ventas Empresas";

	$from = "sgc@credix.com";
	$namefrom = "SGC Credix";
	
	if ($anulacion)
		{
		$subject = "***ANULACION*** Autorizacion de Credito Empresas";
		}
	else
		{
		$subject = "Autorizacion de Credito Empresas";
		}

	ob_start();
		HTML_credito::printEmailHeader();
		HTML_credito::emailAutorizacionEmpresa($datos);
		HTML_credito::printEmailFooter();
		$message = ob_get_contents();
	ob_end_clean();

	$response = mosMainBody_authSendEmail($from, $namefrom, $to, $nameto, $subject, $message);
	}
	
function emailDevolucionAutorizacionEmpresa( $datos, $anulacion = FALSE ) 
	{

	$to = "ventastelefonicas@credix.com,sistemas@credix.com";
	//$to = "sistemas@credix.com";

	$nameto = "Supervisor Ventas Empresas";

	$from = "sgc@credix.com";
	$namefrom = "SGC Credix";
	
	if ($anulacion)
		{
		$subject = "***ANULACION*** Devolucion de Autorizacion de Credito Empresas";
		}
	else
		{
		$subject = "Devolucion de Autorizacion de Credito Empresas";
		}
	

	ob_start();
		HTML_credito::printEmailHeader();
		HTML_credito::emailDevolucionAutorizacionEmpresa($datos);
		HTML_credito::printEmailFooter();
		$message = ob_get_contents();
	ob_end_clean();

	$response = mosMainBody_authSendEmail($from, $namefrom, $to, $nameto, $subject, $message);
	}

function emailAutorizacionEmpresa_NotificacionCliente( $datos, $anulacion = FALSE, $to ) 
	{
	$nameto = "Cliente Empresarial Credix";

	$from = "info@credix.com";
	$namefrom = "Credix World S.A";
	
	if ($anulacion)
		{
		$subject = "***ANULACION*** Autorizacion de Credito Empresas";
		}
	else
		{
		$subject = "Autorizacion de Credito Empresas";
		}

	ob_start();
		HTML_credito::printEmailHeader();
		HTML_credito::emailAutorizacionEmpresa_NotificacionCliente($datos, $anulacion);
		HTML_credito::printEmailFooter();
		$message = ob_get_contents();
	ob_end_clean();

	$response = mosMainBody_authSendEmail($from, $namefrom, $to, $nameto, $subject, $message);
	}
	
function emailDevolucionAutorizacionEmpresa_NotificacionCliente( $datos, $anulacion = FALSE, $to ) 
	{
	$nameto = "Cliente Empresarial Credix";

	$from = "info@credix.com";
	$namefrom = "Credix World S.A";
	
	if ($anulacion)
		{
		$subject = "***ANULACION*** Devolucion Autorizacion de Credito Empresas";
		}
	else
		{
		$subject = "Devolucion Autorizacion de Credito Empresas";
		}
	

	ob_start();
		HTML_credito::printEmailHeader();
		HTML_credito::emailDevolucionAutorizacionEmpresa_NotificacionCliente($datos, $anulacion);
		HTML_credito::printEmailFooter();
		$message = ob_get_contents();
	ob_end_clean();

	$response = mosMainBody_authSendEmail($from, $namefrom, $to, $nameto, $subject, $message);
	}
		

function emailAutorizacionTasaCero( $message ) 
	{
	$nameto = "Credix World S.A";
	$to = "autorizaciones@credix.com";

	$from = "info@credix.com";
	$namefrom = "Credix World S.A";
	
	$subject = "Autorizacion de Consumo en Tasa Cero";

	ob_start();
		HTML_credito::printEmailHeader();
		echo $message;
		HTML_credito::printEmailFooter();
		$message = ob_get_contents();
	ob_end_clean();

	$response = mosMainBody_authSendEmail($from, $namefrom, $to, $nameto, $subject, $message);
	}
	

function getCuentaPreautorizacion($id_cuenta){
	global $database;
	// get the total number of records
	$query = "SELECT 
					tb_preautorizacion.nombre,
					tb_preautorizacion.apellidos,
					tb_preautorizacion.identificacion,
					tb_preautorizacion.telefono,
					tb_preautorizacion.email,
					tb_preautorizacion.direccion,
					tb_preautorizacion.provincia,
					tb_preautorizacion.canton
				FROM
					tb_preautorizacion,
					tb_ccpool,
					tb_tarjeta
				WHERE
					tb_preautorizacion.id = tb_ccpool.used
				AND
					tb_ccpool.ccno = tb_tarjeta.numtar_19
				AND
					tb_tarjeta.numusu = '$id_cuenta'";
	$database->setQuery( $query );
	$return = $database->loadObjectList();

	if (sizeof($return) == 0)
	{
	$return['nombre'] = ' ';
	$return['apellidos'] = ' ';
	$return['identificacion'] = ' ';
	$return['telefono'] = ' ';
	$return['celular'] = ' ';
	$return['email'] = ' ';
	$return['direccion'] = ' ';
	$return['provincia'] = ' ';
	$return['canton'] = ' ';
	return (object) $return;
	}

	return $return[0];
}

function TarjetaRegalo_Alta_LANCO( $option ) 
	{
	$codigos[] = mosHTML::makeOption( '0202279', '0202279');
	$codigos[] = mosHTML::makeOption( '0202280', '0202280');
	$codigos[] = mosHTML::makeOption( '0202282', '0202282');
	$codigos[] = mosHTML::makeOption( '0202283', '0202283');
	$codigos[] = mosHTML::makeOption( '0202285', '0202285');
	$codigos[] = mosHTML::makeOption( '0202286', '0202286');
	$codigos[] = mosHTML::makeOption( '0202288', '0202288');
	$codigos[] = mosHTML::makeOption( '0202289', '0202289');
	$codigos[] = mosHTML::makeOption( '0202291', '0202291');
	$codigos[] = mosHTML::makeOption( '0202292', '0202292');
	$codigos[] = mosHTML::makeOption( '0202299', '0202299');
	$codigos[] = mosHTML::makeOption( '0202300', '0202300');
	$codigos[] = mosHTML::makeOption( '0202301', '0202301');
	$codigos[] = mosHTML::makeOption( '0202302', '0202302');
	$codigos[] = mosHTML::makeOption( '0202303', '0202303');
	$codigos[] = mosHTML::makeOption( '0202304', '0202304');
	$codigos[] = mosHTML::makeOption( '0202305', '0202305');
	$codigos[] = mosHTML::makeOption( '0202306', '0202306');
	$codigos[] = mosHTML::makeOption( '0202307', '0202307');
	$codigos[] = mosHTML::makeOption( '0202308', '0202308');
	$codigos[] = mosHTML::makeOption( '0203030', '0203030');
	$codigos[] = mosHTML::makeOption( '0203031', '0203031');
	$codigos[] = mosHTML::makeOption( '0203033', '0203033');
	$codigos[] = mosHTML::makeOption( '0203034', '0203034');
	$codigos[] = mosHTML::makeOption( '0203036', '0203036');
	$codigos[] = mosHTML::makeOption( '0203039', '0203039');
	$codigos[] = mosHTML::makeOption( '0203040', '0203040');
	$codigos[] = mosHTML::makeOption( '0203042', '0203042');
	$codigos[] = mosHTML::makeOption( '0203043', '0203043');
	$codigos[] = mosHTML::makeOption( '0203045', '0203045');
	$codigos[] = mosHTML::makeOption( '0203046', '0203046');
	$codigos[] = mosHTML::makeOption( '0203048', '0203048');
	$codigos[] = mosHTML::makeOption( '0203049', '0203049');
	$codigos[] = mosHTML::makeOption( '0203051', '0203051');
	$codigos[] = mosHTML::makeOption( '0203052', '0203052');
	$codigos[] = mosHTML::makeOption( '0203054', '0203054');
	$codigos[] = mosHTML::makeOption( '0203055', '0203055');
	$codigos[] = mosHTML::makeOption( '0203057', '0203057');
	$codigos[] = mosHTML::makeOption( '0203059', '0203059');
	$codigos[] = mosHTML::makeOption( '0203060', '0203060');
	$codigos[] = mosHTML::makeOption( '0203062', '0203062');
	$codigos[] = mosHTML::makeOption( '0203063', '0203063');
	$codigos[] = mosHTML::makeOption( '0203065', '0203065');
	$codigos[] = mosHTML::makeOption( '0203066', '0203066');
	$codigos[] = mosHTML::makeOption( '0203068', '0203068');
	$codigos[] = mosHTML::makeOption( '0203069', '0203069');
	$codigos[] = mosHTML::makeOption( '0203071', '0203071');
	$codigos[] = mosHTML::makeOption( '0203081', '0203081');
	$codigos[] = mosHTML::makeOption( '0203082', '0203082');
	$codigos[] = mosHTML::makeOption( '0203084', '0203084');
	$codigos[] = mosHTML::makeOption( '0203085', '0203085');
	$codigos[] = mosHTML::makeOption( '0203087', '0203087');
	$codigos[] = mosHTML::makeOption( '0203090', '0203090');
	$codigos[] = mosHTML::makeOption( '0203091', '0203091');
	$codigos[] = mosHTML::makeOption( '0203093', '0203093');
	$codigos[] = mosHTML::makeOption( '0204003', '0204003');
	$codigos[] = mosHTML::makeOption( '0204007', '0204007');
	$codigos[] = mosHTML::makeOption( '0204055', '0204055');
	$codigos[] = mosHTML::makeOption( '0204057', '0204057');
	$codigos[] = mosHTML::makeOption( '0204059', '0204059');
	$codigos[] = mosHTML::makeOption( '0205042', '0205042');
	$codigos[] = mosHTML::makeOption( '0205045', '0205045');
	$codigos[] = mosHTML::makeOption( '0205048', '0205048');
	$codigos[] = mosHTML::makeOption( '0205051', '0205051');
	$codigos[] = mosHTML::makeOption( '0205054', '0205054');
	$codigos[] = mosHTML::makeOption( '0205072', '0205072');
	$codigos[] = mosHTML::makeOption( '0205073', '0205073');
	$codigos[] = mosHTML::makeOption( '0205074', '0205074');
	$codigos[] = mosHTML::makeOption( '0205075', '0205075');
	$codigos[] = mosHTML::makeOption( '0205076', '0205076');
	$codigos[] = mosHTML::makeOption( '0223006', '0223006');
	$codigos[] = mosHTML::makeOption( '0223010', '0223010');
	$codigos[] = mosHTML::makeOption( '0223014', '0223014');
	$codigos[] = mosHTML::makeOption( '0223018', '0223018');
	$codigos[] = mosHTML::makeOption( '0223022', '0223022');
	$codigos[] = mosHTML::makeOption( '0223026', '0223026');
	$codigos[] = mosHTML::makeOption( '0246011', '0246011');
	$codigos[] = mosHTML::makeOption( '0246012', '0246012');
	$codigos[] = mosHTML::makeOption( '0246014', '0246014');
	$codigos[] = mosHTML::makeOption( '0246015', '0246015');
	$codigos[] = mosHTML::makeOption( '0246017', '0246017');
	$codigos[] = mosHTML::makeOption( '0246018', '0246018');
	$codigos[] = mosHTML::makeOption( '0246020', '0246020');
	$codigos[] = mosHTML::makeOption( '0246021', '0246021');
	
	$combos['codigos'] = mosHTML::selectList( $codigos, 'codigos', 'class="inputbox" size="10"', 'value', 'text', 0 );

	$establecimientos[] 	= mosHTML::makeOption( 'EPA CURRIDABAT', 'EPA CURRIDABAT');
	$establecimientos[] 	= mosHTML::makeOption( 'EPA ESCAZU', 'EPA ESCAZU');
	$establecimientos[] 	= mosHTML::makeOption( 'EPA BELEN', 'EPA BELEN');
	$establecimientos[] 	= mosHTML::makeOption( 'EPA TIBAS', 'EPA TIBAS');
	$establecimientos[] 	= mosHTML::makeOption( 'EPA DESAMPARADOS', 'EPA DESAMPARADOS');

	$combos['establecimiento'] = mosHTML::selectList( $establecimientos, 'establecimiento', 'class="inputbox" size="1"', 'value', 'text', '0' );

	for ($i = 1; $i <= 33; $i++)
		{
		$cantidad[] = mosHTML::makeOption( $i, $i);
		}

	$combos['cantidad_cupones'] = mosHTML::selectList( $cantidad, 'cantidad_cupones', 'class="inputbox" size="1"', 'value', 'text', 1 );
	
	HTML_credito::TarjetaRegalo_Alta ( $combos, $option );	
	}
	
	function TarjetaGalon_Alta( $option ) 
	{	
	HTML_credito::TarjetaGalon_Alta ( $option );	
	}
	function TarjetaCocina_Alta( $option ) 
	{	
	HTML_credito::TarjetaCocina_Alta ( $option );	
	}
function TarjetaRegalo_Alta( $option ) 
	{	
	HTML_credito::TarjetaRegalo_Alta ( $option );	
	}

function TarjetaRegalo_ProcesaAlta ( $option )
	{
	global $mainframe, $database, $my;
	
	$numtar              = trim($mainframe->getUserStateFromRequest("numtar",'numtar',''));
	$fecha               = trim($mainframe->getUserStateFromRequest("fecha",'fecha',''));
	$establecimiento     = trim($mainframe->getUserStateFromRequest("establecimiento",'establecimiento',''));
	$agente_vendedor     = trim($mainframe->getUserStateFromRequest("agente_vendedor",'agente_vendedor',''));
	$nombre_cliente      = trim($mainframe->getUserStateFromRequest("nombre_cliente",'nombre_cliente',''));
	$cedula_cliente      = trim($mainframe->getUserStateFromRequest("cedula_cliente",'cedula_cliente',''));
	$factura             = trim($mainframe->getUserStateFromRequest("factura",'factura',''));
	$cantidad_cupones    = trim($mainframe->getUserStateFromRequest("cantidad_cupones",'cantidad_cupones',''));
	$monto_carga         = trim($mainframe->getUserStateFromRequest("monto_carga",'monto_carga',''));
	$moneda		         = trim($mainframe->getUserStateFromRequest("moneda",'moneda',''));
	$monto_carga         = str_replace(array(",","."),"",$monto_carga);
	$numtar = str_replace(' ', '',$numtar);
    $query = "SELECT cvv2,fhasta FROM tb_tarjeta WHERE numtar_19 = '" . $numtar . "'";

	$database->setQuery($query);
	$result = $database->loadObjectList();

	if ($database->getErrorNum()) 
		{
		echo $database->stderr();
		return array();
		}

	if (empty($result))
		{
		echo "<script>alert('ERROR: La tarjeta asignada es invalida.');javascript:history.back(1);</script>";
        return;
		}

	$result = $result[0];
	
	//OBTENGO EL COMERCIO
	switch($establecimiento){
		case 'EPA BELEN': $codigoComercio = '6';break;
		case 'EPA CURRIDABAT': $codigoComercio = '7';break;
		case 'EPA ESCAZU': $codigoComercio = '8';break;
		case 'EPA TIBAS': $codigoComercio = '9';break;
		default : $codigoComercio = 'x';break;
	}
	//REALIZO LA CARGA DEL CUPON EN SERVIpAY
	$servipayDao = new ServipayDao();
	$vhasta = str_replace('/', '', $result->fhasta);
	$cvv = $result->cvv2;
	$servipayDao->inicializarTrama($codigoComercio, $numtar, $vhasta, $cvv, $monto_carga, $moneda, '', '');
	$servipayDao->inicializarTramaPago();
	$trama = $servipayDao->getTrama();
    $tramaRespuesta = $servipayDao->clientSoap($trama);
    $servipayModel = $servipayDao->llenarTramaRespuesta($tramaRespuesta);
    $numeroauto = $servipayModel->getNumeroAutorizacion();
    $secuenciaTransaccion = $servipayModel->getSecuenciaTransaccion();
    $codigoEstado = $servipayModel->getCodigoEstado();
    $codigoRespuesta = $servipayModel->getCodigoRespuesta();

	$row = new mosTarjetaRegalo( $database );
	if (!$row->bind( $_POST )) {
		echo "<script> alert('Error #1: ".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
	}
	// sanitise fields
	$row->id               = (int) $row->id;
	$row->numtar           = $numtar;
	$row->agente_vendedor  = $my->username;
	$row->monto_carga 	   = $monto_carga;
	if($codigoEstado == '00' && $codigoRespuesta == '00'){
		$row->secuencia_transaccion = $secuenciaTransaccion;
		$row->estado = '1';
		$row->numero_autorizacion = $numeroauto;
		$row->agente_credix = 'SAC-SERVIPAY';
		$row->fecha_carga_vasa = date("F j, Y, g:i a");
	}

	if (!$row->check()) 
        {
		echo "<script> alert('Error #2: ".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }

	if (!$row->store()) 
        {
		echo "<script> alert('Error #3: ".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
        }
        
	$row->checkin();


	$to = array(array('to'=>'8000@credix.com'),array('to'=>'sistemas@credix.com'));

	$from = array('from'=>"prepago@credix.com",'fromname'=>'Credix World S.A');
	if($codigoEstado == '00' && $codigoRespuesta == '00'){
		$subject = "Carga de Tarjeta de Regalo Procesada";
		$mensaje = "La tarjeta fue registrada exitosamente. Ya puede utilizar su tarjeta";
	}
	else{
		$subject = "Solicitud de Carga de Tarjeta de Regalo";
		$mensaje = "La tarjeta fue registrada exitosamente. En 3 horas estara disponible para consumo";
	}

	ob_start();
		HTML_credito::printEmailHeader();
		HTML_credito::emailTarjetaRegalo($row);
		HTML_credito::printEmailFooter();
		$message = ob_get_contents();
	ob_end_clean();
	mosEmail::sendEmail($subject, $from, $to, $message);
	echo "<script>alert('".$mensaje."');javascript:history.back(1);</script>";
	}

function TarjetaCocina_ProcesaAlta ( $option )
	{
	global $mainframe, $database, $my;
	
	$numtar              = trim($mainframe->getUserStateFromRequest("numtar",'numtar',''));
	$nombre_cliente      = trim($mainframe->getUserStateFromRequest("nombre_cliente",'nombre_cliente',''));
	$cedula_cliente      = trim($mainframe->getUserStateFromRequest("cedula_cliente",'cedula_cliente',''));
	$factura             = trim($mainframe->getUserStateFromRequest("factura",'factura',''));
	$email	             = trim($mainframe->getUserStateFromRequest("email",'email',''));
	$cantidad_cupones    = trim($mainframe->getUserStateFromRequest("cantidad_cupones",'cantidad_cupones',''));
	$establecimiento     = trim($mainframe->getUserStateFromRequest("establecimiento",'establecimiento',''));
	$numtar = str_replace(' ', '',$numtar);
    $monto_carga = $cantidad_cupones *100;
	$moneda = '188';
    $query = "SELECT cvv2,fhasta FROM tb_tarjeta WHERE numtar_19 = '" . $numtar . "'";

	$database->setQuery($query);
	$result = $database->loadObjectList();

	if (empty($result))
		{
echo "<script>alert('ERROR: La tarjeta asignada es invalida.');javascript:history.back(1);</script>";
        return;
		}

	$result = &$result[0];
	//OBTENGO EL COMERCIO
	switch($establecimiento){
		case 'EPA BELEN': $codigoComercio = '6';break;
		case 'EPA CURRIDABAT': $codigoComercio = '7';break;
		case 'EPA ESCAZU': $codigoComercio = '8';break;
		case 'EPA TIBAS': $codigoComercio = '9';break;
	
		default : $codigoComercio = 'x';break;
	}

	//REALIZO LA CARGA DEL CUPON EN SERVIpAY
	$servipayDao = new ServipayDao();
	$vhasta = str_replace('/', '', $result->fhasta);
	$cvv = $result->cvv2;
	$servipayDao->inicializarTrama($codigoComercio, $numtar, $vhasta, $cvv, $monto_carga, $moneda, '', '');
	$servipayDao->inicializarTramaPago();
	$trama = $servipayDao->getTrama();mosLog::saveAction('Trama I:'.$trama);
    $tramaRespuesta = $servipayDao->clientSoap($trama);
    $servipayModel = $servipayDao->llenarTramaRespuesta($tramaRespuesta);
    $numeroauto = $servipayModel->getNumeroAutorizacion();
    $secuenciaTransaccion = $servipayModel->getSecuenciaTransaccion();
    $codigoEstado = $servipayModel->getCodigoEstado();
    $codigoRespuesta = $servipayModel->getCodigoRespuesta();
	mosLog::saveAction('Trama O:'.$tramaRespuesta);
	
	$row = new mosTarjetaCocina( $database );
	if (!$row->bind( $_POST )) {
		echo "<script> alert('Error #1: ".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
	}
	//sanitise fields
	$row->id               = (int) $row->id;
	$row->numtar           = $numtar;
	$row->establecimiento  = $establecimiento;
	$row->agente_vendedor  = $my->username;
 	$row->monto_carga      = $monto_carga;
	$row->fecha               = date("dmY");
	$row->nombre_cliente      = $nombre_cliente;
	$row->cedula_cliente      = $cedula_cliente;
	$row->factura             = $factura;
	$row->cantidad_cupones    = 1;
	$row->email 			= $email;
	if($codigoEstado == '00' && $codigoRespuesta == '00')
	{
		$row->secuencia_transaccion = $secuenciaTransaccion;
		$row->estado = '1';
		$row->numero_autorizacion = $numeroauto;
		$row->agente_credix = 'SAC-SERVIPAY';
		$row->fecha_carga_vasa = date("F j, Y, g:i a");
	}
	if (!$row->store()) 
        {
		echo "<script> alert('Error #3: ".$row->getError()."'); alert('Ocurrio un error al guardar carga en SAC');</script>\n";
		exit();
        }
        
	$row->checkin();
	if($codigoEstado == '00' && $codigoRespuesta == '00')
	{
		$subject = "Promocion Cocina Procesada";
		$mensaje = "Carga aplicada con exito. Ya puede utilizar su tarjeta";
	}else{
		$subject = "Solicitud de Carga de Tarjeta de Regalo Promocion Cocina";
		$mensaje = "Solicitud aplicada con exito, puede hacer uso de su tarjeta en 60 minutos.";
	}

	ob_start();
		HTML_credito::printEmailHeader();
		HTML_credito::emailTarjetaRegalo($row);
		HTML_credito::printEmailFooter();
		$message = ob_get_contents();
	ob_end_clean();
	$to = mosEmail::getEmailList('autorizaciones');
    $from = array('from'=>'noreply@credix.com','fromname'=>'Credix World S.A');
    $body = $message;
  	mosEmail::sendEmail($subject,$from,$to,$body);
	if(mosEmail::isValidEmail($email))
     {   
    	$url = mosBanner::seleccionarBannerRandom();
        $subject = "Pongale Sabor a su cocina";
        ob_start();
        echo emailHTML::headerAlertaTransaccion();
                    ?>
                    <p>Estimado <?php echo strtoupper($nombre_cliente);?>,</p>
                    <p>A continuaci&oacute;n los datos de la transacci&oacute;n:</p>
                    <p>
                        <b>Fecha:</b> <?php echo date("d/m/Y");?><br />
                        <b>Establecimiento:</b> <?php echo $establecimiento;?><br />
                        <b>Identificaci&oacute;n:</b> <?php echo $cedula_cliente;?><br />
                        <b>Factura:</b> <?php echo $factura?><br />
                        <b>Importe:</b> CRC <?php echo mosHTML::formatMoney($monto_carga,FALSE,FALSE,FALSE,FALSE,TRUE);?><br />
                        <b>Tarjeta:</b> <?php echo mosHTML::formatCreditCard($numtar);?><br />
                        <b>No. Comprobante:</b> <?php echo $row->id;?><br />
                        <b>Vendedor:</b> <?php echo $my->username;?><br />
                    </p>
                    <?php
                    echo emailHTML::footerAlertaTransaccion($url);
                    $body = ob_get_contents();
                    ob_clean();
 
            mosEmail::sendEmail($subject,array("from"=>"noreply@credix.com","fromname"=>"Credix World, S.A"),array(array("to"=>$email)),$body);
      }


	echo "<script>alert('".$mensaje."');</script>";
	HTML_Credito::TarjetaCocina_Print($row);
	}

	
function TarjetaGalon_ProcesaAlta ( $option )
	{
	global $mainframe, $database, $my;
	
	$numtar              = trim($mainframe->getUserStateFromRequest("numtar",'numtar',''));
	$nombre_cliente      = trim($mainframe->getUserStateFromRequest("nombre_cliente",'nombre_cliente',''));
	$cedula_cliente      = trim($mainframe->getUserStateFromRequest("cedula_cliente",'cedula_cliente',''));
	$factura             = trim($mainframe->getUserStateFromRequest("factura",'factura',''));
	$cantidad_cupones    = trim($mainframe->getUserStateFromRequest("cantidad_cupones",'cantidad_cupones',''));
	$establecimiento     = trim($mainframe->getUserStateFromRequest("establecimiento",'establecimiento',''));
	$numtar = str_replace(' ', '',$numtar);
    $monto_carga = $cantidad_cupones * 3000*100;
	$moneda = '188';
    $query = "SELECT cvv2,fhasta FROM tb_tarjeta WHERE numtar_19 = '" . $numtar . "'";

	$database->setQuery($query);
	$result = $database->loadObjectList();

	if (empty($result))
		{
		echo "<script>alert('ERROR: La tarjeta asignada es invalida.');javascript:history.back(1);</script>";
        return;
		}

	$result = &$result[0];
	//OBTENGO EL COMERCIO
	switch($establecimiento){
		case 'EPA BELEN': $codigoComercio = '6';break;
		case 'EPA CURRIDABAT': $codigoComercio = '7';break;
		case 'EPA ESCAZU': $codigoComercio = '8';break;
		case 'EPA TIBAS': $codigoComercio = '9';break;
		default : $codigoComercio = 'x';break;
	}
	//REALIZO LA CARGA DEL CUPON EN SERVIpAY
	$servipayDao = new ServipayDao();
	$vhasta = str_replace('/', '', $result->fhasta);
	$cvv = $result->cvv2;
	$servipayDao->inicializarTrama($codigoComercio, $numtar, $vhasta, $cvv, $monto_carga, $moneda, '', '');
	$servipayDao->inicializarTramaPago();
	$trama = $servipayDao->getTrama();mosLog::saveAction('Trama I:'.$trama);
    $tramaRespuesta = $servipayDao->clientSoap($trama);
    $servipayModel = $servipayDao->llenarTramaRespuesta($tramaRespuesta);
    $numeroauto = $servipayModel->getNumeroAutorizacion();
    $secuenciaTransaccion = $servipayModel->getSecuenciaTransaccion();
    $codigoEstado = $servipayModel->getCodigoEstado();
    $codigoRespuesta = $servipayModel->getCodigoRespuesta();
	mosLog::saveAction('Trama O:'.$tramaRespuesta);
	
	$row = new mosTarjetaGalon( $database );
	if (!$row->bind( $_POST )) {
		echo "<script> alert('Error #1: ".$row->getError()."'); window.history.go(-1); </script>\n";
		exit();
	}
	// sanitise fields
	$row->id               = (int) $row->id;
	$row->numtar           = $numtar;
	$row->establecimiento  = $establecimiento;
	$row->agente_vendedor  = $my->username;
 	$row->monto_carga      = $monto_carga;
	$row->fecha               = date("dmY");
	$row->nombre_cliente      = $nombre_cliente;
	$row->cedula_cliente      = $cedula_cliente;
	$row->factura             = $factura;
	$row->cantidad_cupones    = $cantidad_cupones;
	if($codigoEstado == '00' && $codigoRespuesta == '00')
	{
		$row->secuencia_transaccion = $secuenciaTransaccion;
		$row->estado = '1';
		$row->numero_autorizacion = $numeroauto;
		$row->agente_credix = 'SAC-SERVIPAY';
		$row->fecha_carga_vasa = date("F j, Y, g:i a");
	}
	if (!$row->store()) 
        {
		echo "<script> alert('Error #3: ".$row->getError()."'); alert('Ocurrio un error al guardar carga en SAC');</script>\n";
		exit();
        }
        
	$row->checkin();
	if($codigoEstado == '00' && $codigoRespuesta == '00')
	{
		$subject = "Carga de Tarjeta de Regalo Galon Regalon Procesada";
		$mensaje = "Carga aplicada con exito. Ya puede utilizar su tarjeta";
	}else{
		$subject = "Solicitud de Carga de Tarjeta de Regalo Galon Regalon";
		$mensaje = "Solicitud aplicada con exito, puede hacer uso de su tarjeta en 60 minutos.";
	}
	$to = "autorizaciones@credix.com";

	$nameto = "Promocion Tarjetas de Regalo";

	$from = "prepago@credix.com";
	$namefrom = "SGC Credix";

	ob_start();
		HTML_credito::printEmailHeader();
		HTML_credito::emailTarjetaRegalo($row);
		HTML_credito::printEmailFooter();
		$message = ob_get_contents();
	ob_end_clean();
	$response = mosMainBody_authSendEmail($from, $namefrom, $to, $nameto, $subject, $message);

	echo "<script>alert('".$mensaje."');</script>";
	HTML_Credito::TarjetaGalon_Print($row);
	}
 
function TarjetaRegalo_Carga ( $option )
	{
	global $mainframe, $database, $my;
	
    $agente_credix       = $my->username;
	$fecha_carga_vasa    = date("F j, Y, g:i a");
	$ids = $mainframe->getUserStateFromRequest("ids",'ids','');
	$numauts = $mainframe->getUserStateFromRequest("numero_autorizacion",'numero_autorizacion','');

    foreach ($ids as $key => $id)
        {
        $numero_autorizacion = $numauts[$key];
        $numero_autorizacion = trim($numero_autorizacion);
        if ($numero_autorizacion != '')
            {
        	$query = "UPDATE tb_tarjeta_regalo SET numero_autorizacion = '" .$numero_autorizacion . "', agente_credix = '" . $agente_credix . "', fecha_carga_vasa = '" . $fecha_carga_vasa . "', estado = 1 WHERE id = " . $id;
        	$database->setQuery($query);
        	$result = $database->query();
        
        	if ($database->getErrorNum()) 
        		{
        		echo $database->stderr();
        		return array();
        		}
            }
        }

	echo "<script>javascript:history.back(1);</script>";

	}
	
function TarjetaGalon_Carga ( $option )
	{
	global $mainframe, $database, $my;
	
    $agente_credix       = $my->username;
	$fecha_carga_vasa    = date("F j, Y, g:i a");
	$ids = $mainframe->getUserStateFromRequest("ids",'ids','');
	$numauts = $mainframe->getUserStateFromRequest("numero_autorizacion",'numero_autorizacion','');

    foreach ($ids as $key => $id)
        {
        $numero_autorizacion = $numauts[$key];
        $numero_autorizacion = trim($numero_autorizacion);
        if ($numero_autorizacion != '')
            {
        	$query = "UPDATE tb_tarjeta_galon SET numero_autorizacion = '" .$numero_autorizacion . "', agente_credix = '" . $agente_credix . "', fecha_carga_vasa = '" . $fecha_carga_vasa . "', estado = 1 WHERE id = " . $id;
        	$database->setQuery($query);
        	$result = $database->query();
        
        	if ($database->getErrorNum()) 
        		{
        		echo $database->stderr();
        		return array();
        		}
            }
        }

	echo "<script>javascript:history.back(1);</script>";

	}
    
function TarjetaCocina_Carga ( $option )
	{
	global $mainframe, $database, $my;
	
    $agente_credix       = $my->username;
	$fecha_carga_vasa    = date("F j, Y, g:i a");
	$ids = $mainframe->getUserStateFromRequest("ids",'ids','');
	$numauts = $mainframe->getUserStateFromRequest("numero_autorizacion",'numero_autorizacion','');

    foreach ($ids as $key => $id)
        {
        $numero_autorizacion = $numauts[$key];
        $numero_autorizacion = trim($numero_autorizacion);
        if ($numero_autorizacion != '')
            {
        	$query = "UPDATE tb_tarjeta_cocina SET numero_autorizacion = '" .$numero_autorizacion . "', agente_credix = '" . $agente_credix . "', fecha_carga_vasa = '" . $fecha_carga_vasa . "', estado = 1 WHERE id = " . $id;
        	$database->setQuery($query);
        	$result = $database->query();
        
        	if ($database->getErrorNum()) 
        		{
        		echo $database->stderr();
        		return array();
        		}
            }
        }

mosRedirect("index.php?option=credito&task=tarjeta_cocina_listado","SOLICITUD PROCESADA EXITOSAMENTE");
			

	}
function TarjetaRegalo_Listado ( $option, $where= '' ) {
	global $database, $mainframe, $my, $acl, $config_list_limit;

	$limit 				= intval( $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $config_list_limit ) );
	$limitstart      	= intval( $mainframe->getUserStateFromRequest( "view{$option}limitstart", 'limitstart', 0 ) );
	$search         	= $mainframe->getUserStateFromRequest( "filter{$option}search", 'search', '' ) ;
	$criteria       	= $mainframe->getUserStateFromRequest( "filter{$option}criteria", 'filter_criteria', '' ) ;
	$match         		= $mainframe->getUserStateFromRequest( "filter{$option}match", 'match', '' ) ;
	//$where            = $mainframe->getUserStateFromRequest( "filter{$option}where", 'where', $where );
	//$where 			= str_replace( "%nbsp;", "'", $where ) ;

//	$where= goSearch($match, $criteria, $search, '');

	// get the total number of records
	$query = "SELECT COUNT(*) FROM tb_tarjeta_regalo";
	if (isset($where) && $where !== null && $where !== '') 
		{
		$query = $query . " Where " . $where;
		}
	$database->setQuery( $query );
	$total = $database->loadResult();

	require_once( $GLOBALS['config_absolute_path'] . '/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit  );

	$query = "SELECT * FROM tb_tarjeta_regalo";
	if (isset($where) && $where !== null && $where !== '') 
		{
		$query = $query . " WHERE " . $where;
		}

	$query = $query . " Order by id DESC";

	$database->setQuery( $query, $pageNav->limitstart, $pageNav->limit );
	$rows = $database->loadObjectList();

	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}

	HTML_credito::TarjetaRegalo_Listado( $rows, $pageNav, $search, $option, '', $criteria, $match );
}


function search_TarjetaCocina_Listado( $option ) {
	
	$criteria[] = mosHTML::makeOption( 1, 'Tarjeta');
	$criteria[] = mosHTML::makeOption( 2, 'Cuenta');
	$lists['criteria'] = mosHTML::selectList( $criteria, 'filter_criteria', 'class="inputbox" size="1"  id="id_filter_criteria"', 'value', 'text', 1);

	HTML_credito::search_TarjetaCocina_Listado( $option, $lists );
}
function TarjetaCocina_Listado ( $option, $where= '' ) {
	global $database, $mainframe, $my, $acl, $config_list_limit;

	$limit 				= intval( $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $config_list_limit ) );
	$limitstart      	= intval( $mainframe->getUserStateFromRequest( "view{$option}limitstart", 'limitstart', 0 ) );
	$search         	= $mainframe->getUserStateFromRequest( "filter{$option}search", 'search', '' ) ;
	$criteria       	= $mainframe->getUserStateFromRequest( "filter{$option}criteria", 'filter_criteria', '' ) ;
	$match         		= $mainframe->getUserStateFromRequest( "filter{$option}match", 'match', '' ) ;
	//$where            = $mainframe->getUserStateFromRequest( "filter{$option}where", 'where', $where );
	//$where 			= str_replace( "%nbsp;", "'", $where ) ;

//	$where= goSearch($match, $criteria, $search, '');
	$desde= mosGetParam($_POST, 'desde');
	$hasta = mosGetParam($_POST, 'hasta');
	
	$where = " 1 ";
	// get the total number of records
	if (isset($search) && $search !== null && $search !== ''){
		if($criteria=='1'){
			$where.=" and numtar ='$search' ";
		}else{
			$where.=" and numtar in (select numtar from tb_tarjeta_posicion where numusu='$search') ";
		}
	} 
	if (isset($desde) && $desde !== null && $desde !== '' && isset($hasta) && $hasta !== null && $hasta !== ''){
		$desde= str_replace("-","", $desde);
		$hasta= str_replace("-","", $hasta);
		$where .= " and concat(SUBSTRING(fecha,5,4),SUBSTRING(fecha,3,2),SUBSTRING(fecha,1,2)) >='$desde' and concat(SUBSTRING(fecha,5,4),SUBSTRING(fecha,3,2),SUBSTRING(fecha,1,2)) <='$hasta'";
	} 
	$query = "SELECT COUNT(*) FROM tb_tarjeta_cocina";
	if (isset($where) && $where !== null && $where !== '') 
		{
		$query = $query . " Where " . $where;
		}
	$database->setQuery( $query );
	$total = $database->loadResult();

	require_once( $GLOBALS['config_absolute_path'] . '/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit  );

	$query = "SELECT * FROM tb_tarjeta_cocina";
	if (isset($where) && $where !== null && $where !== '') 
		{
		$query = $query . " WHERE " . $where;
		}

	$query = $query . " Order by id DESC";

	$database->setQuery( $query, $pageNav->limitstart, $pageNav->limit );
	$rows = $database->loadObjectList();

	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}

	HTML_credito::TarjetaCocina_Listado(  $rows, $pageNav, $search, $option,'', $criteria, $match,$desde,$hasta);
}	


function TarjetaGalon_Listado ( $option, $where= '' ) {
	global $database, $mainframe, $my, $acl, $config_list_limit;

	$limit 				= intval( $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $config_list_limit ) );
	$limitstart      	= intval( $mainframe->getUserStateFromRequest( "view{$option}limitstart", 'limitstart', 0 ) );
	$search         	= $mainframe->getUserStateFromRequest( "filter{$option}search", 'search', '' ) ;
	$criteria       	= $mainframe->getUserStateFromRequest( "filter{$option}criteria", 'filter_criteria', '' ) ;
	$match         		= $mainframe->getUserStateFromRequest( "filter{$option}match", 'match', '' ) ;
	//$where            = $mainframe->getUserStateFromRequest( "filter{$option}where", 'where', $where );
	//$where 			= str_replace( "%nbsp;", "'", $where ) ;

//	$where= goSearch($match, $criteria, $search, '');

	// get the total number of records
	$query = "SELECT COUNT(*) FROM tb_tarjeta_galon";
	if (isset($where) && $where !== null && $where !== '') 
		{
		$query = $query . " Where " . $where;
		}
	$database->setQuery( $query );
	$total = $database->loadResult();

	require_once( $GLOBALS['config_absolute_path'] . '/includes/pageNavigation.php' );
	$pageNav = new mosPageNav( $total, $limitstart, $limit  );

	$query = "SELECT * FROM tb_tarjeta_galon";
	if (isset($where) && $where !== null && $where !== '') 
		{
		$query = $query . " WHERE " . $where;
		}

	$query = $query . " Order by id DESC";

	$database->setQuery( $query, $pageNav->limitstart, $pageNav->limit );
	$rows = $database->loadObjectList();

	if ($database->getErrorNum()) {
		echo $database->stderr();
		return false;
	}

	HTML_credito::TarjetaGalon_Listado( $rows, $pageNav, $search, $option, '', $criteria, $match );
}

function Listado_Cashback( $option, $where= '' ) {
	global $database, $mainframe, $my, $acl, $config_list_limit;

	$limit 				= intval( $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $config_list_limit ) );
	$limitstart      	= intval( $mainframe->getUserStateFromRequest( "view{$option}limitstart", 'limitstart', 0 ) );
	$search         	= $mainframe->getUserStateFromRequest( "filter{$option}search", 'search', '' ) ;
	$criteria       	= $mainframe->getUserStateFromRequest( "filter{$option}criteria", 'filter_criteria', '' ) ;
	$match         		= $mainframe->getUserStateFromRequest( "filter{$option}match", 'match', '' ) ;
	//$where            = $mainframe->getUserStateFromRequest( "filter{$option}where", 'where', $where );
	//$where 			= str_replace( "%nbsp;", "'", $where ) ;

//	$where= goSearch($match, $criteria, $search, '');
	$query = "TRUNCATE TABLE tb_cashback;";

	$database->setQuery($query);
	$result = $database->query();
					
	if ($database->getErrorNum()) 
		{
		echo $database->stderr();
		return false;
		}
	
	// get the total number of records
	$query = "SELECT DISTINCT
      tb_detliq.numusu,
      tb_detmov.numeroautorizacion,
      tb_detmov.fk_tb_addenda_id,
      tb_detmov.importeorig,
      tb_addenda.numero_tienda,
      tb_addenda.fecha_dia,
      tb_addenda.fecha_mes,
      tb_addenda.fecha_ano,
      tb_addenda.factura_trx,
      tb_addenda.factura_total  
	FROM 
	      tb_detliq,
	      tb_detmov,
	      tb_addenda
	WHERE 
	      tb_detliq.numusu IN (8581022,7474611,7818868,8441410,7126109,7468384,8319889,8937177,9340686,6505653,7740709,9395013,8813138,8453103,8228729,6108050,8911443,7804322,8229579,7802753,8911450,8790437,6164672,7275276,7896198,7896174,7896181,7896167,7896150,7896143,7964349,9153941,9233434,8618221)
	AND 
	      tb_detmov.cartera = '026'
	AND 
	      tb_detliq.mes LIKE '11'
	AND 
	      tb_detliq.ano LIKE '2010'
	AND
	      tb_detliq.grupo_mov = 'CON'
	AND
	      (
	            (
	                  tb_detliq.cuotas_numero = '00'
	            AND
	                  tb_detliq.cut = tb_detmov.cut
	            )
	      OR 
	            (
	                  tb_detliq.cuotas_numero = '01'
	            AND
	                  tb_detliq.cut_rel = tb_detmov.cut
	            )
      OR 
            (
                  tb_detliq.cuotas_numero = ' '
            AND
                  tb_detliq.cut = tb_detmov.cut
            )

        )
	AND 
	      (
	            tb_detmov.codoper LIKE '100501'
	      OR
	            tb_detmov.codoper LIKE '100632'
	      )
	AND
		tb_addenda.id = tb_detmov.fk_tb_addenda_id
	ORDER BY 
		tb_detliq.numusu, tb_addenda.factura_trx, tb_addenda.fecha_dia";
	
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

	if ($database->getErrorNum()) 
		{
		echo $database->stderr();
		return false;
		}
	$i = 0;
		
	foreach ($rows as $key => $value)
		{
		$numusu 		= $value->numusu;       
		$numero_tienda 	= $value->numero_tienda;
		$fecha_dia 		= $value->fecha_dia;   
		$fecha_mes 		= $value->fecha_mes;   
		$fecha_ano 		= $value->fecha_ano;   
		$factura_trx 	= $value->factura_trx; 
		$factura_total 	= $value->factura_total;
		$importeorig 	= $value->importeorig/100;
		
		$query = "SELECT *
			FROM 
				tb_addenda
			WHERE 
				numero_tienda = $numero_tienda
			AND 
				fecha_dia = $fecha_dia
			AND 
				fecha_mes = $fecha_mes
			AND 
				fecha_ano = $fecha_ano
			AND 
				factura_trx = $factura_trx
			AND 
				factura_total = $factura_total";
			
		$database->setQuery( $query );
		$addenda = $database->loadObjectList();

		if ($database->getErrorNum()) 
			{
			echo $database->stderr();
			return false;
			}
						
		foreach ($addenda as $key2 => $value2)
			{
			$i++;
			$id = $value2->id;
			$producto = $value2->producto_codigo;
			$categoria = substr($producto,5,2);
			$linea = substr($producto,7,2);
			$cantidad = $value2->producto_cantidad;
			$precio = $value2->producto_precio/100;
			// Ese ID 149079 es el de la addenda generica, es decir la que se asigna a los consumos una vez que no 
			// se pudieron empatar con ninguna addenda
			if ($id == '149079')
				{
				$precio = $importeorig;
				}
				
			$query = "INSERT INTO tb_cashback (id,numusu,producto,categoria,linea,cantidad,precio)
				VALUES (NULL ," . $numusu . "," . $producto . ",". $categoria .",". $linea.",". $cantidad.",". $precio .")";
			
			$database->setQuery($query);
        	$result = $database->query();
			
			if ($database->getErrorNum()) {
				echo $database->stderr();
				return false;
			}
			
			echo $numusu . ";" . $value2->producto_codigo . ";" . $value2->producto_cantidad . ";" . $precio . ";" . $value2->producto_descripcion . "<br>";
			
			}
						
		}
	}

	function buscar_preautorizacion_avanzado($option) {
		global $database, $mainframe, $my, $acl, $config_list_limit;
		require_once($GLOBALS['config_absolute_path'] . '/includes/pageNavigation.php');
		$limit 				= intval( $mainframe->getUserStateFromRequest( "viewlistlimit", 'limit', $config_list_limit ) );
		$limitstart      	= intval( $mainframe->getUserStateFromRequest( "view{$option}limitstart", 'limitstart', 0 ) );
		$search         	= $mainframe->getUserStateFromRequest( "filter{$option}search", 'search', '' ) ;
		$criteria       	= $mainframe->getUserStateFromRequest( "filter{$option}criteria", 'filter_criteria', '' ) ;
		$match         		= $mainframe->getUserStateFromRequest( "filter{$option}match", 'match', '' ) ;
		
		
		$fechaDesde = mosGetParam($_POST,'fecha_desde');
		$fechaHasta = mosGetParam($_POST,'fecha_hasta');
		$fecha_desde = str_replace('-', '', $fechaDesde);
		$fecha_hasta = str_replace('-', '', $fechaHasta);
		$estados = mosGetParam($_POST,'estados');
		$agentes = mosGetParam($_POST,'agentes');
		$inventario = mosGetParam($_POST,'inventario');
		
		if(empty($estados) && empty($agentes) && empty($inventario)) {
			$WHERE = 'WHERE 0 ';
		}
		else {		
			// Variables para filtros de consulta
			$WHERE = 'WHERE 1 AND ( 0 ';
			// Completar filtro para los estados		
			if(!empty($estados) && $estados[0] != '') {
				$filtro_estados = ' (';
				foreach ($estados as $value) {
					$filtro_estados .= "'$value', ";
				}
				$filtro_estados = substr($filtro_estados, 0, strlen($filtro_estados)-2) . ') ';
				$WHERE .= " OR estado IN  $filtro_estados ";
			}
			else {
				$WHERE .= " OR 1 ";
			}		
			// Completar filtro para los agentes		
			if(!empty($agentes) && $agentes[0] != '') {
				$filtro_agentes = ' (';
				foreach ($agentes as $value) {
					$filtro_agentes .= "'$value', ";
				}
				$filtro_agentes = substr($filtro_agentes, 0, strlen($filtro_agentes)-2) . ') ';
				$WHERE .= " AND agente_vendedor IN  $filtro_agentes ";
			}		
			// Completar filtro para los inventarios		
			if(!empty($inventario) && $inventario[0] != '') {
				$filtro_inventario = ' (';
				foreach ($inventario as $value) {
					$filtro_inventario .= "'$value', ";
				}
				$filtro_inventario = substr($filtro_inventario, 0, strlen($filtro_inventario)-2) . ') ';
				$WHERE .= " AND establecimiento IN  $filtro_inventario ";
			}
			$WHERE .= ' OR 0 )';
		}
		if($fecha_desde != '' && $fecha_hasta != '') {
			$WHERE .= " AND CONCAT(ano_alta, mes_alta, dia_alta) BETWEEN '$fecha_desde' AND '$fecha_hasta'";
		}
		// Consultas
		$query = "
			SELECT COUNT(*) 
			FROM tb_preautorizacion p 
			$WHERE
		";
		$database->setQuery($query);
		$total = $database->loadResult();
		$pageNav = new mosPageNav($total, $limitstart, $limit);
		
		$query = "
			SELECT * 
			FROM tb_preautorizacion p 
			$WHERE
			ORDER BY CONCAT(p.ano_alta,p.mes_alta,p.dia_alta) DESC, p.id DESC
		";
		$database->setQuery( $query, $pageNav->limitstart, $pageNav->limit );
		$rows = $database->loadObjectList();
		//echo $query;
		HTML_credito::buscar_preautorizacion_avanzado($rows, $pageNav, $search, $option, '', $criteria, $match, $estados, $agentes, $inventario, $fechaDesde, $fechaHasta);
	}
        
    /**
     * @description Obtener preguntas para el validador por preguntas del SAC
     * @autor Kevin Benavides
     * @param type $option
     */
    function validador_preguntas_credid($option) {
        global $my,$database;
        
	$identificacion = mosGetParam($_POST, 'identificacion');
	$tipo_documento = mosGetParam($_POST, 'tipo_documento');
        
	if(empty($identificacion)) {
		$identificacion = mosGetParam($_GET, 'identificacion');
		$tipo_documento = mosGetParam($_GET, 'tipo_documento');
	}

	detenerCedulaDuplicada($identificacion ,1);
	
        /*SI ES VALIDADOR HUELLA SE REDIRIGE A INGRESAR IMAGEN DE RESPALDO*/
	if(mosValidadorHuella::esValidadorHuella($identificacion))
		mosRedirect( "index.php?option=credito&task=agregar_imagen_huella&identificacion=$identificacion&tipo_documento=$tipo_documento", '' );
	
        /*SI YA APROBO EL VALIDADOR NO HACER NUEVAMENTE LAS PREGUNTAS*/
	if(idValidator::isApproved($identificacion))
		mosRedirect( "index.php?option=credito&task=gosecond&identificacion=$identificacion&tipo_documento=$tipo_documento", '' );
	
        /*Se permite un solo intento*/
	$intentos_validador = idValidator::getIntentos($identificacion);
	if($intentos_validador > 0)
	{
            echo "<script>alert('Cedula ya ha realizado cuestionario en mas de una ocasión. Favor comunicarse con Credix');location.href = 'index.php';</script>";
            exit();
	}
        
        /*WS credid preguntas*/        
        $identificacion_consulta = str_replace('-', '', $identificacion);
        
        $arrayHeader = array('Authorization:'._CREDID_API_WS_TOKEN_);
        $body=array('cedula'=>$identificacion_consulta);
        
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_HTTPHEADER, $arrayHeader);
        $url = sprintf("%s?%s", _CREDID_API_URL_QUESTIONS_, http_build_query($body));
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        $code =  curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        $preguntas = json_decode($result);
        
        //Bitacoras
        $referencia = date('Y').date('W').date('d').date('h').date('m').date('s').substr(round(microtime(true) * 1000), -4);
	$preguntasArray = $preguntas->Preguntas;
        if(empty($preguntasArray) || sizeof($preguntasArray) > 0){
            $query = "INSERT INTO tb_ValidadorIdBitacora(referenciaPk,identificacion,referenciaUser,calificacion,creado)
                VALUES($referencia,'$identificacion','$my->username',0,current_timestamp()); ";
            $database->setQuery($query);
            $database->query();
            foreach($preguntasArray as $pregunta) {
                $resp = ($pregunta->Respuesta) ? 1 : 0;
                $query = "INSERT INTO tb_ValidadorIdBitacoraPreguntas(codigoPk,referenciaFk,pregunta,opcionCorrecta,respuesta,creado,modificado)
                    VALUES($pregunta->Numero,$referencia,'$pregunta->Pregunta',$resp,-1,current_timestamp(),current_timestamp()); ";
                $database->setQuery($query);
                $database->query();
            }
        }

	HTML_credito::validador_identidad($option, $preguntas, $identificacion, $tipo_documento,$referencia);
    }
    
    /**
     * @description Calificar las respuestas a las preguntas dados por Credid
     * @autor Kevin Benavides
     * @param type $option
     */
    function validador_respuestas_credid($option) {
	global $my, $database;
        
	/*CAPTURA DE CEDULA Y TIPO DE CEDULA*/
        $identificacion = mosGetParam($_POST, 'identificacion');
	$tipo_documento = mosGetParam($_POST, 'tipo_documento');
        $referencia = mosGetParam($_POST, 'referencia');

	if(empty($identificacion)) {
		$identificacion = mosGetParam($_GET, 'identificacion');
		$tipo_documento = mosGetParam($_GET, 'tipo_documento');
	}
        
        /*OBTENGO DATOS DE TB TELETEC*/
        $estudioTbTeletec = obtenerEstudioTbTeletecByIdentificacion($identificacion);
        $idTeletec = $estudioTbTeletec->id;
        $telefono = $estudioTbTeletec->telefono;
        $establecimiento_apertura = $estudioTbTeletec->establecimiento_apertura;
        
	$nota = '0';
	$resolucion = 'Rechazado';
	$nocontestadas = 0;
	for($i=1; $i<=5; $i++){
            $value = mosGetParam($_POST, 'pregunta'.$i);
            $respuesta = mosGetParam($_POST, 'respuesta'.$i);
            if(isset($value) && ($value == '0' || !empty($value))){
                if($value == $respuesta){
                    $nota += mosGetParam($_POST, 'puntaje'.$i);
                }
            } else {
                $nocontestadas ++;
            }
            //Bitacora
            $query = "UPDATE tb_ValidadorIdBitacoraPreguntas SET respuesta = $value , modificado = current_timestamp() WHERE referenciaFk = $referencia AND codigoPk = $i ; ";
            $database->setQuery($query);
            $database->query();
            
            
	}
        
        if( $nota >= 80 ){
            $resolucion = 'Aprobado';
        }
        
        $query = "UPDATE tb_ValidadorIdBitacora SET calificacion = $nota WHERE referenciaPk = $referencia ";
        $database->setQuery($query);
        $database->query();
            
        /*GUARDO EL INTENTO*/
	$row = new mosValidadorId( $database );
	$row->id	= (int) $row->id;
	$row->identificacion = $identificacion;
	$row->calificacion = $nota;
	$row->resultado = $resolucion;
	$row->sincontestar = $nocontestadas;
	$row->fecha = date('Y-m-d');
	$row->hora = date('H:i:s');
	$row->store();
        
        /*Unico intento y aprueba las preguntas con 4 ó 5 aciertos*/
	if( $resolucion == 'Aprobado' ){
		mosRedirect( "index.php?option=credito&task=gosecond&identificacion=$identificacion&tipo_documento=$tipo_documento", '' );
	} else {
                $row = new mosPreautorizacion( $database );
                $row->id               = (int) $row->id;
                $row->sexo = 'N';
                $row->nombre = '';
                $row->apellidos = '';
                $row->fecha_nacimiento = '19000101';
                $row->identificacion = $identificacion;
                $row->tipodocumento = $tipo_documento;
                $row->dia_alta = date('d');
                $row->mes_alta = date('m');
                $row->ano_alta = date('Y');
                $row->agente_vendedor = $my->username;
                $row->establecimiento = $my->name;
                $row->entrada = 1;
                $row->telefono = $telefono;
                $row->estado		 = "RECHAZADO" ;
                $row->estado_origen  = "RECHAZADO" ;
                $row->tracking	 = 70;
                $row->establecimiento_apertura = $establecimiento_apertura;
                $row->tipo_producto = $estudioTbTeletec->tipo_producto;
                $row->store();

                $calificaciones = idValidator::getCalificaciones($identificacion);

                $database->setQuery("update tb_preautorizacion_teletec set id_preautorizacion='$row->id' where id = '$idTeletec' ;");
                $database->query(); 

                $idCheck = new mosIDCheck();
                $idCheckData = obtenerEstudioTbTeletecByIdentificacion($identificacion);
                /*INGRESO COMENTARIO CON RESOLUCION DE ID CHECK*/
                /*AVISO ID CHECK*/
                $avisoTextIdCheck = $idCheck->getTextResolucion($idCheckData->aviso);
                /*RESOLUCION ID CHECK*/
                $resolucionTextIdCheck = getTextResolucionTeletec($idCheckData->aviso_final_idck);
                /*COMENTARIO DE RESOLUCION ID CHECK*/
                $comentario_resolucion_idcheck = 'AVISO ID CHECK: '.$avisoTextIdCheck. ' [::] RESOLUCION ID CHECK: '.$resolucionTextIdCheck;
                saveComentarioInicial($row->id,$comentario_resolucion_idcheck,'ID');
                saveComentarioInicial($row->id,"SOLICITUD RECHAZADA POR VALIDADOR IDENTIDAD",'ID');
                saveComentarioInicial($row->id,"CUESTIONARIO REALIZADO :: 1 CALIFICACION OBTENIDA $calificaciones",'ID');
                
                $rowInfo = array();
                $rowInfo['identificacion'] = $identificacion;
                $rowInfo['tipodocumento'] = $tipo_documento;
                $rowInfo['idPreautoTeletec'] = $idTeletec;
                $rowInfo['idPreautoTmp'] = '-1';
                $rowInfo['nota'] = $nota;
				$rowInfo = (Object) $rowInfo;
			
                HTML_credito::gofourthcomercio($option,	$rowInfo, '33');
        }
    }
    
?>