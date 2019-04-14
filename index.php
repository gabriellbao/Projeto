<html>
    <head>
        <link rel="stylesheet" href="semantic.css" type="text/css">
        <link rel="stylesheet" href="css/estilo.css" type="text/css">
        <script type="text/javascript" src="semantic.js"></script>
        <title >Compraki</title>
        <style>
            #menuzinho a:hover{
                background-color: #ff6a00;
            }
            body{
               
                background-color: #f4511e;
            }
            h1{
                font-weight: 100;
                line-height: 1.1;
            }
        </style>
    </head>
    <body>

    <div class="ui secondary pointing fixed hidden menu" style="background-color: #f4511e; display: flex !important; ">
        <a class="item" href="index.php">
            <p style="font-size: 20px; color: white;">Compraki</p>
        </a>
        <div id="menuzinho" class="right menu" style="background-color: #f4511e; padding-right: 40px; ">
            <a class="active item">
                Home
            </a>
            <a class="item">
                Carrinho
            </a>
            <a class="item" href="login.php">
                Login
            </a>
        </div>
    </div>
    <br><br><br><br><br><br>
   <div style="background-color: #f4511e; color: white;">
        <h1 style="font-size: 73px;text-align: center; font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;">Compraki</h1>
        <h3 style="font-size: 25px; text-align: center; font-variant: small-caps;opacity: 0.7;    margin-bottom: 4%;">O mercado na sua casa!</h3>
       <div class="ui icon input" style="width: 95%; padding-left: 5%">
           <input type="text" placeholder="O que você procura?" style="border-radius: 15px;     padding-bottom: 9px; font-size: 119%;">
           <i class="inverted circular search link icon" style="top: 0.58em;"></i>
       </div>
       <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   </div>
    <div style="background-color: white; text-align: center;padding-bottom: 6%;"><br>
        <div class="ui text container" style="margin-top: 2%;">
         <h1 class="ui dividing header" style="font-size: 231%;">Menu</h1>

         <h3 class="first" style="opacity: 0.4;">Itens mais procurados</h3>
        </div>

        <div class="ui grid" style="padding-left: 7%; margin-top: 7%;">
            <div class="five wide column" data-tooltip="Higiene">
                <a href="produto.php"><i class="tint huge circular black icon "></i></a>
            </div>
            <div class="five wide column" style="" data-tooltip="Bebidas">
                <a href="produto.php"><i class="beer huge circular black icon"></i></a>
            </div>
            <div class="five wide column" data-tooltip="Comidas">
                <a href="produto.php"><i class="utensils huge circular black icon"></i></a>
            </div>
            
            <div class="five wide column" data-tooltip="Verdureira">
                <a href="produto.php"><i class="apple huge circular black icon"></i></a>
            </div>
            <div class="five wide column" data-tooltip="Açougue">
                <a href="produto.php"><i class="fire huge circular black icon"></i></a>
            </div>
            <div class="five wide column" data-tooltip="Frios">
                <a href="produto.php"><i class="snowflake huge circular black icon"></i></a>
            </div>
            
        </div>
    </div>
    <br><br>


<?php include"rodape.php"; ?>

    </body>
</html>