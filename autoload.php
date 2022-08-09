<?php

    // Autocarga de los controladores

    function controller_autoload($classname) {
        // Entra en la carpeta de controladores y hace un include de cada uno de los controladores
        include 'controllers/' . $classname . '.php';
    }

    spl_autoload_register('controller_autoload');