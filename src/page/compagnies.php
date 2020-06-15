<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity=
    "sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../../asset/css/style-compagnies.css">
    <title>EasyTrip</title>
</head>
<body>

    <img class="img-home" src="../../asset/img/img-home.jpg">

    <?php
        include '../partials/header.php';
    ?>

    <div class="text-compagnies">
        <h1>Laissez parler le voyageur qui est en vous</h1>
        <p>Découvrez nos compagnies les plus populaires</p>
    </div>


    <div class="container-cards">
    <?php  for ($i=0; $i <6; $i++):?>

        <div class="card style="width: 20rem;">
            <img src="../../asset/img/11404_800x480.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>  
            </div>
        </div>
        <?php endfor ;?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>