<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/cssIc/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/styleRegistration.css">
    <title>Registration</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-12" style="margin-top:20px;">
                <div class="main-registre">
                    <h4 style="font-weight: bold; text-align: center; color: white;">S'inscrire</h4>
                    <hr>
                    <form action="{{ route('register-user') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <!-- success and fail message -->
                        @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                   
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input type="text" class="form-control" placeholder="Votre nom" name="nom" value="{{old('nom')}}">
                                    <span class="text-danger">@error('nom') {{$message}} @enderror</span>
                                </div>
                            </div>
                    
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="prenom">Prenom</label>
                                    <input type="text" class="form-control" placeholder="Votre prenom" name="prenom" value="{{old('prenom')}}">
                                    <span class="text-danger">@error('prenom') {{$message}} @enderror</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone">phone</label>
                                    <input type="number" class="form-control" placeholder="Votre Numéro" name="phone" value="{{old('phone')}}">
                                    <span class="text-danger">@error('phone') {{$message}} @enderror</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="address">address</label>
                                    <input type="text" class="form-control" placeholder="Votre address" name="address" value="{{old('address')}}">
                                    <span class="text-danger">@error('address') {{$message}} @enderror</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" placeholder="Votre email" name="email" value="{{old('email')}}">
                                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="usertype">usertype</label>
                                    <input type="number" class="form-control" placeholder="Votre usertype" name="usertype" value="{{old('usertype')}}">
                                    <span class="text-danger">@error('usertype') {{$message}} @enderror</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="password">Mots de passes</label>
                                    <input type="password" id="password" class="form-control" placeholder="Votre mots de passe" name="password" value="{{old('password')}}">
                                    <i class="bi bi-eye-slash" id="togglePassword"></i>
                                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                </div>
                            </div>
                                <!-- image -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="avatar">photo</label>
                                    <input type="file" class="form-control" placeholder="votre de profil" name="photo">
                                    <span class="text-danger">@error('photo') {{$message}} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class=" btn btn-block btn-primary" type="submit">Inscrire</button>
                        </div>
                        <a href="{{ route('login') }}" class="text-muted">Vous avez deja un compte? </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
<!-- script of the pasword de/mask -->
<script>
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#password");

    togglePassword.addEventListener("click", function() {
        // toggle the type attribute
        const type = password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type", type);
        // toggle the icon
        this.classList.toggle("bi-eye");
        
    });
 </script>

</html>