<?php

include 'db.php';

$id_aluno = $_POST['id_aluno'];
$nome_aluno = $_POST['nome_aluno'];
$data_nasc = $_POST['data_nasc'];


$query = "UPDATE ALUNOS SET nome_aluno='$nome_aluno', data_nasc='$data_nasc' WHERE id_aluno=$id_aluno";

mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');
