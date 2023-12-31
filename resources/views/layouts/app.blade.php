<!DOCTYPE html>
<html>
  <head>
    <title>
      Admin Wed Phim HNP
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{csrf_token() }}"/>
    <meta name="keywords" content="Admin Wed Phim HNP"/>
    <script type="application/x-javascript">
      addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar() { window.scrollTo(0, 1); }
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('BE/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
    {{-- sort_table --}}
    <link rel="stylesheet" href="{{asset('BE/css/login.css')}}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <!-- Custom CSS -->
    <link href="{{asset('BE/css/style.css')}}" rel="stylesheet" type="text/css" />
    <!-- font-awesome icons CSS -->
    <link href="{{asset('BE/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- //font-awesome icons CSS-->
    <!-- side nav css file -->
    <link href="{{asset('BE/css/SidebarNav.min.css')}}" media="all" rel="stylesheet" type="text/css"/>
    <!-- //side nav css file -->
    <!-- js-->
    <script src="{{asset('BE/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('BE/js/modernizr.custom.js')}}"></script>
    <!--webfonts-->
    <link
      href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext"
      rel="stylesheet"
    />
    <!--//webfonts-->
    <!-- chart -->
    <script src="{{asset('BE/js/Chart.js')}}"></script>
    <!-- //chart -->
    <!-- Metis Menu -->
    <script src="{{asset('BE/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('BE/js/custom.js')}}"></script>
    <link href="{{asset('BE/css/custom.css')}}" rel="stylesheet" />
    <!--//Metis Menu -->
    <style>#chartdiv {width: 100%;height: 295px;}</style>
    <!--pie-chart -->
    <!-- index page sales reviews visitors pie chart -->
    <script src="{{asset('BE/js/pie-chart.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $('#demo-pie-1').pieChart({
          barColor: '#2dde98',
          trackColor: '#eee',
          lineCap: 'round',
          lineWidth: 8,
          onStep: function (from, to, percent) {
            $(this.element)
              .find('.pie-value')
              .text(Math.round(percent) + '%');
          },
        });

        $('#demo-pie-2').pieChart({
          barColor: '#8e43e7',
          trackColor: '#eee',
          lineCap: 'butt',
          lineWidth: 8,
          onStep: function (from, to, percent) {
            $(this.element)
              .find('.pie-value')
              .text(Math.round(percent) + '%');
          },
        });

        $('#demo-pie-3').pieChart({
          barColor: '#ffc168',
          trackColor: '#eee',
          lineCap: 'square',
          lineWidth: 8,
          onStep: function (from, to, percent) {
            $(this.element)
              .find('.pie-value')
              .text(Math.round(percent) + '%');
          },
        });
      });
    </script>
    <!-- //pie-chart -->
    <!-- index page sales reviews visitors pie chart -->
    <!-- requried-jsfiles-for owl -->
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" />
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script>
      $(document).ready(function () {
        $('#owl-demo').owlCarousel({
          items: 3,
          lazyLoad: true,
          autoPlay: true,
          pagination: true,
          nav: true,
        });
      });
    </script>
    <!-- //requried-jsfiles-for owl -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
  </head>

  <body class="cbp-spmenu-push">
    @if(Auth::check())
    <div class="main-content">
      <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        <!--left-fixed -navigation-->
        <aside class="sidebar-left">
          <nav class="navbar navbar-inverse">
            <div class="navbar-header">
              <button type="button"class="navbar-toggle collapsed"data-toggle="collapse"data-target=".collapse"aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <h1>
                <a class="navbar-brand" href="{{url('/home')}}"><span class="fa fa-area-chart">Glance</span>
                    <span class="dashboard_text">Design dashboard</span>
                </a>
              </h1>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="sidebar-menu">
                <li class="header">Quản Lý Thành Phần WebPhim</li>
                <li class="treeview">
                  <a >
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                  </a>
                </li>
                @php
                    $segment = Request::segment(1);
                @endphp

                <li class="treeview {{($segment=='danhmuc')?'active':''}}">
                  <a href="">
                    <i class="fa fa-book"></i>
                    <span>Danh Mục</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="{{route('danhmuc.index')}}"><i class="fa fa-angle-right"></i> Danh Sách Danh Mục</a>
                    </li>
                    <li>
                      <a href="{{route('danhmuc.create')}}"><i class="fa fa-angle-right"></i> Thêm Danh Mục Mới </a>
                    </li>
                  </ul>

                </li>
                <li class="treeview {{($segment=='theloai')?'active':''}}">
                  <a href="">
                    <i class="fa fa-laptop"></i>
                    <span>Thể Loại Phim</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="{{route('theloai.index')}}"><i class="fa fa-angle-right"></i> Danh Sách Thể Loại</a>
                    </li>
                    <li>
                      <a href="{{route('theloai.create')}}"><i class="fa fa-angle-right"></i> Thêm Thể Loại Mới </a>
                    </li>
                  </ul>
                </li>
                <li class="treeview {{($segment=='quocgia')?'active':''}}">
                  <a href="">
                    <i class="fa fa-globe"></i>
                    <span>Quốc Gia</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="{{route('quocgia.index')}}"><i class="fa fa-angle-right"></i> Danh Sách Quốc Gia</a>
                    </li>
                    <li>
                      <a href="{{route('quocgia.create')}}"><i class="fa fa-angle-right"></i> Thêm Quốc Gia Mới </a>
                    </li>
                  </ul>
                </li>
                <li class="treeview {{($segment=='phim')?'active':''}}">
                  <a href="">
                    <i class="fa fa-film"></i>
                    <span>Phim</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="{{route('phim.index')}}"><i class="fa fa-angle-right"></i> Danh Sách Phim</a>
                    </li>
                    <li>
                      <a href="{{route('phim.create')}}"><i class="fa fa-angle-right"></i> Thêm Phim Mới</a>
                    </li>
                    <li>
                      <a href="{{route('sort-phim')}}"><i class="fa fa-angle-right"></i> Sắp Xếp Phim</a>
                    </li>
                  </ul>

                </li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
          </nav>
        </aside>
      </div>
      <!--left-fixed -navigation-->
      <!-- header-starts -->
      <div class="sticky-header header-section">
        <div class="header-left">
          <button id="showLeftPush"><i class="fa fa-bars"></i></button>
          <div class="clearfix"></div>
        </div>
        <div class="header-right">
          <!--search-box-->
          <div class="search-box">
            <form class="input">
              <input
                class="sb-search-input input__field--madoka"
                placeholder="Search..."
                type="search"
                id="input-31"
              />
              <label class="input__label" for="input-31">
                <svg
                  class="graphic"
                  width="100%"
                  height="100%"
                  viewBox="0 0 404 77"
                  preserveAspectRatio="none"
                >
                  <path d="m0,0l404,0l0,77l-404,0l0,-77z" />
                </svg>
              </label>
            </form>
          </div>
          <!--//end-search-box-->
          <div class="profile_details">
            <ul>
              <li class="dropdown profile_details_drop">
                <a
                  href="#"
                  class="dropdown-toggle"
                  data-toggle="dropdown"
                  aria-expanded="false"
                >
                  <div class="profile_img">
                    <span class="prfil-img"
                      ><img src="images/2.jpg" alt="" />
                    </span>
                    <div class="user-name">
                      <p>Admin Name</p>
                      <span>Administrator</span>
                    </div>
                    <i class="fa fa-angle-down lnr"></i>
                    <i class="fa fa-angle-up lnr"></i>
                    <div class="clearfix"></div>
                  </div>
                </a>
                <ul class="dropdown-menu drp-mnu">
                  <li>
                    <a href="#"><i class="fa fa-cog"></i> Settings</a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-user"></i> My Account</a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-suitcase"></i> Profile</a>
                  </li>
                  <li>
                    {{-- <a href="#"><i class="fa fa-sign-out"></i> Logout</a> --}}
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <i class="fa fa-sign-out"><input type="submit" class="btn btn-danger btn-sm" value="logout" /></i>

                    </form>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
      </div>
      <!-- //header-ends -->
      <!-- main content start-->
      <div id="page-wrapper">
        <div class="main-page">
          <div class="col_3">
            <div class="col-md-3 widget widget1">
              <div class="r3_counter_box">
                <i class="pull-left fa fa-book icon-rounded"></i>
                <div class="stats">
                  <h5><strong>{{$all_danhmuc}}</strong></h5>
                  <span>Danh Mục</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 widget widget1">
              <div class="r3_counter_box">
                <i class="pull-left fa fa-laptop user1 icon-rounded"></i>
                <div class="stats">
                  <h5><strong>{{$all_theloai}}</strong></h5>
                  <span>Thể Loại</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 widget widget1">
              <div class="r3_counter_box">
                <i class="pull-left fa fa-globe user2 icon-rounded"></i>
                <div class="stats">
                  <h5><strong>{{$all_quocgia}}</strong></h5>
                  <span>Quốc Gia</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 widget widget1">
              <div class="r3_counter_box">
                <i class="pull-left fa fa-film dollar1 icon-rounded"></i>
                <div class="stats">
                  <h5><strong>{{$all_phim}}</strong></h5>
                  <span>Phim</span>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
          </div>
          <div class="row-one widgettable">

          </div>
          <!-- for amcharts js -->
          <script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
          <script src="{{asset('BE/js/amcharts.js')}}"></script>
          <script src="{{asset('BE/js/serial.js')}}"></script>
          <script src="{{asset('BE/js/export.min.js')}}"></script>
          <link rel="stylesheet" href="{{asset('BE/css/export.css')}}" type="text/css" media="all"/>
          <script src="{{asset('BE/js/light.js')}}"></script>
          <!-- for amcharts js -->
          <script src="{{asset('BE/js/index1.js')}}"></script>

          <div class="col-md-12">
            @yield('content')
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <!--footer-->
      <div class="footer">
        <p></p>
      </div>
      <!--//footer-->
    </div>
    @else
    @yield('content_login')
    @endif
    <!-- new added graphs chart js-->
    <script src="{{asset('BE/js/Chart.bundle.js')}}"></script>
    <script src="{{asset('BE/js/utils.js')}}"></script>
    {{-- <script>
      var MONTHS = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December',
      ];
      var color = Chart.helpers.color;
      var barChartData = {
        labels: [
          'January',
          'February',
          'March',
          'April',
          'May',
          'June',
          'July',
        ],
        datasets: [
          {
            label: 'Dataset 1',
            backgroundColor: color(window.chartColors.red)
              .alpha(0.5)
              .rgbString(),
            borderColor: window.chartColors.red,
            borderWidth: 1,
            data: [
              randomScalingFactor(),
              randomScalingFactor(),
              randomScalingFactor(),
              randomScalingFactor(),
              randomScalingFactor(),
              randomScalingFactor(),
              randomScalingFactor(),
            ],
          },
          {
            label: 'Dataset 2',
            backgroundColor: color(window.chartColors.blue)
              .alpha(0.5)
              .rgbString(),
            borderColor: window.chartColors.blue,
            borderWidth: 1,
            data: [
              randomScalingFactor(),
              randomScalingFactor(),
              randomScalingFactor(),
              randomScalingFactor(),
              randomScalingFactor(),
              randomScalingFactor(),
              randomScalingFactor(),
            ],
          },
        ],
      };

      window.onload = function () {
        var ctx = document.getElementById('canvas').getContext('2d');
        window.myBar = new Chart(ctx, {
          type: 'bar',
          data: barChartData,
          options: {
            responsive: true,
            legend: {
              position: 'top',
            },
            title: {
              display: true,
              text: 'Chart.js Bar Chart',
            },
          },
        });
      };

      document
        .getElementById('randomizeData')
        .addEventListener('click', function () {
          var zero = Math.random() < 0.2 ? true : false;
          barChartData.datasets.forEach(function (dataset) {
            dataset.data = dataset.data.map(function () {
              return zero ? 0.0 : randomScalingFactor();
            });
          });
          window.myBar.update();
        });

      var colorNames = Object.keys(window.chartColors);
      document
        .getElementById('addDataset')
        .addEventListener('click', function () {
          var colorName =
            colorNames[barChartData.datasets.length % colorNames.length];
          var dsColor = window.chartColors[colorName];
          var newDataset = {
            label: 'Dataset ' + barChartData.datasets.length,
            backgroundColor: color(dsColor).alpha(0.5).rgbString(),
            borderColor: dsColor,
            borderWidth: 1,
            data: [],
          };

          for (var index = 0; index < barChartData.labels.length; ++index) {
            newDataset.data.push(randomScalingFactor());
          }

          barChartData.datasets.push(newDataset);
          window.myBar.update();
        });

      document.getElementById('addData').addEventListener('click', function () {
        if (barChartData.datasets.length > 0) {
          var month = MONTHS[barChartData.labels.length % MONTHS.length];
          barChartData.labels.push(month);

          for (var index = 0; index < barChartData.datasets.length; ++index) {
            //window.myBar.addData(randomScalingFactor(), index);
            barChartData.datasets[index].data.push(randomScalingFactor());
          }

          window.myBar.update();
        }
      });

      document
        .getElementById('removeDataset')
        .addEventListener('click', function () {
          barChartData.datasets.splice(0, 1);
          window.myBar.update();
        });

      document
        .getElementById('removeData')
        .addEventListener('click', function () {
          barChartData.labels.splice(-1, 1); // remove the label first

          barChartData.datasets.forEach(function (dataset, datasetIndex) {
            dataset.data.pop();
          });

          window.myBar.update();
        });
    </script> --}}
    <!-- new added graphs chart js-->
    <!-- Classie -->
    <!-- for toggle left push menu script -->
    <script src="{{asset('BE/js/classie.js')}}"></script>
    <script>
      var menuLeft = document.getElementById('cbp-spmenu-s1'),
        showLeftPush = document.getElementById('showLeftPush'),
        body = document.body;

      showLeftPush.onclick = function () {
        classie.toggle(this, 'active');
        classie.toggle(body, 'cbp-spmenu-push-toright');
        classie.toggle(menuLeft, 'cbp-spmenu-open');
        disableOther('showLeftPush');
      };

      function disableOther(button) {
        if (button !== 'showLeftPush') {
          classie.toggle(showLeftPush, 'disabled');
        }
      }
    </script>
    <!-- //Classie -->
    <!-- //for toggle left push menu script -->
    <!--scrolling js-->
    <script src="{{asset('BE/js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('BE/js/scripts.js')}}"></script>
    <!--//scrolling js-->

    <!-- side nav js -->
    <script src="{{asset('BE/js/SidebarNav.min.js')}}" type="text/javascript"></script>
    <script>
      $('.sidebar-menu').SidebarNav();
    </script>
    <!-- //side nav js -->
    <!-- for index page weekly sales java script -->
    <script src="{{asset('BE/js/SimpleChart.js')}}"></script>
    <script>
      var graphdata1 = {
        linecolor: '#CCA300',
        title: 'Monday',
        values: [
          { X: '6:00', Y: 10.0 },
          { X: '7:00', Y: 20.0 },
          { X: '8:00', Y: 40.0 },
          { X: '9:00', Y: 34.0 },
          { X: '10:00', Y: 40.25 },
          { X: '11:00', Y: 28.56 },
          { X: '12:00', Y: 18.57 },
          { X: '13:00', Y: 34.0 },
          { X: '14:00', Y: 40.89 },
          { X: '15:00', Y: 12.57 },
          { X: '16:00', Y: 28.24 },
          { X: '17:00', Y: 18.0 },
          { X: '18:00', Y: 34.24 },
          { X: '19:00', Y: 40.58 },
          { X: '20:00', Y: 12.54 },
          { X: '21:00', Y: 28.0 },
          { X: '22:00', Y: 18.0 },
          { X: '23:00', Y: 34.89 },
          { X: '0:00', Y: 40.26 },
          { X: '1:00', Y: 28.89 },
          { X: '2:00', Y: 18.87 },
          { X: '3:00', Y: 34.0 },
          { X: '4:00', Y: 40.0 },
        ],
      };
      var graphdata2 = {
        linecolor: '#00CC66',
        title: 'Tuesday',
        values: [
          { X: '6:00', Y: 100.0 },
          { X: '7:00', Y: 120.0 },
          { X: '8:00', Y: 140.0 },
          { X: '9:00', Y: 134.0 },
          { X: '10:00', Y: 140.25 },
          { X: '11:00', Y: 128.56 },
          { X: '12:00', Y: 118.57 },
          { X: '13:00', Y: 134.0 },
          { X: '14:00', Y: 140.89 },
          { X: '15:00', Y: 112.57 },
          { X: '16:00', Y: 128.24 },
          { X: '17:00', Y: 118.0 },
          { X: '18:00', Y: 134.24 },
          { X: '19:00', Y: 140.58 },
          { X: '20:00', Y: 112.54 },
          { X: '21:00', Y: 128.0 },
          { X: '22:00', Y: 118.0 },
          { X: '23:00', Y: 134.89 },
          { X: '0:00', Y: 140.26 },
          { X: '1:00', Y: 128.89 },
          { X: '2:00', Y: 118.87 },
          { X: '3:00', Y: 134.0 },
          { X: '4:00', Y: 180.0 },
        ],
      };
      var graphdata3 = {
        linecolor: '#FF99CC',
        title: 'Wednesday',
        values: [
          { X: '6:00', Y: 230.0 },
          { X: '7:00', Y: 210.0 },
          { X: '8:00', Y: 214.0 },
          { X: '9:00', Y: 234.0 },
          { X: '10:00', Y: 247.25 },
          { X: '11:00', Y: 218.56 },
          { X: '12:00', Y: 268.57 },
          { X: '13:00', Y: 274.0 },
          { X: '14:00', Y: 280.89 },
          { X: '15:00', Y: 242.57 },
          { X: '16:00', Y: 298.24 },
          { X: '17:00', Y: 208.0 },
          { X: '18:00', Y: 214.24 },
          { X: '19:00', Y: 214.58 },
          { X: '20:00', Y: 211.54 },
          { X: '21:00', Y: 248.0 },
          { X: '22:00', Y: 258.0 },
          { X: '23:00', Y: 234.89 },
          { X: '0:00', Y: 210.26 },
          { X: '1:00', Y: 248.89 },
          { X: '2:00', Y: 238.87 },
          { X: '3:00', Y: 264.0 },
          { X: '4:00', Y: 270.0 },
        ],
      };
      var graphdata4 = {
        linecolor: 'Random',
        title: 'Thursday',
        values: [
          { X: '6:00', Y: 300.0 },
          { X: '7:00', Y: 410.98 },
          { X: '8:00', Y: 310.0 },
          { X: '9:00', Y: 314.0 },
          { X: '10:00', Y: 310.25 },
          { X: '11:00', Y: 318.56 },
          { X: '12:00', Y: 318.57 },
          { X: '13:00', Y: 314.0 },
          { X: '14:00', Y: 310.89 },
          { X: '15:00', Y: 512.57 },
          { X: '16:00', Y: 318.24 },
          { X: '17:00', Y: 318.0 },
          { X: '18:00', Y: 314.24 },
          { X: '19:00', Y: 310.58 },
          { X: '20:00', Y: 312.54 },
          { X: '21:00', Y: 318.0 },
          { X: '22:00', Y: 318.0 },
          { X: '23:00', Y: 314.89 },
          { X: '0:00', Y: 310.26 },
          { X: '1:00', Y: 318.89 },
          { X: '2:00', Y: 518.87 },
          { X: '3:00', Y: 314.0 },
          { X: '4:00', Y: 310.0 },
        ],
      };
      var Piedata = {
        linecolor: 'Random',
        title: 'Profit',
        values: [
          { X: 'Monday', Y: 50.0 },
          { X: 'Tuesday', Y: 110.98 },
          { X: 'Wednesday', Y: 70.0 },
          { X: 'Thursday', Y: 204.0 },
          { X: 'Friday', Y: 80.25 },
          { X: 'Saturday', Y: 38.56 },
          { X: 'Sunday', Y: 98.57 },
        ],
      };
      $(function () {
        $('#Bargraph').SimpleChart({
          ChartType: 'Bar',
          toolwidth: '50',
          toolheight: '25',
          axiscolor: '#E6E6E6',
          textcolor: '#6E6E6E',
          showlegends: true,
          data: [graphdata4, graphdata3, graphdata2, graphdata1],
          legendsize: '140',
          legendposition: 'bottom',
          xaxislabel: 'Hours',
          title: 'Weekly Profit',
          yaxislabel: 'Profit in $',
        });
        $('#sltchartype').on('change', function () {
          $('#Bargraph').SimpleChart('ChartType', $(this).val());
          $('#Bargraph').SimpleChart('reload', 'true');
        });
        $('#Hybridgraph').SimpleChart({
          ChartType: 'Hybrid',
          toolwidth: '50',
          toolheight: '25',
          axiscolor: '#E6E6E6',
          textcolor: '#6E6E6E',
          showlegends: true,
          data: [graphdata4],
          legendsize: '140',
          legendposition: 'bottom',
          xaxislabel: 'Hours',
          title: 'Weekly Profit',
          yaxislabel: 'Profit in $',
        });
        $('#Linegraph').SimpleChart({
          ChartType: 'Line',
          toolwidth: '50',
          toolheight: '25',
          axiscolor: '#E6E6E6',
          textcolor: '#6E6E6E',
          showlegends: false,
          data: [graphdata4, graphdata3, graphdata2, graphdata1],
          legendsize: '140',
          legendposition: 'bottom',
          xaxislabel: 'Hours',
          title: 'Weekly Profit',
          yaxislabel: 'Profit in $',
        });
        $('#Areagraph').SimpleChart({
          ChartType: 'Area',
          toolwidth: '50',
          toolheight: '25',
          axiscolor: '#E6E6E6',
          textcolor: '#6E6E6E',
          showlegends: true,
          data: [graphdata4, graphdata3, graphdata2, graphdata1],
          legendsize: '140',
          legendposition: 'bottom',
          xaxislabel: 'Hours',
          title: 'Weekly Profit',
          yaxislabel: 'Profit in $',
        });
        $('#Scatterredgraph').SimpleChart({
          ChartType: 'Scattered',
          toolwidth: '50',
          toolheight: '25',
          axiscolor: '#E6E6E6',
          textcolor: '#6E6E6E',
          showlegends: true,
          data: [graphdata4, graphdata3, graphdata2, graphdata1],
          legendsize: '140',
          legendposition: 'bottom',
          xaxislabel: 'Hours',
          title: 'Weekly Profit',
          yaxislabel: 'Profit in $',
        });
        $('#Piegraph').SimpleChart({
          ChartType: 'Pie',
          toolwidth: '50',
          toolheight: '25',
          axiscolor: '#E6E6E6',
          textcolor: '#6E6E6E',
          showlegends: true,
          showpielables: true,
          data: [Piedata],
          legendsize: '250',
          legendposition: 'right',
          xaxislabel: 'Hours',
          title: 'Weekly Profit',
          yaxislabel: 'Profit in $',
        });

        $('#Stackedbargraph').SimpleChart({
          ChartType: 'Stacked',
          toolwidth: '50',
          toolheight: '25',
          axiscolor: '#E6E6E6',
          textcolor: '#6E6E6E',
          showlegends: true,
          data: [graphdata3, graphdata2, graphdata1],
          legendsize: '140',
          legendposition: 'bottom',
          xaxislabel: 'Hours',
          title: 'Weekly Profit',
          yaxislabel: 'Profit in $',
        });

        $('#StackedHybridbargraph').SimpleChart({
          ChartType: 'StackedHybrid',
          toolwidth: '50',
          toolheight: '25',
          axiscolor: '#E6E6E6',
          textcolor: '#6E6E6E',
          showlegends: true,
          data: [graphdata3, graphdata2, graphdata1],
          legendsize: '140',
          legendposition: 'bottom',
          xaxislabel: 'Hours',
          title: 'Weekly Profit',
          yaxislabel: 'Profit in $',
        });
      });
    </script>

    <!-- //for index page weekly sales java script -->
     <!-- sort table js -->
     <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#sortable-nav" ).sortable({
                update:function(event,ui){
                    var ar_id = [];
                    //lấy id
                    $('.menu-position li').each(function(){
                        ar_id.push($(this).attr('id'));
                    })
                    // ajax
                    $.ajax({
                        headers:{
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url:"{{route('nav-resorting')}}",
                        method:"POST",

                        data:{ar_id:ar_id},
                        success:function(data){
                            location.reload();
                        }
                    })
                }
            });
            $( "#sortable-nav" ).disableSelection();
        } );
    </script>

     <script>
        //sắp xếp Phim
        $( function() {
            $( ".phim-position" ).sortable({
                update:function(event,ui){
                    var phim_id = [];
                    //lấy id
                    $('.phim-position .box-phim').each(function(){
                        phim_id.push($(this).attr('id'));
                    })
                    // ajax
                    $.ajax({
                        headers:{
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url:"{{route('phim-resorting')}}",
                        method:"POST",

                        data:{phim_id:phim_id},
                        success:function(data){
                            alert('Thay đổi thành công');
                        }
                    })
                }

            });
            $( ".phim-position" ).disableSelection();
        } );
    </script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('BE/js/bootstrap.js')}}"></script>
    <!-- //Bootstrap Core JavaScript -->

    <script type="text/javascript">
        $(document).on('change','.file_image',function(){
           var movie_id = $(this).data('movie_id');
           var files  = $("#file-"+movie_id)[0].files;

           var image = document.getElementById("file-"+movie_id).files[0];
           var form_data = new FormData();

           form_data.append("file",document.getElementById("file-"+movie_id).files[0] );
           form_data.append("movie_id",movie_id);



           $.ajax({
                url:"{{route('update-new-image')}}",
                method:"POST",
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                data:form_data,

                contentType:false,
                cache:false,
                processData:false,

                success:function(data){
                    location.reload();//load lại trang
                }
            });



        });
    </script>


    <script type="text/javascript">
        $('.thay-resolution').change(function(){
            var resolution = $(this).val();
            var phim_id = $(this).attr('id');
             $.ajax({
                url:"{{route('thay-resolution')}}",
                method:"GET",
                data:{resolution:resolution,phim_id:phim_id},
                success:function(data){
                    alert('Thay đổi thành công');
                }
            });
        });
    </script>
    <script type="text/javascript">
        $('.thay-phim-le').change(function(){
            var le_bo = $(this).val();
            var phim_id = $(this).attr('id');
             $.ajax({
                url:"{{route('thay-phimle')}}",
                method:"GET",
                data:{le_bo:le_bo,phim_id:phim_id},
                success:function(data){
                    alert('Thay đổi thành công');
                }
            });
        });
    </script>
    <script type="text/javascript">
        $('.thay-doi-danhmuc').change(function(){
            var danhmuc_id = $(this).val();
            var phim_id = $(this).attr('id');
             $.ajax({
                url:"{{route('thay-danhmuc')}}",
                method:"GET",
                data:{danhmuc_id:danhmuc_id,phim_id:phim_id},
                success:function(data){
                    alert('Thay đổi thành công');
                }
            });
        });
    </script>
    <script type="text/javascript">
        $('.thay-doi-quocgia').change(function(){
            var quocgia_id = $(this).val();
            var phim_id = $(this).attr('id');
             $.ajax({
                url:"{{route('thay-quocgia')}}",
                method:"GET",
                data:{quocgia_id:quocgia_id,phim_id:phim_id},
                success:function(data){
                    alert('Thay đổi thành công');
                }
            });
        });
    </script>
    <script type="text/javascript">
        $('.thay-hot').change(function(){
            var hot = $(this).val();
            var phim_id = $(this).attr('id');
             $.ajax({
                url:"{{route('thay-hot')}}",
                method:"GET",
                data:{hot:hot,phim_id:phim_id},
                success:function(data){
                    alert('Thay đổi thành công');
                }
            });
        });
    </script>
    <script type="text/javascript">
        $('.thay-vietsub').change(function(){
            var vietsub = $(this).val();
            var phim_id = $(this).attr('id');
             $.ajax({
                url:"{{route('thay-vietsub')}}",
                method:"GET",
                data:{vietsub:vietsub,phim_id:phim_id},
                success:function(data){
                    alert('Thay đổi thành công');
                }
            });
        });
    </script>
    <script type="text/javascript">
        $('.thay-status').change(function(){
            var status = $(this).val();
            var phim_id = $(this).attr('id');
             $.ajax({
                url:"{{route('thay-status')}}",
                method:"GET",
                data:{status:status,phim_id:phim_id},
                success:function(data){
                    alert('Thay đổi thành công');
                }
            });
        });
    </script>

    <script type="text/javascript">
        $('.select-movie').change(function(){
            var id = $(this).val();
            $.ajax({
                url:"{{route('select-phim')}}",
                method:"GET",
                data:{id:id},
                success:function(data){
                    $('#tap').html(data);
                }
            });
        });
    </script>
    <script type="text/javascript">
        $('.select-year').change(function(){
            var year = $(this).find(':selected').val();
            var id_phim = $(this).attr('id');
            $.ajax({
                url:"{{url('/update-year-phim')}}",
                method:"GET",
                data:{year:year, id_phim:id_phim},
                success:function(){
                    alert('Thay đổi năm phim theo năm '+year+' thành công');
                }
            });
        });
    </script>

    <script type="text/javascript">
        $('.select-topview').change(function(){
            var topview = $(this).find(':selected').val();
            var id_phim = $(this).attr('id');
            if(topview==0){
                var text = 'Ngày';
            }else if(topview==1){
                var text = 'Tuần';
            }else{
                var text = 'Tháng';
            }
            $.ajax({
                url:"{{url('/update-topview-phim')}}",
                method:"GET",
                data:{topview:topview, id_phim:id_phim},
                success:function(){
                    alert('Thay đổi phim theo topview '+text+' thành công');
                }
            });
        });
    </script>


    {{-- datatable --}}

    <script type="text/javascript">
        let table = new DataTable('#Tablephim');
        function ChangeToSlug(){
                var slug;

                //Lấy text từ thẻ input title
                slug = document.getElementById("slug").value;
                slug = slug.toLowerCase();
                //Đổi ký tự có dấu thành không dấu
                    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                    slug = slug.replace(/đ/gi, 'd');
                    //Xóa các ký tự đặt biệt
                    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                    //Đổi khoảng trắng thành ký tự gạch ngang
                    slug = slug.replace(/ /gi, "-");
                    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                    slug = slug.replace(/\-\-\-\-\-/gi, '-');
                    slug = slug.replace(/\-\-\-\-/gi, '-');
                    slug = slug.replace(/\-\-\-/gi, '-');
                    slug = slug.replace(/\-\-/gi, '-');
                    //Xóa các ký tự gạch ngang ở đầu và cuối
                    slug = '@' + slug + '@';
                    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                    //In slug ra textbox có id “slug”
                document.getElementById('convert_slug').value = slug;
            }

    </script>

  </body>
</html>
