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

    }


?>
