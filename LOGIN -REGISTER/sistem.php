<?php

session_start();

if (!isset($_SESSION['usuario'])) {
  echo '
      <script>
      alert ("Por favor debes iniciar sesion");    
      window.location = "index.php";
   </script>
    
    ';
  session_destroy();
  die();
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <!--!=======METAS============--->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--!=======FUENTES DE LETRA============--->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <!--!=======ESTILOS CSS============--->
  <link rel="stylesheet" href="css/estilos_sistem/estilos.css">
  <link rel="stylesheet" href="css/estilos_main/normalize.css">
  <!--!=======ICONOS============--->
  <script src="https://kit.fontawesome.com/d5b566d746.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <title>Sistem DashBoard</title>
</head>

<!--!=====FUNCION PARA ABRIR OPCIONES DEL USUARIO Y CERRAR SESION======-->

<script>
  function togglo_visibility(id) {
    var e = document.getElementById('myDIV');
    if (e.style.display == 'block' || e.style.display == '') e.style.display = 'none';
    else e.style.display = 'block';
  }
</script>

<!--!====FUNCION CAMBIAR A MODO OSCURO======-->

<script>
  function toggleDarkLight() {
    var body = document.getElementById("body");
    var currentClass = body.className;
    body.className = currentClass == "dark-mode" ? "light-mode" : "dark-mode";
  }
</script>


<body id="body" class="dark-mode">
  <header>
    <div class="container_header_main" class="animate__bounce">

      <div class="caja1">

        <!--!=====CONTENEDOR VOLVER A INICIO======-->

        <div class="container_back_home">
          <a href="#"><i class="material-icons">notifications</i></a>

          <label for="">
            <h2>Notificaciones</h2>
          </label>
        </div>

        <!--!=======BOTON MODO OSCURO======-->
        <span class="switch">
          <span>
            <input name="dark_light" onclick="toggleDarkLight()" type="checkbox" id="switch" />
            <label for="switch"></label>
          </span>

          <div for="">
            <h2>Modo Oscuro</h2>
          </div>

        </span>
      </div>

      <h1>Panel<i class="material-icons">dashboard</i></h1>

      <div class="caja3">

        <!--!=====CONTENEDOR ICONO DE USUARIO======-->

        <div class="container_icon_sesion">
          <button onclick="togglo_visibility('hideMe')"><i class="fas fa-user"></i></button>
          <label for="">
            <h2>Opciones</h2>
          </label>
        </div>

        <!--!=====CONTENEDOR OPCIONES DE USUARIO======-->

        <div id="myDIV" class="container_items_sesion">
          <ul>
            <li>

              <a class="js-open-modal" data-modal="1" href="#">Ayuda y Soporte
                <span>
                  <i class="material-icons">info_outline</i>
                </span>
              </a>
            </li>

            <!--!MODAL AYUDA Y SOPORTE OPCION USUARIO-->

            <div class="modal" data-modal="1">
              <span class="modal__cross js-modal-close">
                <i class="material-icons">close</i>
              </span>

              <div class="contenido_opcion_usuario">
                <h4>Ayuda y Soporte Tecnico</h4>

                <div class="opcion_usuario1">
                  <a href="#">
                    <div class="container_icon_opcion_user">
                      <span>
                        <i class="material-icons">help_outline</i>
                      </span>
                    </div>
                    <h5>Servicio de ayuda</h5>
                  </a>
                </div>

                <div class="opcion_usuario2">
                  <a href="#">
                    <div class="container_icon_opcion_user2">
                      <span>
                        <i class="material-icons">report</i>
                      </span>
                    </div>
                    <h5>Reportar un Problema</h5>
                  </a>
                </div>
              </div>
            </div>
            <hr>

            <li>
              <a class="js-open-modol" data-modol="1" href="#">
                Pantalla y Accesibilidad
                <span>
                  <i class="material-icons">nightlight_round</i>
                </span>
              </a>
            </li>

            <!--!MODOL PANTALLA Y ACCESIBILIDAD OPCION USUARIO-->

            <div class="modol" data-modol="1">
              <span class="modol__cross js-modol-close">
                <i class="material-icons">close</i>
              </span>

              <div class="contenido_opcion_usuario2">
                <h4>Pantalla y Accesibilidad</h4>

                <div class="opcion_usuario3">
                  <a href="#">
                    <div class="container_icon_opcion_user3">
                      <span>
                        <i class="fi fi-rr-interrogation"></i>
                      </span>
                    </div>
                    <h5>Activar modo oscuro</h5>
                    <span class="switch2">
                      <label>
                        <button name="dark_light" onclick="toggleDarkLight()" type="checkbox" id="switch"><i class="material-icons">dark_mode</i></button>
                      </label>
                    </span>
                    <p>Ajusta el aspecto para reducir el reflejo y dar un descanso a la vista.</p>
                  </a>
                </div>
              </div>
            </div>
            <hr>
            <li><a class="close_sesion" href="php/cerrar_sesion.php">Cerrar Sesion <span><i class="material-icons">logout</i></span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>


  <!--!=====CONTENIDO PRINCIPAL DE LA PAGINA ======-->

  <main>
    <div class="container_main_main_all">

      <div id="VENTAS" class="container_main_all container_main_all_1">
        <div class="title_section">
          <h2>Registro de Ventas</h2>
        </div>

        <!--!FORMULARIO--->

        <form action="sistem.php" method="POST">

          <!--!BOTON RESET FORMULARIO-->

          <div class="container_input_reset">
            <button type="reset" value=""><i class="material-icons">cached</i></button>

            <label for="">
              <h2>Limpiar Formulario</h2>
            </label>
          </div>

          <!--!CONTAINER CAJAS DE LOS INPUTS--->
          <div class="container_cajas_inputs">

            <!--!CONTAINER DE LOS INPUTS--->
            <div class="container_inputs caja1_input">
              <label for="">Nombre<i class="material-icons">face</i></label>
              <input type="text" placeholder="Ingresa Nombre Completo" name="nombre" required>
            </div>
            <div class="container_inputs">
              <label for="">Cedula<i class="material-icons">badge</i></label>
              <input type="number" placeholder="Ingresa Numero De Cedula" name="cedula" required>

            </div>
            <div class="container_inputs">
              <label for=""> Productos Adquiridos<i class="material-icons">shopping_cart</i></label>
              <input type="text" placeholder="Ej, Shampoo , Acondicionador" name="productos_adquiridos" required>
            </div>
          </div>
          <div class="container_cajas_inputs">

            <!--!CONTAINER DE LOS INPUTS--->
            <div class="container_inputs ">
              <label for=""> Cantidad Productos<i class="material-icons">category</i></label>
              <input type="text" placeholder="Ej, Shampoo 1, Acondicionador 2" name="cantidad_productos" required>
            </div>
            <div class="container_inputs">
              <label for=""> Total a Pagar<i class="material-icons">monetization_on</i></label>
              <input type="number" placeholder="Ingresa la suma de los productos" name="total_pagar" required>
            </div>
            <div class="container_inputs">
              <label for=""> Dinero Entregado<i class="material-icons">price_check</i></label>
              <input type="number" placeholder="Ingresa el dinero entregado" name="dinero_entregado" required>
            </div>

          </div>
          <div class="container_cajas_inputs">
            <!--!CONTAINER DE LOS INPUTS--->
            <div class="container_inputs ">
              <label for=""> Fecha<i class="material-icons">schedule</i></h1></label>
              <input type="date" placeholder="Ingresa el dinero devuelto" name="dinero_devuelto" required>
            </div>
            <div class="container_inputs container_inputs_end">

              <button target="_blank">Enviar
                <i class="material-icons">send</i>
              </button>

            </div>

          </div>
        </form>
      </div>

      <div id="HISTORIAL" class="container_main_all container_main_all_2">
        <div class="title_section">
          <h2>Historial de Ventas</h2>
        </div>

        <div class="contenido_historial">
        <iframe src="php_sistem/mostrar.php" width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
        </div>
      </div>

      <div id="INVENTARIO" class="container_main_all  container_main_all_3">
        <div class="title_section">
          <h2>Inventario de Productos</h2>
        </div>

        <div class="contenido_historial">

        </div>
      </div>
    </div>
  </main>

  <section>

    <div class="btn_calculator">
      <span>
        <a class="js-open-modil" data-modil="1" href="#" title="Calculadora">
          <span>
            <i class="material-icons">calculate</i>
          </span>
        </a>
        <label for="">
          <h2>Calculadora</h2>
        </label>

        <div class="modil" data-modil="1">
          <span class="modil__cross js-modil-close">
            <i class="material-icons">close</i>
          </span>

          <div class="contenido_calculadora">
            <h4>Calculadora</h4>
          </div>
        </div>
      </span>
    </div>

  </section>

  <!--!MENU LATERAL --->

  <section>

    <div class="btn_menus1">
      <span>
        <a href="#INVENTARIO" title="Inventario">
          <span>
            <i class="material-icons">view_list</i>
          </span>
        </a>
      </span>

      <label for="">
        <h2>Inventario</h2>
      </label>
    </div>

    <div class="btn_menus2">
      <span>
        <a href="#HISTORIAL" title="Calculadora">
          <span>
            <i class="material-icons">history</i>
          </span>
        </a>
      </span>

      <label for="">
        <h2>Historial</h2>
      </label>
    </div>

    <div class="btn_menus3">
      <span>
        <a href="#VENTAS" title="Ventas">
          <span>
            <i class="material-icons">paid</i>
          </span>
        </a>
      </span>

      <label for="">
        <h2>Ventas</h2>
      </label>
    </div>


  </section>

  <script src="js/main.js"></script>
  <script src="js/main2.js"></script>
  <script src="js/main_calculadora.js"></script>

  <?php
  include "php_sistem/registrar_ventas.php";
  ?>


</body>

</html>