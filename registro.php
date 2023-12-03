
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta bd</title>
    <style type="text/css">
     
      table {
        border: solid 2px #7e7c7c;
        border-collapse: collapse;
                     
      }
     
      th, h1 {
        background-color: #edf797;
      }

      td,
      th {
        border: solid 1px #7e7c7c;
        padding: 2px;
        text-align: center;
      }
      .wave{
	     position: fixed;
	     bottom: 0;
	     left: 0;
	     height: 111%;
	     z-index: -1;
      }
      .btn{
       float: right;
       margin-bottom: 40px;
       display: flex;
       justify-content: center;
       align-items: center;
	     width: 8%;
	     height: 40px;
	     border-radius: 10px;
	     outline: right;
	     border: right;
	     background: #023c5f;
	     background-size: 600%;
	     color: #fefefe;
       font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
       font-size: 20px;
      }

    </style>
</head>
<body>
<img class="wave" src="img/fond.png">
    <form method="post" action="">
        <div class="fondo">
            <!-- Título -->
            <h1 class="title">"------------------TE REGISTRASTE EXITOSAMENTE.......!!"----------- </h1>
             <!-- title -->
             <a href="principal-index.html">
                <button class="btn" type = "button"> SIGUIENTE </button>
            </a>
        </div>

    </form>
</body>
</html>


<?php
//validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";

//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario
$nombre = $_POST["nombre"] ;
$usuario = $_POST["usuario"] ;
$contrasena = $_POST["contraseña"] ;

//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h3>Hemos conectado al servidor</h3></b>" ;
        }
        //indicamos el nombre de la base datos
        $datab = "proyectofinal";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO registro (nombre, usuario, contrasena)
                             VALUES ('$nombre','$usuario','$contrasena')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM registro";
        
$result = mysqli_query($connection,$consulta);
?>

