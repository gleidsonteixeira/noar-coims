<?php
  require '../class/scripts.class.php';
  require '../class/public.class.php';

  $public = new ClassePublic();

  $slides = $public->query('select', "SELECT * FROM cms_slider");
  $slides = $slides['registros'];

  $evento = $public->query('select', "SELECT descricao FROM cms_evento where id=1");
  $evento = $evento['registros'];

  $palestrantes = $public->query('select', "SELECT * FROM cms_palestrantes WHERE status=1");
  $palestrantes = $palestrantes['registros'];

  $comissao = $public->query('select', "SELECT * FROM cms_comissao WHERE status=1");
  $comissao = $comissao['registros'];

  $programacao = $public->query('select', "SELECT * FROM cms_programacao");
  $programacao = $programacao['registros'];

  $apoio = $public->query('select', "SELECT * FROM cms_apoio WHERE status=1");
  $apoio = $apoio['registros'];

?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="O l COIMS - CONGRESSO INTERNACIONAL MULTIDISCIPLINAR EM SAÚDE é um acontecimento realizado pela Status Produções e 
    Eventos Científicos com intuito de aproximar o conhecuimento de profissionais e acadêmicos da mais variadas áreas de atuação, vindos de todas as regiões do Brasil e de outros 
    países com vistas a discutir sobre a multidisciplinaridade nas inovações tecnológicas do diagnóticos à cura do câncer.">
    <meta name="author" content="AlertWeb Agência Digital">
    <meta name="keywords" content="AlertWeb, COIMS, câncer, evento, multidisciplinar, medicina, médicos, fortaleza, international, medic, brasil, brazil, cura, cura para o cancer, "/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link href="css/index.css" rel="stylesheet" type="text/css"/>
    <link href="css/materialize.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome-ie7.css" rel="stylesheet" type="text/css"/>
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet">

    <!-- <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/estilo.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> -->

    <title>COIMS - CONGRESSO INTERNACIONAL MULTIDISCIPLINAR EM SAÚDE</title>
    <script>
    $(function() {
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 90
            }, 1000);
            return false;
          }
        }
      });
    });
    </script>
  </head>

  <body>
    <section id="header">
        <div class="menu white suave z-depth-2">
            <a href="#!" class="button-collapse hide-on-large-only" data-activates="slide-out">
                <i class="mdi-navigation-menu grey-text"></i>
            </a>
            <div id="oculto" class="show-on-medium-and-down center-align logo">
                <a href="#header" class="upper suave active scrollto">
                    <img src="img/logoCoims.png" width="50" height="50">
                </a>
            </div>
            <ul class="hide-on-med-and-down center">
                <li>
                    <a href="#header" class="upper suave active scrollto">
                        <img src="img/logoCoims.png" class="circle" width="50" height="50">
                    </a>
                </li>
                <li>
                    <a href="#eventos" class="upper suave scrollto">
                        <b>Evento</b>
                    </a>
                </li>
                <li>
                    <a href="#programacao" class="upper suave scrollto">
                        <b>Programação</b>
                    </a>
                </li>
                <li>
                    <a href="#inscrevase" class="upper suave scrollto">
                        <b>Inscrições</b>
                    </a>
                </li>
                <li>
                    <a href="#palestrantes" class="upper suave scrollto">
                        <b>Palestrantes</b>
                    </a>
                </li>
                <li>
                    <a href="#organizadores" class="upper suave scrollto">
                        <b>Organizadores</b>
                    </a>
                </li>
                <li>
                    <a href="#trabalhos" class="upper suave scrollto">
                        <b>Trabalhos Científicos</b>
                    </a>
                </li>
                <li>
                    <a href="#apoio" class="upper suave scrollto">
                        <b>Patrocínio/Apoio</b>
                    </a>
                </li>
                <li>
                    <a href="#local" class="upper suave scrollto">
                        <b>Informações</b>
                    </a>
                </li>
            </ul>
        </div>
        <div class="menu-lateral">
            <ul id="slide-out" class="side-nav">
                <li>
                    <a href="#eventos" class="upper suave scrollto active">
                        <b>Evento</b>
                    </a>
                </li>
                <li>
                    <a href="#programacao" class="upper suave scrollto">
                        <b>Programação</b>
                    </a>
                </li>
                <li>
                    <a href="#inscrevase" class="upper suave scrollto">
                        <b>Inscrições</b>
                    </a>
                </li>
                <li>
                    <a href="#palestrantes" class="upper suave scrollto">
                        <b>Palestrantes</b>
                    </a>
                </li>
                <li>
                    <a href="#organizadores" class="upper suave scrollto">
                        <b>Organizadores</b>
                    </a>
                </li>
                <li>
                    <a href="#trabalhos" class="upper suave scrollto">
                        <b>Trabalhos Científicos</b>
                    </a>
                </li>
                <li>
                    <a href="#apoio" class="upper suave scrollto">
                        <b>Patrocínio/Apoio</b>
                    </a>
                </li>
                <li>
                    <a href="#local" class="upper suave scrollto">
                        <b>Informações</b>
                    </a>
                </li>
            </ul>
        </div>