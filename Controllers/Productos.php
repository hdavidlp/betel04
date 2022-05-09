<?php

    class Productos extends Controllers{
        public function __construct(){
            parent::__construct();
        }

        public function productos(){
            $data['page_title'] = "Productos";
            $data['page_name'] = "Productos";
            $data['page_id']="2";
            
            $this->views->getView($this,"productos", $data);
        }
    }
?>
