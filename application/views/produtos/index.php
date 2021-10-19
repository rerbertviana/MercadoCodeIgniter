<html>

<head>
    <link rel='stylesheet' href="<?= base_url("assets/css/bootstrap.css") ?>" />
    <link rel='stylesheet' href="<?= base_url("assets/js/bootstrap.js") ?>" />
    <script src="https://kit.fontawesome.com/66ed8a69a7.js" crossorigin="anonymous"></script>
    <title>Produtos</title>
</head>

<body>
    <div class="caixa">
        <div class="row tab produto">
            <div class="col-12 produto">
                <span>SUPERMERCADO MOREIRA</span>
            </div>
        </div>
        <form action="index.php/produtos/novo" method="post">
            <div class="row mb-3 tab">
                <div class="col-2 l1c1 ">
                    <i class="fas fa-box ico"></i>
                    <span class="cadastrar">Cadastrar Produtos:</span>
                </div>
                <div class="col-3 linha ">
                    <label for="nome" class="form-label espaco"> Nome </label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="col-3 linha">
                    <label for="preco" class="form-label espaco"> Preço </label>
                    <input type="text" class="form-control" id="preco" name="preco">
                </div>
                <div class="col-3 linha">
                    <label for="quantidade" class="form-label espaco"> Quantidade </label>
                    <input type="text" class="form-control" id="quantidade" name="quantidade">
                </div>
                <div class="col-1 linha">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>
        </form>
        <form action="<?= base_url() ?>" method="post">
            <div class="row tab">
                <div class="pesquisa">
                    <div class="col-2 l1c1">
                        <i class="fas fa-search ico"></i>
                        <span class="cadastrar">Pesquisar Produtos:</span>
                    </div>
                    <div class="col-10 l2c2">
                        <input type="text" class="form-control busca" id="busca" name="busca">
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
                border-radius: 5px;
                align-items: center;
                background-color: gray;
            }

            .l2c2 {
                display: flex;
                align-items: center;
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

            .busca {
                margin-left: 65px;
                margin-right: 25px;
            }
        </style>
    </div>
</body>

</html>