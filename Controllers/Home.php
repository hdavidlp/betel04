<?php

    class Home extends Controllers{
        public function __construct(){
            parent::__construct();
        }

        public function home(){
            // https://www.youtube.com/watch?v=wInubzA0qSw&list=PL3b9xmg86NTIy18iJLav8oGyA3c__lw0S&index=7
            $data['tag_page'] = "Home";
            $data['page_title'] = "Pagina principal";
            $data['page_name'] = "Home";
            $data['page_id']="1";
            $data['page_content']="lorem ipsum";

            // (p1, p2, p3 )
            // p2 = nombre del archivo .php de la la vista
            // p3 = datos precargados que mostrará la vista
            $this->views->getView($this,"home", $data);
        }

        public function insertar(){
            $data = $this->model->setUser("Carlos", 18);
            print_r($data);
        }

        public function verUsuario($id){
            $data = $this->model->getUser($id);
            print_r($data);
        }

        public function actualizar(){
            $data = $this->model->updateUser(1,"Roberto", 20);
            print_r($data);
        }

        public function verusuarios(){
            $data = $this->model->getUsers();
            print_r($data);
        }

        public function eliminarUsuario($id){
            $data = $this->model->delUser($id);
            print_r($data);
        }

    }


?>
