<?php
    require_once ("autoload.php");
    $input = new \SON\Elemento\Type\InputType("teste","inputName","inputCSS","text");
    $label = new \SON\Elemento\Type\LabelType("label","labelname","labelCss","Este é o label",$input);
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    $label->render();
    $input->render();

   ?>
</body>
</html>
