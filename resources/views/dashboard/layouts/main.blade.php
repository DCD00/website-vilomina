<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>User Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="/pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="Meet pages - The simplest and fastest way to build web UI for your dashboard or app." name="description" />
    <meta content="Ace" name="author" />
    <link href="/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/assets/plugins/mapplic/css/mapplic.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/rickshaw/rickshaw.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/assets/css/dashboard.widgets.css" rel="stylesheet" type="text/css" media="screen" />
    <link class="main-stylesheet" href="/pages/css/themes/modern.css" rel="stylesheet" type="text/css" />
    
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Trix Editor -->
     <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
     <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
<!--  
     <style>
      trix-toolbar [data-trix-button-group="file-tools"]{
        display:none;
      }
       -->
     </style>
  </head>
  <body class="fixed-header horizontal-menu horizontal-app-menu dashboard">
    @include('dashboard.layouts.header')

    <!-- START PAGE CONTENT -->
    <div class="page-container ">
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content sm-gutter">
          <!-- START CONTAINER FLUID -->
          <div class="container sm-padding-10 p-t-20 p-l-0 p-r-0">
            <!-- START ROW -->
            <div class="row">
              <div class="col-lg-12 col-sm-6 d-flex flex-column">
                <!-- START WIDGET widget_weekly_sales_card-->
                <div class="card no-border widget-loader-bar m-b-10">
                  <div class="container-xs-height full-height">    
                    <main class="px-md-4">
                      @yield('container')
                    </main>
                  </div>
                </div>
                <!-- END WIDGET --> 
              </div>         
            </div>
            <!-- END ROW -->
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        <div class=" container   container-fixed-lg footer">
          <div class="copyright sm-text-center">
            <!-- <p class="small-text no-margin pull-left sm-pull-reset">
              ©2023 Vilomina.
            </p> -->
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- END COPYRIGHT -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTENT -->

    <!-- BEGIN VENDOR JS -->
    <script src="/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <!--  A polyfill for browsers that don't support ligatures: remove liga.js if not needed-->
    <script src="/assets/plugins/liga.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/popper/umd/popper.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/select2/js/select2.full.min.js"></script>
    <script type="text/javascript" src="/assets/plugins/classie/classie.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp" type="text/javascript"></script>
    <script src="/assets/plugins/nvd3/lib/d3.v3.js" type="text/javascript"></script>
    <script src="/assets/plugins/nvd3/nv.d3.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/nvd3/src/utils.js" type="text/javascript"></script>
    <script src="/assets/plugins/nvd3/src/tooltip.js" type="text/javascript"></script>
    <script src="/assets/plugins/nvd3/src/interactiveLayer.js" type="text/javascript"></script>
    <script src="/assets/plugins/nvd3/src/models/axis.js" type="text/javascript"></script>
    <script src="/assets/plugins/nvd3/src/models/line.js" type="text/javascript"></script>
    <script src="/assets/plugins/nvd3/src/models/lineWithFocusChart.js" type="text/javascript"></script>
    <script src="/assets/plugins/mapplic/js/hammer.min.js"></script>
    <script src="/assets/plugins/mapplic/js/jquery.mousewheel.js"></script>
    <script src="/assets/plugins/mapplic/js/mapplic.js"></script>
    <script src="/assets/plugins/rickshaw/rickshaw.min.js"></script>
    <script src="/assets/plugins/jquery-metrojs/MetroJs.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/skycons/skycons.js" type="text/javascript"></script>
    <script src="/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="/assets/plugins/moment/moment.min.js"></script>
    <script src="/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="/assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript" src="/assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
    <script type="text/javascript" src="/assets/plugins/datatables-responsive/js/lodash.min.js"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="/pages/js/pages.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="/assets/js/dashboard.js" type="text/javascript"></script>
    <script src="/assets/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

  </body>
</html>
