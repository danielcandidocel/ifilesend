<?php

class homecontroller extends controller { 
   
    public function index() {
        date_default_timezone_set("America/Sao_Paulo");
        $dados = array();
        if(isset($_GET['id'])){
            $url = addslashes($_GET['id']);
            $t = new transfer();
    
            $dados['arquivo'] = $t->getFile($url);
            $this->loadTemplatePanel('send', $dados);
        }
        
        $this->loadTemplatePanel('painel', $dados);
        
    }   
   
    public function esqueci(){
        $dados = array();
        
        $this->loadTemplateLogin('esqueci', $dados);
    }
    
}

