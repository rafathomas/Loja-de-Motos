<link rel="stylesheet" href="assets/css/styless.css">
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
  <div class="sidebar">
    <div class="bg_shadow"></div>
    <div class="sidebar_inner">
      <div class="close">
        <i class="fas fa-times"></i>
      </div>



      <ul class="siderbar_menu">
        <li class="active"><a href="index.php">
            <div class="icon"><i class="fas fa-home"></i></div>
            <div class="title">Início</div>
          </a>
        </li>
        <li><a href="#">
            <div class="icon"><i class="fas fa-user"></i></div>
            <div class="title">Clientes</div>
            <div class="arrow"><i class="fas fa-chevron-down"></i></div>
          </a>
          <ul class="accordion">
            <li><a href="view/clientes.php" class="active">Buscar clientes</a></li>
            <li><a href="view/cadCliente.php">Adicionar clientes</a></li>
          </ul>
        </li>
           <li><a href="#">
            <div class="icon"><i class="fas fa-screwdriver"></i></div>
            <div class="title">Produtos</div>
            <div class="arrow"><i class="fas fa-chevron-down"></i></div>
          </a>
          <ul class="accordion">
            <li><a href="view/peca.php">Buscar produtos/Carrinho</a></li>
            <li><a href="view/cadPeca.php" class="active">Adicionar produtos</a></li>
          </ul>
        </li>
        <li class=""><a href="index.php">
            <div class="icon"><i class="fas fa-cog"></i></div>
            <div class="title">Reparos</div>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="main_container">
    <div class="navbar">
      <div class="hamburger">
        <i class="fas fa-bars"></i>
      </div>
     <div class="logo">
   <a href="index.php"><img src="assets/img/logo.png" alt="profile_img"></a>
      </div>
    </div>

  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  $(".siderbar_menu li").click(function(){
  $(".siderbar_menu li").removeClass("active");
  $(this).addClass("active");
});

$(".hamburger").click(function(){
  $(".wrapper").addClass("active");
});

$(".close, .bg_shadow").click(function(){
  $(".wrapper").removeClass("active");
});
</script>