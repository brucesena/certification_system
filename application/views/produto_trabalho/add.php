<form class="form-horizontal" method="post" action="<?=base_url('index.php/produto_trabalho/save');?>" >
<fieldset>
<!-- Form Name -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Nome</label>  
  <div class="col-md-6">
  <input id="nome" name="nome" type="text" placeholder="Produto de trabalho" class="form-control input-md" required="" 
    value="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="template">Template</label>  
  <div class="col-md-4">
  <input id="template" name="template" type="text" placeholder="Insira o template do produto de trabalho"" class="form-control input-md"
   value="">
    
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

