<?php
require "libs/variables.php";
require "libs/functions.php";

session_start();
if (isset($_SESSION["message"])) {
    echo "<div class='alert alert-danger mb-0 text-center'>" . $_SESSION["message"] . "</div>";
    unset($_SESSION["message"]);
}

?>

<?php
/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $subtitle = $_POST["subtitle"];
    $image = $_POST["image"];
    $dateAdded = $_POST["dateAdded"];

    kursEkle($kurslar, $title, $subtitle, $image, $dateAdded);
}*/
?>

<?php include "partials/header.php" ?>
<?php include "partials/navbar.php" ?>

<div class="container my-3">

    <div class="row">
        <div class="col-3">
            <?php include "partials/menu.php" ?>
        </div>
        <div class="col-9">
            <?php include "partials/title.php" ?>
            <?php include "partials/courses.php" ?>
        </div>
    </div>

</div>
<?php include "partials/footer.php" ?>