<!DOCTYPE html>
<html lang="en">
    
<head>
    
    <!-- Meta tags Obrigatórias -->
        <meta charset="UTF-8">
        
        <!-- Habilita media querie -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--título-->
        <title>Login</title>
        
        <!--ícone-->
        <link rel="icon" href="img/logo.png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        
        
        <!-- Bootstrap CSS -->
	   <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/geral.css">
        <link rel="stylesheet" href="css/login.css">
        
        <!--fonte-->
        <link rel="stylesheet" href="https://use.typekit.net/pkz1yma.css">  
	</head>
    

        <body>
    <!----------------------------------------------- menu --------------------------------------------->        

        <header>
         	  <div class="container">          
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a href="#" class="navbar-brand"><img src="img/logo.png" width="60px;"></a>
        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbar9">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="navbar-collapse collapse" id="navbar9">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php#intro">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#curso">Curso</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#trabalhos">Projetos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#contato">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./quiz/quiz.php" target="_blank">Quiz</a>
                </li>
                
                <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Área do aluno
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         
            <a class="cadastro" href="FormsCadastro.php" title="Ir para o Cadastro">Cadastro</a>
            <div class="dropdown-divider"></div>
                   <?php
                    if (isset($_SESSION['id'])) {
                    echo "<a class='logs' href='logout.php'> Logout </a>";
                     }else {
                     echo "<a class='logs' href='Login.php' title='ILogin'>Login</a>";
                     }
                ?>
            
                    </div>
                </li>
                
            </ul>
            </div>
                </div>
                  </nav>
                      
                  
          </div>
      </header>
        
<!----------------------------------------------- login --------------------------------------------->  
    <main>
        <div class="container login">
            
            <img class="banner" src="img/login.png">
            
            <fieldset id="field-login">
                <legend>Login</legend>
                <form name="loginform" method="post" action="UserAut.php">
                    <div class="email-login">
                        <p><i class="fas fa-user"></i>  <input type="text" placeholder="E-mail" name="txt_email"></p>
                    </div>
                   
                    <div class="senha-login">
                        <p><i class="fas fa-lock"></i>  <input type="password" placeholder="Senha" name="password"></p>
                    </div>
            
                    <div class="entrar-login">
                        <button type="submit">Login</button>
                    </div>
                 
                </form>
            </fieldset>
        </div>
    </main>

    <footer>

    </footer>
    
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
	<script src="lib/jquery/jquery-3.5.1.min.js"></script>
	<script src="lib/poper/popper.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/vide/jquery.vide.min.js"></script>
    
</body>
</html>