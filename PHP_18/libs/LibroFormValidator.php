<?php
class LibroFormValidatorException extends FormValidatorException {
}

class LibroFormValidator {
    function __construct(array $data) {
        $this->crush = new LibroFormValidatorException('Datos Incorrectos.');
        $this->hayError = false;

        $this->validarIsbn($data["isbn"]);
        $this->validarTitulo($data["titulo"]);
        $this->validarAnioPublicacion($data["anio_publicacion"]);
        $this->validarEditorial($data["editorial"]);

        if ($this->hayError) {
            throw $this->crush;
        }
    }

    private function validarIsbn(String $isbn) {
        if (strlen($isbn) === 0) {
            $this->hayError = true;
            $this->crush->addMessageError(
                'isbn',
                'El ISBN no puede ser vacio.'
            );
        } else if (strlen($isbn) !== Config::ISBN_LONGITUD_MAXIMA) {
            $this->hayError = true;
            $this->crush->addMessageError(
                'isbn',
                'El ISBN debe tener '
                    . Config::ISBN_LONGITUD_MAXIMA
                    . ' caracteres.'
            );
        }
    }

    private function validarTitulo(String $titulo) {
        if (strlen($titulo) === 0) {
            $this->hayError = true;
            $this->crush->addMessageError(
                'titulo',
                'El título no puede ser vacio.'
            );
        } else if (strlen($titulo) > Config::TITULO_LONGITUD_MAXIMA) {
            $this->hayError = true;
            $this->crush->addMessageError(
                'nombre',
                'El título es demasiado largo. Máximo '
                    . Config::TITULO_LONGITUD_MAXIMA
                    . ' caracteres.'
            );
        }
    }

    private function validarAnioPublicacion(string $anio) {
        if (!is_numeric($anio)) {
            $this->hayError = true;
            $this->crush->addMessageError(
                'anio_publicacion',
                'El año de publicación debe ser un número entre '
                    . Config::ANIO_PUBLICACION_MINIMO . ' y '
                    . Config::ANIO_PUBLICACION_MAXIMO . '.'
            );
        } else if ($anio < Config::ANIO_PUBLICACION_MINIMO || $anio > Config::ANIO_PUBLICACION_MAXIMO) {
            $this->hayError = true;
            $this->crush->addMessageError(
                'anio_publicacion',
                'El año de publicación debe estar entre '
                    . Config::ANIO_PUBLICACION_MINIMO . ' y '
                    . Config::ANIO_PUBLICACION_MAXIMO . '.'
            );
        }
    }

    private function validarEditorial(String $editorial) {
        if ($editorial === '') {
            $this->hayError = true;
            $this->crush->addMessageError(
                'editorial',
                'La editorial no puede ser vacía.'
            );
        } else if (strlen($editorial) > Config::EDITORIAL_LONGITUD_MAXIMA) {
            $this->hayError = true;
            $this->crush->addMessageError(
                'editorial',
                'La editorial es demasiado larga. Máximo '
                    . Config::EDITORIAL_LONGITUD_MAXIMA . ' caracteres.'
            );
        }
    }

    public function isOK() {
        return !$this->hayError;
    }
}
