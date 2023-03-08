<?php
    include_once("./ClassAlunoDAO.php");
    include_once("./ClassAluno.php"); 

    session_start();

    $con = new PDO("mysql:host=localhost;port=3308;dbname=alunos", 'root', '');
    $aluno = new aluno();
    $alunoDAO = new alunoDAO();
    $idAluno = $_GET["id"];
    $aluno = $alunoDAO -> selecionaAluno($idAluno);

?>
<?php
    include_once("./ClassSkillDAO.php");
    include_once("./ClassSkill.php");

    
    
    $skill = new Skill();
    $skillDAO = new SkillDAO();
    $idSkill = $_GET["id"];
    $listaFerramentas = $skillDAO -> listarFerramentas($idAluno);
    $listaHobbies = $skillDAO -> listarHobbies($idAluno);
    $listaCursos = $skillDAO -> listarCursos($idAluno);
    $listaAreas = $skillDAO -> listarAreas($idAluno);

?>

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
<!-- Meta tags Obrigatórias -->
        <meta charset="UTF-8">
        
        <!-- Habilita media querie -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--título-->
        <title><?php echo $aluno->getnome(); ?></title>
        
        <!--ícone-->
        <link rel="icon" href="img/logo.png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        
        
        <!-- Bootstrap CSS -->
	   <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/geral.css">
        <link rel="stylesheet" href="css/pgcontato.css">
        
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
                    <a class="nav-link" href="index.php#contato">Quiz</a>
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
        
<!----------------------------------------------- contato --------------------------------------------->    
        
        
            <main>
                <div class="container">
                <div class="row">
                    <div class="col-md-5">
                    
                    <figure class="avatar_contato">
                        <img id="img_avatar" src="<?php echo $aluno->getavatar(); ?>" alt="[Gabriel de Avila Farias]" width="350px;">
                    </figure>
                    
                    <div class="informacoes_contato">
                        <h1 class="title_contato"><b><?php echo $aluno->getnome(); ?></b></h1>
                            <p class="idade_contato"><b><?php echo $aluno->getdata_nasc(); ?></b></p>
                        
                        
                        <p class="text_contato">
                            <?php echo $aluno->getdescription(); ?>
                        </p>
                        
                        <hr>
<!----------------------------------------------- icones --------------------------------------------->    
                        <div class="redes_sociais_contato">
                                <figure class="figure_redes_sociais_contato">
                                    
                                    <a href="<?php echo $aluno->getlinkedin(); ?>" target="_blank">
                                       <i class="fab fa-linkedin"></i>
                                    </a>
                                    
                                    <a href="<?php echo $aluno->getfacebook(); ?>" target="_blank">
                                    <i class="fab fa-facebook"></i>
                                    </a>
                                    
                                    <a href="<?php echo $aluno->getemail(); ?>" target="_blank">
                                        <i class="fas fa-envelope-square"></i>
                                    </a>
                                    
                                    <a href="<?php echo $aluno->getwhatsapp(); ?>" target="_blank">
                                        <i class="fab fa-whatsapp-square"></i>
                                    </a>
                                    
                                </figure>
                            </div>
                        
                    </div>
                    
                    
                </div>
                <div class="col-md-2">
                <div class="divisor"></div></div>
                
<!----------------------------------------------- habilidades --------------------------------------------->    
                  
                <div class="col-md-5 hab">
                    
                        <h2 class="title_skills">Cursos</h2>
                        <?php
                                foreach ($listaCursos as $skill) {
                                    echo "<p>".$skill->getdescricao();
                                    if (isset($_SESSION['id'])) {
                                        /// your code here
                                        if($_SESSION['id'] == $idAluno) {
                                            echo "<a href='deleteSkills.php?idSkill=".$skill->getid()."'><img id='lixeira' src='img/ícones/outros-icones/lixeira.png' alt='Deletar' width='15'></a></p>";
                                        }else {
                                            echo "";
                                        }
                                    }else {
                                        echo "";
                                    }
                                }                        
                        ?>
                    
                    
                        <h2 class="title_skills">Áreas</h2>
                        <?php
                                foreach ($listaAreas as $skill) {
                                    echo "<p>".$skill->getdescricao();
                                    if (isset($_SESSION['id'])) {
                                        /// your code here
                                        if($_SESSION['id'] == $idAluno) {
                                            echo "<a href='deleteSkills.php?idSkill=".$skill->getid()."'><img id='lixeira' src='img/ícones/outros-icones/lixeira.png' alt='Deletar' width='15'></a></p>";
                                        }else {
                                            echo "";
                                        }
                                    }else {
                                        echo "";
                                    }
                                }                        
                        ?>
                    
                   
                        <h2 class="title_skills">Ferramentas</h2>
                        <?php
                                foreach ($listaFerramentas as $skill) {
                                    echo "<p>".$skill->getdescricao();
                                    if (isset($_SESSION['id'])) {
                                        /// your code here
                                        if($_SESSION['id'] == $idAluno) {
                                            echo "<a href='deleteSkills.php?idSkill=".$skill->getid()."'><img id='lixeira' src='img/ícones/outros-icones/lixeira.png' alt='Deletar' width='15'></a></p>";
                                        }else {
                                            echo "";
                                        }
                                    }else {
                                        echo "";
                                    }
                                }                        
                        ?>
                    
                    
                        <h2 class="title_skills">Hobbies</h2>
                        <?php
                                foreach ($listaHobbies as $skill) {
                                    echo "<p>".$skill->getdescricao();
                                    if (isset($_SESSION['id'])) {
                                        /// your code here
                                        if($_SESSION['id'] == $idAluno) {
                                            echo "<a href='deleteSkills.php?idSkill=".$skill->getid()."'><img id='lixeira' src='img/ícones/outros-icones/lixeira.png' alt='Deletar' width='15'></a></p>";
                                        }else {
                                            echo "";
                                        }
                                    }else {
                                        echo "";
                                    }
                                }                        
                        ?>
                    
                    
                    </div> </div>
                <div class="anuncio">
                <?php

                    if (isset($_SESSION['id'])) {
                        /// your code here
                        if($_SESSION['id'] == $idAluno) {
                            echo "<a href='formSkills.php?idAluno=$idAluno'><button>Adicionar</button></a>";
                        }else {
                            echo "<p>Você não pode alterar as skills de outro perfil.</p>";
                        }
                    }else {
                        echo "<p>Você não pode alterar as skills de outro perfil.</p>";
                    }

                ?>
                </div></div>
                  
            </main>
        <footer class="rodape">
            <p>Site criado pela turma do curso Programador Web - Senac - 2020</p>
        </footer>
    
    
          <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
	<script src="lib/jquery/jquery-3.5.1.min.js"></script>
	<script src="lib/poper/popper.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/vide/jquery.vide.min.js"></script>
        
    <script>
        var avatar = document.getElementById('img_avatar');
        
        avatar.onmouseover = function troca(){
            document.getElementById('img_avatar').src='<?php echo $aluno->getfoto_perfil(); ?>';
        }
        avatar.onmouseout = function destroca(){
            document.getElementById('img_avatar').src='<?php echo $aluno->getavatar(); ?>';
        }
        
    </script>
        
    </body>
</html>