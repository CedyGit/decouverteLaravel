<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/cssIc/bootstrap-icons.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="../users/assets/icon/themify-icons/themify-icons.css">
    <title>Login</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-12">
                <div class="main-registre">
                    <h4 style="font-weight: bold; text-align: center; color: white;">Authentification</h4>
                    <hr>
                    <form action="{{ route('login-user') }}" method="post">
                    @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    <!-- secure of your form -->
                    @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" placeholder="Votre email" name="email" value="{{old('email')}}">
                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                        </div>
                        <!-- mots de passes -->
                        <div class="form-group">
                                <label for="password">Mots de passes</label>
                                <input type="password" id="password" class="form-control" placeholder="Votre mots de passes" name="password" value="{{old('password')}}">
                                <i class="bi bi-eye-slash" id="togglePassword"></i>
                                <span class="text-danger">@error('password') {{$message}} @enderror</span>
                        </div>

                        <!-- input hidden -->
                        <!-- <input type="hidden" class="form-control" name="usertype" value="{{ request('usertype') }}"> -->
                        <!-- input hidden -->
                        <div class="form-group">
                            <button class=" btn btn-block btn-primary" type="submit" id="submit">S'authentifier</button>   
                        </div>
                        <a href="{{ route('registration') }}" class="text-muted" >S'inscrire</a>
                        <a href="#" class="forgetmdp">Mots de passes oublier?</a>
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