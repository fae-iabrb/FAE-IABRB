<!DOCTYPE html>

<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
  <link rel="stylesheet/less" type="text/css" href="/wp-content/themes/FAE-IABRB/lib/less/styles.less"/>
  <link rel="stylesheet" href="/wp-content/themes/FAE-IABRB/lib/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


  <script src="/wp-content/themes/FAE-IABRB/lib/js/jquery.min.js"></script>
  <script src="/wp-content/themes/FAE-IABRB/lib/js/popper.min.js"></script>
  <script src="/wp-content/themes/FAE-IABRB/lib/js/bootstrap.min.js"></script>
  <script src="/wp-content/themes/FAE-IABRB/lib/js/less.min.js" ></script>



  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <title>FAE | IABRB</title> 
</head>

<body>

<header class="header">
  <div class="top-header">
    <div class="top-header-inside container">
      <div class="portalsMenu">
        <div class="menu" data-toggle="collapse" data-target="#portals">
          <img class="header-arrow" src="/wp-content/themes/FAE-IABRB/lib/images/icons/view-more-icon.svg" width="16px"height="16px"/>
          <span class="top-header-portals">Portais Web</span>
        </div>
        <div class="collapse" id="portals">
                <div><a href="#">Portal acadêmico</a></div>
                <div><a href="#">Portal acadêmico Mobile</a></div>
                <div><a href="#">Registro de Atendimento</a></div>
                <div><a href="#">Webmail</a></div>
                <div><a href="#">Portal de Inscrições</a></div>
                <div><a href="#">Consulta ao acervo biblioteca</a></div>
                <div><a href="#">Manuais</a></div>                      
        </div>
      </div>

      <span class="vertical-line"></span>
      <div class="top-header-social-medias">
        <a href="#"
          ><img
            class="top-header-facebook-img"
            src="/wp-content/themes/FAE-IABRB/lib/images/icons/fb-logo.svg"
            width="22px"
            height="22px"
        /></a>
        <a href="#"
          ><img
            class="top-header-instagram-img"
            src="/wp-content/themes/FAE-IABRB/lib/images/icons/insta-logo.svg"
            width="22px"
            height="22px"
        /></a>
      </div>
      <span class="vertical-line"></span>
      <img
        class="top-header-phone-img"
        src="/wp-content/themes/FAE-IABRB/lib/images/icons/phone.png"
        width="20px"
        height="20px"
      />
      <span class="top-header-phone">(54) 2107-7800</span>
    </div>
  </div>
  <div class="main-header">
    <div class="main-header-inside container">
      <div class="logo-barao">
        <img
          src="/wp-content/themes/FAE-IABRB/lib/images/logos/IABRB-logo.svg"
          alt="Instituto Anglicano Barão do Rio Branco"
        />
        <p>Instituto Anglicano Barão Do Rio Branco</p>
      </div>

      <div class="main-header-inside-middle">
        <div class="top-menus">
          <div class="top-menus-content">
          <?php
            
            $menuParameters = array(
              'theme_location' => 'main-menu',
              'container_class' => 'top-menus-content',
              'container'       => false,
              'echo'            => false,
              'items_wrap'      => '%3$s',
              'depth'           => 0,
            );
            
            echo strip_tags(wp_nav_menu( $menuParameters ), '<div>' );

          ?>
          </div>
        </div>
        <div class="middle-search">
          <input type="text" class="header-input-search" id="header-search"/>
          <button type="submit" class="header-input-search-button"><img src="/wp-content/themes/FAE-IABRB/lib/images/icons/search-icon.svg" width="15px" height="15px"/></button>
        </div>
        <nav class="bottom-menus">
          
            <div data-toggle="collapse" href="#submenu-1" >Ensino <i class="fas fa-angle-down"></i></div>             
            <div data-toggle="collapse" href="#submenu-2" >Eventos <i class="fas fa-angle-down"></i></div>
            <div data-toggle="collapse" href="#submenu-3" >Pesquisa e Extensão <i class="fas fa-angle-down"></i></div>
            <div data-toggle="collapse" href="#submenu-4" >Secretaria <i class="fas fa-angle-down"></i></i></div>
            <div data-toggle="collapse" href="#submenu-5" >Biblioteca <i class="fas fa-angle-down"></i></div>
          
        </nav>
      </div>
      <div class="logo-fae">
        <img
          src="/wp-content/themes/FAE-IABRB/lib/images/logos/FAE-logo.svg"
          alt="Faculdade Anglicana de Erechim"
        />
        <p>Faculdade Anglicana de Erechim</p>
      </div>
    </div>
  </div>
  <div class="submenu">
    <div class="container" id="bottom-menus">
      <div id="submenu-1" class="collapse" data-parent="#bottom-menus">
        <a href="#">Educação Básica</a>
        <a href="#">Educação Profissionalizante</a>
        <a href="#">Centro de Idiomas</a>
        <a href="#">Centro de Idiomas</a>
        <a href="#">Centro de Idiomas</a>
      </div>
      <div id="submenu-2" class="collapse" data-parent="#bottom-menus">
        <a href="#">Sub-1</a>
        <a href="#">Sub-2</a>
        <a href="#">Sub-3</a>
      </div>
      <div id="submenu-3" class="collapse" data-parent="#bottom-menus">
        <a href="#">Sub-1</a>
        <a href="#">Sub-2</a>
        <a href="#">Sub-3</a>
      </div>
      <div id="submenu-4" class="collapse" data-parent="#bottom-menus">
        <a href="#">Sub-1</a>
        <a href="#">Sub-2</a>
        <a href="#">Sub-3</a>
      </div>
      <div id="submenu-5" class="collapse" data-parent="#bottom-menus">
        <a href="#">Sub-1</a>
        <a href="#">Sub-2</a>
        <a href="#">Sub-3</a>
      </div>
    </div>
  </div>
</header>
