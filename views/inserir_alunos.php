<?php
// inicio função editar dados
?>
<?php if(!isset($_GET['editar'])){?>

<h1>INSERIR NOVO ALUNO</h1>

<form method="POST" action="processa_alunos.php">
    <br>
    <label class="badge badge-warning" >Nome do Aluno</label><br>
    <input class="form-control" type="text" name="nome_aluno" placeholder="Nome do aluno">
    <br><br>
    <label class="badge badge-warning" >Data de Nascimento</label><br>
    <input  class="form-control" type="date" name="data_nasc" placeholder="Data nascimento">
    <br><br>
    <input class="btn btn-success" type="submit" value="Inserir Aluno">
</form>
<?php
// continuação função editar dados
?>
<?php } else{ ?>
    <?php while($linha = mysqli_fetch_array($consulta_alunos)){ ?>   
        <?php if($linha['id_aluno'] == $_GET['editar']){ ?>

            <h1>EDITAR ALUNO</h1>
            <form method="POST" action="editar_aluno.php">
                <input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno']; ?>">
                <br>
                <label class="badge badge-warning" >Nome do Aluno</label><br>
                <input  class="form-control" type="text" name="nome_aluno" placeholder="Nome aluno" value="<?php echo $linha['nome_aluno']; ?>">
                <br><br>
                <label class="badge badge-warning" >Data de Nascimento</label><br>
                <input class="form-control" type="date" name="data_nasc" placeholder="Data nascimento" value="<?php echo $linha['data_nasc']; ?>">
                <br><br>
                <input class="btn btn-success" type="submit" value="Editar Aluno">
            </form>

        <?php } ?>    
    <?php } ?>
<?php } ?>
