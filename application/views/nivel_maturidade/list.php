<div class="col-md-12">

  <div class="col-md-10">

        <div class="btn-group">

	        <a href="<?=base_url('index.php/nivel_maturidade/add')?>" class="btn btn-primary ">Adicionar</a>

        </div>

  </div>
<table id="listagem" class="table table-bordered">

	<thead>
              <tr>
		<th width="25%">Sigla</th>
		<th width="25%">Nome</th>
		<th width="10%">Ações</th>
	      </tr>
	</thead>

	<tbody>
		<?foreach($dados as $i=>$row){?>
			<tr>
				<td><?=$row['sigla'];?></td>
				<td><?=$row['nome'];?></td>
				<td>
					<a href="<?=base_url('index.php/nivel_maturidade/edit/'.$row['_id']);?>" class="btn btn-success">
					<span class="glyphicon glyphicon-edit">
					</a>
					<a href="<?=base_url('index.php/nivel_maturidade/delete/'.$row['_id']);?>" class="btn btn-danger">
					<span class="glyphicon glyphicon-remove">
					</a>


				</td>
			</tr>
		<? } ?>
	</tbody>
</table>


</div>
