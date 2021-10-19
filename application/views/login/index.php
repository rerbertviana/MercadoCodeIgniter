<html>

<head>
    <link rel='stylesheet' href="<?= base_url("assets/css/bootstrap.css") ?>" />
    <link rel='stylesheet' href="<?= base_url("assets/js/bootstrap.js") ?>" />
    <script src="https://kit.fontawesome.com/66ed8a69a7.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body>
    <div class="center">
        <div class="login">
            <div class="row pereira">
                <div class="col-12 logo">
                    <img src=<?= base_url("assets/images/pereira.png") ?> class="img-fluid">
                </div>
            </div>
            <form action="login/autenticar" method="post">
                <div class="row mb-3">
                    <div class="col-12"> <span class="entrar">LOGIN</span></div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 botao ">
                        <button type="submit" class="btn btn-primary">ENTRAR</button>
                    </div>
                </div>
                <?php if ($this->session->flashdata("danger")) : ?>
                    <p><?= $this->session->flashdata("danger") ?></p>
                <?php endif ?>
            </form>
        </div>
    </div>
    <style>
        .login {
            display: flex;
            flex-direction: column;
            margin: 15px;
            padding: 40px;
            border-radius: 10px;
            height: 620px;
            width: 400px;
            background-color: white;
            box-shadow: 2px 2px 5px 2px rgba(0, 0, 0, 0.2);
        }

        .center {
            display: flex;
            height: 100%;
            justify-content: center;
            background-color: gray;
        }

        .logo {
            width: 280px;
            height: 90px;
        }

        .pereira {
            margin-top: 120px;
            margin-bottom: 70px;
            display: flex;
            justify-content: center;
            opacity: none;
        }

        .email {
            background-color: blue;
            border-radius: 3px;
        }

        .entrar {
            margin-left: 2px;
            color: red;
        }

        .botao {
            display: flex;
            justify-content: flex-end;
        }
    </style>
</body>

</html>