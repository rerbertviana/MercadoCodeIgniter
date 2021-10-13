<html>
    <head>
        <link rel='stylesheet' href="<?= "../../assets/css/bootstrap.css"?>"/>
        <link rel='stylesheet' href="<?= "../../assets/js/bootstrap.js"?>"/>
        <title>Produtos</title>
    </head>
    <body>
        <div class="tab">
            <h1 class="titulo">PRODUTOS</h1>
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
                    <?php foreach ($produtos as $produto) :?>
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
        <div>
            <h1 class="tab">CADASTRAR PRODUTOS</h1>
            <form action="index.php/produtos/novo">
                <div class="row mb-3 tab">
                    <div class="col linha ">
                        <label for="nome" class="form-label espaco"> Nome </label>
                        <input type="text" class="form-control" id="nome" name="nome"> 
                    </div> 
                    <div class="col linha">
                        <label for="preco" class="form-label espaco"> Preço </label>
                        <input type="text" class="form-control" id="preco" name="preco"> 
                    </div> 
                    <div class="col linha">
                        <label for="quantidade" class="form-label espaco"> Quantidade </label>
                        <input type="text" class="form-control" id="quantidade" name="quantidade"> 
                    </div> 
                    <div class="col linha">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                
            </form>
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

            .espaco {
                margin-right: 10px;
            }
        </style>
    </body>
</html>