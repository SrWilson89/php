<?php

class View {

    function render(string $page) {
        include "views/" . $page . "_view.php";
    }
}
