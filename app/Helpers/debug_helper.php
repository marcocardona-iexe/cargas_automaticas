<?php

if (!function_exists('debug_json')) {
    /**
     * Muestra un JSON formateado y detiene la ejecución.
     *
     * @param mixed $data Los datos a mostrar
     */
    function debug_json($data)
    {
        header('Content-Type: application/json');
        echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        exit();
    }
}