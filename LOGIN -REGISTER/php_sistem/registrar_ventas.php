<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/estilos_registrar_ventas/estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos_main/normalize.css">
    <title>Document</title>
</head>

<body>
    <?php

    include 'conexion_bd.php';

    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $productos_adquiridos = $_POST['productos_adquiridos'];
    $cantidad_productos = $_POST['cantidad_productos'];
    $total_pagar = $_POST['total_pagar'];
    $dinero_entregado = $_POST['dinero_entregado'];
    $dinero_devuelto = $_POST['dinero_devuelto'];

    $query = "INSERT INTO ventas (nombre,cedula,productos_adquiridos,cantidad_productos,total_pagar,dinero_entregado,dinero_devuelto)
            VALUES  ('$nombre','$cedula','$productos_adquiridos','$cantidad_productos','$total_pagar','$dinero_entregado','$dinero_devuelto')";

    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        echo '
       <script>
        alert("Venta Registrada Exitosamente ");

       </script>
       ';
    }
    ?>


</body>

</html>