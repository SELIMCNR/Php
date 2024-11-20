<?php 

require "libs/variables.php";
require "libs/functions.php";





?>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"] ?? '';
    $subtitle = $_POST["subtitle"] ?? '';
    $image = $_POST["image"] ?? '';
    $dateAdded = $_POST["dateAdded"] ?? '';

    if (!empty($title) && !empty($subtitle) && !empty($image) && !empty($dateAdded)) {
        kursEkle($kurslar, $title, $subtitle, $image, $dateAdded);
    } else {
        echo "Tüm alanları doldurun!";
    }
}

  
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
