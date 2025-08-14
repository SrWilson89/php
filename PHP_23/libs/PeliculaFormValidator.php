<?php
class PeliculaFormValidatorException extends FormValidatorException {
}

class PeliculaFormValidator {
    function __construct(array $data) {
        $this->crush = new PeliculaFormValidatorException('Datos Incorrectos.');
        $this->hayError = false;

        $this->validarTitulo($data["titulo"]);
        $this->validarAnioPublicacion($data["anio"]);
        
        if ($this->hayError) {
            throw $this->crush;
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
                'anio',
                'El año de publicación debe ser un número entre '
                    . Config::ANIO_PUBLICACION_MINIMO . ' y '
                    . Config::ANIO_PUBLICACION_MAXIMO . '.'
            );
        } else if ($anio < Config::ANIO_PUBLICACION_MINIMO || $anio > Config::ANIO_PUBLICACION_MAXIMO) {
            $this->hayError = true;
            $this->crush->addMessageError(
                'anio',
                'El año de publicación debe estar entre '
                    . Config::ANIO_PUBLICACION_MINIMO . ' y '
                    . Config::ANIO_PUBLICACION_MAXIMO . '.'
            );
        }
    }


    public function isOK() {
        return !$this->hayError;
    }
}
