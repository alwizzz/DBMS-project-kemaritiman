<?php
$serverName = "LAPTOP-SMSR9TQG"; //sesuaikan dengan spesifikasi yang digunakan
$connectionInfo = array( "Database"=>"KEMARITIMAN");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn === false )
{
     echo "Could not connect.\n";
     die( print_r( sqlsrv_errors(), true));
}

if( $client_info = sqlsrv_client_info( $conn))
{
       foreach( $client_info as $key => $value)
      {
              echo $key.": ".$value."\n";
      }
      echo "mASSSOOOOOOOOOOKK";
}
else
{
       echo "Client info error.\n";
}

sqlsrv_close( $conn);
?>