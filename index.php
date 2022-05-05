<?php

    require_once("Config/config.php");

    // Obtiene el valor del archivo .htaccess linea 6
    // para conocer todo lo que viaje en URL despues del home
    // site/controlador/metodo/dato
    $url = !empty ($_GET['url']) ? $_GET['url'] : 'home/home';
    $arrUrl = explode("/", $url); 

    // Recupera de la variable URL atrapada Controlador + Metodo + Parametros
    $controller = $arrUrl[0];
    $method = $arrUrl[0];
    $params = "";

    if(!empty($arrUrl[1])){
        if($arrUrl[1]!=""){
            $method = $arrUrl[1];
        }
    }

    if (!empty($arrUrl[2])){
        if($arrUrl[2]!=""){
            for($i=2; $i<count($arrUrl);$i++){
                $params .= $arrUrl[$i].',';
            }
            $params = trim($params,',');
        }
    }

    require_once("Libraries/Core/Autoload.php");
    require_once("Libraries/Core/Load.php");

    // echo "<br>";
    // echo "Controlador : ".$controller;
    // echo "<br>";
    // echo "Metodo : ".$method;
    // echo "<br>";
    // echo "Parametros : ".$params;


   

    


?>