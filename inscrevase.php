<?php 

	require '../class/public.class.php';

  	$public = new ClassePublic();

  	$minicursos = $public->query('select', "SELECT * FROM minicursos WHERE id in  (1,7,13,19,25,31) and status = '1'");
  	$minicursos = $minicursos['registros'];

  	$minicursos2 = $public->query('select', "SELECT * FROM minicursos WHERE id in (2,8,14,20,26,32) and status = '1'");
  	$minicursos2 = $minicursos2['registros'];

  	$minicursos3 = $public->query('select', "SELECT * FROM minicursos WHERE id in (3,9,15,21,27,33) and status = '1'");
  	$minicursos3 = $minicursos3['registros'];

  	$minicursos4 = $public->query('select', "SELECT * FROM minicursos WHERE id in (4,10,16,22,28,34) and status = '1'");
  	$minicursos4 = $minicursos4['registros'];

  	$minicursos5 = $public->query('select', "SELECT * FROM minicursos WHERE id in (5,11,17,23,29,35) and status = '1'");
  	$minicursos5 = $minicursos5['registros'];

  	$minicursos6 = $public->query('select', "SELECT * FROM minicursos WHERE id in (6,12,18,24,30,36) and status = '1'");
  	$minicursos6 = $minicursos6['registros'];


	require_once('fatiadocadastro/topo.php');
?>

<script type="text/javascript" src="assets/js/public.js"></script>
<div class="container espacamentopagina">
	<div class="row">
		<div class="col-md-12">
			<span class="outer"><span class="inner">Inscreva-se</span></span>
			<div class="col-md-12 espacamento">
					<div class="precos">
						<img src="assets/imagens/precos.png" alt="Tabela de Preços" width="100%">
						<a target="_blank" href="http://eventoaovivo.com">
							<img src="assets/imagens/precos2.png" alt="Tabela de Preços" width="100%">
						</a>
					</div>
				<form method="post" action="controller/public.controller.php"  class="form-horizontal" id="defaultForm">
					<div class="form-group">
						<input type="hidden" value="inscrever" name="acao" />
							<div class="col-sm-6">
								<label>Nome Completo*</label>
								<input class="form-control" type="text" name="NomeCompleto">
								<div class="help-block with-errors"></div>
							</div>
							<div class="col-sm-6">
								<label>Data de Nascimento*</label>
								<input class="form-control" type="date" name="DataNascimento">
								<div class="help-block with-errors"></div>
							</div>

					</div>

					<div class="form-group">
						<div class="col-sm-2">
							<label>DDD*</label>
							<input class="form-control" type="text" name="ddd">
							<div class="help-block with-errors"></div>

						</div>
						<div class="col-sm-4">
							<label>Telefone*</label>
							<input class="form-control" type="text" name="telefone">
							<div class="help-block with-errors"></div>
						</div>
						<div class="col-sm-6">
							<label>Email*</label>
							<input class="form-control" type="text" name="email">
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-6">
							<label>CPF*</label>
							<input class="form-control" type="text" name="cpf">
							<div class="help-block with-errors"></div>
						</div>
						<div class="col-sm-6">
							<label>RG*</label>
							<input class="form-control" type="text" name="rg">
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-4">
							<label>Logradouro*</label>
							<input class="form-control" type="text" name="endereco">
							<div class="help-block with-errors"></div>
						</div>
						<div class="col-sm-2">
							<label>Número*</label>
							<input class="form-control" type="text" name="numero">
							<div class="help-block with-errors"></div>
						</div>
						<div class="col-sm-4">
							<label>Bairro*</label>
							<input class="form-control" type="text" name="bairro">
							<div class="help-block with-errors"></div>
						</div>
						<div class="col-sm-2">
							<label>CEP*</label>
							<input class="form-control"  type="text" name="cep">
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-6">
							<label>Cidade*</label>
							<input class="form-control" type="text" name="cidade">
							<div class="help-block with-errors"></div>
						</div>
						<div class="col-sm-6">
							<label>Estado*</label>
								<select name="estado" class="form-control">
										<option value="estado">Selecione o Estado</option> 
										<option value="AC">Acre</option> 
										<option value="AL">Alagoas</option> 
										<option value="AM">Amazonas</option> 
										<option value="AP">Amapá</option> 
										<option value="BA">Bahia</option> 
										<option value="CE">Ceará</option> 
										<option value="DF">Distrito Federal</option> 
										<option value="ES">Espírito Santo</option> 
										<option value="GO">Goiás</option> 
										<option value="MA">Maranhão</option> 
										<option value="MT">Mato Grosso</option> 
										<option value="MS">Mato Grosso do Sul</option> 
										<option value="MG">Minas Gerais</option> 
										<option value="PA">Pará</option> 
										<option value="PB">Paraíba</option> 
										<option value="PB">Paraná</option> 
										<option value="PE">Pernambuco</option> 
										<option value="PI">Piauí</option> 
										<option value="RJ">Rio de Janeiro</option> 
										<option value="RN">Rio Grande do Norte</option> 
										<option value="RO">Rondônia</option> 
										<option value="RS">Rio Grande do Sul</option> 
										<option value="RR">Roraima</option> 
										<option value="SC">Santa Catarina</option> 
										<option value="SE">Sergipe</option> 
										<option value="SP">São Paulo</option> 
										<option value="TO">Tocantins</option> 
								</select>
								<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-4">
							<label>Minicurso 01*</label>
							<select id="minicurso1" name="minicurso1" class="form-control minicurso">
								<?php

								foreach ($minicursos as $key => $value) {
									?>
									<option posicao="<?php echo $value['id']; ?>" value="<?php echo $value['id']; ?>"><?php echo $value['nome']; ?></option>
									<?php
								}

								?>
							</select>
						</div>

							<div class="col-sm-4">
							<label>Minicurso 02*</label>
							<select id="minicurso2" name="minicurso2" class="form-control minicurso">
								<?php

								foreach ($minicursos2 as $key => $value) {
									?>
									<option posicao="<?php echo $value['id']; ?>" value="<?php echo $value['id']; ?>"><?php echo $value['nome']; ?></option>
									<?php
								}

								?>
							</select>
						</div>

							<div class="col-sm-4">
							<label>Minicurso 03*</label>
							<select id="minicurso3" name="minicurso3" class="form-control minicurso">
								<?php

								foreach ($minicursos3 as $key => $value) {
									?>
									<option posicao="<?php echo $value['id']; ?>" value="<?php echo $value['id']; ?>"><?php echo $value['nome']; ?></option>
									<?php
								}

								?>
							</select>
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-4">
							<label>Minicurso 04*</label>
							<select id="minicurso4" name="minicurso4" class="form-control minicurso">
								<?php

								foreach ($minicursos4 as $key => $value) {
									?>
									<option posicao="<?php echo $value['id']; ?>" value="<?php echo $value['id']; ?>"><?php echo $value['nome']; ?></option>
									<?php
								}

								?>
							</select>
						</div>

							<div class="col-sm-4">
							<label>Minicurso 05*</label>
							<select id="minicurso5" name="minicurso5" class="form-control minicurso">
								<?php

								foreach ($minicursos5 as $key => $value) {
									?>
									<option posicao="<?php echo $value['id']; ?>" value="<?php echo $value['id']; ?>"><?php echo $value['nome']; ?></option>
									<?php
								}

								?>
							</select>
						</div>

							<div class="col-sm-4">
							<label>Minicurso 06*</label>
							<select id="minicurso6" name="minicurso6" class="form-control minicurso">
								<?php

								foreach ($minicursos6 as $key => $value) {
									?>
									<option posicao="<?php echo $value['id']; ?>" value="<?php echo $value['id']; ?>"><?php echo $value['nome']; ?></option>
									<?php
								}

								?>
							</select>
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<label>Categoria*</label>
							<select id="categoria" name="categoria" class="form-control">
								<option value="0">Selecione...</option>
								<option value="1">Profissional de nível superior</option>
								<option value="2">Profissional de nível técnico</option>
								<option value="3">Estudante/Residente</option>
								<option value="4">Acompanhante</option>
							</select>
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<div id="complemento1" style="display:none;">
					<label>Se for estudante/residente:</label>
					<div class="form-group">
						<div class="col-sm-6">
							<label>Instituição de Ensino</label>
							<input class="form-control" type="text" name="instituicao1">
							<div class="help-block with-errors"></div>
						</div>
						<div class="col-sm-6">
							<label>Período/Semestre</label>
							<input class="form-control"  type="text" name="periodo">
							<div class="help-block with-errors"></div>
						</div>
					</div>
					</div>

					<div id="complemento2" style="display:none;">
					<label>Se for profissional nível técnico/superior:</label>
					<div class="form-group">
						<div class="col-sm-12">
							<label>Instituição de Trabalho</label>
							<input class="form-control" type="text" name="instituicao2">
							<div class="help-block with-errors"></div>
						</div>
					</div>
					</div>

					<div class="form-group">
						
							<div class="col-sm-12">
								<label>Código do vendedor</label>
								<div class="form-group">
									<div class="col-sm-12">
										<input	type="text" name="codigoVendedor" class="form-control">
										<input	type="hidden" name="validCod" class="form-control" value="0">
									</div>
								</div>
								<div id="avisoCod" style="color:red;" class="help-block with-errors"></div>
							</div>
					</div>

					<div class="form-group">
						
							<div class="col-sm-12">
								<label>Necessidades Especiais</label>
								<div class="form-group">
									<div class="col-sm-3">
										<input	type="checkbox" id="necessidades">
									</div>
								</div>
							</div>

							<div class="col-sm-12" style="display:none;" id="necessidadesTipo">
								<label>Qual Necessidade?</label>
								<div class="form-group">
									<div class="col-sm-6">
										<input	type="text" name="necessidadesTipo" class="form-control">
									</div>
								</div>
							</div>
					</div>

					<div class="form-group">
						
							<div class="col-sm-12 espacamento">
								<label>Forma de Pagamento**</label>
								<div class="form-group">
									<div class="col-sm-3">
										<input  type="radio" name="FormaPagamento" value="1"> <label> PagSeguro</label>
									</div>
									
									<!-- <div class="col-sm-3">
										<input type="radio" name="FormaPagamento" value="2"> <label> PayPal</label>
									</div>	
									 -->
								</div>
								<div class="help-block with-errors"></div>
							</div>
							<div class="col-sm-12">
								<center><button type="submit" class="btn btn-info">Inscrever</button></center>
							</div>
					</div>
				</form>
				<h4>**Para pagamento à vista ou depósito em conta, entre em contato: inscricao@coims.com.br</h4>
			</div>
		</div>
	</div>
</div>
<?php
require_once('fatiado/rodape.php'); 
?>