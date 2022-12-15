<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de Professores</title>
	<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
	<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">


</head>
<body class="w-100 container">
 </br>

	<div class="text-center">	
		<img class="mb-4" src="assets/brand/logo_chami.png" alt="" width="72" height="72">	
		<h2>Cadastro de Professores</h2>
		<p>Faça o seu cadastro para que possa ter acesso a área de planejamento.</p>
	</div>
	<div class="form-control">
		<form method="post" class="row g-3">
			 <div class="col-md-6">
		    <label for="inputNome" class="form-label">Nome</label>
		    <input type="text" class="form-control" id="inputEmail4" name="nome" required="required" data-validation-required-message="Insira seu nome.">
		  </div>
		  <div class="col-md-6">
		    <label for="inputSobrenome" class="form-label">Sobrenome</label>
		    <input type="text" class="form-control" id="inputSobrenome" name="sobrenome" required="required" data-validation-required-message="Insira seu sobrenome.">
		  </div>
		  <div class="col-12">
		    <label for="inputEmail4" class="form-label">Email</label>
		    <input type="email" class="form-control" id="inputEmail4" name="email" required="required" data-validation-required-message="Insira seu e-mail cadastrado.">
		  </div>
		  <div class="col-12">
		    <label for="inputPassword4" class="form-label">Senha</label>
		    <input type="password" class="form-control" id="inputPassword4" name="senha" required="required" data-validation-required-message="Insira seu e-mail cadastrado.">
		  </div>
		  <div class="col-12">
		    <label for="inputPassword4" class="form-label">Confirme a senha</label>
		    <input type="password" class="form-control" id="inputPassword4" name="confirma-senha" required="required" data-validation-required-message="Insira seu e-mail cadastrado.">
		  </div>

		  <?php 

		  		if (isset($_POST['cadastrar'])) {
		  			
		  				if ($_POST['senha'] == $_POST['confirma-senha']) {

		  						$nome = $_POST['nome'];
		  						$sobrenome = $_POST['sobrenome'];
		  						$email = $_POST['email'];
		  						$senha = sha1($_POST['senha']);

		  						// ########## GRAVAÇÃO NO BANCO DE DADOS #############
			                    $pdo = new PDO('mysql:host=localhost;dbname=cadplanchaminade','root','');

			                    $sql = $pdo->prepare("INSERT INTO `usuarios` VALUES (null,?,?,?,?)");
			                    $sql->execute(array($nome, $sobrenome, $email, $senha));

			                    echo "<div class='alert alert-success text-uppercase' role='alert'>";
			                            echo "Cadastro realizado com sucesso";
			                    echo "</div>";

			                    echo "<script> alert('Cadastro realizado com sucesso!')</script>";
			                    echo "<script>window.location.href = 'index.php'</script>";


		  				} else  {
		  					
		  					  //echo "<br />";
			                  echo "<div class='container alert alert-danger' role='alert'>";
			                  echo "Senhas não coincidem!!";
			                  echo "</div>";


		  				}

		  		} 
		  		

		  ?>

		  <div class="col-12">
		    <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
		  </div>
		</form>
	</div>
</body>
</html>