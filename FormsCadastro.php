<!DOCTYPE html>
<html>
	<head>
        <?php session_start(); ?>
		
         <!-- Meta tags Obrigatórias -->
        <meta charset="UTF-8">
        
        <!-- Habilita media querie -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--título-->
        <title>Cadastro</title>
        
        <!--ícone-->
        <link rel="icon" href="img/logo.png">
        
        
        <!-- Bootstrap CSS -->
	   <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/geral.css">
        <link rel="stylesheet" href="css/contato.css">
        
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
        
  <!------------------------------------------dados pessoais --------------------------------------------->  
        <main>
            
            <div class="container">
                
                <div class="form-style-3">
                    <form method="post" action="DadosCadastro.php" enctype="multipart/form-data">
                        
                        
                <fieldset><legend>Dados Pessoais</legend>
                            
                <label for="field1"><span>Nome Completo:</span> <input type="text" placeholder="Nome completo" class="input-field" name="txt_nome"></label>
                            
                <label for="field2"><span>Data de nascimento:</span><input type="date" class="input-field" name="data_nasc"></label>
                            
                <label for="field3"><span>Senha:</span><input type="password" placeholder="Máx. 10 caracteres" class="input-field" name="password"></label>
                </fieldset>


  <!----------------------------------------------- foto --------------------------------------------->  
    
                    <fieldset><legend>Enviar foto de perfil e avatar</legend>
                            
                <label for="field1"><span>Envie seu avatar:</span> <input type="file" class="input-field" name="avatar"></label>
                         
                <label for="field1"><span>Envie uma foto sua:</span> <input type="file" class="input-field" name="foto_perfil"></label>
                         
                 </fieldset>
                    

                        
<!-----------------------------------------redes sociais --------------------------------------------->                         
                             
                        
                <fieldset><legend>Redes sociais</legend>
                            
                    <label for="field1"><span>E-mail:</span> <input type="email" placeholder="example@gmail.com" name="txt_email" class="input-field"></label>   
                    
                    <label for="field1"><span>Facebook:</span> <input type="url" placeholder="facebook.com.br/seuperfil" name="txt_facebook" class="input-field"></label> 
                    
                     <label for="field1"><span>Linkedin:</span> <input type="url" placeholder="linkedin.com.br/seuperfil" name="txt_linkedin" class="input-field"></label>
                        
                    <label for="field1"><span>Whatsapp:</span> <input type="url" placeholder="https://api.whatsapp.com/send?phone=seunumero" name="whatsapp" class="input-field"></label> 

                 </fieldset>
                        
                       
                        
<!----------------------------------------------- sobre --------------------------------------------->  
                        
                 <fieldset><legend>Sobre você</legend>
                     
                    <label for="field6">
                        <textarea rows="25" cols="50" name="txt_description" id="text_descript" class="textarea-field"></textarea>
                     </label>
                   
                 </fieldset>

                        
                        <div id="cadastrar"><button type="submit">Cadastrar</button></div>
                        
                    </form>

                </div></div>
        </main>
        
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
	<script src="lib/jquery/jquery-3.5.1.min.js"></script>
	<script src="lib/poper/popper.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/vide/jquery.vide.min.js"></script>
        
    </body>
</html>