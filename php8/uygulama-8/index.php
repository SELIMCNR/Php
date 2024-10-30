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


    <div class="container my-3">
        <div class="row">
        <div class="col-3">
        <?php
    include "partials/menu.php"
        ?>


        </div>
      <div class="col-9">
      <?php
    include "partials/title.php"
        ?>
        
         <?php
    include "partials/courses.php"
        ?>

    </div>
            
    </div>    
</div> 
   
<?php

include "partials/footer.php"

?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
