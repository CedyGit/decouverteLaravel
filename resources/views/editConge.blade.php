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
        h3.text-center {
            color : chocolate;
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
                                <h3 class="text-center">Modification du demande de conge de {{ $congeEmploye->demandeur }}</h3>
                                <div class="page-wrapper">
                                
                                    <div class="page-body">
                                        
                                <!-- form d'enregistrement de congé -->
                                <div>
                                            <form action="{{ url('update-conge/'.$congeEmploye->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @Method('PUT')

                                            @if(Session::has('success'))
                                                <div class="alert alert-success" style="text-align: center;">{{Session::get('success')}}</div>
                                            @endif
                                            @if(Session::has('fail'))
                                                <div class="alert alert-danger" >{{Session::get('fail')}}</div>
                                            @endif
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="col-form-label">Demandeur <span class="text-danger"> *Par defaut</span></label>
                                                            <div class="cal-icon">
                                                                <input type="text" class="form-control" name="demandeur" value="{{ $congeEmploye->demandeur }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="col-form-label">Poste ocuuper <span class="text-danger"> *Par defaut</span></label>
                                                            <div class="cal-icon">
                                                                <input type="text" class="form-control" name="poste_occuper" value="{{ $congeEmploye->poste_occuper }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Type de congé<span class="text-danger"> *Si autre veuiller notez dans les motifs</span></label>
                                                            <select class="select form-control" id="type_de_conge" name="type_de_conge">
                                                                <option value="{{ $congeEmploye->type_de_conge }}">{{ $congeEmploye->type_de_conge }}</option>
                                                                <option value="Congé payer">Congé payer</option>
                                                                <option value="Congé sans solde">Congé sans solde</option>
                                                                <option value="Autre">Autre</option>
                                                            </select>
                                                            <span class="text-danger">@error('type_de_conge') {{$message}} @enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="col-form-label">Date de début</label>
                                                            <div class="cal-icon">
                                                                <input class="datepicker-default form-control" type="date" name="date_de_debut" value="{{ $congeEmploye->date_de_debut }}">
                                                                <span class="text-danger">@error('date_de_debut') {{$message}} @enderror</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Heure de début  </label>
                                                            <select class="select form-control" id="heure_de_debut" name="heure_de_debut">
                                                                <option value="{{ $congeEmploye->heure_de_debut }}">{{ $congeEmploye->heure_de_debut }}</option>
                                                                <option value="Matin ">Matin</option>
                                                                <option value="Midi ">Midi </option>
                                                                <option value="Soir">Soir</option>
                                                            </select>
                                                            <span class="text-danger">@error('heure_de_debut') {{$message}} @enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="col-form-label">Date de fin</label>
                                                            <div class="cal-icon">
                                                                <input class="datepicker-default form-control" type="date" name="date_de_fin" value="{{ $congeEmploye->date_de_fin }}">
                                                                <span class="text-danger">@error('date_de_fin') {{$message}} @enderror</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Heure de fin</label>
                                                            <select class="select form-control" id="heure_de_fin" name="heure_de_fin">
                                                                <option value="{{ $congeEmploye->heure_de_fin }}">{{ $congeEmploye->heure_de_fin }}-</option>
                                                                <option value="Matin ">Matin</option>
                                                                <option value="Midi ">Midi </option>
                                                                <option value="Soir">Soir</option>
                                                            </select>
                                                            <span class="text-danger">@error('heure_de_fin') {{$message}} @enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="col-form-label">Nombre de jours</label>
                                                            <div class="cal-icon">
                                                                <input type="number" class="form-control" id="nombre_de_jours" name="nombre_de_jours" value="{{ $congeEmploye->nombre_de_jours }}">
                                                                <span class="text-danger">@error('nombre_de_jours') {{$message}} @enderror</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="col-form-label">Motif a preciser <span class="text-danger">**</span></label>
                                                            <textarea class="form-control" name="motifs" id="" cols="30" rows="5" value="{{ $congeEmploye->motifs }}"></textarea>
                                                        </div>
                                                    </div>

                                                    <!-- input employe_id hidden -->
                                                        <input class="form-control" type="hidden" id="employe_id" name="employe_id" value="{{ $congeEmploye->employe_id }}">
                                
                                                     <!-- input employe_id hidden -->
                                                </div>
                                                <div class="submit-section">
                                                    <button class="btn btn-inverse btn-round" type="submit">Valider le congé</button>
                                                </div>
                                            </form>
                                        </div>
                                       <!--fin div body  -->
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
