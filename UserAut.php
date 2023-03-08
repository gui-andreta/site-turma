<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/55fa218051.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/pkz1yma.css">
    <link rel="stylesheet" href="css/logs.css">
    <link rel="stylesheet" href="css/geral.css">
    <link rel="icon" href="img/logo.png">
    <title>Autenticação</title>

    <script type="text/javascript">
        function loginsuccessfully() {
            setTimeout("window.location='index.php'", 2500);
        }

        function loginfailed() {
            setTimeout("window.location='login.php'", 2500);
        }
    </script>
</head>
<body>
    
    
<!-------------------------------menu----------------------------------->
  
     <main>
        <div class="container">
        <?php
            $con = new PDO("mysql:host=localhost;port=3308;dbname=alunos", 'root', '');
            $email = $_POST['txt_email'];
            $senha = $_POST['password'];
            $sql = "SELECT * FROM aluno WHERE email = '$email' and password = '$senha'";
            $result = $con->query($sql);
            //$row = mysql_num_rows($sql);

            foreach($result as $row) {
                //print_r($row["id"]);
                if ($row > 0) {
                    session_start();
                    $_SESSION['id'] = $row["id"];
                    $_SESSION['txt_email'] = $row["email"];
                } 
            }

            if (isset($_SESSION['id'])) {
                echo "<img src='img/errado.png'> 
                <p class='correto'>Você foi autenticado com sucesso! Aguarde um instante.</p>";
                echo "<script>loginsuccessfully()</script>";
            }else {
                echo "<img src='img/certo.png'> <p class='errado'>Erro ao fazer Login, verifique se as informações estão corretas.</p>";
                echo "<script>loginfailed()</script>";
            }
            
        ?></div>
    </main>
</body>
</html>