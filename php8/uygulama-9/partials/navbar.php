
<?php 

// arama kısmı php
    if (!empty($_GET['q'])){
        $keyword = $_GET['q'];

      $kurslar =  array_filter($kurslar,function($kurs) use($keyword){

            return stristr($kurs['baslik'],$keyword) or (stristr($kurs['baslik'],$keyword));

        });
        
    }

?>

<nav class="navbar navbar-expand-lg bg-primary navbar-dark">

<div class="container">
<a href="/" class="navbar-brand">CourseApp</a>

<ul class="navbar-nav me-auto">
    <li class="nav-item">
        <a href="/" class="nav-link active">Anasayfa</a>
    </li>
    <li class="nav-item">
        <a href="/" class="nav-link">Kurslar</a>
    </li>
</ul>
<form class="d-flex" action="index.php" method="get">
<input type="text" name="q" class="form-control me-2" placeholder="Keyword">
<button type="submit" class="btn btn-warning"> Ara</button>
</form>
</div>


</nav>