<?php

class peliculasController {

    function __construct() {
        $this->model = new peliculasModel();
    }

    function index() {
        $vista = new View();
        $vista->classComprarEnlace = '';
        $autenticado = isset($_SESSION["autenticado"]);
        if ($autenticado) {
            $rol = $_SESSION["rol"];
            $vista->classEnlaces = $rol !== 'administrador' ? 'ocultar' : '';
            $vista->classComprarEnlace = $rol !== 'administrador' ? '' : 'ocultar';
        } else {
            $vista->classEnlaces = 'ocultar';
            $vista->classComprarEnlace = 'ocultar';
        }
        $peliculas = $this->model->getpeliculas();
        $vista->peliculas = $peliculas;
        $vista->url_nuevo = Config::URL_BASE . "/peliculas/nuevo";
        $vista->render('peliculas');
    }

    function info(int $id_pelicula) {
        $pelicula = $this->model->getPelicula($id_pelicula);
        if (!is_null($pelicula)) {
            $vista = new View();
            $vista->pelicula = $pelicula;
            $vista->url_back = Config::URL_BASE . '/pelicula';
            $vista->render('pelicula_info');
        }
    }

    function nuevo() {
        if (!($_SESSION["autenticado"]
            && $_SESSION["rol"] === 'administrador')) {
            header("location: " . Config::URL_BASE);
        }
        $vista = new View();
        $vista->errores = [];
        $vista->url_back = Config::URL_BASE . '/peliculas';
        try {
            if (isset($_POST["enviar"])) {
                $valido = new PeliculaFormValidator($_POST);
                if ($valido->isOK()) {
                    $pelicula = new Pelicula($_POST);

                    /// TRATAR IMAGEN
                    if ($_FILES["imagen"]["name"] !== "") {
                        $tmp = $_FILES["imagen"]["tmp_name"];
                        $name = $_FILES["imagen"]["name"];
                        $size = $_FILES["imagen"]["size"];
                        $type = $_FILES["imagen"]["type"];
                        if ($type !== "image/jpeg" && $type !== 'image/png') {
                            $vista->errores["imagen"] = "La imagen solo puede ser del tipo JPEG o PNG.";
                        }
                        if ($size > 100000) {
                            $vista->errores["imagen"] = "La imagen no puede pesar mas de 100KB.";
                        }
                        if (empty($vista->errores)) {
                            $destino = Config::PATH_IMAGENES . "/" . $name;
                            $ok = move_uploaded_file($tmp, $destino);
                            if ($ok) {
                                $pelicula->setNombreImagen($name);
                            }
                        }
                    }
                    if (empty($vista->errores)) {
                        $id = $this->model->createPelicula($pelicula);
                        $_POST = [];
                    }
                }
            }
        } catch (PeliculaFormValidatorException $e) {
            $errores = $e->getMessagesErrores();
            $vista->errores = $errores;
        } finally {
            $vista->render('peliculas_new');
        }
    }

    function edit(string $id_pelicula) {
        if (!($_SESSION["autenticado"]
            && $_SESSION["rol"] === 'administrador')) {
            header("location: " . Config::URL_BASE);
        }
        if (!is_numeric($id_pelicula)) {
            header("location: " . Config::URL_BASE . "/peliculas");
        }
        $vista = new View();
        $vista->errores = [];
        $vista->url_back = Config::URL_BASE . '/peliculas';
        try {
            $peliculaOld = $this->model->getPelicula($id_pelicula);
            if (is_null($peliculaOld)) {
                header("location: " . Config::URL_BASE . "/peliculas");
            }
            if (isset($_POST["enviar"])) {
                $valido = new PeliculaFormValidator($_POST);
                if ($valido->isOK()) {
                    $pelicula = new Pelicula($_POST);                    
                    $pelicula->setNombreImagen($peliculaOld->imagen);
                    /// TRATAR IMAGEN
                    if ($_FILES["imagen"]["name"] !== "") {
                        $tmp = $_FILES["imagen"]["tmp_name"];
                        $name = $_FILES["imagen"]["name"];
                        $size = $_FILES["imagen"]["size"];
                        $type = $_FILES["imagen"]["type"];
                        if ($type !== "image/jpeg" && $type !== 'image/png') {
                            $vista->errores["imagen"] = "La imagen solo puede ser del tipo JPEG o PNG.";
                        }
                        if ($size > 100000) {
                            $vista->errores["imagen"] = "La imagen no puede pesar mas de 100KB.";
                        }
                        if (empty($vista->errores)) {
                            $destino = Config::PATH_IMAGENES . "/" . $name;
                            $ok = move_uploaded_file($tmp, $destino);
                            if ($ok) {
                                $pelicula->setNombreImagen($name);
                                $file = Config::PATH_IMAGENES . "/" . $peliculaOld->imagen;
                                if (file_exists($file)) {
                                    unlink($file);
                                }
                            }
                        }
                    }
                    if (empty($vista->errores)) {
                        $ok = $this->model->updatePelicula($pelicula);
                        if ($ok) {
                            header("location: " . Config::URL_BASE . "/peliculas");
                        }
                    }
                }
            } else {
                $_POST = [
                    "id_pelicula" => $peliculaOld->id_pelicula,
                    "titulo" => $peliculaOld->titulo,
                    "duracion" => $peliculaOld->duracion,
                    "anio" => $peliculaOld->anio,
                    "pais" => $peliculaOld->pais,
                    "genero" => $peliculaOld->genero,
                    "sipnosis" => $peliculaOld->sipnosis,
                ];
                $vista->imagen = $peliculaOld->imagen;
            }
        } catch (PeliculaFormValidatorException $e) {
            $errores = $e->getMessagesErrores();
            $vista->errores = $errores;
        } finally {
            $vista->render('peliculas_edit');
        }
    }

    function delete(string $id_pelicula) {
        if (!($_SESSION["autenticado"]
            && $_SESSION["rol"] === 'administrador')) {
            header("location: " . Config::URL_BASE);
        }
        $pelicula = $this->model->getPelicula($id_pelicula);
        if (is_null($pelicula)) {
            header("location: " . Config::URL_BASE . "/peliculas");
        }
        $vista = new View();
        $vista->url_delete = config::URL_BASE
            . "/peliculas/deletetotal/$id_pelicula";
        $vista->url_back = Config::URL_BASE . "/peliculas";
        $vista->pelicula = $pelicula;
        $vista->render('peliculas_delete');
    }

    function deletetotal(string $id_pelicula) {
        if (!($_SESSION["autenticado"]
            && $_SESSION["rol"] === 'administrador')) {
            header("location: " . Config::URL_BASE);
        }
        try {
            $peliculaOld = $this->model->getPelicula($id_pelicula);
            $ok = $this->model->deletePelicula($id_pelicula);
            if ($ok) {
                $file = Config::PATH_IMAGENES . "/" . $peliculaOld->imagen;
                if (file_exists($file)) {
                    unlink($file);
                }
                header("location: " . Config::URL_BASE . "/peliculas");
            }
        } catch (MySqlDBException $e) {
            echo $e->getMessage();
            echo "<br><a href='" . Config::URL_BASE . "/peliculas'>Volver</a>";
        }
    }
}
