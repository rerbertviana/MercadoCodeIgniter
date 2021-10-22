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
            <a href="login/logout" class="b1"><i class="fas fa-sign-out-alt espaco2"></i>SAIR</a>
        </div>
        <div class="row tab produto">
            <div class="col-12 produto">
                <span>SUPERMERCADO MOREIRA</span>
            </div>
        </div>
        <form action="usuario" method="post">
            <div class="row mb-3 tab">
                <div class="pesquisa">
                    <div class="col-3 l1c1">
                        <i class="fas fa-box ico"></i>
                        <span class="cadastrar">PESQUISAR PRODUTOS</span>
                    </div>
                    <div class="col-9 l1c2">
                        <input type="text" class="form-control" id="busca" name="busca">
                        <button type="submit" class="btn btn-primary espaco"> Pesquisar </button>
                    </div>
                </div>
        </form>
    </div>
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
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $produto) : ?>
                    <tr>
                        <td><?= $produto['id'] ?></td>
                        <td><?= $produto['nome'] ?></td>
                        <td><?= $produto['preco'] ?></td>
                        <td><?= $produto['quantidade'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
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

    .linha {
        display: flex;
        align-items: center;
    }

    .l1c1 {
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 5px;
        height: 38px;

        background-color: gray;

    }

    .l1c2 {

        display: flex;
        align-items: center;
        padding-right: 0px;
        padding-left: 5px;

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
        padding: 0px;
        display: flex;
        align-items: center;
    }

    .espaco {
        margin-left: 10px;
        margin-right: 0px;
    }

    .espaco2 {
        margin-right: 10px;
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

    .fechar {
        display: flex;
        justify-content: flex-end;
    }

    .b1:hover {
        color: white;
    }
</style>

</html>