<?php
    require_once ("autoload.php");

    $request = new \SON\Request();
    $validator = new \SON\Validator($request);

    $formulario = new \SON\Elemento\Type\FormularioType("form1","form1","form-signin","post",$validator);
    $formulario->adicionarElemento(new \SON\Elemento\Type\InputType("nome","nome","form-control","text","Nome do usuário"));
    $formulario->adicionarElemento(new \SON\Elemento\Type\InputType("email","email","form-control","email","Email do usuário"));
    $formulario->adicionarElemento(new \SON\Elemento\Type\ButtonType("submit","envia-form","btn btn-lg btn-primary btn-block","submit","Enviar"));
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Design Patterns - Code Education</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">

</head>
<body>
   <?php
    $formulario->render();
   ?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
</body>
</html>
