<?php

require "libs/variables.php";
require "libs/functions.php";

sort($kategoriler);






?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $subtitle = $_POST["subtitle"];
    $image = $_POST["image"];
    $dateAdded = $_POST["dateAdded"];

    kursEkle($title, $subtitle, $image, $dateAdded, 0, 0, true);

    header("Location: index.php");
}


?>




<?php

include "partials/header.php";
?>
<?php include "partials/navbar.php"; ?>


<div class="container my-3">
    <div class="row">

        <div class="col-12">

            <form action="create.php" method="post">
                <div class="mb-3">
                    <label for="title">Başlık</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="subtitle">Alt Başlık</label>
                    <input type="text" name="subtitle" id="subtitle" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="image">Resim</label>
                    <input type="text" name="image" id="image" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="dateAdded">Eklenme Tarihi</label>
                    <input type="text" name="dateAdded" id="dateAdded" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </form>

        </div>

    </div>
</div>

<?php

include "partials/footer.php"

?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>