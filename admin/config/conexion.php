<?php
$conn = new mysqli("bmdv5daf4ncmltovaeu6-mysql.services.clever-cloud.com", "uizdya6hn32mvemk", "fqWe3xV7fORliPXJWjgP", "bmdv5daf4ncmltovaeu6");
  
  if ($conn->connect_error) {
    die("ERROR: No se puede conectar al servidor: " . $conn->connect_error);
  } 
?>