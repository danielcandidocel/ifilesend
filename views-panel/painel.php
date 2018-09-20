<script>

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
$('input:file').change(function() {
var arq = this.files[0];
 var html = 'Nome do Arquivo: ';
 html += arq.name;
//$('#nome').val(arq.name);
//$('#tamanho').val(arq.size);
//$('#tipo').val(arq.type);
$('.nomeArquivo').html(html); 
 
});

});
function enviar() {
    document.querySelector('#loading').style.display = 'block';
    document.querySelector('.form').style.display = 'none';
    document.querySelector('.link').style.display = 'none';
	var container = document.createElement("span");
	container.innerHTML = "<img src='"+BASE_URL+"assets/images/upload.gif' >"; // coloque a url da sua imagem
	var add_input_div = document.getElementById('loading');
	add_input_div.appendChild(container);	
        
	document.form1.submit();
}
 
</script>   
<div class="home">
    <div class="formulario">
        
        <div class="dados">
            <div class="titulo">
                <h4><strong>Transferir Arquivo</strong></h4>
            </div>
            <div id="loading" > </div>
            <div class="form">
                <form method="POST" enctype="multipart/form-data" action="<?php echo BASE_URL;?>transfer/send" name="form1">
                    <label for="arquivo" class="btn-primary" data-toggle="tooltip" data-placement="right" title="Adicionar Arquivo">+</label>
                    <input type="file" name="arquivo" id="arquivo"/>
                    <span class="nomeArquivo"></span>
                    <input type="submit" value="Transferir" onclick="enviar()" class="btn btn-primary"/>
                </form>
            </div>
            <div class="link">
                <label>Copiar Link:</label>
                
                
                <span><?php if(isset($url) && !empty($url)):?><?php echo $url;?><?php endif;?></span>
                
            </div>
        </div>
    </div>
</div>

