<form class="form-horizontal" method="post" action="<?=base_url('index.php/cadastro_usuario/save');?>" >
<fieldset>

<input type="hidden" id="_id" name="_id" value="<?=$dados['_id'];?>">


<!-- Form Name -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Nome</label>  
  <div class="col-md-6">
  <input id="nome" name="nome" type="text" placeholder="Nome do usuário" class="form-control input-md" required="" 
    value="<?=$dados['nome'];?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="Digite o e-mail" class="form-control input-md"
   value="<?=$dados['email'];?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-password">
  <label class="col-md-4 control-label" for="senha">Senha</label>  
  <div class="col-md-6">
  <input id="senha" name="senha" type="password" placeholder="Digite a senha" class="form-control input-md"
  value="<?=$dados['senha'];?>">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button" value="ok" class="btn btn-success">Salvar</button>
    <button id="button2id" name="button" value="cancelar" class="btn btn-danger" formnovalidate>Cancelar</button>
  </div>
</div>

</fieldset>
</form>
