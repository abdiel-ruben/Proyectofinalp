<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Proyectofinal";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Error al conectar a la base de datos: " . mysqli_connect_error());
}
?>
<?php
// ...

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $usuario = $_POST["usuario"];
  $contrasena = $_POST["contrasena"];

  // Validar la información ingresada

  // Procesar la información y verificar la coincidencia en la base de datos
}
?>
<?php
// ...

if (empty($usuario) || empty($contrasena)) {
  die("Por favor, ingresa un usuario y una contraseña.");
}
?>
<?php
// ...

// Procesar la información y verificar la coincidencia en la base de datos
$query = "SELECT * FROM registro WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
  // Inicio de sesión a aotra ventana
  header("location: seleccion.html");
} else {
  // Las credenciales son incorrectas
  echo "Usuario o contraseña incorrectos. Por favor, intenta nuevamente.";
}
?>
 