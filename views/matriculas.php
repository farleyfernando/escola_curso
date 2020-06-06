<table class="table table-hover table-striped" id="matriculas">
    <thead>
        <tr>
            <th>Nome do Aluno</th>
            <th>Matriculado no Curso</th>
            <th>Deletar Matricula</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($linha = mysqli_fetch_array($consulta_matriculas)){
                echo "<tr><td>".$linha['nome_aluno']."</td>";
                echo "<td>".$linha['nome_curso']."</td>";
            
       ?>
            <td>
                <a href="deletar_matricula.php?id_aluno_curso=<?php echo $linha['id_aluno_curso']; ?>">
                    <span style="color: red;"> 
                        <i class="fas fa-user-slash"></i>
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
            <a class=" btn btn-success"href="?pagina=inserir_matricula">Inserir Matricula</a>
        </div>    
