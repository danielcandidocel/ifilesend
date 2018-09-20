<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=0" />
             
        
        <!-- Favicon -->
        
         
        
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script> 
       
        <!--        FontAwesome-->
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style-painel.css" />
        
        <title>Inoveh - WebTransfer</title>
    </head>
<body>
    <header>      
        
    </header>        
        <div class="painel-home">
                <?php $this->loadViewinTemplatePanel($viewName, $viewData); ?>
        </div>     

    <footer>
        
    </footer>
    <script type="text/javascript">
        var BASE_URL = '<?php echo BASE_URL; ?>';
    </script>
    
  
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
    
    
</body>
</html>

<!--Modal Ficha Inscricao-->
<div class="modal fade" role='dialog' id='fichaInscricao'>
<div class="modal-dialog">

    <div class="modal-content" id="modal-inscricao">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Inscrição</h4>
      </div>
        <div class="modal-body" >
            <div class="col-md-12">
                <div class="col-md-10">
                <div class="form-group">
                    <label class="col-md-5">Selecione o Piloto*:</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control col-md-12" id="pesquisa_piloto_ficha" name="pesquisa_piloto_ficha">
                        <input type="hidden" class="form-control col-md-12" id="IDpilotoFicha" name="IDpilotoFicha" >
                    </div>
                    <div class="modalPilotosFicha">
                        <div id="piloto_ficha"></div>
                    </div>
                    <div class="form-group">
                   
                    <div id="piloto_ficha">
                        <!--Aqui que aparece a relação dos Bancos-->
                    </div>
                </div>
                </div><br/><br/>                
                 <div class="form-group">
                    <label class="col-md-5">Selecione o Campeonato*:</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control col-md-12" id="pesquisa_campeonato_ficha" name="pesquisa_campeonato_ficha">
                        <input type="hidden" class="form-control col-md-12" id="IDcampeonatoFicha" name="IDcampeonatoFicha">
                    </div>
                    <div class="modalCampeonatoFicha">
                        <div id="campeonato_ficha"></div>
                    </div>
                </div><br/> <br/>               
                <div class="form-group">
                        <label class="col-md-5">Selecione a Etapa*:</label>
                        <div class="col-md-7">
                            <select name="etapasFicha" id="etapasFicha">

                            </select>    
                        </div>
                    </div><br/> <br/> 
                 <div class="form-group">
                    <label class="col-md-5">Numero Secundário:</label>
                    <div class="col-md-7">
                        <input type="texx" name="secundarioFicha" id="secundarioFicha" />                        
                    </div>                    
                </div><br/><br/>
                </div>
                <div class="col-md-2">
            </div>
        </div>
                
        </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button name="cadastrar" class="btn btn-primary"  onclick="ficha()">Cadastrar</button>
    </div>
    </div>

  </div>
</div>


<!--Modal Cadastrar Inscricao-->
<div class="modal fade" role='dialog' id='cadastrarInscricao'>
<div class="modal-dialog">

    <div class="modal-content" id="modal-inscricao">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cadastrar Inscrição</h4>
      </div>
        <div class="modal-body" >
            <div class="col-md-12">
                <div class="col-md-10">
                <div class="form-group">
                    <label class="col-md-5">Selecione o Piloto*:</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control col-md-12" id="pesquisa_piloto_inscricao" name="pesquisa_piloto_inscricao">
                        <input type="hidden" class="form-control col-md-12" id="IDpilotoInscricao" name="IDpilotoInscricao" >
                    </div>
                    <div class="modalPilotosInscricao">
                        <div id="piloto_inscricao"></div>
                    </div>
                    <div class="form-group">
                   
                    <div id="piloto_inscricao">
                        <!--Aqui que aparece a relação dos Bancos-->
                    </div>
                </div>
                </div><br/><br/>                
                 <div class="form-group">
                    <label class="col-md-5">Selecione o Campeonato*:</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control col-md-12" id="pesquisa_campeonato_inscricao" name="pesquisa_campeonato_inscricao">
                        <input type="hidden" class="form-control col-md-12" id="IDcampeonatoInscricao" name="IDcampeonatoInscricao">
                    </div>
                    <div class="modalCampeonatoInscricao">
                        <div id="campeonato_inscricao"></div>
                    </div>
                </div><br/><br/>
                <div class="form-group categoria">
                    <label class="col-md-5">Selecione as Categorias*:</label>
                    <div class="col-md-7" id="selectCategorias">
                        
                    </div>  <br/><br/>
                    <div class="form-group">
                        <label class="col-md-5">Selecione a Etapa*:</label>
                        <div class="col-md-7">
                            <select name="etapasInscricao" id="etapasInscricao">

                            </select>    
                        </div>
                    </div>
                </div><br/><br/>
                
                 <div class="form-group">
                    <label class="col-md-5">Numero Secundário:</label>
                    <div class="col-md-7">
                        <input type="texx" name="secundario" id="secundario" />                        
                    </div>                    
                </div><br/><br/>
                </div>
                <div class="col-md-2">
            </div>
        </div>
                
        </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button name="cadastrar" class="btn btn-primary"  onclick="inscrever()">Cadastrar</button>
    </div>
    </div>

  </div>
</div>

<!--Modal Cadastrar Categorias-->
<div class="modal fade" role='dialog' id='cadastrarCategoria'>
<div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cadastrar Categoria</h4>
      </div>
        <div class="modal-body" id="modal-campeonato">
                 
                <div class="form-group">
                    <label class="col-md-4">Sigla:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="sigla_categoria" name="sigla_categoria">
                    </div>                    
                </div><br/><br/>
                <div class="form-group">
                    <label class="col-md-4">Descrição:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control col-md-6" id="descricao_categoria" name="descricao_categoria">
                    </div>                    
                </div>
        </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button name="cadastrar" class="btn btn-primary"  onclick="registrarCategoria()">Cadastrar</button>
    </div>
    </div>

  </div>
</div>

<!--Modal Cadastrar Motos-->
<div class="modal fade" role='dialog' id='cadastrarMoto'>
<div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cadastrar Motos</h4>
      </div>
        <div class="modal-body" id="modal-campeonato">
            
           <div class="form-group">
                    <label class="col-md-4">Pesquise o Piloto:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control col-md-12" id="piloto-moto" name="pilot-moto">
                    </div>
                    <div class="modalPilotos">
                        <div id="pilotos_motos"></div>
                    </div>
                </div><br/><br/>
                <div class="form-group">
                    <label class="col-md-4">Piloto:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control col-md-12" id="piloto1" name="piloto1" disabled="disabled">
                        <input type="hidden" class="form-control col-md-12" id="id_piloto_moto" name="id_piloto_moto" >
                    </div>
                    <div id="pilotos_motos">
                        <!--Aqui que aparece a relação dos Bancos-->
                    </div>
                </div><br/><br/>
                <div class="form-group">
                    <label class="col-md-4">Marca:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control col-md-6" id="marca_moto" name="marca_moto">
                    </div>                    
                </div><br/><br/>
                <div class="form-group">
                    <label class="col-md-4">Numero:</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control col-md-6" id="numero_moto" name="numero_moto">
                    </div>
                    <label class="col-md-3">Cilindrada:</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control col-md-6" id="cilindrada" name="cilindrada">
                    </div>
                </div>
        </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button name="cadastrar" class="btn btn-primary"  onclick="registrarMoto()">Cadastrar</button>
    </div>
    </div>

  </div>
</div>

<!--Modal Cadastrar Piloto-->
<div class="modal fade" role='dialog' id='cadastrarPiloto'>
    <div class="modal-dialog" style="width: 90%;">

    <div class="col-md-12 modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cadastrar Piloto</h4>
      </div>
        <div class="modal-body" style="height: 70%; overflow: auto">       
            <form class="form-horizontal">  
            <div class="form-group">
              <label class="control-label col-sm-3">Nome*:</label>
              <div class="col-sm-9"> 
                    <input type="text" class="form-control" id="nomePiloto" name="nomePiloto" />                    
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3">Apelido:</label>
              <div class="col-sm-9"> 
                    <input type="text" class="form-control" id="apelidoPiloto" name="apelidoPiloto" />                    
              </div>
            </div>
             <div class="form-group">
              <label class="control-label col-sm-3">Numero:</label>
              <div class="col-sm-3"> 
                    <input type="text" class="form-control" id="numeroPiloto" name="numeroPiloto" />                    
              </div>
              <label class="control-label col-sm-3">Numero Secundário:</label>
              <div class="col-sm-3"> 
                    <input type="text" class="form-control" id="numeroSecPiloto" name="numeroSecPiloto" />                    
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3">CPF*:</label>
              <div class="col-sm-9"> 
                    <input type="text" class="form-control" id="cpfPiloto" name="cpfPiloto" maxlength="11"/>                    
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3">RG:</label>
              <div class="col-sm-9"> 
                    <input type="text" class="form-control" id="rgPiloto" name="rgPiloto" />                    
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3">Data de Nascimento*:</label>
              <div class="col-sm-9"> 
                    <input type="text" class="form-control" id="nascPiloto" name="nascPiloto" maxlength="10" OnKeyPress="formatar('##/##/####', this)" />                    
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3">Telefone:</label>
                  <div class="adds col-md-7">
                      <div class="tel">
                          
                      </div>
                      <div>
                  <span class="btn btn-info" data-toggle="tooltip" data-placement="right" title="Adicionar Telefone" onclick="addTelefone()">
                      <i class="fas fa-plus-square"></i>
                  </span>
                      </div>
                  </div>
              
              </div>            
          <div class="form-group">
              <label class="control-label col-sm-3">Email:</label>
                  <div class="adds col-md-7">
                      <div class="email">
                          
                      </div><br/>
                      <div>
                  <span class="btn btn-info" data-toggle="tooltip" data-placement="right" title="Adicionar Telefone" onclick="addEmail()">
                      <i class="fas fa-plus-square"></i>
                  </span>
                      </div>
                  </div>
              
              </div> 
            <div class="form-group">
              <label class="control-label col-sm-3">CEP:</label>
              <div class="col-sm-9"> 
                    <input type="text" class="col-sm-5 form-control" id="cepPiloto" name="cepPiloto" maxlength="8" onblur="prenchecep(this.value)" />                    
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3">Rua:</label>
              <div class="col-sm-9"> 
                    <input type="text" class="form-control" id="ruaPiloto" name="ruaPiloto" />                    
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3">Numero:</label>
              <div class="col-sm-2"> 
                    <input type="text" class="form-control" id="numeroEndPiloto" name="numeroEndPiloto" />                    
              </div>
              <label class="control-label col-sm-3">Complemento:</label>
              <div class="col-sm-4"> 
                    <input type="text" class="form-control" id="complementoPiloto" name="complementoPiloto" />                    
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3">Bairro:</label>
              <div class="col-sm-9"> 
                    <input type="text" class="form-control" id="bairroPiloto" name="bairroPiloto" />                    
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3">Cidade:</label>
              <div class="col-sm-5"> 
                    <input type="text" class="form-control" id="cidadePiloto" name="cidadePiloto" />                    
              </div>
              <label class="control-label col-sm-2">Estado:</label>
              <div class="col-sm-2"> 
                    <input type="text" class="form-control" id="estadoPiloto" name="estadoPiloto" />                    
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3">Plano de Saúde:</label>
              <div class="col-sm-3"> 
                    <input type="text" class="form-control" id="planoSaude" name="planoSaude" />                    
              </div>
              <label class="control-label col-sm-3">Numero:</label>
              <div class="col-sm-3"> 
                    <input type="text" class="form-control" id="numeroPlanoSaude" name="numeroPlanoSaude" />                    
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3">Tipo Sanguíneo:</label>
              <div class="col-sm-9"> 
                    <select name="sangue" class="form-control" id="sel1">
                        <option value="9" active>Não Informado</option>
                        <option value="1">A+</option>
                        <option value="2">A-</option>                      
                        <option value="3">B+</option>
                        <option value="4">B-</option>
                        <option value="5">AB+</option>
                        <option value="6">AB-</option>
                        <option value="7">O+</option>
                        <option value="8">O-</option>
                    </select>         
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3">Moto:</label>
              <div class="col-sm-9"> 
                    <input type="text" class="form-control" id="motoCadastroPiloto" name="motoCadastroPiloto" />                    
              </div>
              </div>
              <div class="form-group">
              <label class="control-label col-sm-3">Marca:</label>
              <div class="col-sm-3"> 
                    <input type="text" class="form-control" id="marcaMotoCadastroPiloto" name="marcaMotoCadastroPiloto" />                    
              </div>
              <label class="control-label col-sm-3">Cilindrada:</label>
              <div class="col-sm-3"> 
                    <input type="text" class="form-control" id="cilindradaMotoCadastroPiloto" name="cilindradaMotoCadastroPiloto" />                    
              </div>
            </div>
            </form>
        </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button name="cadastrar" class="btn btn-primary"  onclick="registrarPiloto()">Cadastrar</button>
    </div>
    </div>

  </div>
</div>
<!--Modal Cadastro Realizado com Sucesso-->
<div class="modal fade" role='dialog' id='cadastroSucesso' >
<div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Notificação</h4>
      </div>
      <div class="modal-body">
        <p>Cadastro Realizado com Sucesso!</p>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
    </div>

  </div>
</div>

<!--Modal CEP Invalido-->
<div class="modal fade" role='dialog' id='CEPInvalido' >
<div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Notificação</h4>
      </div>
        <div class="modal-body"> 
            <div>
                <h4>CEP Inválido</h4>
            </div>
                          
        </div>        
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        
        </div>
    </div>

  </div>
</div>
<!--Modal CPF Invalido-->
<div class="modal fade" role='dialog' id='CPFInvalido' >
<div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Notificação</h4>
      </div>
        <div class="modal-body"> 
            <div>
                <h4>CPF Inválido</h4>
            </div>
                          
        </div>        
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        
        </div>
    </div>

  </div>
</div>
<!--Modal CPF Ja Cadastrado-->
<div class="modal fade" role='dialog' id='cpfjacadastrado' >
<div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Notificação</h4>
      </div>
        <div class="modal-body"> 
            <div>
                <h4>CPF Já Cadastrado</h4>
            </div>
                          
        </div>        
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        
        </div>
    </div>

  </div>
</div>
<!--Modal Cadastrar Campeonato-->
<div class="modal fade" role='dialog' id='cadastrarCampeonato'>
<div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cadastrar Campeonato</h4>
      </div>
        <div class="modal-body" id="modal-campeonato">
            
            <form id="formCampeonato" method="POST" enctype="multipart/form-data" action="<?php echo BASE_URL;?>campeonatos/cadastrar">
                <div class="form-group">
                  <label class="control-label col-sm-3">Nome*:</label>
                  <div class="col-sm-9"> 
                        <input type="text" class="form-control" id="nome" name="nome" />
                  </div>
                </div>
                <div class="form-group"><br/>.
                    <label class="control-label col-sm-3">Imagem*:</label>
                    <div class="col-sm-9"> 
                        <img src="" name="fotoCampeonato" id="fotoCampeonato" /><br/><br/>                    
                        <input type="file" name="imagemCampeonato" id="imagemCampeonato"  onchange="previewImagem()" />
                    </div>
                </div>                     
            </form>
        </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button name="cadastrar" class="btn btn-primary"  onclick="registrarCampeonato()">Cadastrar</button>
    </div>
    </div>

  </div>
</div>

<!--Modal Editar Campeonato-->
<div class="modal fade" role='dialog' id='editCampeonato' >
<div class="modal-dialog">

    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Campeonato</h4>
      </div>
        <div class="modal-body" id="modal-campeonato">          
          <form id="formEditCampeonato" method="POST" enctype="multipart/form-data" action="<?php echo BASE_URL;?>campeonatos/editar">
                <div class="form-group">
                  <label class="control-label col-sm-3">Nome*:</label>
                  <div class="col-sm-9"> 
                        <input type="text" class="form-control" name="nameCamp" id="nameCamp" value="" />  
                  </div>
                </div>
                <div class="form-group"><br/>.
                    <label class="control-label col-sm-3">Imagem*:</label>
                    <div class="col-sm-9"> 
                        <img src="" name="editimagemCampeonato" id="editimagemCampeonato" /><br/><br/>
                        <input type="file" name="imagemCampeonato2" id="imagemCampeonato2"  onchange="previewImagem2()" />
                    </div>
                </div>    
                
                <input type="hidden" name="idCampeonato" id="idCampeonato" value="" />
          </form>
      </div>
      <div class="modal-footer">          
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
          <button name="cadastrar" class="btn btn-primary"  onclick="campeonatoEditar()">Editar</button>
        </div>
    </div>

  </div>
</div>

<!--Modal Cadastrar Etapa-->
<div class="modal fade" role='dialog' id='cadastrarEtapa'>
<div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cadastrar Etapa</h4>
      </div>
        <div class="modal-body" id="modal-etapa">        
            <div class="form-group">
              <label class="control-label col-sm-3">Nome*:</label>
              <div class="col-sm-9"> 
                    <input type="text" class="form-control" id="nomeEtapa" name="nomeEtapa" />
                    <input type="hidden" class="form-control" id="id_campeonato" name="id_campeonato" />
              </div>
            </div>
        </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button name="cadastrar" class="btn btn-primary"  onclick="registrarEtapa()">Cadastrar</button>
    </div>
    </div>

  </div>
</div>
<!--Modal Editar Etapa-->
<div class="modal fade" role='dialog' id='editEtapa' >
<div class="modal-dialog">

    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Etapa</h4>
      </div>
        <div class="modal-body" style="min-height: 80px;">          
          
                <div class="form-group">
                  <label class="control-label col-sm-3">Nome*:</label>
                  <div class="col-sm-9"> 
                        <input type="text" class="form-control" name="nameEtapa2" id="nameEtapa2" value="" />  
                  </div>
                </div>                 
                
                <input type="hidden" name="idEtapa" id="idEtapa" value="" />
     
      </div>
      <div class="modal-footer">          
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
          <button name="cadastrar" class="btn btn-primary"  onclick="etapaEditar()">Editar</button>
        </div>
    </div>

  </div>
</div>
<!--Modal Campos Obrigatórios-->
<div class="modal fade" role='dialog' id='camposobrigatorios' >
<div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Notificação</h4>
      </div>
      <div class="modal-body">
        <p>Favor Preencha os Campos Obrigatórios!</p>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
    </div>

  </div>
</div>

<!--Modal Adicionar Telefone-->
<div class="modal fade" role='dialog' id='addTelefone'>
<div class="modal-dialog">

    <div class="modal-content" id="modalFotoPerfil">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Adicionar Telefone</h4>
      </div>
      <div class="modal-body" id="modal-edit-foto-perfil">               
          <div class="form-group">
              <label class="control-label col-sm-3">Telefone:</label>
              <div class="col-sm-9"> 
                  <input type="text" class="form-control" name="addtelefone" id="addtelefone" maxlength="13" OnKeyPress="formatar('## #####-####', this)" />
              </div>
            </div><br/>  
      </div>
      <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Salvar" onclick="adcionarTelefone()" />
          <button type="button" class="btn btn-default" data-dismiss="modal" >Fechar</button>
        </div>
    </div>

  </div>
</div>

<!--Modal Adicionar Email-->
<div class="modal fade" role='dialog' id='addEmail'>
<div class="modal-dialog">

    <div class="modal-content" id="modalFotoPerfil">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Adicionar Email</h4>
      </div>
      <div class="modal-body" >      
         <div class="form-group">
              <label class="control-label col-sm-3">Email:</label>
              <div class="col-sm-9"> 
                  <input type="text" class="form-control" name="addemail" id="addemail" />
              </div>
            </div><br/>                     
      </div>
      <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Adicionar" onclick="adcionarEmail()"/>
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
    </div>

  </div>
</div>

<!--Modal E-mail Invalido-->
<div class="modal fade" role='dialog' id='emailinvalido' >
<div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Notificação</h4>
      </div>
      <div class="modal-body">
        <p>E-mail Inválido.</p>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
    </div>

  </div>
</div>

<!--Modal E-mail Ja CAdastrado-->
<div class="modal fade" role='dialog' id='emailJaCadastrado' >
<div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Notificação</h4>
      </div>
      <div class="modal-body">
        <p>E-mail Já Cadastrado.</p>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
    </div>

  </div>
</div>

<!--Modal Telefone ja Cadastrado-->
<div class="modal fade" role='dialog' id='telefoneJaCadastrado' >
<div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Notificação</h4>
      </div>
      <div class="modal-body">
        <p>Telefone Já Cadastrado.</p>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
    </div>

  </div>
</div>