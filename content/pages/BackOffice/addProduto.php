<?php
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: ../../index.php?p=login');
} else {
    $id = $_SESSION['id'];
    $email = $_SESSION['email'];
    ?>
<div class="cont">
    <h1 class="title">NOVO PRODUTO</h1>
    <p>Adicionar um novo produto:</p>

    <form method="post">
        <div class="mb-3">
            <label for="form-name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="form-name" name="form-name" aria-describedby="form-name">
        </div>
        <div class="mb-3">
            <label for="description" class="form-description">Descrição</label>
            <textarea class="form-control" id="form-description" name="form-description" rows="3"></textarea>
        </div>
        <select class="form-select" id="form-categoria" name="form-categoria" aria-label="Default select example">
                <option selected>Categoria</option>
                <option value="1">Pão de Alho</option>
                <option value="2">Saladas</option>
                <option value="3">Massas</option>
                <option value="4">Lasanhas</option>
                <option value="5">Kebab</option>
                <option value="6">Calzones</option>
                <option value="7">Pizzas</option>
            </select>   
        <select class="form-select" aria-label="Default select example" name="form-tamanho">
        <option selected>Tamanho</option>
        <option value="não aplicável">Não aplicável</option>
        <option value="2 unidades">2 unidades</option>
        <option value="mini">Mini</option>
        <option value="pequeno">Pequeno</option>
        <option value="médio">Médio</option>
        <option value="familiar">Familiar</option>
        </select>
        <div class="mb-3">
            <label for="form-preço" class="form-label">Preço</label>
            <input type="number" step=".01" class="form-control" id="form-preço" name="form-preço" aria-describedby="form-preço">
        </div>
        <button type="submit" formaction="dbProdutos/insertProduto.php" class="btn btn-primary">Adicionar</button>
    </form>
    <a href="backoffice.php?p=backOffice"><button type="button"
          class="btn btn-warning">Voltar</button></a>
</div>
<?php
}
?>
