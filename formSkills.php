<!DOCTYPE html>
<html lang="pt-BR">
 
  <head>
        <?php session_start(); ?>
         <!-- Meta tags Obrigatórias -->
        <meta charset="UTF-8">
        
        <!-- Habilita media querie -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--título-->
        <title>Cadastro de Skills</title>
        
        <!--ícone-->
        <link rel="icon" href="img/logo.png">
        
        
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
                    echo "<a class='logs'href='logout.php'> Logout </a>";
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
        
        
<!----------------------------------------------- form ---------------------------------------------> 
        <main>
        
        <section id="section_forms">
            <form method="post" action="dadosSkill.php">			
                <input type="hidden" id="hidden" name="codAluno" value="<?php echo $_GET["idAluno"];?>">
                <fieldset>
                    <legend>Cadastrar Skill</legend>
                    <label>Tipo de skills</label>
                    <select name="tipo">
                        <option value="cursos">Cursos</option>
                        <option value="hobbies">Hobbies</option>
                        <option value="ferramentas">Ferramentas</option>
                        <option value="areas">Áreas de atuação</option>
                    </select>
                    <br><br>
                    <label>Descreva sua skill</label>
                    <input type="text" maxlength="140" name="descricao">
                    <br><br>
                    <button type="submit">Cadastrar skill</button>					
					
                </fieldset>
            </form>
        </section></main>
        
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
	<script src="lib/jquery/jquery-3.5.1.min.js"></script>
	<script src="lib/poper/popper.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/vide/jquery.vide.min.js"></script>
    </body>
</html>
