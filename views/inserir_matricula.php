<h5 class="card-title">INSERIR NOVA MATRÍCULA</h5><br>

<form method="POST" action="processa_matricula.php">
    <label class="badge badge-warning" >Selecione o Aluno</label><br>
    <select class="form-control" name="escolha_aluno">
        <option>selecione aluno</option>
        <?php
            while($linha = mysqli_fetch_array($consulta_alunos)){
                echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';
            }
        ?>
    </select>
    <br><br> 
    <label class="badge badge-warning" >Selecione o Curso</label><br>   
    <select class="form-control" name="escolha_curso">
        <option>selecione curso</option>
        <?php
            while($linha = mysqli_fetch_array($consulta_cursos)){
                echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';
            }
        ?>
    </select> 
    <br><br>

    <input class="btn btn-success" type="submit" value="Salvar Matricula"></a>
       
</form>
