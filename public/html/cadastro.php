<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['nome'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$nome = $_POST['nome'];
	$email = $_POST['email'];
    $emailamigo = $_POST['emailamigo'];
	$telefone = $_POST['telefone'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

		if ($password == $cpassword) {
			$sql = "SELECT * FROM usuarios WHERE email='$email'";
			$result = mysqli_query($conn, $sql);
			if (!$result->num_rows > 0) {
			$sql = "INSERT INTO usuarios (nome, email, emailamigo, telefone, password)
					VALUES ('$nome', '$email', '$emailamigo', '$telefone', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Boa! Cadastro completo.')</script>";
                $nome = "";
                $email = "";
                $emailamigo = "";
                $telefone = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
                header("Location: login.php");
			} else {
				echo "<script>alert('Eita! Algo deu errado.')</script>";
			}
		} else {
			echo "<script>alert('Vix! Email já existente.')</script>";
		}
		
	} else {
		echo "<script>alert('As senhas não batem.')</script>";
	}
 }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS -->
    <link rel="stylesheet" href="../css/contato.css" />
    <!-- CSS -->

    <!-- ICON -->
    <link rel="icon" type="image/png" sizes="96x96" href="../images/favicon-96x96.png">
    <!-- ICON -->

    <!-- FONTS - ICONS -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- FONTS - ICONS -->

    <title>Botão do Panico - Contato</title>
  </head>

	<body class="is-preload">

		<div id="page-wrapper">
            <!-- NAV -->
			<section class="header">
				<nav>
					<a href="index.html"><img src="../images/logo.png"></a>
					<div class="nav-links" id="navLinks">
						<i class="fa fa-times" onclick="hideMenu()"></i>
						<ul>
							<li><a href="index.html">VOLTAR</a></li>
						</ul>
					</div>
					<i class="fa fa-bars" onclick="ShowMenu()"></i>
				</nav>
		</section>
				
			<!-- Main -->
			<div class="container">
				<div class="contact-box">
					<div class="right">
						<h2>CADASTRE-SE</h2>
            <form method="POST" ACTION="">
						<input type="text"  name="nome" class="field" placeholder="Seu Nome"  value="<?php echo $nome; ?>" required>	
						<input type="email" name="email" class="field" placeholder="Seu Email" value="<?php echo $email; ?>" required>	
                        <input type="email" name="emailamigo" class="field" placeholder="Email para o aviso de panico!" value="<?php echo $emailamigo; ?>" required>	
						<input type="text"   name="telefone" class="field" placeholder="Seu Telefone" value="<?php echo $telefone; ?>" required>	
                        <input type="password" name="password" class="field" placeholder="Senha" name="password" value="<?php echo $_POST['password']; ?>" required>
                        <input type="password" name="cpassword" class="field" placeholder="Confime a senha" name="cpassword"  value="<?php echo $_POST['cpassword']; ?>" required>
                        <a href="../html/login.php" class="log"> Você já está cadastrada? </a>
						<button name="submit"  name="username" class="glow-on-hover">Me cadastrar</button>
            </form>
					</div>
				</div>
			</div>

        <!-- Parte de JS para o menu aparecer -->
        <script>

            var navLinks = document.getElementById("navLinks"); 
            function ShowMenu(){
                navLinks.style.right = "0";
            }
            function hideMenu(){
                navLinks.style.right = "-200px"
                
            }
    
        </script>
    <!-- Site footer -->
	<footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Copyright &copy; 2021 
              </p>
              <p>
                Bruna Kasprike . Cauana Sass . Eduarda Prezotto . Paula Lebois
              </p>
            </div>
            
            <div class="col-md-6 col-sm-6 col-xs-12">
                <p class="copyright-text">
                  <div class="wrapper">
                    <a href=# class="a">
                    <div class="icon facebook">
                      <div class="tooltip">Facebook</div>
                      <span><i class="fa fa-facebook-official" aria-hidden="true"></i></span>
                    </div></a>
                    <a href=# class="a">
                    <div class="icon instagram">
                      <div class="tooltip">Instagram</div>
                      <span><i class="fa fa-instagram" aria-hidden="true"></i></span>
                    </div>
                    </a>
                    <a href="https://www.youtube.com/watch?v=8MONv286ahY" class="a">
                    <div class="icon youtube">
                      <div class="tooltip">Youtube</div>
                      <span><i class="fa fa-youtube-play" aria-hidden="true"></i></span>
                    </div>
                    </a>
                  </div>
                </p>
            </div>
          </div>
        </div>
</footer>
	</body>
</html>