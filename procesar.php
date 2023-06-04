<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $mensaje = $_POST["mensaje"];
  echo "<h2>El mensaje es: </h2>";
  echo "<textarea rows='4' cols='50'>$mensaje</textarea>";
}
?>