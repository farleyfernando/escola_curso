<table style="border:1px solid #ccc; width: 100%">
    <tr>
        <th>Nome Curso</th>
        <th>Carga Horária</th>
        <th>Editar</th>
        <th>Deletar</th>
    </tr>

    <?php
        while($linha = mysqli_fetch_array($consulta_cursos)){
            echo "<tr><td>".$linha['nome_curso']."</td>";
            echo "<td>".$linha['carga_horaria']."</td>";

   ?>
         <td><a href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso']; ?>">Editar</a></td>
         <td><a href="deletar_curso.php?id_curso=<?php echo $linha['id_curso']; ?>">Deletar</a></td></tr>
   <?php
        }
    ?>       
</table>
        <div class="container">
            <a href="?pagina=inserir_curso"><input type="button" value="Inserir novo Curso"></a>
       
        </div>
