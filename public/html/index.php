<?php 

session_start();

if (!isset($_SESSION['nome'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css" />
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

    <title>Botão do Panico</title>
  </head>

  <body>
    <!-- NAV -->
    <section class="header">
            <nav>
                <a href="index.php"><img src="../images/logo.png"></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li> <a>Olá, </a> <?php echo "<a>" . $_SESSION['nome'] . "</a>"; ?></a></li>
                        <li><a href="sobre.html">SOBRE N&Oacute;S</a></li>
                        <li><a href="../html/contato.php"> FALE CONOSCO </a></li>
                        <li><a href="../html/logout.php"> SAIR DA CONTA </a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="ShowMenu()"></i>
            </nav>
    <div class="text-box1">
        <h1> Botão do Pânico
        </h1>
        <p>
          Desenvolvido para trazer apoio para mulheres inseguras!
        </p>
        <a href="socorro.php" class="hero-btn"> PRECISA DE SOCORRO? </a>
    </div>
    </section>

    <!-- CAIXINHA  -->
    <section class="course">
        <h1> </h1>
        <p> </p> 

        <div class="row">
            <div class="course-col">
                <h3>Como funciona
                </h3>
                <p>Você acionará o botão e automaticamente vai ser enviado uma mensagem de emergência para a sua pessoa de preferência.</p>
            </div>

            <div class="course-cold">
                <h3>Mais segurança
                </h3>
                <p>Somos mais rápidos. Não é novidade que quanto mais precoce for a intervenção, maior é a chance de evitar riscos a nossa saúde e bem-estar.</p>
            </div>
        </div>
    </section>

    <!-- RELATOS -->
    <div class="testimonials">
      <div class="inner">
        <h1>Relatos</h1>
        <div class="border"></div>

        <div class="row1">
          <div class="col">
            <div class="testimonial">
              <img src="../images/p1.png" alt="">
              <div class="name">Márcia Cristina</div>
              <div class="stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              </p>
            </div>
          </div>

          <div class="col">
            <div class="testimonial">
              <img src="../images/p2.png" alt="">
              <div class="name">Eduarda Relógio</div>
              <div class="stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              </p>
            </div>
          </div>

          <div class="col">
            <div class="testimonial">
              <img src="../images/p3.png" alt="">
              <div class="name">Giovanna Paçoca</div>
              <div class="stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </div>

              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              </p>
            </div>
          </div>
          
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