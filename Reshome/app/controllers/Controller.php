<?php

class Controller {

    protected $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function render($view, $data = []) {
        extract($data);
        include "views/{$view}.php";
    }

    public function redirect($url) {
        header("Location: {$url}");
        exit;
    }
}
