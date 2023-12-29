<!DOCTYPE html>
<html lang="en">

<head>
    <title>Employés</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="CodedThemes">
      <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      <meta name="author" content="CodedThemes">
      <!-- Favicon icon -->
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="../users/assets/css/bootstrap/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="../users/assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="../users/assets/icon/icofont/css/icofont.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="../users/assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="../users/assets/css/jquery.mCustomScrollbar.css">
  </head>
<style>
    div#stagiaire {
        background-color: gold;
}
    div#employe {
        background-color: #09e36085;
    }
    div#cdi {
        background-color: #c9d9df00;
}
    div#cdd {
        background-color: #cb9d9d;
}
    


</style>
  <body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

           <!-- navbar -->
            @include('layout.users.navbar')
           <!-- fin navbar -->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
      
                <!-- sidebar -->
            @include('layout.users.sidebar')
                <!-- fin sidebar -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                        <!-- main be -->


                    <!-- Card stats -->
                                <div class="row" style="margin-top:px;display: flex;
                                    margin-right: 0px;
                                    margin-left: -7px;
                                    flex-wrap: wrap;">
                                    <!-- first stat -->
                                        
                                        <div class="col-xl-3 col-md-6">
                                            <a href="{{ route('employe') }}" title="Aller a Employe">
                                                <div class="card card-stats">
                                                    <!-- Card body -->
                                                    <div class="card-body" id="employe">
                                                    <div class="row">
                                                        <div class="col">
                                                        <h5 class="card-title text-uppercase text-muted mb-0">Employés</h5>
                                                        <span class="h2 font-weight-bold mb-0">{{ $totalEmploye }}</span>
                                                        </div>
                                                        <div class="col-auto">
                                                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                                            <i class="ni ni-active-40"></i>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <p class="mt-3 mb-0 text-sm">
                                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                                        <span class="text-nowrap">Since last month</span>
                                                    </p>
                                                    </div>
                                                </div>
                                            </a>
                                         </div>
                                        
                                 <!-- fin stat -->
                                        <div class="col-xl-3 col-md-6">
                                            <a href="{{ route('cdi') }}" title="Aller au CDI">
                                                <div class="card card-stats">
                                                    <!-- Card body -->
                                                    <div class="card-body" id="cdi">
                                                    <div class="row">
                                                        <div class="col">
                                                        <h5 class="card-title text-uppercase text-muted mb-0">C.D.I</h5>
                                                        <span class="h2 font-weight-bold mb-0">{{ $totalCdi }}</span>
                                                        </div>
                                                        <div class="col-auto">
                                                        <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                                            <i class="ni ni-chart-pie-35"></i>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <p class="mt-3 mb-0 text-sm">
                                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                                        <span class="text-nowrap">Since last month</span>
                                                    </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <a href="{{ route('cdd') }}" title="Voir les CDD">
                                                <div class="card card-stats">
                                                    <!-- Card body -->
                                                    <div class="card-body" id="cdd">
                                                    <div class="row">
                                                        <div class="col">
                                                        <h5 class="card-title text-uppercase text-muted mb-0">C.D.D</h5>
                                                        <span class="h2 font-weight-bold mb-0">{{ $totalCdd }}</span>
                                                        </div>
                                                        <div class="col-auto">
                                                        <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                                            <i class="ni ni-money-coins"></i>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <p class="mt-3 mb-0 text-sm">
                                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                                        <span class="text-nowrap">Since last month</span>
                                                    </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <a href="{{ route('stagiaire') }}" title="Voir les Stagiaire">
                                                <div class="card card-stats">
                                                <!-- Card body -->
                                                    <div class="card-body" id="stagiaire">
                                                        <div class="row">
                                                            <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0" >Stagiaire</h5>
                                                            <span class="h2 font-weight-bold mb-0">{{ $totalStagiaire }}</span>
                                                            </div>
                                                            <div class="col-auto">
                                                            <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                                                <i class="ni ni-chart-bar-32"></i>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <p class="mt-3 mb-0 text-sm">
                                                            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                                            <span class="text-nowrap">Since last month</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                            <!--  Fin des card body statistique-->

                                               <!-- Statestics Start -->
                                               <div class="col-md-12 col-xl-8">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Statistiques</h5>
                                                        <div class="card-header-left ">
                                                        </div>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="icofont icofont-simple-left "></i></li>
                                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                                <li><i class="icofont icofont-error close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="statestics-chart" style="height:517px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                <!-- right details -->
                                            <div class="col-md-12 col-xl-4">
                                                    <div class="card fb-card">
                                                        <a href="{{ url('user') }}">
                                                            <div class="card-header">
                                                                <i class="ti-user"></i>
                                                                <div class="d-inline-block">
                                                                    <h5>Utilisateurs</h5>
                                                                    <span>Tous les administrateurs</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="card-block text-center">
                                                            <div class="row">
                                                                <div class="col-6 b-r-default">
                                                                    <h2>{{ $totalUsers }}</h2>
                                                                    <p class="text-muted">Active</p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h2>{{ $totalUsers }}</h2>
                                                                    <p class="text-muted">En ligne</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card dribble-card">
                                                       <a href="{{ url('congeEmploye') }}">
                                                        <div class="card-header">
                                                            <i class="ti-notepad"></i>
                                                            <div class="d-inline-block">
                                                                <h5>Conges</h5>
                                                                <span>Nombre de conges enregistrer</span>
                                                            </div>
                                                        </div>
                                                        </a> 
                                                        <div class="card-block text-center">
                                                            <div class="row">
                                                                <div class="col-6 b-r-default">
                                                                    <h2>{{$totalConges}}</h2>
                                                                    <p class="text-muted">Recents</p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h2>{{$totalConges}}</h2>
                                                                    <p class="text-muted">Total</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card twitter-card">
                                                        <div class="card-header">
                                                            <i class="icofont icofont-social-twitter"></i>
                                                            <div class="d-inline-block">
                                                                <h5>twitter</h5>
                                                                <span>current new timeline</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-block text-center">
                                                            <div class="row">
                                                                <div class="col-6 b-r-default">
                                                                    <h2>25</h2>
                                                                    <p class="text-muted">new tweet</p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h2>450+</h2>
                                                                    <p class="text-muted">Follower</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                           <!-- ends of right details -->
                                            </div>
                                        </div>
                                    </div>
                                    
                    <!-- fin cardstat -->
                
                            <!-- fin main Be -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>

<script type="text/javascript" src="../users/assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../users/assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="../users/assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="../users/assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="../users/assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="../users/assets/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="../users/assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="../users/assets/pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="../users/assets/pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="../users/assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="../users/assets/js/script.js"></script>
<script type="text/javascript " src="../users/assets/js/SmoothScroll.js"></script>
<script src="../users/assets/js/pcoded.min.js"></script>
<script src="../users/assets/js/demo-12.js"></script>
<script src="../users/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
         nav.addClass('active');
     }
     else {
         nav.removeClass('active');
     }
 });
</script>
</body>

</html>
