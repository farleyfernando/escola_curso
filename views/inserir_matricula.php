<h1>INSERIR NOVA MATRÍCULA</h1><br>
<h4>Selecionar Aluno e Curso</h4>

<form method="POST" action="processa_matricula.php">
    <select name="escolha_aluno">
        <option>Selecione um aluno</option>
        <?php
            while($linha = mysqli_fetch_array($consulta_alunos)){
                echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';
            }
        ?>
    </select>
    <br><br>    
    <select name="escolha_curso">
        <option>Selecione o curso</option>
        <?php
            while($linha = mysqli_fetch_array($consulta_cursos)){
                echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';
            }
        ?>
    </select> 
    <br><br>

    <input type="submit" value="Salvar Matricula"></a>
       
</form>
