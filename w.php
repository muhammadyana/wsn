<?php
$db_host = "mysql.idhostinger.com";
$db_user = "u395598674_anton";
$db_pass = "xmAxKwY9GWk3";
$db_name = "u395598674_tesis";
$now = new DateTime();

$pir = $_GET['pir'];
$gas = $_GET['gas'];
$temp = $_GET['temp'];
$hum = $_GET['hum'];

// Create connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//insert to data_root1
 $datenow = $now->format("Y-m-d H:i:s");

 //$sql = "INSERT INTO 'data_root1'('logdata', 'pir', 'gas','temp','hum') VALUES (\"$datenow\",\"$pir\",\"$gas\",\"$temp\",$hum)";
$query=$conn->query("INSERT INTO data_root1 SET logdata='$datenow',pir='$pir',gas='$gas',temp='$temp',hum='$hum'");
if ($query) {
  echo "New record created successfully";
}else {
  echo "failed";
}


 // if ($conn->query($query) === TRUE) {
 //     echo "New record created successfully";
 // } else {
 //     echo "Error: " . $query . "<br>" . $conn->error;
 // }



//close_connection
 $conn->close();

?>