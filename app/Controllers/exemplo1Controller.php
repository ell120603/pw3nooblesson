<?php

namespace App\Controllers;

use Core\Controller;

class Exemplo1Controller extends Controller {
    public function index() {
        $this->view('exemplo1');
    }
    
}