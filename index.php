<html>
<head>
	<title>CompreAki</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">CompreAki</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#sobre" class="hoversero">SOBRE NÓS</a></li>
        <li><a href="#menu1" class="hoversero">MENU</a></li>
        <li><a href="#pricing1" class="hoversero"><div onclick="document.getElementById('id01').style.display='block'" style="width:auto;">LOGIN</div></a></li>

      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center laranja">
  <h1>CompreAki</h1> 
  <p>O mercado na sua casa!</p> 
  <form method="post" action="resultado.php">
    <div class="input-group">
      <input type="search" name="buscaInicial" id="buscaInicial" class="form-control barrinha" size="30" placeholder="O que você procura?">
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger botao" id="pesquisabt">Pesquisar</button>
      </div>
    </div>
  </form>
</div>

<!-- Container (MENU) -->
<div id="menu" class="container-fluid text-center">
  <h2>Menu</h2>
  <h4>Itens mais procurados</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <a href="produto.php">
          <span class="glyphicon glyphicon-tint logo-small"></span><h4>HIGIENE</h4>
      </a>

    </div>
    <div class="col-sm-4">
        <a href="produto.php">
            <span class="glyphicon glyphicon-glass logo-small"></span><h4>BEBIDAS</h4>
        </a>
    </div>
    <div class="col-sm-4">
        <a href="produto.php">
            <span class="glyphicon glyphicon-cutlery logo-small"></span><h4>COMIDAS</h4>
        </a>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
        <a href="produto.php">
            <span class="glyphicon glyphicon-apple logo-small"></span><h4>VERDUREIRA</h4>
        </a>

    </div>
    <div class="col-sm-4">
        <a href="produto.php">
            <span class="glyphicon glyphicon-ice-lolly-tasted logo-small"></span><h4>FRIOS</h4>
        </a>
    </div>
    <div class="col-sm-4">
        <a href="produto.php">
            <span class="glyphicon glyphicon-fire logo-small"></span><h4 style="color:#303030;">AÇOUGUE</h4>
        </a>
    </div>
  </div>
</div>

<!--	LOGIN   -->
<div id="id01" class="modal">
  
  <form class="modal-content animate">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/user.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
  
      <input type="email" class="barraemail" placeholder="Email" name="email" required>
      <input type="password" class="barrasenha" placeholder="Senha" name="senha" required>

      <button type="submit">Enviar</button>
      <a href="cadastro.php" class="btn btn-info" role="button" id="cadastrolink">Cadastrar</a>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1 width:10%">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancelar</button>
      <span class="psw">Esqueceu a <a href="#">senha?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!-- fim do login -->

  <h2 id="Comentario">Comentários</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div id="sobre1" class="container-fluid">
<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>SOBRE NÓS</h2><br>
      <h4><strong>MISSÃO:</strong> Queremos trazer mais acessebilidade para vida de nossos clientes, tornando a tarefa de fazer compras mais fácil e mais rápida para todos.</h4><br>
      <p><strong>VISÃO:</strong> Acreditamos que muitas pessoas não tem disponibilidade de fazer as compras domésticas, seja por não ter tempo, motivos de saúde, etc. É por isso que a equipe do CompreAki trabalha para resolver esses seus problemas da forma mais eficiente e acessível.</p>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center" id="contato">CONTATO</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Fale conosco</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Joinville, SC</p>
      <p><span class="glyphicon glyphicon-phone"></span> +55 47999999999</p>
      <p><span class="glyphicon glyphicon-envelope"></span> compreaki@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Nome" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comentários" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" id="botaoContato" type="submit">Enviar</button>
        </div>
      </div>
    </div>
  </div>
</div>


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>

</html>