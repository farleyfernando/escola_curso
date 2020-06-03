<table style="border:1px solid #ccc; width: 100%">
    <tr>
        <th>Nome do Aluno</th>
        <th>Data de Nascimento</th>
    </tr>

    <?php
        while($linha = mysqli_fetch_array($consulta_alunos)){
            echo "<tr><td>".$linha['nome_aluno']."</td>";
            echo "<td>".$linha['data_nasc']."</td>";
     
   ?>
        <td><a href="deletar_aluno.php?id_aluno=<?php echo $linha['id_aluno']; ?>">Deletar</a></td></tr>
    <?php
        }
    ?>         
</table>

        <div class="container">
            <a href="?pagina=inserir_alunos"><input type="button" value="Inserir novo Aluno"></a>
         
        </div>    