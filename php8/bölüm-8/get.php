<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

if($_GET){
    $query = $_GET['q'];
    $category = $_GET['category'];
    
    echo $query;
    echo "<br>";
    echo $category;
}
?>
<h1>Diğer sayfadaki get işlemi</h1>
   <form action="yazdir.php">
        <input type="text" name="q" >
        <input type="text" name="category" >
        <button type="submit">Gönder</button>
    

   </form> 

</br>

</br>
<h1>Aynı sayfa içerisindeki get işlemi</h1>
   <form action="get.php">
        <input type="text" name="q" >
        <input type="text" name="category" >
        <button type="submit">Gönder</button>
    

   </form> 

</body>
</html>