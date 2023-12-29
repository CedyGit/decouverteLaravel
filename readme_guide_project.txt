D:\DOC CEDY\ETUDES\MES TUTO\TUTO info\template\Mr telolahy Daniel INSTAT\dashbord\GURU ==>> template nampioasaina

dernier mise a jours ++
+ mask & demask password authentification
+ UsersDetails
+ Users Details
conges employe ==> on ne peut ajouter des conges que dans le menu CDI liste de tous les personnelles en CDI

</script>





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
   <!-- END of the script of the pasword de/mask -->
    <!-- mots de passee -->