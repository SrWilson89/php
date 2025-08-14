<?php

/**
 * Representa una vista. 
 * Pagina que se muestrda al usuaria 
 * o que se envia al navegador
 * 
 */
class View {

    /**
     * Carga los archivos de una vista.
     * Recibe el nombre de la vista.
     */
    function render($nombre_vista) {
        // Cargamos el archivo que contiene la vista.
        include "views/" . $nombre_vista . "_view.php";
    }
}
