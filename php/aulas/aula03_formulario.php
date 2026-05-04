<?php
    include'../header.php'
?>


<form action="resultadoFormAluno.php" method="post">
    <h3>Formulário Aluno</h3>
    <div class="col-6">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="col-6">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="col-6">
        <label for="email">Telefone</label>
        <input type="text" name="telefone" class="form-control">
    </div>
    <div class="col-6">
        <label for="email">Senha</label>
        <input type="text" name="password" class="form-control">
    </div>
    <div class="mt-2">
        <button class="submite" class="btn btn-primary">Salvar</button>
    </div>
</form>


<?php
    include'./footer.php';
?>