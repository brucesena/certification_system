<?php if (!isset($active)){$active = '';}



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Modelos de referência</title>

        <script src="<?=base_url('includes/jquery-latest.min.js');?>"></script>

        <!-- Latest compiled and minified CSS -->

        <link rel="stylesheet" href="<? echo base_url('includes/bootstrap/css/bootstrap.min.css') ?>">

        <link rel="stylesheet" type="text/css" href="<?=base_url('includes/dtpicker/jquery.datetimepicker.css');?>"/>

        <!-- Latest compiled and minified JavaScript -->

        <script src="<? echo base_url('includes/bootstrap/js/bootstrap.min.js') ?>"></script>

        <script src="<?=base_url('includes/dtpicker/jquery.datetimepicker.js');?>"></script>

	<script type='text/javascript' src='<?=base_url('includes/mootools-core-1.4.5-nocompat.js');?>'></script>

	<script type='text/javascript' src='<?=base_url('includes/validacao/mascaras.js');?>'></script>

        <script src="<?=base_url('includes/ie10-viewport-bug-workaround.js');?>"></script>





        <link rel="stylesheet" href="<? echo base_url('includes/btselect/css/bootstrap-select.min.css') ?>">

	<script type='text/javascript' src='<?=base_url('includes/btselect/js/bootstrap-select.min.js');?>'></script>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>



<style>

</style>

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">

      <div class="container">

        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

          </button>

        </div>

        <div id="navbar" class="collapse navbar-collapse">

	<a class="navbar-brand" href="<?=site_url();?>">MMPS</a>

          <ul class="nav navbar-nav">

	  <?if (true) {?>

             <li class="dropdown">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-th-list"></span>Cadastros<span class="caret"></span></a>

                <ul class="dropdown-menu">

             	   <li <?=$active=='modelos'?'class="active"':'';?> ><a href="<?php echo site_url('modelo')?>">Modelos</a></li>
             	   <li <?=$active=='metas_genericas'?'class="active"':'';?> >
			<a href="<?php echo site_url('metas_genericas')?>">Metas genéricas</a></li>
             	   <li <?=$active=='niveis_capacidade'?'class="active"':'';?> >
			<a href="<?php echo site_url('nivel_capacidade')?>">Níveis de capacidade</a></li>
             	   <li <?=$active=='metas_matuidade'?'class="active"':'';?> >
			<a href="<?php echo site_url('nivel_maturidade')?>">Níveis de maturidade</a></li>
             	   <li <?=$active=='pratica_especifica'?'class="active"':'';?> >
			<a href="<?php echo site_url('pratica_especifica')?>">Práticas especificas</a></li>
             	   <li <?=$active=='area_processo'?'class="active"':'';?> >
			<a href="<?php echo site_url('area_processo')?>">Áreas de processo</a></li>
             	   <li <?=$active=='produto_trabalho'?'class="active"':'';?> >
			<a href="<?php echo site_url('Produto_trabalho')?>">Produto de trabalho</a></li>
             	   <li <?=$active=='categoria'?'class="active"':'';?> >
			<a href="<?php echo site_url('categoria')?>">Categorias</a></li>
		   <li <?=$active=='meta_especifica'?'class="active"':'';?> >
			<a href="<?php echo site_url('meta_especifica')?>">Metas específicas</a></li>



		</ul>

	     </li>

	  <?}?>


             <li class="dropdown">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administração</span></a>

                <ul class="dropdown-menu">

                    <li><a href="<?php echo site_url('usuarios')?>">Usuários</a></li>

                    <li><a href="<?php echo site_url('ligacoes')?>">Ligações entre tabelas</a></li>

                </ul>

            </li>

            

          </ul>

        </div><!--/.nav-collapse -->

      </div>

    </nav>

<div class="container">

<br /><br />

</div>

<div class="starter-template">

<div>
	<h1><?=(isset($titulo))?$titulo:'';?></h1>
</div>

