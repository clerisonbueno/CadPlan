<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de Planejamento</title>
	<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
	<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
	<div class="text-center">	
		<img class="mb-4" src="assets/brand/logo_chami.png" alt="" width="72" height="72">	
		<h2>Cadastro de Planejamento</h2>
		<p>....</p>
	</div>
	<div class="form-control">
		<form method="post" class="row g-3">
			<div class="col-md-6">
				<label for="inputNome" class="form-label">Projeto</label>
			    <input type="text" class="form-control" id="inputEmail4" name="projeto" required="required" data-validation-required-message="Insira o nome do projeto.">
			</div>
			<div class="col-md-6">
			    <label for="inputSobrenome" class="form-label">Tema</label>
			    <input type="text" class="form-control" id="inputSobrenome" name="tema" required="required" data-validation-required-message="Insira o tema.">
			</div>
			<div class="col-12">
		    	<label for="inputHab" class="form-label">Habilidades</label>
		    	<textarea type="text" class="form-control" id="inputHab" name="habilidades" required="required" data-validation-required-message="Insira as habilidades."></textarea>
		  	</div>
		  	<div class="col-12">
		    	<label for="inputcont" class="form-label">Conceitos/Conteúdos</label>
		    	<input type="text" class="form-control" id="inputcont" name="conteudos" required="required" data-validation-required-message="Insira as habilidades.">
		  	</div>
		  	<div class="col-md-6">
				<label for="inputNome" class="form-label">Recursos</label>
			    <input type="text" class="form-control" id="inputEmail4" name="recursos" required="required" data-validation-required-message="Insira o nome do projeto.">
			</div>
			<div class="col-md-6">
			    <label for="inputSobrenome" class="form-label">Duração</label>
			    <input type="text" class="form-control" id="inputSobrenome" name="duracao" required="required" data-validation-required-message="Insira o tema.">
			</div>
			<div class="col-md-6">
				<label for="inputNome" class="form-label">Link</label>
			    <input type="text" class="form-control" id="inputEmail4" name="link" required="required" data-validation-required-message="Insira o nome do projeto.">
			</div>
			<div class="col-md-6">
			    <label for="inputSobrenome" class="form-label">Palavras-chave</label>
			    <input type="text" class="form-control" id="inputSobrenome" name="palchave" required="required" data-validation-required-message="Insira o tema.">
			</div>
			<div class="col-12">
		    	<label for="inputHab" class="form-label">Observações</label>
		    	<textarea type="text" class="form-control" id="inputHab" name="observacoes" required="required" data-validation-required-message="Insira as habilidades."></textarea>
		  	</div>

		</form>
	</div>

</body>
</html>