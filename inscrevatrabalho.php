<?php 	
	require '../class/public.class.php';
	
  	$public = new ClassePublic();
  	
	require_once('fatiadocadastro/topo.php');
?>
<div class="container espacamentopagina">
	<div class="row">
		<div class="col-md-12">
			<span class="outer"><span class="inner">Inscreva seu trabalho científico</span></span>
			<div class="col-md-12 espacamento">
				<form method="post" action="controller/public.controller.php"  class="form-horizontal" id="defaultForm" enctype="multipart/form-data">
					<div class="form-group">
						<input type="hidden" value="inscrever-trabalho" name="acao" />
							<div class="col-sm-6">
								<label>Nome Completo</label>
								<input class="form-control" type="text" name="NomeCompleto">
								<div class="help-block with-errors"></div>
							</div>
						<div class="col-sm-6">
							<label>Email</label>
							<input class="form-control" type="text" name="email">
							<div class="help-block with-errors"></div>
						</div>

					</div>

					<div class="form-group">
						<div class="col-sm-6">
							<label>CPF</label>
							<input class="form-control" type="text" name="cpf">
							<div class="help-block with-errors"></div>
						</div>
						<div class="col-sm-4">
							<label>Telefone</label>
							<input class="form-control" type="text" name="telefone">
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-6">
							<label>Tema</label>
								
							<input class="form-control"  type="text" name="tema">
							<div class="help-block with-errors"></div>
						</div>
						<div class="col-sm-6">
							<label>Trabalho científico</label>
							
							<input type="file" class="filestyle" data-buttonBefore="true" name="arquivo">
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="form-group">
						
							<div class="col-sm-12">
								<center><button type="submit" class="btn btn-info">Inscrever</button></center>
							</div>
					</div>
				</form>
				<center><h4><a href="assets/arquivo/normas-regras.pdf" target="_blank">Normas e Regras de Envio de Trabalhos para o I COIMS</a></h4></center>
			</div>
		</div>
	</div>
</div>
<?php
require_once('fatiado/rodape.php'); 
?>