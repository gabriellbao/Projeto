<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="semantic.css" type="text/css">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <script type="text/javascript" src="semantic.js"></script>
    <style>

    </style>
</head>
<body>
<br><br>
<div class="ui middle aligned center aligned grid" style="padding-left: 30%; padding-right: 30%">
    <div class="column" style="margin-top: 16%;">
        <h2 class="ui orange image header">
            <i class="ui cart icon"></i>
            <div class="content">
                Acesse ou Cadastre sua Conta
            </div>
        </h2>
        <form class="ui large form">
            <div class="ui stacked segment">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="email" placeholder="Email ou Username">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password" placeholder="Senha">
                    </div>
                </div>
                <div class="ui fluid large orange submit button">Login</div>
            </div>

        </form>

        <div class="ui message">
            Ainda não está cadastrado? <a href="cadastro.php">Cadastre-se</a>
        </div>
    </div>
</div>

</body>
</html>