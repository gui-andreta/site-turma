<?php
    include_once('./ClassAluno.php'); //get e set
    include_once('./ClassAlunoDAO.php'); // funcionalidades (incluir, listar...)

    //instanciando (criando) o objeto $aluno
    $aluno = new aluno();
    
    $aluno -> setnome($_POST["txt_nome"]);
    $aluno -> setdata_nasc($_POST["data_nasc"]);
    $aluno -> setemail($_POST["txt_email"]);
    $aluno -> setfacebook($_POST["txt_facebook"]);
    $aluno -> setlinkedin($_POST["txt_linkedin"]);
    $aluno -> setwhatsapp($_POST["whatsapp"]);
    $aluno -> setdescription($_POST["txt_description"]);
    $aluno -> setpassword($_POST["password"]);



    //Upload variaveis
    $pasta = 'uploads/';

    if (isset($_FILES['avatar'])) {
        $avatar = $_FILES['avatar']['name'];
        
        $tmp_arquivo_avatar = $_FILES['avatar']['tmp_name'];
        

        $erro_avatar = $_FILES['avatar']['error'];
        
        if ($erro_avatar !== UPLOAD_ERR_OK) {
            echo 'Erro ao fazer upload', $erro_avatar;
        } elseif (move_uploaded_file($tmp_arquivo_avatar, $pasta . $avatar)) {
            echo 'Upload do arquivo foi realizado com sucesso também neste caminho: '. $pasta . $avatar;
            $aluno -> setavatar($pasta . $avatar);
        }

    } else {
        echo 'Selecione um arquivo para ser enviado!';
    }

    if (isset($_FILES['foto_perfil'])) {
        $foto_perfil = $_FILES['foto_perfil']['name'];
        
        $tmp_arquivo_perfil = $_FILES['foto_perfil']['tmp_name'];
        

        $erro_foto_perfil = $_FILES['foto_perfil']['error'];
        
        if ($erro_foto_perfil !== UPLOAD_ERR_OK) {
            echo 'Erro ao fazer upload', $erro_foto_perfil;
        } elseif (move_uploaded_file($tmp_arquivo_perfil, $pasta . $foto_perfil)) {
            echo 'Upload do arquivo foi realizado com sucesso também neste caminho: '. $pasta . $foto_perfil;
            $aluno -> setfoto_perfil($pasta . $foto_perfil);
        }

    } else {
        echo 'Selecione um arquivo para ser enviado!';
    }
    

    $alunoDAO = new alunoDAO();
    $msg = $alunoDAO -> inserir($aluno);
    

   /*echo $aluno -> getnome();
   echo $aluno -> getdata_nasc();
   echo $aluno -> getemail();
   echo $aluno -> getfacebook();
   echo $aluno -> getlinkedin();
   echo $aluno -> getwhatsapp();
   echo $aluno -> getdescription();*/
?>

<!DOCTYPE html>
<html>
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
        <title>Cadastro de Aluno</title>
    </head>
    <body>

            <hr>
            <br><br>
            <?php
            echo "<b>".$msg."</b>";
            ?>
    </body>
</html>