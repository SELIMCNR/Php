<?php 

require "libs/variables.php";
require "libs/functions.php";

sort($kategoriler);

kursEkle($kurslar,"yeni kurs 1","yeni kurs altbaşlık 1","1.jpg","10.10.2023");
kursEkle($kurslar,"yeni kurs 2","yeni kurs altbaşlık 2","1.jpg","10.10.2023");





?>

<?php

    include "partials/header.php";
?>
<?php       include "partials/navbar.php"; ?>


<?php 
    if($_SERVER["REQUEST_METHOD"] =="POST"){
        $username=$_POST["username"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $repassword=$_POST["reepassword"];
        $city=$_POST["city"];
        $hobiler=$_POST["hobiler"];

        echo $username."</br>".$email."</br>".$password."</br>".$repassword."</br>".$city."</br>";
        foreach ($hobiler as $hobi)
        {
           echo $hobi."</br>";
        }
        echo" <pre>"; print_r($_POST);
        echo" </pre>";
    }

?>


    <div class="container my-3">
        <div class="row">
       
        <div class="col-12">
                <form action="register.php" method="post">
                    <div class="mb-3">
                        <label for="username">Kullanıcı Adı :</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email">Eposta :</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password">Parola :</label>
                        <input type="text" name="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="repassword">Parola Tekrar :</label>
                        <input type="text" name="repassword" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="hobiler">Hobiler</label>
                        <div class="form-check">
                            <input type="checkbox" name="hobiler[]" value="spor" id="hobiler_0">
                            <label for="hobiler_0" class="form-check-label">Spor</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="hobiler[]" value="sinema" id="hobiler_2">
                            <label for="hobiler_1" class="form-check-label">Sinema</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="repassword">Parola Tekrar :</label>
                        <input type="text" name="repassword" class="form-control">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Kayıt Ol</button>
                </form>
        </div>
            
    </div>    
</div> 

<?php

include "partials/footer.php"

?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
