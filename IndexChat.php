<?php 
require __DIR__ . '/vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sombra do Condor</title>
    <link rel="shortcut icon" href="sombra_condor.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class='bg-danger'>
    <div class="container bg-dark">
        <h2 class="text-light text-center">Sombra da Condor</h2>
        <table class="table text-center" id="messages">
        <?php include('DB/chatController.php');?>
        </table>
        <form method="POST">
             <input type="text" id='names' name="name" class="form-control" required>
             <textarea name="message" id='message' class="form-control" required></textarea>
             <input type="submit" value="Enviar" class="btn btn-primary" id="btn" onclick="transmitMessage()">
        </form>

<script src="indexChat.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </div>
</body>
</html>