<table style="border:1px solid #ccc; width: 100%">
    <tr>
        <th>Nome do Aluno</th>
        <th>Matriculado no Curso</th>
        <th>Deletar Matricula</th>
    </tr>

    <?php
        while($linha = mysqli_fetch_array($consulta_matriculas)){
            echo "<tr><td>".$linha['nome_aluno']."</td>";
            echo "<td>".$linha['nome_curso']."</td>";
        
   ?>
        <td><a href="deletar_matricula.php?id_aluno_curso=<?php echo $linha['id_aluno_curso']; ?>">Deletar</a></td></tr>
    <?php
        }
    ?>         
</table>        

        <div class="container">
            <a href="?pagina=inserir_matricula"><input type="button" value="Inserir matricula"></a>
        </div>    
