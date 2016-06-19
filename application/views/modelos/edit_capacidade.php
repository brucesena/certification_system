<form class="form-horizontal" method="post" action="<?=base_url('index.php/modelo/save_capacidade');?>" >
<fieldset>

<input type="hidden" id="_id" name="_id" value="<?=$dados['_id'];?>">


<!-- Form Name -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nome">Nome</label>  
  <div class="col-md-6">
  <input id="nome" name="nome" type="text" placeholder="Nome do modelo" class="form-control input-md"  readonly
    value="<?=$dados['nome'];?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="versao">Versão</label>  
  <div class="col-md-4">
  <input id="versao" name="versao" type="text" placeholder="Digite a versão do modelo" class="form-control input-md" readonly
   value="<?=$dados['versao'];?>">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="nivel">Nível de capacidade</label>
  <div class="col-md-6">
    <select id="nivel" name="nivel" class="form-control selectpicker" data-live-search="true" >
	<? foreach($niveis as $nivel){?>
		<option value="<?=$nivel['_id'];?>"><?=$nivel['sigla']. ' - '. $nivel['nome'];?></option>
	<?}?>
    </select>
<a class="btn btn-primary btn-success" onclick="addNivel();"><span class="glyphicon glyphicon-plus-sign"></span> Adicionar</a>
  </div>
</div>

<br />
<br />
<br />

<table id="listNiveis" class="table table-bordered col-md-6">

        <thead>
              <tr>
                <th width="90%">Níveis de capacidade</th>
                <th width="10%">Ações</th>
              </tr>
        </thead>

        <tbody>
	
                <?if(isset($dados['niveis']))
			foreach($dados['niveis'] as $i=>$row){?>
                        <tr>
                                <td><?=$row['nome'];?></td>
                                <td><?=$row['sigla'];?></td>
                                <td><?=$row['descricao'];?></td>
                                <td>
                                        <a href="<?=base_url('index.php/nivel_capacidade/edit/'.$row['_id']);?>" class="btn btn-success">
                                        <span class="glyphicon glyphicon-edit">
                                        </a>
                                        <a href="<?=base_url('index.php/nivel_capacidade/delete/'.$row['_id']);?>" class="btn btn-danger">
                                        <span class="glyphicon glyphicon-remove">
                                        </a>


                                </td>
		<?}?>
	</tbody>
</table>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button" value="ok" class="btn btn-success">Salvar</button>
    <button id="button2id" name="button" value="cancelar" class="btn btn-danger" formnovalidate>Cancelar</button>
  </div>
</div>

</fieldset>
<script type='text/javascript'>

	function addNivel(){

		var table = document.getElementById("listNiveis");
		var row = table.insertRow(-1);
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);

		var e = document.getElementById('nivel');

		cell1.innerHTML = e.options[e.selectedIndex].text ; 
		cell.innerHTML ='<a class="btn btn-primary btn-danger"><span class="glyphicon glyphicon-remove"></span> </a>' ; 

	}


</script>
</form>
