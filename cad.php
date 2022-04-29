<?php
include_once('index.php');
$nome = $_POST ['lnome'];
$cpf = $_POST ['lcpf'];

$sql= "INSERT INTO registrog
(nome, cpf) VALUES
('$nome', '$cpf')";
$query= mysqli_query($conexao, $sql);
?>

<!-- include_once('index.php');        ??index.php é onde fica o log para conexão com o banco
$(nome do type) = $_POST ['Type do input'];
$sql= "INSERT INTO (nome da tabela)
(Nome das colunas) VALUES
('$nome do type')";
$query= mysqli_query($conexao, $sql); -->