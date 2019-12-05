  <!DOCTYPE html>
  <html lang="pt-br">

  <?php 
    include_once "investimento.class.php";  
  ?>

  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      $imula | Resultado
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    <style>
      .descer {
        margin-top: 1rem !important;
      }
      .margem-cima {
        margin-top: 5rem !important;
      }
    </style>
  </head>

  <body>
    <div class="wrapper ">
      <div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
        <div class="logo">
          <a href="./index.html" class="simple-text logo-normal">
            $imula
          </a>
        </div>
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="nav-item  ">
              <a class="nav-link" href="./index.html">
                <i class="material-icons">dashboard</i>
                <p>Página Inicial</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="./simulador.html">
                <i class="material-icons">attach_money</i>
                <p>Simulador</p>
              </a>
            </li>
            <li class="nav-item active ">
              <a class="nav-link" href="./resultado.php">
                <i class="material-icons">bar_chart</i>
                <p>Resultados</p>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <span class="sr-only">Toggle navigation</span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
            </button>
          </div>
        </nav>
        <!-- Fim da navbar -->

        <!-- Tabela -->

        <div class="col-md-12 margem-cima">
              
          <?php

            $verificar = isset($_POST['tipoResultado']) ? $_POST['tipoResultado'] : false;
            if ($verificar == 'simulacaoCompleta') {
              $investimento = new Investimento;
              $investimento->setValorInicial(isset($_POST['valorInicial'])?$_POST['valorInicial']:'');
              $investimento->setDepMensal(isset($_POST['aporte'])?$_POST['aporte']:'');
              isset($_POST['taxaJurosValor']) ? $investimento->setTaxa($_POST['taxaJurosValor']) : '';
              $investimento->setTaxaMouA(isset($_POST['taxaJurosOpcao'])?$_POST['taxaJurosOpcao']:'');
              $investimento->setPeriodo(isset($_POST['periodo'])?$_POST['periodo']:'');
              $investimento->setPeriodoMouA(isset($_POST['periodoOpcao'])?$_POST['periodoOpcao']:'');
              $investimento->CalcTaxa();
              isset($investimento->PeriodoMouA) ? CalcPeriodo() : '';
              $SaldoMesFinal = $investimento->CalcSaldosMesFinal($investimento->getValorInicial(), $investimento->getDepMensal(), $investimento->getTaxa(), $investimento->getPeriodo());
              $JurosAcumulado = $investimento->setJurosAcumulado();
              $SaldosMesFinal = $investimento->CalcSaldosMesFinal($investimento->getValorInicial(), $investimento->getDepMensal(), $investimento->getTaxa(), $investimento->getPeriodo());
              $Juros = $investimento->setJuros();
              $aporte = $investimento->getDepMensal();
              $investimento->setAddValor($investimento->getDepMensal(), 5, $investimento->getValorInicial());
              $investimento->setSaldoFinalAcumulado(100, 3, $investimento->getValorInicial(), 0.1);
              $investimento->setTotalInvestido($investimento->getDepMensal(), 4, $investimento->getValorInicial());
              $investimento->CalcSaldoFinal($investimento->getValorInicial(),$investimento->getDepMensal(),$investimento->getTaxa(),4);
              $investimento->setJurosAcumulado(0.1,3,$investimento->getValorInicial());
              $rendimento = $investimento->setJurosRendimento();
              date_default_timezone_set('America/Sao_Paulo');
              $mes = date("m");
          ?>    

          <div class="card card-plain">
            <div class="card-header card-header-primary">
              <h4 class="card-title mt-0">Resultados da simulação</h4>
              <p class="card-category">Aqui está sua simulação de investimentos</p>
            </div>
            <div class="card-body">

            <br/><br/>

            <div class="row">
              <div class="col-sm">
                <div class="form-group">
                  <label for="disabledTextInput">Total Investido</label>
                  <input type="text" id="disabledTextInput" class="form-control" value="R$ <?php echo number_format($investimento->setTotalInvestido($investimento->getDepMensal(), 4, $investimento->getValorInicial()), 2, ',', '.'); ?> " disabled>
                </div>
              </div>
              <div class="col-sm">
                <div class="form-group">
                  <label for="disabledTextInput">Rendimento Total</label>
                  <input type="text" id="disabledTextInput" class="form-control" value="R$ <?php echo number_format($JurosAcumulado, 2, ',', '.')?>" disabled>
                </div>
              </div>
              <div class="col-sm">
                <div class="form-group">
                  <label for="disabledTextInput">Rendimento Mensal Final</label>
                  <input type="text" id="disabledTextInput" class="form-control" value="R$ <?php echo number_format($rendimento[(count($rendimento) - 1)],2 ,',', '.') ?>" disabled> 
                </div>
              </div>
              <div class="col-sm">
                <div class="form-group">
                  <label for="disabledTextInput">Montante</label>
                  <input type="text" id="disabledTextInput" class="form-control" value="R$ <?php echo number_format($SaldoMesFinal[(count($SaldoMesFinal) - 1)], 2 ,',', '.') ?>" disabled>
                </div>
              </div>
            </div>

              <br/><br/>

              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <th>Seq.</th>
                    <th>Mês/Ano</th>
                    <th>Valor Mês Anterior</th>
                    <th>Juros</th>
                    <th>Aporte</th>
                    <th>Total</th>
                  </thead>
                  <tbody>
                    
                    <?php 
                      for ($i = 0; $i < $investimento->getPeriodo(); $i++) { 
                    ?>
                    <tr>
                      <td>
                        <?php echo $i + 1;?>
                      </td>
                      <td>
                        <?php echo $mes + $i ?>/2019
                      </td>
                      <td>
                        R$ <?php echo number_format($SaldosMesFinal[$i], 2, ',', '.')?>
                      </td>
                      <td>
                        R$ <?php echo number_format($Juros[$i], 2, ',', '.') ?>
                      </td>
                      <td>
                        R$ <?php echo number_format($aporte, 2, ',', '.') ?>
                      </td>
                      <td>
                        R$ <?php echo number_format($SaldoMesFinal[$i + 1], 2, ',', '.') ?>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>


          <?php 
            } elseif ($verificar == 'simulacaoPrevisao') {

              $investimento = new Investimento;
              $investimento->setValorInicial(isset($_POST['valorInicial'])?$_POST['valorInicial']:'');
              $investimento->setDepMensal(isset($_POST['aporte'])?$_POST['aporte']:'');
              isset($_POST['taxaJurosValor']) ? $investimento->setTaxa($_POST['taxaJurosValor']) : '';
              $investimento->setTaxaMouA(isset($_POST['taxaJurosOpcao'])?$_POST['taxaJurosOpcao']:'');
              $investimento->setPeriodo(isset($_POST['periodo'])?$_POST['periodo']:'');
              $investimento->setPeriodoMouA(isset($_POST['periodoOpcao'])?$_POST['periodoOpcao']:'');
              $investimento->CalcTaxa();
              $investimento->CalcPeriodo();
              $investimento->setValorDesejado(isset($_POST['previsao'])?$_POST['previsao']:'');

          ?>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-header-text card-header-primary">
                      <div class="card-text">
                        <h4 class="card-title">Previsão de Retorno</h4>
                      </div>
                    </div>
                    <div class="card-body">
                      <p>Para você possuir R$ <?php echo number_format($investimento->getValorDesejado(),2 ,',', '.'); ?>, necessitará investir por
                      <?php echo $investimento->setPrevisaoInvestimento(); ?>
                       meses
                      </p>
                    </div>
                </div>
            </div>

          <?php
            } else {
          ?>

          <div class="col-md-3">
            <div class="card">
                <div class="card-header card-header-text card-header-primary">
                  <div class="card-text">
                    <h4 class="card-title">ERROR!</h4>
                  </div>
                </div>
                <div class="card-body">
                    Você não realizou uma simulação.<br/>Para realizar uma simulação, clique no botão abaixo:<br/>
                    <a class="btn btn-primary btn-round" href="simulador.html">Simulador</a>
                </div>
            </div>
          </div>
              
          <?php
            }
          ?>

        </div>
      </div>
        <!-- Fim da tabela -->


      </div>
    </div>
    <div class="fixed-plugin">
      <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
          <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
          <li class="header-title">Personalizar barra lateral</li>
          <li class="adjustments-line">
            <a href="javascript:void(0)" class="switch-trigger active-color">
              <div class="badge-colors ml-auto mr-auto">
                <span class="badge filter badge-purple" data-color="purple"></span>
                <span class="badge filter badge-azure" data-color="azure"></span>
                <span class="badge filter badge-green" data-color="green"></span>
                <span class="badge filter badge-warning" data-color="orange"></span>
                <span class="badge filter badge-danger" data-color="danger"></span>
                <span class="badge filter badge-rose active" data-color="rose"></span>
              </div>
              <div class="clearfix"></div>
            </a>
          </li>
          <li class="header-title">Imagens de fundo</li>
          <li class="active">
            <a class="img-holder switch-trigger" href="javascript:void(0)">
              <img src="assets/img/sidebar-1.jpg" alt="">
            </a>
          </li>
          <li>
            <a class="img-holder switch-trigger" href="javascript:void(0)">
              <img src="assets/img/sidebar-2.jpg" alt="">
            </a>
          </li>
          <li>
            <a class="img-holder switch-trigger" href="javascript:void(0)">
              <img src="assets/img/sidebar-3.jpg" alt="">
            </a>
          </li>
          <li>
            <a class="img-holder switch-trigger" href="javascript:void(0)">
              <img src="assets/img/sidebar-4.jpg" alt="">
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!--   Core JS   -->
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/js/plugins/moment.min.js"></script>
    <script src="assets/js/plugins/sweetalert2.js"></script>
    <script src="assets/js/plugins/jquery.validate.min.js"></script>
    <script src="assets/js/plugins/jquery.bootstrap-wizard.js"></script>
    <script src="assets/js/plugins/bootstrap-selectpicker.js"></script>
    <script src="assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/plugins/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
    <script src="assets/js/plugins/jasny-bootstrap.min.js"></script>
    <script src="assets/js/plugins/fullcalendar.min.js"></script>
    <script src="assets/js/plugins/jquery-jvectormap.js"></script>
    <script src="assets/js/plugins/nouislider.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <script src="assets/js/plugins/arrive.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <script src="assets/js/plugins/chartist.min.js"></script>
    <script src="assets/js/plugins/bootstrap-notify.js"></script>
    <script src="assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
    <script src="assets/demo/demo.js"></script>
    <script>
      $(document).ready(function() {
        $().ready(function() {
          $sidebar = $('.sidebar');

          $sidebar_img_container = $sidebar.find('.sidebar-background');

          $full_page = $('.full-page');

          $sidebar_responsive = $('body > .navbar-collapse');

          window_width = $(window).width();

          fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

          if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
            if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
              $('.fixed-plugin .dropdown').addClass('open');
            }

          }

          $('.fixed-plugin a').click(function(event) {
            if ($(this).hasClass('switch-trigger')) {
              if (event.stopPropagation) {
                event.stopPropagation();
              } else if (window.event) {
                window.event.cancelBubble = true;
              }
            }
          });

          $('.fixed-plugin .active-color span').click(function() {
            $full_page_background = $('.full-page-background');

            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('color');

            if ($sidebar.length != 0) {
              $sidebar.attr('data-color', new_color);
            }

            if ($full_page.length != 0) {
              $full_page.attr('filter-color', new_color);
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.attr('data-color', new_color);
            }
          });

          $('.fixed-plugin .background-color .badge').click(function() {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('background-color');

            if ($sidebar.length != 0) {
              $sidebar.attr('data-background-color', new_color);
            }
          });

          $('.fixed-plugin .img-holder').click(function() {
            $full_page_background = $('.full-page-background');

            $(this).parent('li').siblings().removeClass('active');
            $(this).parent('li').addClass('active');


            var new_image = $(this).find("img").attr('src');

            if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
              $sidebar_img_container.fadeOut('fast', function() {
                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                $sidebar_img_container.fadeIn('fast');
              });
            }

            if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
              var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

              $full_page_background.fadeOut('fast', function() {
                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                $full_page_background.fadeIn('fast');
              });
            }

            if ($('.switch-sidebar-image input:checked').length == 0) {
              var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
              var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
            }
          });

          $('.switch-sidebar-image input').change(function() {
            $full_page_background = $('.full-page-background');

            $input = $(this);

            if ($input.is(':checked')) {
              if ($sidebar_img_container.length != 0) {
                $sidebar_img_container.fadeIn('fast');
                $sidebar.attr('data-image', '#');
              }

              if ($full_page_background.length != 0) {
                $full_page_background.fadeIn('fast');
                $full_page.attr('data-image', '#');
              }

              background_image = true;
            } else {
              if ($sidebar_img_container.length != 0) {
                $sidebar.removeAttr('data-image');
                $sidebar_img_container.fadeOut('fast');
              }

              if ($full_page_background.length != 0) {
                $full_page.removeAttr('data-image', '#');
                $full_page_background.fadeOut('fast');
              }

              background_image = false;
            }
          });

          $('.switch-sidebar-mini input').change(function() {
            $body = $('body');

            $input = $(this);

            if (md.misc.sidebar_mini_active == true) {
              $('body').removeClass('sidebar-mini');
              md.misc.sidebar_mini_active = false;

              $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

            } else {

              $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

              setTimeout(function() {
                $('body').addClass('sidebar-mini');

                md.misc.sidebar_mini_active = true;
              }, 300);
            }
            var simulateWindowResize = setInterval(function() {
              window.dispatchEvent(new Event('resize'));
            }, 180);
            setTimeout(function() {
              clearInterval(simulateWindowResize);
            }, 1000);

          });
        });
      });
    </script>
  </body>

  </html>
