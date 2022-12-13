<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Clerison Bueno">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Cadastro de Planejamento</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/dist/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form method="post">
    <img class="mb-4" src="assets/brand/logo_chami.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 fw-normal">Informações de acesso:</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Insira seu email</label>
    </div>
    <div class="form-floating">
      <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Insira sua senha</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Lembrar-me
      </label>
    </div>

    <?php 

        if (isset($_POST['entrar'])) {

            $email = $_POST['email'];
            $senha = $_POST['senha'];

           // ########## RECUPERAÇÃO DE DADOS NO BANCO #############
            $pdo = new PDO('mysql:host=localhost;dbname=cadplanchaminade','root','');

            $sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE email=? and senha=?");
            $sql->execute(array($email, $senha));
            $info = $sql->fetchAll(PDO::FETCH_ASSOC);
    
            if (!empty($info)) {
            
                // #### Inicializa uma sessão e carrega os dados persistentes #####
                session_start();
                $_SESSION['nome'] = $info[0]['nome'];
                $_SESSION['id'] = $info[0]['id'];
                $_SESSION['email'] = $info[0]['email'];

                echo "<pre>";
                echo print_r($info);
                echo "</pre>";
                echo "<script>window.location.href = 'produtos.php'</script>";
            
              } else {
                    echo "<br />";
                    echo "<div class='container alert alert-danger' role='alert'>";
                    echo "Usuário ou senha não encontrados.";
                    echo "</div>";
              } 
            }
       ?>

    <button class="w-100 btn btn-lg btn-primary" name="entrar" type="submit">Entrar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
  </form>
</main>


    
  </body>
</html>
