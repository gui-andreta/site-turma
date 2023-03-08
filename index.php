<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <?php session_start(); ?>
         <!-- Meta tags Obrigatórias -->
        <meta charset="UTF-8">
        
        <!-- Habilita media querie -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--título-->
        <title>Site da Turma do Curso Programador Web Senac</title>
        
        <!--ícone-->
        <link rel="icon" href="img/logo.png">
        
        
        <!-- Bootstrap CSS -->
	   <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/geral.css">
        <link rel="stylesheet" href="css/home.css">
        
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
	 
        
<!----------------------------------------------- conteudo --------------------------------------------->
        
        <main>
            <section class="container" id="intro">
                
                    <img class="banner" src="img/bg.png">
                
                <div class="descricao">
                    <h1>Descubra qual aluno do curso Programador Web vocé é.</h1>
                    <p>Clique no botão e divirta-se!</p>
                    <a href="./quiz/quiz.php"><button>Jogar</button></a>
                </div>
            </section>
            
                
    <!---------------------------------------------sobre--------------------------------------------------->                 
                
            <section class="container" id="curso">

                    <div class="row">
                    
                    <div class="col-md-3">
                        <img class="sobre-imagem" src="img/img-sobre-1.png" alt="Ilustrações das linguagens de programação">
                    </div>               

                    <div class="col-md-6">
                            <h3 class="title_1">Quem somos?</h3>
                            <div class="linha_1"></div>
                            <p class="sobre_texto_1">Somos uma equipe dinâmica na construção de Sonhos, ideias e projetos, os permitindo se tornar realidade!</p>
                            <p class="sobre_texto_2">Alunos da turma de 2020 do curso Programador Web do SENAC de São José do Rio Preto. Unimos nossas ideias e habilidades desenvolvidas no decorrer do curso e também as já existentes na criação deste website para aprimorar tais habilidades, além de dar um pontapé inicial em nossa carreira, nos colocando em um ambiente real de desenvolvimento web.<br>
                            Este site conta com tecnologias básicas da web, HTML5, CSS3 e JS, além de um Banco de dados integrado. Todo o site, do desing e front-end, ao back-end e banco de dados foi inteiramente produzido pelos alunos da turma.
                            </p>

                        
                            <h3 class="title_2">Missão</h3>
                            <p class="sobre_texto_2">Desenvolver sistemas web amigáveis ao usuário,
                            procurando fornecer as melhores experiências
                            possíveis em cada um de nossos trabalhos.</p>
                        
                        
                            <h3 class="title_2">Visão</h3>
                            <p class="sobre_texto_2">Vemos o mundo como qualquer desenvolvedor apaixonado por códigos, o vemos em HTML e CSS!<br>
                            Acreditamos que podemos desenvolver qualquer ideia de sistema web. O que hoje não é possível, torna-se
                            possível com estudo e dedicação.
                            </p>
   
                        
                            <h3 class="title_2">Valores</h3>
                            <p class="sobre_texto_2">
                            Transparência ● Qualidade de Serviço ● Pontualidade ● Inovação ● Compromisso </p>
                    </div>
                    
                    <div class="col-md-3">
                        <img class="sobre-imagem" src="img/img-sobre-2.png" alt="Ilustrações das linguagens de progrmação">
                    </div></div>
                    </section>
                    
<!---------------------------------------------trabalhos-------------------------------------------------->
                    
                
                <section class="container" id="trabalhos">
                    <div class="row">
                        <div class="col-md-12">
                    <h3 class="title_3">Conheça nosso trabalho</h3>
                    <div class="linha_2"></div>
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/c8YgaHuQMa8" allowfullscreen></iframe>
                    </div>
                        <p>Projeto que fizemos para a empresa Cooperlagos.</p></div></div>
                </section>
                
                
<!---------------------------------------------turma-------------------------------------------------->
                
                <section class="container" id="contato">
                    <div class="row">
                        <div class="col-md-12">
                    <h3 class="title_4">Turma do Curso Programador Web</h3>
                    </div></div>
                    
                    <div class="linha_3"></div>
                    
                        
                      <div class="cards-container">
                        <?php
                            include_once ("./listcadastro.php");     
                        ?>
                    </div>
                            
                </section>
            
            
            
            </main>
        
        
<!---------------------------------------------footer-------------------------------------------------->
       
        <footer class="container-fluid">
            <p>Site criado pela turma do curso Programador Web - Senac - 2020</p>
        </footer>
        
        
        
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
	<script src="lib/jquery/jquery-3.5.1.min.js"></script>
	<script src="lib/poper/popper.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/vide/jquery.vide.min.js"></script>
        
    </body>
</html>