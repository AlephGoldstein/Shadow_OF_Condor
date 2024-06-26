<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sombra do Condor</title>
    <link rel="shortcut icon" href="sombra_condor.png">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="post">
            <h1 class="text-center">Sombra do Condor</h1>
            <hr>
            <label for="nome">Nome</label>
            <input type="text" class="text" name="nome">
            <label for="email">Senha</label>
            <input type="password" name="senha" id="">
            <input type="submit" value="Entrar">
        </form>
    </div>
    <?php 
    include('../DB/connect.php');
    $db = new conect;
    if(isset($_POST['nome'])){
        $nome = htmlentities($_POST['nome']);
        $senha = htmlentities($_POST['senha']);
        $res = $db->Login($nome,$senha);
        if($res == True){
            session_start();
            header('location:../index.php');
        }else{
            echo "Erro ao logar";
        };
    }
    
    
    ?>
</body>
</html>