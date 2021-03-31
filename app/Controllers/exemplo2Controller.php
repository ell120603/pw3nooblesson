<?php

namespace App\Controllers;

use Core\Controller;

class Exemplo2Controller extends Controller  {
    public function login() {
        $this->view('exemplo2');
    }
    public function cadastro() {
        $this->view('exemplo3');
    }
 
}