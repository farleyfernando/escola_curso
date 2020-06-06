<?php
#comando para iniciar sessão após logado
session_start();
#fim 

//base de dados
include 'db.php';

//cabeçalho
include 'header.php';

//conteudo da página


if (isset($_SESSION['login'])){
    if (isset($_GET['pagina'])){
        $pagina = $_GET['pagina'];
    }
    else{
    $pagina='cursos';
    }
}
    else{
        $pagina='home';
    }

switch($pagina){
    case 'cursos': include 'views/cursos.php'; break;
    case 'alunos': include 'views/alunos.php'; break;
    case 'matriculas': include 'views/matriculas.php'; break;
    case 'inserir_curso': include 'views/inserir_curso.php'; break;
    case 'inserir_alunos': include 'views/inserir_alunos.php'; break;
    case 'inserir_matricula': include 'views/inserir_matricula.php'; break;
    default: include 'views/home.php'; break;
}
//rodapé
include 'footer.php';
