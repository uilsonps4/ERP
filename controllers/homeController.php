<?php
class homeController extends controller {

    public function __construct() {
        parent::__construct();

        
        $u = new Users ();
        if($u->isLogged()==false){
        header("Location: ".BASE_URL."/login");
        }
    }

    public function index() {
        $dados = array();
        
        $posts = new Posts();
        $dados['posts'] = $posts->getPosts(10);        
        
        $this->loadTemplate('home', $dados);
    }

}