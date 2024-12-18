<?php

// arama kısmı php
if (!empty($_GET['q'])) {
    $keyword = $_GET['q'];

    $kurslar =  array_filter($kurslar, function ($kurs) use ($keyword) {

        return stristr($kurs['baslik'], $keyword) or (stristr($kurs['baslik'], $keyword));
    });
}

?>

<nav class="navbar navbar-expand-lg bg-primary navbar-dark">

    <div class="container">
        <a href="/" class="navbar-brand">CourseApp</a>

        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a href="index.php" class="nav-link active">Anasayfa</a>
            </li>
            <li class="nav-item">
                <a href="create.php" class="nav-link">Kurs ekle</a>
            </li>
        </ul>


        <ul class="navbar-nav me-2">
            <?php if (isset($_COOKIE["auth"])): ?>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">Logout</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">Hoş geldiniz , <?php echo $_COOKIE["auth"]["name"] ?></a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="register.php" class="nav-link">Register</a>
                </li>
            <?php endif; ?>
        </ul>
        <form class="d-flex" action="index.php" method="get">
            <input type="text" name="q" class="form-control me-2" placeholder="Keyword">
            <button type="submit" class="btn btn-warning"> Ara</button>
        </form>
    </div>


</nav>