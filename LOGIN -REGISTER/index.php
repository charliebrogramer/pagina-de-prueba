<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header("location: sistem.php");
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos_main/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos_main/normalize.css">
    <link rel="stylesheet" href="css/estilos_main/animate.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css" />
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <title>Iniciar Sesion</title>
</head>

<body>
    <main>
        <div id="INICIAR_SESION" class="container_all">

            <div class="container_all_form_login">

                <div class="title_login">
                    <h1>Iniciar Sesion</h1>
                </div>

                <!--! CONTENEDOR FORMULARIO DE INICIO DE SESION-->

                <div class="container_form_login">
                    <div class="container_mensaje">
                        
                    </div>

                    <div class="icono_img">
                        <img src="img/perfil-del-usuario.png" alt="">
                    </div>

                    <form action="php/login_usuario_be.php" method="POST" class="login_form">
                        <div class="caja2_input">
                            <label for="name">Correo</label>
                            <input type="email" placeholder="Ingrese  su correo" name="correo" required>
                        </div>

                        <div class="caja3_input">
                            <label for="name">Contraseña</label>
                            <span class="icon-eye"><i class="fi fi-sr-eye-crossed"></i></span>
                            <input type="password" placeholder="Ingrese  su contraseña" name="contrasena" required>
                        </div>

                        <div class="caja4_input">
                            <button>Entrar</button>
                        </div>
                    </form>
                </div>

                <div id="REGISTRATE" class="title_login2">
                    <h1>o Registrate</h1>
                </div>

                <!--! CONTENEDOR FORMULARIO DE REGISTRO-->

                <div class="container_form_register">
                    <div class="container_mensaje">
                        <div class="caja2_mensaje_texto">
                            <h2>¿Ya tienes tienes cuenta? <a href="#INICIAR_SESION">Inicia sesion</a></h2>
                        </div>
                    </div>

                    <form action="php/registro_usuario_be.php" method="POST" class="login_form">
                        <div class="caja2_input_register">
                            <label for="name">Nombre</label>
                            <input type="text" placeholder="Ingrese  su nombre completo" name="nombre_completo" required>
                        </div>

                        <div class="caja4_input_register">
                            <label for="name">Correo</label>
                            <input type="email" placeholder="Ingrese  su correo electronico" name="correo" required>
                        </div>


                        <div class="caja3_input_register">
                            <label for="name">Usuario</label>
                            <input type="text" placeholder="Ingrese  su nombre de usuario" name="usuario" required>
                        </div>
                        <br>
                        <br>

                        <div class="caja5_input_register">
                            <label for="name">Contraseña</label>
                            <input type="password" placeholder="Ingrese  su contraseña" name="contrasena" required>
                        </div>

                        <div class="caja4_input_register">
                            <button>Registrarse</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>


        <footer>
            <p><b class="footer_mensaje">¿No estas registrado? </b>, Contacta al administrador para registrarte e <i>Iniciar Sesion</i>  </p>
        </footer>
    </main>

    <script src="js/eye_on_off.js"></script>

</body>

</html>