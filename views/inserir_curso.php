<?php
// inicio função editar dados
?>
<?php if(!isset($_GET['editar'])){?>

    <h5>INSERIR NOVO CURSO</h5>
<form method="POST" action="processa_curso.php">
    <br>
    <label class="badge badge-warning" >Nome do curso</label><br>
    <input class="form-control" type="text" name="nome_curso" placeholder="Insira ao nome do curso">
    <br><br>
    <label class="badge badge-warning" >Carga Horária</label><br>
    <input class="form-control" type="text" name="carga_horaria" placeholder="Insira a carga horária">
    <br><br>
    <input class="btn btn-success" type="submit" value="Inserir curso">
</form>

<?php } else{ ?>
    <?php while($linha = mysqli_fetch_array($consulta_cursos)){ ?>   
        <?php if($linha['id_curso'] == $_GET['editar']){ ?>

            <h1>EDITAR CURSO</h1>
            <form method="POST" action="editar_curso.php">
                <input type="hidden" name="id_curso" value="<?php echo $linha['id_curso']; ?>">
                <br>
                <label class="badge badge-warning" >Nome do curso</label><br>
                <input class="form-control" type="text" name="nome_curso" placeholder="Nome do curso" value="<?php echo $linha['nome_curso']; ?>">
                <br><br>
                <label class="badge badge-warning" >Carga Horária</label><br>
                <input class="form-control" type="text" name="carga_horaria" placeholder="Carga horária" value="<?php echo $linha['carga_horaria']; ?>">
                <br><br>
                <input type="submit" class="btn btn-success" value="Editar curso">
            </form>

        <?php } ?>    
    <?php } ?>
<?php } ?>
