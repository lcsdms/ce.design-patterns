<?php
    require_once ("autoload.php");
    $input = new \SON\Elemento\Type\InputType("teste","inputName","inputCSS","text");

?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    $input->render();
   ?>
</body>
</html>
