<?php

    header('Content-Type: text/html; charset=ISO-8859-1'); 
    require_once('lib/nusoap.php');

    //Variables
    $mensaje = "Hola amigazo";
    
    //url del webservice que invocaremos
    $wsdl="https://www.novaservicios.com.mx/WebServiceDeveloper/HCN_Radiologia/HCN_Imagenologia.svc?wsdl";
    
    //instanciando un nuevo objeto cliente para consumir el webservice
    $client=new nusoap_client($wsdl,'wsdl');

    //pasando parametros de entrada que seran pasados hacia el metodo
    $param=array('strMensaje'=>$mensaje);

    //llamando al metodo y recuperando el array de productos en una variable
    //$resultado = $client->call('PruebaConeccion', $param);
    $resultado = $client->call('PruebaConeccion', 'Hola amigo');
   
    //¿ocurrio error al llamar al web service?
    if ($client->fault) { // si
        $error = $client->getError();
    if ($error) { // Hubo algun error
            //echo 'Error:' . $error;
            //echo 'Error2:' . $error->faultactor;
            //echo 'Error3:' . $error->faultdetail;faultstring
            echo 'Error:  ' . $client->faultstring;
        }
        
        die();
    }
    
    //Si es vacio
    echo "<pre>";
    print_r($resultado);
    echo "</pre>";
?>