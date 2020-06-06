<table class="table table-hover table-striped" id="alunos">
    <thead>
        <tr>
            <th>Nome do Aluno</th>
            <th>Data de Nascimento</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        <?php
             while($linha = mysqli_fetch_array($consulta_alunos)){
                echo "<tr><td>".$linha['nome_aluno']."</td>";
                echo "<td>".$linha['data_nasc']."</td>";
            
        ?>
                <td>
                    <a href="?pagina=inserir_alunos&editar=<?php echo $linha['id_aluno']; ?>">
                        <i class="fas fa-user-edit"></i
                    ></a>
                </td>
                <td>
                    <a href="deletar_aluno.php?id_aluno=<?php echo $linha['id_aluno']; ?>">
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
            <a class=" btn btn-success" href="?pagina=inserir_alunos">Inserir Aluno</a>
         
        </div>    