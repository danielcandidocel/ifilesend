<?php
class transfer extends model {
    public function setFile($url, $nomeArquivo){
        $sql = "INSERT INTO url SET url = :url, curta = :nome";
        $sql = $this->db->prepare($sql);             
        $sql->bindValue(":url", $url);        
        $sql->bindValue(":nome", $nomeArquivo);
        $sql->execute();
    } 
   
    public function getFile($url){
        $array = array();
        $sql = "SELECT * FROM url WHERE encurtado = :url";
        $sql = $this->db->prepare($sql);             
        $sql->bindValue(":url", $url);        
        $sql->execute();
        
        if($sql->rowCount() > 0){
            $array = $sql->fetch();
            $acesso = $array['acessos']+1;
            $sql = "UPDATE url SET acessos = :a WHERE id = :id";
            $sql = $this->db->prepare($sql);             
            $sql->bindValue(":id", $array['id']);        
            $sql->bindValue(":a", $acesso);   
            $sql->execute();
        }
        return $array;
    }
    public function setEncurtar($url, $encurtado, $nomeArquivo){
        $busc = 'select * from url where url=:u';
        $busc = $this->db->prepare($busc);
	$busc->bindValue(':u',$url);
	$busc->execute();

	if ($busc->rowCount()<1) {
            $data = date('Y-m-d H:i:s');
                $ins = 'INSERT INTO url SET url = :u, encurtado = :e, acessos= :a, arquivo = :n, date = :data';
		$ins = $this->db->prepare($ins);
		$ins->bindValue(':u',$url);
		$ins->bindValue(':e',$encurtado);
                $ins->bindValue(':n',$nomeArquivo);
		$ins->bindValue(':a',0);
                $ins->bindValue(':data',$data);
		$ins->execute();

		if ($ins) {
			$busc=$this->db->prepare('select * from url where encurtado=:e');
			$busc->bindValue(':e',$encurtado);
			$busc->execute();

			if ($busc->rowCount()>0) {
				$link = BASE_URL."?id=".$encurtado;
			}else{
				echo "error";
			}
		}else{
			echo "error";
		}
	}else{
		while ($linha=$busc->fetch(PDO::FETCH_ASSOC)) {
			$id=$linha['id'];
			$link=$linha['url'];
			$enc=$linha['encurtado'];
		}
		$r = "<a href='?url=".$enc."'>?url=".$enc."</a>";
                
	}
        return $link;
    }
}