<?php

require "libs/variables.php";
require "libs/functions.php";

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == db_user["username"] && $password == db_user["password"]) {
        setcookie("auth[username]", db_user["username"], time() + (60 * 60 * 24 * 30));
        setcookie("auth[name]", db_user["name"], time() + (60 * 60 * 24 * 30));
        header("Location:index.php");
    } else {
        echo "<div class='alert alert-danger mb-0 text-center'>Yanlış username ya da parola</div> ";
    }
}
?>
<?php

include "partials/header.php";
?>
<?php include "partials/navbar.php"; ?>


<div class="container my-3">
    <div class="row">

        <div class="col-12">
            <form action="login.php" method="post">
                <div class="mb-3">
                    <label for="username">Kullanıcı Adı :</label>
                    <input type="text" name="username" class="form-control">

                </div>

                <div class="mb-3">
                    <label for="password">Parola :</label>
                    <input type="password" name="password" class="form-control">

                </div>
                <button type="submit" class="btn btn-primary" name="login">Login </button>
            </form>
        </div>

    </div>
</div>

<?php

include "partials/footer.php"

?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>