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
                            <!-- Formulaire de modification -->
                                        <div>
                                            <form action="{{ url('update-user/'.$user->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            @if(Session::has('success'))
                                                <div class="alert alert-success" style="text-align: center;">{{Session::get('success')}}</div>
                                            @endif
                                            @if(Session::has('fail'))
                                                <div class="alert alert-danger" >{{Session::get('fail')}}</div>
                                            @endif
                                                
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="col-form-label">Nom<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="text" id="nom" name="nom" value="{{ $user->nom }}">
                                                            <span class="text-danger">@error('nom') {{$message}} @enderror</span>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="col-form-label">Prenom<span class="text-danger">*</span></label>
                                                            <input class="form-control" type="text" id="prenom" name="prenom" value="{{ $user->prenom }}">
                                                            <span class="text-danger">@error('prenom') {{$message}} @enderror</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="col-form-label">Phone <span class="text-danger">*</span></label>
                                                            <input class="form-control" type="number" id="phone" name="phone"  value="{{ $user->phone }}">
                                                            <span class="text-danger">@error('phone') {{$message}} @enderror</span>
                                                        </div>
                                                    </div>
                                                  
                                                    <div class="col-sm-6">  
                                                        <div class="form-group">
                                                            <label class="col-form-label">Adresse<span class="text-danger">*</span></label>
                                                            <input type="adress" class="form-control" id="adress" name="address" value="{{ $user->address }}">
                                                            <span class="text-danger">@error('adress') {{$message}} @enderror</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">  
                                                        <div class="form-group">
                                                            <label class="col-form-label">Email<span class="text-danger">*</span></label>
                                                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                                                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">  
                                                        <div class="form-group">
                                                            <label class="col-form-label">Usertype<span class="text-danger">*</span></label>
                                                            <input type="number" class="form-control" id="usertype" name="usertype" value="{{ $user->usertype }}">
                                                            <span class="text-danger">@error('usertype') {{$message}} @enderror</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">  
                                                        <div class="form-group">
                                                            <label class="col-form-label">Mots de passes<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" id="password" name="password" value="{{ $user->password }}">
                                                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">  
                                                        <div class="form-group">
                                                            <label class="col-form-label">Profil <span class="text-danger">*</span></label>
                                                            <input type="file" class="form-control" id="photo" name="photo" value="{{ $user->photo }}">
                                                            <span class="text-danger">@error('photo') {{$message}} @enderror</span>
                                                        </div>
                                                    </div>
                                                  
                                                    
                                                </div>
                                                <div class="submit-section">
                                                    <button class="btn btn-primary submit-btn" onclick="return confirm('Voulez-vous vraiment modifier les données de'+' {{ $user->nom }}')" type="submit">Modifier User</button>
                                                </div>
                                            </form>
                                        </div>
                        <!-- fin Formulaire de modification -->
                                      
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
