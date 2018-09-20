<?php
class transfercontroller extends controller {

public function send(){
    $dados = array();
        if(isset($_FILES['arquivo'])){
        $arquivo = $_FILES['arquivo'];
//        print_r($arquivo);    exit();

            if(isset($arquivo['tmp_name']) && !empty($arquivo['tmp_name'])){
                $t = new transfer();
            $type = explode('.', $arquivo['name']);

                $nomeArquivo = md5(time().rand(0,99)).'.'.$type[1];
                $destino = 'arquivos/'.$nomeArquivo;
                move_uploaded_file($arquivo['tmp_name'], 'arquivos/'.$nomeArquivo);


                $url = md5(time().rand(0,999));
                $t->setFile($url, $nomeArquivo);
                $u = 'http://localhost/webtransfer/transfer/download/'.$url;
                $dados['url'] = $this->encurtar($u, $nomeArquivo);
                $this->loadTemplatePanel('painel', $dados);
            } else {
                header("Location: ".BASE_URL);
            }
        } 
}   
public function encurtar($u, $nomeArquivo){
//    if (isset($_POST['url'])) {
    $t = new transfer();
	$url=htmlspecialchars(strip_tags($u));
	$ip=$_SERVER['REMOTE_ADDR'];
	$encurtado= $this->Gerar(8);

	$retorno = $t->setEncurtar($url, $encurtado, $nomeArquivo);
        return $retorno;
//}else{
//	echo "error";
//}
}
function Gerar($valor){
	$keys='aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ0123456789';
	$q=strlen($keys);
	$q--;
	$hash=null;
	for($i=1;$i<=$valor;$i++){
            $p=rand(0,$q);
            $hash.=substr($keys,$p,1);            
        }
	return $hash;
}
}