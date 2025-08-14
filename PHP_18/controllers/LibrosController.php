<?php

class LibrosController {

    function __construct() {
        $this->model = new LibrosModel();
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
        $libros = $this->model->getLibros();
        $vista->libros = $libros;
        $vista->url_nuevo = Config::URL_BASE . "/libros/nuevo";
        $vista->render('libros');
    }

    // function info(int $id_producto) {
    //     $producto = $this->model->getProducto($id_producto);
    //     if (!is_null($producto)) {
    //         $vista = new View();
    //         $vista->producto = $producto;
    //         $vista->url_back = Config::URL_BASE . '/productos';
    //         $vista->render('productos_info');
    //     }
    // }

    function nuevo() {
        if (!($_SESSION["autenticado"]
            && $_SESSION["rol"] === 'administrador')) {
            header("location: " . Config::URL_BASE);
        }
        $vista = new View();
        $vista->errores = [];
        $vista->url_back = Config::URL_BASE . '/libros';
        try {
            if (isset($_POST["enviar"])) {
                $valido = new LibroFormValidator($_POST);
                if ($valido->isOK()) {
                    $libro = new Libro($_POST);

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
                                $libro->setNombreImagen($name);
                            }
                        }
                    }
                    if (empty($vista->errores)) {
                        $id = $this->model->createLibro($libro);
                        $_POST = [];
                    }
                }
            }
        } catch (LibroFormValidatorException $e) {
            $errores = $e->getMessagesErrores();
            $vista->errores = $errores;
        } finally {
            $vista->render('libros_new');
        }
    }

    function edit(string $isbn) {
        if (!($_SESSION["autenticado"]
            && $_SESSION["rol"] === 'administrador')) {
            header("location: " . Config::URL_BASE);
        }
        if (!is_numeric($isbn)) {
            header("location: " . Config::URL_BASE . "/libros");
        }
        $vista = new View();
        $vista->errores = [];
        $vista->url_back = Config::URL_BASE . '/libros';
        try {
            $libroOld = $this->model->getLibro($isbn);
            if (is_null($libroOld)) {
                header("location: " . Config::URL_BASE . "/libros");
            }
            if (isset($_POST["enviar"])) {
                $valido = new LibroFormValidator($_POST);
                if ($valido->isOK()) {
                    $libro = new Libro($_POST);
                    $libro->setIsbn($isbn);
                    $libro->setNombreImagen($libroOld->imagen);
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
                                $libro->setNombreImagen($name);
                                $file = Config::PATH_IMAGENES . "/" . $libroOld->imagen;
                                if (file_exists($file)) {
                                    unlink($file);
                                }
                            }
                        }
                    }
                    if (empty($vista->errores)) {
                        $ok = $this->model->updateLibro($libro);
                        if ($ok) {
                            header("location: " . Config::URL_BASE . "/libros");
                        }
                    }
                }
            } else {
                $_POST = [
                    "isbn" => $libroOld->isbn,
                    "titulo" => $libroOld->titulo,
                    "anio_publicacion" => $libroOld->anio,
                    "editorial" => $libroOld->editorial,
                    "descripcion" => $libroOld->descripcion,
                ];
                $vista->imagen = $libroOld->imagen;
            }
        } catch (LibroFormValidatorException $e) {
            $errores = $e->getMessagesErrores();
            $vista->errores = $errores;
        } finally {
            $vista->render('libros_edit');
        }
    }

    function delete(string $isbn) {
        if (!($_SESSION["autenticado"]
            && $_SESSION["rol"] === 'administrador')) {
            header("location: " . Config::URL_BASE);
        }
        $libro = $this->model->getLibro($isbn);
        if (is_null($libro)) {
            header("location: " . Config::URL_BASE . "/libros");
        }
        $vista = new View();
        $vista->url_delete = config::URL_BASE
            . "/libros/deletetotal/$isbn";
        $vista->url_back = Config::URL_BASE . "/libros";
        $vista->libro = $libro;
        $vista->render('libros_delete');
    }

    function deletetotal(string $isbn) {
        if (!($_SESSION["autenticado"]
            && $_SESSION["rol"] === 'administrador')) {
            header("location: " . Config::URL_BASE);
        }
        try {
            $libroOld = $this->model->getLibro($isbn);
            $ok = $this->model->deleteLibro($isbn);
            if ($ok) {
                $file = Config::PATH_IMAGENES . "/" . $libroOld->imagen;
                if (file_exists($file)) {
                    unlink($file);
                }
                header("location: " . Config::URL_BASE . "/libros");
            }
        } catch (MySqlDBException $e) {
            echo $e->getMessage();
            echo "<br><a href='" . Config::URL_BASE . "/libros'>Volver</a>";
        }
    }
}
