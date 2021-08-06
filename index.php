<?php 

error_reporting(0);
session_start();
if(!isset($_SESSION['login'])){
  echo "<script>
          window.location.href = 'login/login.php';
        </script>";
};

if(isset($_GET['logout'])){
  session_destroy();
  echo "<script>
          window.location.href = 'login/login.php';
        </script>";
};

include('koneksi.php');


if ($_SESSION['level'] == 'admin') {

  if (isset($_GET['cri'])) {
    $dta=$_GET['dtcri'];
    $query="SELECT * FROM siswa where nama = '%$dtcri%' or alamat = '%$dtcri%' or kelas = '%$dtcri%'  order by nama asc";
  }else{
    $query="SELECT * FROM siswa order by nama asc";
  };
  
}else if ($_SESSION['level'] == 'walikls7') {
  $query="SELECT * FROM siswa where kelas = 'VII' order by nama asc";
}else if ($_SESSION['level'] == 'walikls8') {
  $query="SELECT * FROM siswa where kelas = 'VIII' order by nama asc";
}else{
  $query="SELECT * FROM siswa where kelas = 'IX' order by nama asc";
}



// admin

if ($_SESSION['level'] == 'admin') {
  $sql1 = mysqli_query($con, "SELECT * FROM user");
$totuser = mysqli_num_rows($sql1);

$sql2 = mysqli_query($con, "SELECT * FROM siswa where kelas = 'VII' ");
$kls7 = mysqli_num_rows($sql2);

$sql3 = mysqli_query($con, "SELECT * FROM siswa where kelas = 'VIII' ");
$kls8 = mysqli_num_rows($sql3);

$sql4 = mysqli_query($con, "SELECT * FROM siswa where kelas = 'IX' ");
$kls9 = mysqli_num_rows($sql4);

}else if ($_SESSION['level'] == 'walikls7') {
  $kelas = "VII";
  // kls7

$sql1 = mysqli_query($con, "SELECT * FROM siswa where kelas = 'VII' ");

$totsiswa = mysqli_num_rows($sql1);

$sql2 = mysqli_query($con, "SELECT * FROM siswa where gender = 'laki-laki' and kelas = 'VII' ");
$lk = mysqli_num_rows($sql2);

$sql3 = mysqli_query($con, "SELECT * FROM siswa where kelas = 'perempuan' and kelas = 'VII' ");
$wn = mysqli_num_rows($sql3);

}else if ($_SESSION['level'] == 'walikls8') {
  $kelas = "VIII";
  // kls8

$sql1 = mysqli_query($con, "SELECT * FROM siswa where kelas = 'VIII' ");
$totsiswa = mysqli_num_rows($sql1);

$sql2 = mysqli_query($con, "SELECT * FROM siswa where gender = 'laki-laki' and kelas = 'VIII' ");
$lk = mysqli_num_rows($sql2);

$sql3 = mysqli_query($con, "SELECT * FROM siswa where kelas = 'perempuan' and kelas = 'VIII' ");
$wn = mysqli_num_rows($sql3);

}else{
  // kls9

$sql1 = mysqli_query($con, "SELECT * FROM siswa where kelas = 'IX' ");

$kelas = "IX";
$totsiswa = mysqli_num_rows($sql1);

$sql2 = mysqli_query($con, "SELECT * FROM siswa where gender = 'laki-laki' and kelas = 'IX' ");
$lk = mysqli_num_rows($sql2);

$sql3 = mysqli_query($con, "SELECT * FROM siswa where kelas = 'perempuan' and kelas = 'IX' ");
$wn = mysqli_num_rows($sql3);
};




$id1=$_SESSION['id'];

$usr=mysqli_query($con, "SELECT * FROM user where id = '$id1' ");

$hash=mysqli_fetch_assoc($usr);














 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>UAS KELOMPOK </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
      <!-- Favicon icon -->
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- themify icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- scrollbar.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
        <!-- am chart export.css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  </head>

  <body>
  <!-- Pre-loader start -->
  <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->
  <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
          <nav class="navbar header-navbar pcoded-header">
              <div class="navbar-wrapper">
                  <div class="navbar-logo">
                      <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                          <i class="ti-menu"></i>
                      </a>
                      <div class="mobile-search waves-effect waves-light">
                          <div class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                      <input type="text" class="form-control" placeholder="Enter Keyword">
                                      <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a href="index.php">
                          <p>SMP Negeri 2 Ambon</p>
                      </a>
                      <a class="mobile-options waves-effect waves-light">
                          <i class="ti-more"></i>
                      </a>
                  </div>
                
                  <div class="navbar-container container-fluid">
                      <ul class="nav-left">
                          <li>
                              <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                          </li>
                          <li>
                              <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                  <i class="ti-fullscreen"></i>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav-right">
                          <!--  -->
                          <li class="user-profile header-notification">
                              <a href="#!" class="waves-effect waves-light">
                                  <img src="gambar/<?php echo $hash['foto']; ?>" class="img-radius" alt="User-Profile-Image">
                                  <span><?php echo $_SESSION['user']; ?></span>
                                  <i class="ti-angle-down"></i>
                              </a>
                              <ul class="show-notification profile-notification">
                                  <li class="waves-effect waves-light">
                                      <a href="index.php?logout=1">
                                          <i class="ti-layout-sidebar-left"></i> Logout
                                      </a>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>

          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">
                  <nav class="pcoded-navbar">
                      <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                      <div class="pcoded-inner-navbar main-menu">
                          <div class="">
                              <div class="main-menu-header">
                                  <img class="img-80 img-radius" src="gambar/<?php echo $hash['foto']; ?>" alt="User-Profile-Image">
                                  <div class="user-details">
                                      <span id="more-details"><?php echo $_SESSION['user']; ?><i class="fa fa-caret-down"></i></span>
                                  </div>
                              </div>
        
                              <div class="main-menu-content">
                                  <ul>
                                      <li class="more-details">
                                        <a href="index.php?logout=1"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                    
                          <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Data</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="active">
                                  <a href="index.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Home</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>

                              <?php 
                                if ($_SESSION['level'] == 'admin') {
                                  # code...
                              

                               ?>
                              <li class="active">
                                  <a href="index.php?page=user" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="fa fa-users f-18"></i><b>D</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">User</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>

                            <?php } ?>
                              <li class="active">
                                  <a href="index.php?page=siswa" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="fa fa-users f-18"></i><b>D</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Siswa</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                          </ul> 
                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Input Data</div>
                          <ul class="pcoded-item pcoded-left-item">

                            <?php 
                              if ($_SESSION['level']=='admin') {
                                # code...
                              

                             ?>
                              <li>
                                  <a href="index.php?page=tambahuser" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Tambah User</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>

                            <?php } ?>
                              <li>
                                  <a href="index.php?page=tambahsiswa" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Tambah Siswa</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
        
                          </ul>   
                      </div>
                  </nav>
                  <div class="pcoded-content">
                      <!-- Page-header start -->
                      <div class="page-header">
                          <div class="page-block">
                              <div class="row align-items-center">
                                  <div class="col-md-8">
                                      <div class="page-header-title">
                                          <h5 class="m-b-10">Smp Negeri 2 Ambon</h5>
                                          <?php if ($_SESSION['level']=='admin') {
                                            # code...
                                          ?>
                                          <p class="m-b-0">Welcome Admin</p>

                                        <?php }else{ ?>
                                           <p class="m-b-0">Welcome Wali Kelas <?php echo $kelas; ?></p>

                                        <?php } ?>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="breadcrumb-title">
                                          
                                          
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <!-- task, page, download counter  start -->
                                            <?php if ($_SESSION['level']=='admin') {
                                              # code...
                                             ?>
                                           <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple"><?php echo $totuser; ?></h4>
                                                                <h6 class="text-muted m-b-0">Jumlah User</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                              <?php if ($_SESSION['level'] == 'admin') {
                                                                # code...
                                                               ?>
                                                                <i class="fa fa-users f-28"></i>
                                                              <?php }else{
                                                               ?>
                                                               <i class="fa fa-user f-28"></i>
                                                             <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                            </div>

                                             <?php } ?>
                                            
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card" style="background-color: #98fcc2;">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-green">
                                                                  <?php 
                                                                if ($_SESSION['level'] == 'admin') {
                                                                  echo $kls7;
                                                                }else{
                                                                  echo $totsiswa;
                                                                };

                                                                 ?></h4>
                                                                <?php 
                                                                if ($_SESSION['level'] == 'admin') {
                                                                  
                                                            
                                                                 ?>
                                                                <h6 class="text-muted m-b-0">Siswa Kelas VII</h6>

                                                              <?php }else{
                                                               ?>
                                                               <h6 class="text-muted m-b-0">Total murid</h6>
                                                             <?php } ?>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                              <?php if ($_SESSION['level'] == 'admin') {
                                                                # code...
                                                               ?>
                                                                <i class="fa fa-users f-28"></i>
                                                              <?php }else{
                                                               ?>
                                                               <i class="fa fa-user f-28"></i>
                                                             <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                         

                                            <div class="col-xl-3 col-md-6">
                                                <div class="card" style="background-color: #94effc;">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-red"> <?php 
                                                                if ($_SESSION['level'] == 'admin') {
                                                                  echo $kls8;
                                                                }else{
                                                                  echo $lk;
                                                                };

                                                                 ?>
                                                                   
                                                                 </h4>

                                                                 <?php 
                                                                if ($_SESSION['level'] == 'admin') {
                                                                  
                                                            
                                                                 ?>
                                                                <h6 class="text-muted m-b-0">Siswa Kelas VIII</h6>

                                                              <?php }else{
                                                               ?>
                                                               <h6 class="text-muted m-b-0">Siswa</h6>
                                                             <?php } ?>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                              <?php if ($_SESSION['level'] == 'admin') {
                                                                # code...
                                                               ?>
                                                                <i class="fa fa-users f-28"></i>
                                                              <?php }else{
                                                               ?>
                                                               <i class="fa fa-user f-28"></i>
                                                             <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-md-6">
                                                <div class="card" style="background-color: #f8bad6;">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-red"> <?php 
                                                                if ($_SESSION['level'] == 'admin') {
                                                                  echo $kls9;
                                                                }else{
                                                                  echo $wn;
                                                                };

                                                                 ?>
                                                                   
                                                                 </h4>

                                                                 <?php 
                                                                if ($_SESSION['level'] == 'admin') {
                                                                  
                                                            
                                                                 ?>
                                                                <h6 class="text-muted m-b-0">Siswa Kelas IX</h6>

                                                              <?php }else{
                                                               ?>
                                                               <h6 class="text-muted m-b-0">Siswi</h6>
                                                             <?php } ?>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                              <?php if ($_SESSION['level'] == 'admin') {
                                                                # code...
                                                               ?>
                                                                <i class="fa fa-users f-28"></i>
                                                              <?php }else{
                                                               ?>
                                                               <i class="fa fa-user f-28"></i>
                                                             <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
      
                                            <!-- task, page, download counter  end -->
    
                                            <!--  mainnnnnnnnnnnn -->
                        						
                                              <?php 

                                              $page=$_GET['page'];

                                              if (isset($page)) {
                                                switch ($page) {
                    case 'home':
                      
                      break;
                    // user
                    case 'user':
                      include('konten/user.php');
                      break;
                    case 'tambahuser':
                      include('form/formusr.php');
                      break;

                    // mahasiswa
                    case 'siswa':
                      include('konten/siswa.php');
                      break;
                    case 'tambahsiswa':
                      include('form/formsw.php');
                      break;
                   
                    case 'ubah':
                      include('konten/prosesubah.php');
                      break;
                    default:
                      include('content/home.php');
                      break;
                  }



                                              };


                                               ?> 

                                              <!-- end main -->

                        						</div>
                                            
    
                                         
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    
    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
    <script type="text/javascript" src="assets/pages/widget/excanvas.js "></script>
    <!-- waves js -->
    <script src="assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js "></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
    <!-- Chart js -->
    <script type="text/javascript" src="assets/js/chart.js/Chart.js"></script>
    <!-- amchart js -->
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="assets/pages/widget/amchart/gauge.js"></script>
    <script src="assets/pages/widget/amchart/serial.js"></script>
    <script src="assets/pages/widget/amchart/light.js"></script>
    <script src="assets/pages/widget/amchart/pie.min.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <!-- menu js -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vertical-layout.min.js "></script>
    <!-- custom js -->
    <script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="text/javascript" src="assets/js/script.js "></script>
</body>

</html>
