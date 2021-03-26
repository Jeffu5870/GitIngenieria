<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OFERTA</title>
    <script src="../JS/validacion.js"></script>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
<img class="logo" src="../img/header.jpg" alt="">
<header>
<img class="logo2" src="../img/logo.png" alt="">
<div class="eslogan">Tienda buenos Precios</div>
		<div class="wrapper">
            <div class="pestania">
            <nav>
			  <a href="principal.php">Inicio</a>
              <a href="precio_oferta.php">Precio Oferta</a>
              <a href="precio_venta.php">Precio Venta</a>
              <a href="listar.php">Productos</a>
              <a href="../index.php">Salir</a>
            </nav>
            </div>
            
		</div>
    </header>
    <div class="Contenedor_menu">
        <div class="buscadorc">
            <form  action="precio_oferta.php" method="POST"> 
                <input class="control" type="text" name="buscar" id="buscar" placeholder="Colocar Precio">
                <input class="boton" type="submit" value="Buscar">
            </form>
        </div>
    <div class="listado">
    <p>Productos en Oferta en un rango de:</p> <br>
            <table style="width:100%" border=5>
                <tr class="titulos_tabla">
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio Oferta</th>
                </tr>
                <?php
                require_once("../Modelo/apelacion.php");
                if(!isset($_POST['buscar'])){
            
                }
                  else{
                    $dato=$_POST["buscar"];
                    $menor = $dato - ($dato*0.5);
                    $mayor = $dato + ($dato*0.5);
                    echo $menor."--".$mayor;
                    $busqueda=new apelacion();
                    $array_busqueda=$busqueda->oferta_precio($menor,$dato,$mayor);
                    foreach ($array_busqueda as $elementos){
                        echo '<tr><td>';
                        echo $elementos['nombre']."</td><td>";
                        echo $elementos['descripcion']."</td><td>";
                        echo "Q".$elementos['precio_oferta'];  
                    }    
                }
    
                ?>
            </table>
        </div>
    </div>


</body>
</html>