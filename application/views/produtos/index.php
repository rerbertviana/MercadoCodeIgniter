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
            <h1>CADASTRAR PRODUTOS</h1>
            <?php
            echo form_open(action:"");
                
                echo form_input(array (
                    "name" => "nome",
                    "" => 
                ));
                
            echo form_close();
            ?>
        </div>
        <style>
            .tab {
                margin: 15px;
            }

            .titulo {
                display: flex;
                justify-content: center;
            }
        </style>
    </body>
</html>