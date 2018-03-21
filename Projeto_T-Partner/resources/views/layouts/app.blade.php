
<!doctype html>

<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->

    <title>T-Partner</title>
  </head>
  <body>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <div class="container-fluid" id="top">
      <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav_top">
        <div class="btn-group" role="group" aria-label="...">
          <div class="btn-group" role="group" id="btns_top" >
            <button type="button" class="btn btn-default" id="btn_top" style="left:100%;" onclick="location.href='../notifications'"><img src="/css/foto/sino.png" class="icone" ></button>
            <button type="button" class="btn btn-default" id="btn_top" style="left:100%;" onclick="location.href='../messages'"><a href="/message"></a><img src="/css/foto/mensagem.png" class="icone"></button>
            <button type="button" class="btn btn-default dropdown-toggle" id="btn_top"  style="left:100%;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="/css/foto/perfil.png" class="icone" >
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" style="left:100%;">
              <li><a href="/profile">Perfil</a></li>
              <li><a href="/settings">Configurações</a></li>
              <li><a href="/about">Sobre o T-Partner</a></li>
              <li><a href="/login">Sair</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <nav aria-label="breadcrumb" id="nav_top2">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Painel</a></li>
          <li class="breadcrumb-item"><a href="../subjects">Disciplinas</a></li>
          <li class="breadcrumb-item active" aria-current="page">...</li>
        </ol>
      </nav>
     
    </div>
    

    <div class="container-fluid" id="left_side">

      <img alt="Logo T-Partner" src="/css/foto/logo0.png" id="logo1">
      <h1 id="logo2" style="color: white; text-align:center;">T-Partner</h1>
      
      <div class="btn-group-vertical" id = "bnts">
          <button  type="button "id="btn_side" class="btn btn-outline-light" onclick="location.href='../'">Painel</button>
          <div class="btn-group dropright" id="btn_side2">
          <button type="button" class="btn btn-outline-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Disciplinas</button>
            <div class="dropdown-menu" id="btn_side21">
              <a class="dropdown-item" href="/subjects">Programação 1</a>
              <a class="dropdown-item" href="/subjects">Introdução à Computação</a>
              <a class="dropdown-item" href="/subjects">Lógica de programação</a>
            </div>
          </div>
          <button  type="button "id="btn_side"  class="btn btn-outline-light" onclick="location.href='../'">...</button>
          <button  type="button "id="btn_side"  class="btn btn-outline-light" onclick="location.href='../'">...</button>
          <button  type="button "id="btn_side"  class="btn btn-outline-light" onclick="location.href='../'">...</button>
          <button  type="button "id="btn_side"  class="btn btn-outline-light" onclick="location.href='../help'">Ajuda</button>
          
      </div>

    </div>


    <div class="container-fluid" id="content">
      @yield('content')
    </div>

    <div class="container-fluid" id="footer">
      
    </div>
  </body>
</html>