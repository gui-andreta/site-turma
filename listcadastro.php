<?php
    include_once ("./ClassAluno.php");
    include_once ("./ClassAlunoDAO.php");
                
    $aluno = new aluno();
    $alunoDAO = new alunoDAO();
    $lista = $alunoDAO -> listar();
            
    foreach ($lista as $aluno) {
        echo "<div class='card'>";
        echo "<img src=".$aluno->getavatar()." alt='Foto da pessoinha'>";
        echo "<h3>".$aluno->getnome()."</h3>";
        echo "<p>Programação</p>";
        echo "<button title='Clique para mais informações sobre o aluno'><a class='info' href='consulta_simples.php?id=".$aluno->getid()."'>Mais informações</a></button>
        </div>";
        echo "<link rel='stylesheet' href='css/home.css'>";
    }
                
?>