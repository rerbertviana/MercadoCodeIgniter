<html>

<head>
    <link rel='stylesheet' href="<?= base_url("assets/css/bootstrap.css") ?>" />
    <link rel='stylesheet' href="<?= base_url("assets/js/bootstrap.js") ?>" />
    <script src="https://kit.fontawesome.com/66ed8a69a7.js" crossorigin="anonymous"></script>
    <title>Produtos</title>
</head>

<body>
    <div class="caixa">
        <div class="fechar tab">
            <a href="<?= base_url("index.php/login/logout") ?>" class="b1"><i class="fas fa-sign-out-alt espaco"></i>SAIR</a>
        </div>
        <div class="row tab">
            <div class="col-12 produto">
                <span>SUPERMERCADO PEREIRA</span>
            </div>
        </div>
        <div class="tab">
            <?php if ($mensagens) {
                foreach ($mensagens as $mensagem) {
                    echo " <div class='erros'>";
                    echo $mensagem;
                    echo "</div>";
                }
            } ?>
        </div>
        <form action=<?= base_url("index.php/produtos/index/") . 1 ?> method="post">
            <div class="row  tab">
                <div class="col-2 l1c1 ">
                    <i class="fas fa-box ico"></i>
                    <span class="cadastrar">Cadastrar Produtos:</span>
                </div>
                <div class="col-3 ">
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="preco" name="preco" placeholder="Preço (R$)">
                </div>
                <div class="col-3 ">
                    <input type="text" class="form-control" id="quantidade" name="quantidade" placeholder="Quantidade">
                </div>
                <div class="col-1 cad">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>
        </form>
        <form action="<?= base_url("index.php/produtos") ?>" method="post">
            <div class="row tab">
                <div class="pesquisa">
                    <div class="col-2 l1c1">
                        <i class="fas fa-search ico"></i>
                        <span class="cadastrar">Pesquisar Produtos:</span>
                    </div>
                    <div class="col-9 l2c2">
                        <input type="text" class="form-control" id="busca" name="busca">
                    </div>
                    <div class="col-1 l2c3">
                        <button type="submit" class="btn btn-primary"> Pesquisar </button>
                    </div>
                </div>
            </div>
        </form>
        <div class="row tab produto">
            <div class="col-12 produto">
                <span>PRODUTOS</span>
            </div>
        </div>
        <div class="row tab">
            <table class="table table-striped table-hover table-bordered table-dark ">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> Nome </th>
                        <th> Preço (R$) </th>
                        <th> Quantidade </th>
                        <th> Ações </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($produtos as $produto) : ?>
                        <tr>
                            <td><?= $produto['id'] ?></td>
                            <td><?= $produto['nome'] ?></td>
                            <td><?= $produto['preco'] ?></td>
                            <td><?= $produto['quantidade'] ?></td>
                            <td>
                                <div class="excluirgroup">
                                    <a href="<?= base_url('index.php/produtos/delete/' . $produto['id']) ?>" class="bdelete">Editar<i class="far fa-edit fa-fw t "></i></a>
                                    <a href="<?= base_url('index.php/produtos/delete/' . $produto['id']) ?>" class="bdelete2">Excluir<i class="far fa-trash-alt fa-fw t"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

<style>
    .tab {
        margin: 15px;
    }

    .titulo {
        display: flex;
        justify-content: center;
    }

    .l1c1 {
        display: flex;
        justify-content: center;
        border-radius: 5px;
        align-items: center;
        background-color: gray;
    }

    .l2c2 {
        padding-left: 10px;
        padding-right: 10px;
    }

    .l2c3 {
        display: flex;
        justify-content: flex-end;
    }

    .espaco {
        margin-right: 10px;
    }

    .ico {
        margin-right: 10px;
        color: white;
    }

    .cadastrar {
        color: white;
    }

    .produto {
        display: flex;
        justify-content: center;
        align-items: center;

        font-size: 1.2rem;
        border-radius: 5px;
        height: 40px;

        color: white;
        background-color: gray;
    }

    .caixa {
        margin: 15px;
        padding: 15px;
        border-radius: 10px;

        box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.2);

    }

    .pesquisa {
        display: flex;
        padding: 0px;
    }

    .teste {
        display: flex;
        justify-content: flex-end;
    }

    .erros {
        display: flex;
        justify-content: flex-end;
    }

    .erros p {
        padding: 8px;
        margin: 5px;
        margin-right: 0px;
        border-radius: 3px;
        color: white;
        background-color: rgba(255, 67, 67, 1);
    }

    .fechar {
        display: flex;
        justify-content: flex-end;
    }

    .b1 {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100px;
        height: 35px;
        background-color: gray;
        color: white;
        border-radius: 3px;
        text-decoration: none;
    }

    .b1:hover {
        color: white;
    }

    .espaco {
        margin-left: 8px;
    }

    .excluirgroup {
        margin-right: 8px;
        display: flex;
        width: 40px;
    }

    .bdelete {
        margin-right: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: orange;
        color: white;
        height: 40px;
        width: 75px;
        text-decoration: none;
        border-radius: 5px;
        padding: 6px;
    }

    .bdelete2 {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgba(255, 67, 67, 1);
        height: 40px;
        width: 75px;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        padding: 6px;
    }

    .bdelete:hover {
        color: white;
    }

    .bdelete2:hover {
        color: white;
    }

    .t {
        margin-left: 4px;
    }

    .cad {
        display: flex;
        justify-content: center;
    }
</style>

</html>