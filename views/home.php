
<h1 style="text-align:center">Seja bem-vindo</h1><br>

<form method="POST" action="login.php">
    <label class="badge badge-warning" >Usuário:</label><br>
    <input type="text" name="usuario" placeholder="nome usuario" class=" form-control"><br>
    <label class="badge badge-warning" >Senha:</label><br>
    <input type="password" name="senha" placeholder="digite a senha" class=" form-control"><br>

    <input class="btn btn-success" type="submit" value="Continuar"></a>

</form>

<br>
<?php 

if (isset($_GET['erro'])){ ?>
    <div class="alert alert-danger" role="alert">
        Usuário e/ou senha inválidos!
    </div>
<?php } ?>
