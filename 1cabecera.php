<?php
session_start();
if(!isset($_SESSION['user_log'])){
  echo '<meta http-equiv="refresh" content="1; url=./index.php">';

}
include_once './coneccion/dbconect.php';

?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Maxi Favaro - Smartsupplier, Leones, Argentina">
  <title>sys</title>
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link href="./css/sidebars.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
    button{
      font-size: smaller !important;
    }
  </style>    
</head>
<body>

<main class="d-flex flex-nowrap" style="float:left !important;">  
  <div class="sidebar-offcanvas h-80 overflow-auto vh-80 flex-shrink-0 p-3 bg-white" style="width: 170px;">
    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
    <img src="./img/smart2022.jpeg" alt="ss" width="140px">
    </a>
    <ul class="list-unstyled ps-0">
      <li class="mb-1">
        <button style="font-size: smaller;" class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
          Clientes
        </button>
        <div class="collapse show" id="home-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" style="margin: 0 !important; padding: 0 !important;">
            <?php
                $database = new Connection();
                $db = $database->open();
                try{	
                $sql = 'SELECT * from cliente where visible_sys = 1';                
                foreach ($db->query($sql) as $row) {?>
                  <form action="#" method="post" style="padding: 0; margin: 0;">
                    <li style="font-size: smaller;"><a href="#"  class="link-dark d-inline-flex text-decoration-none rounded" style="font-size: smaller;">
                    <input type="text" name="cliente" value="<?php echo $row['cliente']; ?>" hidden>
                    <input type="text" name="<?php echo $row['id']; ?>" value="<?php echo $row['id']; ?>" hidden>
                    <button type="submit" style="border: none !important;"><?php echo $row['cliente']; ?></button></a></li>
                  </form>    
            <?php
                }
                }  catch(PDOException $e){
                echo "Hubo un problema en la conexión: " . $e->getMessage();
                }
            ?>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
          Dashboard
        </button>
        <div class="collapse" id="dashboard-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Overview</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Weekly</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Monthly</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Annually</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
          Tools
        </button>
        <div class="collapse" id="orders-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Cliente</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Maquina</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Shipped</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Returned</a></li>
          </ul>
        </div>
      </li>
      <li class="border-top my-3"></li>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
          Account
        </button>
        <div class="collapse" id="account-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">New...</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Profile</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Settings</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Sign out</a></li>
          </ul>
        </div>
      </li>
    </ul>
    </div>

  <div class="b-example-divider b-example-vr" style="width: 1px;"></div>
  </main>
  <!-- Hasta Aqui Corta cabercera / Sigue el cuerpor de la app -->

  
