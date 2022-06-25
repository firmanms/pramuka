<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kwarcab Kab. Bandung</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('payun/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('payun/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('payun/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('payun/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('payun/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('payun/css/select.dataTables.min.css') }}">
  <link rel="stylesheet" href="{{ asset('payun/vendors/mdi/css/materialdesignicons.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('payun/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('payun/images/logo-mini.png') }}" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="{{ asset('payun/images/logo.png') }}" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('payun/images/logo-mini.png') }}" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <!-- <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{ asset('payun/images/faces/face28.jpg') }}" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul> -->
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <!-- <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div> -->
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="{{ asset('payun/images/faces/face1.jpg') }}" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="{{ asset('payun/images/faces/face2.jpg') }}" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="{{ asset('payun/images/faces/face3.jpg') }}" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="{{ asset('payun/images/faces/face4.jpg') }}" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="{{ asset('payun/images/faces/face5.jpg') }}" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="{{ asset('payun/images/faces/face6.jpg') }}" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/kwartir') }}">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Kwartir Ranting</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Form elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Charts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">Icons</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
              </ul>
            </div>
          </li>-->
          <!--<li class="nav-item">-->
          <!--  <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">-->
          <!--    <i class="icon-head menu-icon"></i>-->
          <!--    <span class="menu-title">Anggota</span>-->
          <!--    <i class="menu-arrow"></i>-->
          <!--  </a>-->
          <!--  <div class="collapse" id="auth">-->
          <!--    <ul class="nav flex-column sub-menu">-->
          <!--      @if (Route::has('login'))-->

          <!--          @auth-->
          <!--      <li class="nav-item"> <a class="nav-link" href="{{ url('/home') }}"> Home </a></li>-->
          <!--      @else-->
          <!--      <li class="nav-item"> <a class="nav-link" href="{{ route('login') }}"> Masuk </a></li>-->
          <!--      @if (Route::has('register'))-->
          <!--      <li class="nav-item"> <a class="nav-link" href="{{ route('register') }}"> Daftar </a></li>-->
          <!--      @endif-->
          <!--      @endauth-->
          <!--      @endif-->
          <!--    </ul>-->
          <!--  </div>-->
          <!--</li>-->
          <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="icon-ban menu-icon"></i>
              <span class="menu-title">Error pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Daftar Kwartir Ranting</p>
                  <!-- <p class="font-weight-500">Jumlah Anggota Tingkat Pramuka Terdaftar</p> -->
                  <div class="table-responsive">
                    <table class="table ">
                        <thead>
                          <tr>
                            <th rowspan="2" valign="top">KODE</th>
                            <th rowspan="2">RANTING</th>
                            <th colspan="6"><center>TINGKAT</center></th>
                          </tr>
                          <tr>
                            <th>SIAGA</th>
                            <th>PENGGALANG</th>
                            <th>PENEGAK</th>
                            <th>PANDEGA</th>
                            <th>PEMBINA</th>
                            <th>TOTAL</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>09.04.001</td>
                            <td>RANCABALI </td>
                            <td>{{ number_format($getsiaga1) }} </td>
                            <td>{{ number_format($getpenggalang1) }} </td>
                            <td>{{ number_format($getpenegak1) }} </td>
                            <td>{{ number_format($getpandega1) }} </td>
                            <td>{{ number_format($getpembina1) }} </td>
                            <td>{{ number_format($getsiaga1)+$getpenggalang1+$getpenegak1+$getpandega1+$getpembina1 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.002</td>
                            <td>CIWIDEY </td>
                            <td>{{ number_format($getsiaga2) }} </td>
                            <td>{{ number_format($getpenggalang2) }} </td>
                            <td>{{ number_format($getpenegak2) }} </td>
                            <td>{{ number_format($getpandega2) }} </td>
                            <td>{{ number_format($getpembina2) }} </td>
                            <td>{{ number_format($getsiaga2)+$getpenggalang2+$getpenegak2+$getpandega2+$getpembina2 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.003</td>
                            <td>PASIRJAMBU</td>
                            <td>{{ number_format($getsiaga3) }} </td>
                            <td>{{ number_format($getpenggalang3) }} </td>
                            <td>{{ number_format($getpenegak3) }} </td>
                            <td>{{ number_format($getpandega3) }} </td>
                            <td>{{ number_format($getpembina3) }} </td>
                            <td>{{ number_format($getsiaga3)+$getpenggalang3+$getpenegak3+$getpandega3+$getpembina3 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.004</td>
                            <td>SOREANG</td>
                            <td>{{ number_format($getsiaga4) }} </td>
                            <td>{{ number_format($getpenggalang4) }} </td>
                            <td>{{ number_format($getpenegak4) }} </td>
                            <td>{{ number_format($getpandega4) }} </td>
                            <td>{{ number_format($getpembina4) }} </td>
                            <td>{{ number_format($getsiaga4)+$getpenggalang4+$getpenegak4+$getpandega4+$getpembina4 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.005</td>
                            <td>CANGKUANG</td>
                            <td>{{ number_format($getsiaga5) }} </td>
                            <td>{{ number_format($getpenggalang5) }} </td>
                            <td>{{ number_format($getpenegak5) }} </td>
                            <td>{{ number_format($getpandega5) }} </td>
                            <td>{{ number_format($getpembina5) }} </td>
                            <td>{{ number_format($getsiaga5)+$getpenggalang5+$getpenegak5+$getpandega5+$getpembina5 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.006</td>
                            <td>PANGALENGAN</td>
                            <td>{{ number_format($getsiaga6) }} </td>
                            <td>{{ number_format($getpenggalang6) }} </td>
                            <td>{{ number_format($getpenegak6) }} </td>
                            <td>{{ number_format($getpandega6) }} </td>
                            <td>{{ number_format($getpembina6) }} </td>
                            <td>{{ number_format($getsiaga6)+$getpenggalang6+$getpenegak6+$getpandega6+$getpembina6 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.007</td>
                            <td>CIMAUNG</td>
                            <td>{{ number_format($getsiaga7) }} </td>
                            <td>{{ number_format($getpenggalang7) }} </td>
                            <td>{{ number_format($getpenegak7) }} </td>
                            <td>{{ number_format($getpandega7) }} </td>
                            <td>{{ number_format($getpembina7) }} </td>
                            <td>{{ number_format($getsiaga7)+$getpenggalang7+$getpenegak7+$getpandega7+$getpembina7 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.008</td>
                            <td>BANJARAN</td>
                            <td>{{ number_format($getsiaga8) }} </td>
                            <td>{{ number_format($getpenggalang8) }} </td>
                            <td>{{ number_format($getpenegak8) }} </td>
                            <td>{{ number_format($getpandega8) }} </td>
                            <td>{{ number_format($getpembina8) }} </td>
                            <td>{{ number_format($getsiaga8)+$getpenggalang8+$getpenegak8+$getpandega8+$getpembina8 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.009</td>
                            <td>ARJASARI</td>
                            <td>{{ number_format($getsiaga9) }} </td>
                            <td>{{ number_format($getpenggalang9) }} </td>
                            <td>{{ number_format($getpenegak9) }} </td>
                            <td>{{ number_format($getpandega9) }} </td>
                            <td>{{ number_format($getpembina9) }} </td>
                            <td>{{ number_format($getsiaga9)+$getpenggalang9+$getpenegak9+$getpandega9+$getpembina9 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.010</td>
                            <td>PAMEUNGPEUK</td>
                            <td>{{ number_format($getsiaga10) }} </td>
                            <td>{{ number_format($getpenggalang10) }} </td>
                            <td>{{ number_format($getpenegak10) }} </td>
                            <td>{{ number_format($getpandega10) }} </td>
                            <td>{{ number_format($getpembina10) }} </td>
                            <td>{{ number_format($getsiaga10)+$getpenggalang10+$getpenegak10+$getpandega10+$getpembina10 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.011</td>
                            <td>BALEENDAH</td>
                            <td>{{ number_format($getsiaga11) }} </td>
                            <td>{{ number_format($getpenggalang11) }} </td>
                            <td>{{ number_format($getpenegak11) }} </td>
                            <td>{{ number_format($getpandega11) }} </td>
                            <td>{{ number_format($getpembina11) }} </td>
                            <td>{{ number_format($getsiaga11)+$getpenggalang11+$getpenegak11+$getpandega11+$getpembina11 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.012</td>
                            <td>CIPARAY</td>
                            <td>{{ number_format($getsiaga12) }} </td>
                            <td>{{ number_format($getpenggalang12) }} </td>
                            <td>{{ number_format($getpenegak12) }} </td>
                            <td>{{ number_format($getpandega12) }} </td>
                            <td>{{ number_format($getpembina12) }} </td>
                            <td>{{ number_format($getsiaga12)+$getpenggalang12+$getpenegak12+$getpandega12+$getpembina12 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.013</td>
                            <td>PACET</td>
                            <td>{{ number_format($getsiaga13) }} </td>
                            <td>{{ number_format($getpenggalang13) }} </td>
                            <td>{{ number_format($getpenegak13) }} </td>
                            <td>{{ number_format($getpandega13) }} </td>
                            <td>{{ number_format($getpembina13) }} </td>
                            <td>{{ number_format($getsiaga13)+$getpenggalang13+$getpenegak13+$getpandega13+$getpembina13 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.014</td>
                            <td>KERTASARI</td>
                            <td>{{ number_format($getsiaga14) }} </td>
                            <td>{{ number_format($getpenggalang14) }} </td>
                            <td>{{ number_format($getpenegak14) }} </td>
                            <td>{{ number_format($getpandega14) }} </td>
                            <td>{{ number_format($getpembina14) }} </td>
                            <td>{{ number_format($getsiaga14)+$getpenggalang14+$getpenegak14+$getpandega14+$getpembina14 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.015</td>
                            <td>IBUN</td>
                            <td>{{ number_format($getsiaga15) }} </td>
                            <td>{{ number_format($getpenggalang15) }} </td>
                            <td>{{ number_format($getpenegak15) }} </td>
                            <td>{{ number_format($getpandega15) }} </td>
                            <td>{{ number_format($getpembina15) }} </td>
                            <td>{{ number_format($getsiaga15)+$getpenggalang15+$getpenegak15+$getpandega15+$getpembina15 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.016</td>
                            <td>MAJALAYA</td>
                            <td>{{ number_format($getsiaga16) }} </td>
                            <td>{{ number_format($getpenggalang16) }} </td>
                            <td>{{ number_format($getpenegak16) }} </td>
                            <td>{{ number_format($getpandega16) }} </td>
                            <td>{{ number_format($getpembina16) }} </td>
                            <td>{{ number_format($getsiaga16)+$getpenggalang16+$getpenegak16+$getpandega16+$getpembina16 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.017</td>
                            <td>PASEH</td>
                            <td>{{ number_format($getsiaga17) }} </td>
                            <td>{{ number_format($getpenggalang17) }} </td>
                            <td>{{ number_format($getpenegak17) }} </td>
                            <td>{{ number_format($getpandega17) }} </td>
                            <td>{{ number_format($getpembina17) }} </td>
                            <td>{{ number_format($getsiaga17)+$getpenggalang17+$getpenegak17+$getpandega17+$getpembina17 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.018</td>
                            <td>SOLOKANJERUK</td>
                            <td>{{ number_format($getsiaga18) }} </td>
                            <td>{{ number_format($getpenggalang18) }} </td>
                            <td>{{ number_format($getpenegak18) }} </td>
                            <td>{{ number_format($getpandega18) }} </td>
                            <td>{{ number_format($getpembina18) }} </td>
                            <td>{{ number_format($getsiaga18)+$getpenggalang18+$getpenegak18+$getpandega18+$getpembina18 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.019</td>
                            <td>CIKANCUNG</td>
                            <td>{{ number_format($getsiaga19) }} </td>
                            <td>{{ number_format($getpenggalang19) }} </td>
                            <td>{{ number_format($getpenegak19) }} </td>
                            <td>{{ number_format($getpandega19) }} </td>
                            <td>{{ number_format($getpembina19) }} </td>
                            <td>{{ number_format($getsiaga19)+$getpenggalang19+$getpenegak19+$getpandega19+$getpembina19 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.020</td>
                            <td>NAGREG</td>
                            <td>{{ number_format($getsiaga20) }} </td>
                            <td>{{ number_format($getpenggalang20) }} </td>
                            <td>{{ number_format($getpenegak20) }} </td>
                            <td>{{ number_format($getpandega20) }} </td>
                            <td>{{ number_format($getpembina20) }} </td>
                            <td>{{ number_format($getsiaga20)+$getpenggalang20+$getpenegak20+$getpandega20+$getpembina20 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.021</td>
                            <td>CICALENGKA</td>
                            <td>{{ number_format($getsiaga21) }} </td>
                            <td>{{ number_format($getpenggalang21) }} </td>
                            <td>{{ number_format($getpenegak21) }} </td>
                            <td>{{ number_format($getpandega21) }} </td>
                            <td>{{ number_format($getpembina21) }} </td>
                            <td>{{ number_format($getsiaga21)+$getpenggalang21+$getpenegak21+$getpandega21+$getpembina21 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.022</td>
                            <td>RANCAEKEK</td>
                            <td>{{ number_format($getsiaga22) }} </td>
                            <td>{{ number_format($getpenggalang22) }} </td>
                            <td>{{ number_format($getpenegak22) }} </td>
                            <td>{{ number_format($getpandega22) }} </td>
                            <td>{{ number_format($getpembina22) }} </td>
                            <td>{{ number_format($getsiaga22)+$getpenggalang22+$getpenegak22+$getpandega22+$getpembina22 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.023</td>
                            <td>CILEUNYI</td>
                            <td>{{ number_format($getsiaga23) }} </td>
                            <td>{{ number_format($getpenggalang23) }} </td>
                            <td>{{ number_format($getpenegak23) }} </td>
                            <td>{{ number_format($getpandega23) }} </td>
                            <td>{{ number_format($getpembina23) }} </td>
                            <td>{{ number_format($getsiaga23)+$getpenggalang23+$getpenegak23+$getpandega23+$getpembina23 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.024</td>
                            <td>CILENGKRANG</td>
                            <td>{{ number_format($getsiaga24) }} </td>
                            <td>{{ number_format($getpenggalang24) }} </td>
                            <td>{{ number_format($getpenegak24) }} </td>
                            <td>{{ number_format($getpandega24) }} </td>
                            <td>{{ number_format($getpembina24) }} </td>
                            <td>{{ number_format($getsiaga24)+$getpenggalang24+$getpenegak24+$getpandega24+$getpembina24 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.025</td>
                            <td>CIMENYAN</td>
                            <td>{{ number_format($getsiaga25) }} </td>
                            <td>{{ number_format($getpenggalang25) }} </td>
                            <td>{{ number_format($getpenegak25) }} </td>
                            <td>{{ number_format($getpandega25) }} </td>
                            <td>{{ number_format($getpembina25) }} </td>
                            <td>{{ number_format($getsiaga25)+$getpenggalang25+$getpenegak25+$getpandega25+$getpembina25 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.026</td>
                            <td>BOJONGSOANG</td>
                            <td>{{ number_format($getsiaga26) }} </td>
                            <td>{{ number_format($getpenggalang26) }} </td>
                            <td>{{ number_format($getpenegak26) }} </td>
                            <td>{{ number_format($getpandega26) }} </td>
                            <td>{{ number_format($getpembina26) }} </td>
                            <td>{{ number_format($getsiaga26)+$getpenggalang26+$getpenegak26+$getpandega26+$getpembina26 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.027</td>
                            <td>DAYEUHKOLOT</td>
                            <td>{{ number_format($getsiaga27) }} </td>
                            <td>{{ number_format($getpenggalang27) }} </td>
                            <td>{{ number_format($getpenegak27) }} </td>
                            <td>{{ number_format($getpandega27) }} </td>
                            <td>{{ number_format($getpembina27) }} </td>
                            <td>{{ number_format($getsiaga27)+$getpenggalang27+$getpenegak27+$getpandega27+$getpembina27 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.028</td>
                            <td>KATAPANG</td>
                            <td>{{ number_format($getsiaga28) }} </td>
                            <td>{{ number_format($getpenggalang28) }} </td>
                            <td>{{ number_format($getpenegak28) }} </td>
                            <td>{{ number_format($getpandega28) }} </td>
                            <td>{{ number_format($getpembina28) }} </td>
                            <td>{{ number_format($getsiaga28)+$getpenggalang28+$getpenegak28+$getpandega28+$getpembina28 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.029</td>
                            <td>MARGAHAYU</td>
                            <td>{{ number_format($getsiaga29) }} </td>
                            <td>{{ number_format($getpenggalang29) }} </td>
                            <td>{{ number_format($getpenegak29) }} </td>
                            <td>{{ number_format($getpandega29) }} </td>
                            <td>{{ number_format($getpembina29) }} </td>
                            <td>{{ number_format($getsiaga29)+$getpenggalang29+$getpenegak29+$getpandega29+$getpembina29 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.030</td>
                            <td>MARGAASIH</td>
                            <td>{{ number_format($getsiaga30) }} </td>
                            <td>{{ number_format($getpenggalang30) }} </td>
                            <td>{{ number_format($getpenegak30) }} </td>
                            <td>{{ number_format($getpandega30) }} </td>
                            <td>{{ number_format($getpembina30) }} </td>
                            <td>{{ number_format($getsiaga30)+$getpenggalang30+$getpenegak30+$getpandega30+$getpembina30 }} </td>
                          </tr>
                          <tr>
                            <td>09.04.031</td>
                            <td>KUTAWARINGIN</td>
                            <td>{{ number_format($getsiaga31) }} </td>
                            <td>{{ number_format($getpenggalang31) }} </td>
                            <td>{{ number_format($getpenegak31) }} </td>
                            <td>{{ number_format($getpandega31) }} </td>
                            <td>{{ number_format($getpembina31) }} </td>
                            <td>{{ number_format($getsiaga31)+$getpenggalang31+$getpenegak31+$getpandega31+$getpembina31 }} </td>
                          </tr>
                        </tbody>
                        </table>
                  </div>                  
                </div>
              </div>
            </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"> <a href="https://www.bootstrapdash.com/" target="_blank">Themes</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> <i class="ti-heart text-danger ml-1"></i> Kwarcab Kab. Bandung|2022</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('payun/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('payun/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('payun/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('payun/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('payun/js/dataTables.select.min.js') }}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('payun/js/off-canvas.js') }}"></script>
  <script src="{{ asset('payun/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('payun/js/template.js') }}"></script>
  <script src="{{ asset('payun/js/settings.js') }}"></script>
  <script src="{{ asset('payun/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('payun/js/dashboard.js') }}"></script>
  <script src="{{ asset('payun/js/Chart.roundedBarCharts.js') }}"></script>
  <!-- End custom js for this page-->
</body>

</html>

