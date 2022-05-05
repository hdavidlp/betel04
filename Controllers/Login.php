<?php

    class Login extends Controllers{
        public function __construct(){
            parent::__construct();
        }

        public function login(){
            
             $data['tag_page'] = "Home";

            // (p1, p2, p3 )
            // p2 = nombre del archivo .php de la la vista
            // p3 = datos precargados que mostrará la vista
            $this->views->getView($this,"login", $data);
        }

    }


?>