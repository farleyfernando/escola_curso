<table class="table table-hover table-striped" id="cursos">
    <thead>
        <tr>
            <th>Nome Curso</th>
            <th>Carga Horária</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
            <?php
                while($linha = mysqli_fetch_array($consulta_cursos)){
                    echo "<tr><td>".$linha['nome_curso']."</td>";
                    echo "<td>".$linha['carga_horaria']."</td>";

        ?>
                <td>
                    <a href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso']; ?>">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td>
                    <a href="deletar_curso.php?id_curso=<?php echo $linha['id_curso']; ?>">
                        <span style="color: red;"> 
                            <i class="fas fa-folder-minus"></i>
                        </span>                          
                    </a>
                </td>
            </tr>
        <?php
             }
        ?> 
    </tbody>      
</table>
        <div class="container"><br>
            <a class=" btn btn-success" href="?pagina=inserir_curso">Inserir Cursos</a>
       
        </div>
