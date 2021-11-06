<?php

    require_once './modelos/vistasModelos.php';

    class vistasControlador extends vistasModelo{

        /* -------- Controller to get template-------- */
        public function obtener_plantilla_controlador(){
            return require_once "./vistas/plantilla.php";
        }

        /* -------- Controller to get views-------- */
        public function obtener_vistas_controlador(){
            if (isset($_GET["views"])) {
                $ruta = explode("/", $_GET["views"]);
                $respuesta = vistasModelo::obtener_vistas_modelo($ruta[0]);
            }else {
                $respuesta = "login";
            }
            return $respuesta;
        }
    }