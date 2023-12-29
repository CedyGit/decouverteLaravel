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
                                    <!-- title -->  
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="{{ route('employe') }}">Employé</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><a href="#">Nouveau Employé</a></li>
                                        </ol>
                                    </nav>
                                <!-- End title -->

                                    
                                    <!-- ajouter employé -->
                    <div >
                      <form action="{{ route('register-employe') }}" method="post" enctype="multipart/form-data">
                      @csrf
                      @if(Session::has('success'))
                          <div class="alert alert-success" >{{Session::get('success')}}</div>
                      @endif
                      @if(Session::has('fail'))
                          <div class="alert alert-danger" >{{Session::get('fail')}}</div>
                      @endif
                          
                          <div class="row">
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label class="col-form-label">Nom<span class="text-danger">*</span></label>
                                      <input class="form-control" type="text" id="nom" name="nom" placeholder="Nom" value="{{old('nom')}}">
                                      <span class="text-danger">@error('nom') {{$message}} @enderror</span>
                                  </div>
                              </div>
                          
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label class="col-form-label">Prenom<span class="text-danger">*</span></label>
                                      <input class="form-control" type="text" id="prenom" name="prenom" placeholder="Prenom" value="{{old('prenom')}}">
                                      <span class="text-danger">@error('prenom') {{$message}} @enderror</span>
                                  </div>
                              </div>

                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                      <input class="form-control" type="email" id="email" name="email" placeholder="Email" value="{{old('email')}}">
                                      <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="col-form-label">Date de naissance</label>
                                      <div class="cal-icon">
                                          <input class="form-control datetimepicker" type="date" id="birthDate" name="date_de_naissance" value="{{old('date_de_naissance')}}">
                                          <span class="text-danger">@error('date_de_naissance') {{$message}} @enderror</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label>Sexe</label>
                                      <select class="select form-control" id="gender" name="sexe">
                                          <option value="">-- Choisir --</option>
                                          <option value="Homme">Homme</option>
                                          <option value="Femme">Femme</option>
                                      </select>
                                      <span class="text-danger">@error('sexe') {{$message}} @enderror</span>
                                  </div>
                              </div>
                              <div class="col-sm-6">  
                                  <div class="form-group">
                                      <label class="col-form-label">Téléphone<span class="text-danger">*</span></label>
                                      <input type="number" class="form-control" id="numero" name="numero" placeholder="Votre numéro" value="{{old('numero')}}">
                                      <span class="text-danger">@error('numero') {{$message}} @enderror</span>
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label class="col-form-label">Poste occuper</label>
                                      <select class="select form-control" id="poste" name="poste">
                                          <option value="">-- Choisir --</option>
                                          <option value="Developpeur">Developpeur</option>
                                          <option value="Systeme et reseaux">Systeme et reseaux</option>
                                          <option value="Gestion">Gestion</option>
                                          <option value="Comptable">Comptable</option>
                                      </select>
                                      <span class="text-danger">@error('poste') {{$message}} @enderror</span>
                                  </div>
                              </div>
                             
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label class="col-form-label">Date de recrutement</label>
                                      <div class="cal-icon">
                                          <input class="datepicker-default form-control  @error('date_de_recrutement') is-invalid @enderror" type="date" id="birthDate" name="date_de_recrutement" value="{{old('date_de_recrutement')}}">
                                          <span class="text-danger">@error('date_de_recrutement') {{$message}} @enderror</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label class="col-form-label">Status</label>
                                      <select class="select form-control" id="status" name="status">
                                          <option value="">-- Choisir --</option>
                                          <option value="CDI">CDI</option>
                                          <option value="CDD">CDD</option>
                                          <option value="Stagiaire">Stagiaire</option>
                                      </select>
                                      <span class="text-danger">@error('status') {{$message}} @enderror</span>
                                  </div>
                              </div>
                              <div class="col-sm-6">  
                                  <div class="form-group">
                                      <label class="col-form-label">Matricule<span class="text-danger">*</span></label>
                                      <input type="number" class="form-control" id="matricule" name="matricule" placeholder="Votre matricule" value="{{old('matricule')}}">
                                      <span class="text-danger">@error('matricule') {{$message}} @enderror</span>
                                  </div>
                              </div>
                              <div class="col-sm-6">  
                                  <div class="form-group">
                                      <label class="col-form-label">Adresse<span class="text-danger">*</span></label>
                                      <input type="text" class="form-control" id="adress" name="adress" placeholder="Votre adresse" value="{{old('adress')}}">
                                      <span class="text-danger">@error('adress') {{$message}} @enderror</span>
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="form-group">
                                      <label for="avatar" class="col-form-label">Profil</label>
                                      <input type="file" class="form-control" id="avatar" name="avatar">
                                      <span class="text-danger">@error('avatar') {{$message}} @enderror</span>
                                  </div>
                              </div>
                          </div>
                          <div class="submit-section">
                              <button class="btn btn-primary submit-btn" type="submit">Nouveau Employe</button>
                          </div>
                      </form>
                  </div>
                                    <!-- fin ajouter employé -->
                            
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

</html>
