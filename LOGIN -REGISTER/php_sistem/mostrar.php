<?php
$inc = include("conexion_bd.php");

if ($inc) {
    $consulta = "SELECT * FROM ventas";

    $resultado = mysqli_query($conexion, $consulta);
    if ($resultado) {

        while ($row = $resultado->fetch_array()) {
            $nombre = $row['nombre'];
            $cedula = $row['cedula'];
            $productos_adquiridos = $row['productos_adquiridos'];
            $cantidad_productos = $row['cantidad_productos'];
            $total_pagar = $row['total_pagar'];
            $dinero_entregado = $row['dinero_entregado'];
            $dinero_devuelto = $row['dinero_devuelto'];
?>

            <div style="font-family:sans-serif ;">
                <h2 style="font-size: 31px;"><?php echo $nombre; ?></h2>
                <hr style="background-color: black; height:2px; border:none; width:90%;">
                <div>
                    <p style="line-height:40px;" >
                        <b>Nombre:</b> <?php echo $nombre; ?><br>
                        <b>Cedula:</b> <?php echo $cedula; ?><br>
                        <b>Productos Adquiridos:</b> <?php echo $productos_adquiridos; ?><br>
                        <b>Cantidad de Productos:</b> <?php echo $cantidad_productos; ?><br>
                        <b>Total a Pagar:</b> <?php echo $total_pagar; ?><br>
                        <b>Dinero Entregado:</b> <?php echo $dinero_entregado; ?><br>
                        <b>Fecha De Registro:</b> <?php echo $dinero_devuelto; ?>
                    </p>
                </div>
            </div>

            <body style="background:#00d0ff ;">
                
            </body>

<?php
        }
    }
}

?>