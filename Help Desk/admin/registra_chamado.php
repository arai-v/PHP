<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';

//$texto = $_POST['título'] . $_POST['categotia'] . $_POST['descricao'];

$titulo = str_replace("#", "-", $_POST['titulo']);
$categoria = str_replace("#", "-", $_POST['categoria']);
$descricao = str_replace("#", "-", $_POST['descricao']);


$texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EQL;

//echo $texto;

$arquivo = fopen('arquivo.txt', 'a');

fwrite($arquivo, $texto);

fclose($arquivo);

header('Location: abrir_chamado.php');
?>