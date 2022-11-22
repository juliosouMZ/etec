<?php

include('conexaobusca.php');
$pesquisa = $mysqli->real_escape_string($_GET['busca']);
$sql_code = "SELECT * FROM produtos WHERE nome_produto LIKE %$pesquisa%";
$sql_query = $mysqli->query($sql_code) or die("Erro ao consultar!" .$mysqli->error);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewTECECO</title>
</head>
<body>
<h1>Lista de produtos</h1>
<form action="">
    <input name="busca" type="text">
    <button type="submit">Pesquisar</button>
</form>
<?php
if(!isset($_GET['busca'])){
?>
<tr>
    <td >digite algo para pesquisar</td>
</tr>
<?php
}
   
else{
    $pesquisa = $mysqli->real_escape_string($_GET['busca']);
$sql_code = "SELECT * FROM produtos WHERE nome_produto LIKE %$pesquisa%";
$sql_query = $mysqli->query($sql_code) or die("Erro ao consultar!" .$mysqli->error);
if ($sql_query->num_rows == 0){
    ?>
    <tr>
    <td >nenhum resultado enontrado</td>
</tr>
<?php
} else{
    while($dados = $sql_query->fetch_assoc()){
        ?>
        <tr>
        <td><?php echo $dados['nome_produto']; ?></td>
        </tr>
        <?php
    }
}
?>
<?php
}
?>
    
</body>
</html>