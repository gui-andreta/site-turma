<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/55fa218051.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/pkz1yma.css">
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="css/page-home.css">
    <link rel="stylesheet" href="css/quiz.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" href="img/logo.png">
    <title>Autenticação</title>

    <script type="text/javascript">
        function deletesuccessfully() {
            setTimeout("window.location='index.php'", 2500);
        }

        function deletefailed() {
            setTimeout("window.location='index.php'", 2500);
        }
    </script>
</head>
<body>

    <main>
        <?php
            //Conecção
            $con = new PDO("mysql:host=localhost;port=3308;dbname=alunos", 'root', '');
            include_once("./ClassSkillDAO.php");
            include_once("./ClassSkill.php"); 
            

            //SQL pra deletar do BD a skill
            $idSkill = $_GET["idSkill"];
            //$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
            $delete = "DELETE FROM skills WHERE id='$idSkill'";

            $retorno = $con->query($delete);

            //echo $retorno +"";
            try {
                $con->query($delete);
                echo "<img src='img/correct.png'/><br><p style='font-size:25px; color:var(--cor-verde);'><b>Skill deletada com sucesso!</b></p>";
                echo "<script>deletesuccessfully()</script>";
            }catch(Exception $erro) {
                echo "<img src='img/wrong.png'/><br><p style='font-size:25px; color:var(--cor-vermelho);'><b>Erro ao tentar deletar a skill tente novamente mais tarde.</b></p>";
                echo "<script>deletefailed()</script>";
            }

        ?>
    </main></body>
</html>