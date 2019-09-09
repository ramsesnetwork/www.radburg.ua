
<?php
/*$serverName = "serverName\\sqlexpress"; //serverName\instanceName
$connectionInfo = array( "Database"=>"dbName", "UID"=>"userName", "PWD"=>"password");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}*/
?>


<?php

// запрет прямого обращения
define('TYRE', TRUE);

// подключение файла конфигурации
require_once ('core/config.php');

// подключение контроллера
require_once CONTROLLER;

?>