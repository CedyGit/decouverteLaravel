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
      <link rel="stylesheet" type="text/css" href="users/assets/css/bootstrap/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="users/assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="users/assets/icon/icofont/css/icofont.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="users/assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="users/assets/css/jquery.mCustomScrollbar.css">
  </head>

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

                                    <div class="page-body">
                                       <!-- tableau -->
                                       <a href="{{ route('NewEmploye') }}"><button class="btn btn-success float-right">Ajouter</button></a>

                                        <table class="table">
                                            <thead class="thead-dark">
                                                <tr class="text-center">
                                                    <th scope="col">#</th>
                                                    <th scope="col">Nom</th>
                                                    <th scope="col">Prenom</th>
                                                    <th scope="col">Sexe</th>
                                                    <th scope="col">Poste</th>
                                                    <th scope="col">Recrutement</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Matricule</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $stagiaire)
                                                <tr>
                                                    <th scope="row">{{ $stagiaire->id }}</th>
                                                    <td class="nom">{{ $stagiaire->nom }}</td>
                                                    <td class="nom">{{ $stagiaire->prenom }}</td>
                                                    <td class="nom">{{ $stagiaire->sexe  }}</td>
                                                    <td class="nom">{{ $stagiaire->poste  }}</td>
                                                    <td class="nom">{{ $stagiaire->date_de_recrutement  }}</td>
                                                    <td class="nom">{{ $stagiaire->status  }}</td>
                                                    <td class="nom">{{ $stagiaire->matricule  }}</td>
                                                    <td class="text-center" style="display: grid;">
                                                        <a href="{{ url('details/'.$stagiaire->id) }}">
                                                            <button class="btn btn-info btn-outline-info" title="Details">
                                                                <em class="icofont icofont-info-square"></em>
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                        <div class="row">{{ $data->links() }}</div>
                                    </div>

                                   

                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>

<script type="text/javascript" src="users/assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="users/assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="users/assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="users/assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="users/assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="users/assets/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="users/assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="users/assets/pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="users/assets/pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="users/assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="users/assets/js/script.js"></script>
<script type="text/javascript " src="users/assets/js/SmoothScroll.js"></script>
<script src="users/assets/js/pcoded.min.js"></script>
<script src="users/assets/js/demo-12.js"></script>
<script src="users/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
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

</htmstagiaire