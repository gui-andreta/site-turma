<?php
    session_start();
    include_once("./ClassSkill.php");
    include_once("./ClassSkillDAO.php");
    
    $skill = new Skill();

    $skill -> setcodAluno($_POST["codAluno"]);
    $skill -> settipo($_POST["tipo"]);
    $skill -> setdescricao($_POST["descricao"]);

	//echo $skill->getcodAluno();
	//echo $skill->gettipo();
	//echo $skill->getdescricao();    
    

    $skillDAO = new SkillDAO();
    $msg = $skillDAO -> inserir($skill);
    
    
    
?>
<!DOCTYPE>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/55fa218051.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.typekit.net/pkz1yma.css">
        <link rel="stylesheet" href="css/geral.css">
        <link rel="icon" href="img/logo.png">
        <title>Cadastro Skill</title>
    </head>
    <body>
        
        <?php
        echo "<b>".$msg."</b>";
        ?>
        
        
    </body>
</html>