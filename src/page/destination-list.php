<?php

 $destination = new Manager($db);
 echo '<br>';
     $test =$destination->getOperatorTour(1);

?>

    <div class="text-destinations">
        <h1>L’organisation de votre voyage commence ici</h1>
        <p>Trouvez votre bonheur parmis nos annonces</p>
    </div>

    <div class="covid">
        <p>
            <img class="covid19" src="./asset/img/covid.png">
            COVID-19
            <br>
            <br>
            Guide de voyage
            <br>
            Tout ce que vous devez savoir pour
            <br>
            prendre les meilleures décisions de voyage.</p>
    </div>
    <div class="guide">
        <a class="btn btn-primary" href="https://www.kayak.fr/c/coronavirus-travel/" role="button">Voir le guide</a>
    </div>

    <div class="nav-selection">
        <div class="selection">
                <input type="text" placeholder="Opperateurs">
                <input type="text" placeholder="Destinations">
                <input type="number" placeholder="Tarifs">
                <a class="btn btn-primary" href="" role="button">Valider</a>
            </div>
        </div>
    </div>

    <div class="premium-cards">

    <?php  for ($i=0; $i <3; $i++):?>

        <div class="card text-center" style="width: 20rem;">
            <div class="col-12">
                <img src="./asset/img/11404_800x480.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">⭐ Premium</h5>
                    <p class="card-text">Opperateur Premium</p>
                    <a href="" class="btn btn-primary">Site web</a>  
                </div>
            </div>
        </div>
        <?php endfor ;?>
    </div>

    <div class="destinations-cards">
        <?php  for ($i=0; $i < $destination->countOperator(); $i++){
            $operatorTourList = $destination->getListOperatorTour();
            
           ?>
            <div class="card text-center " style="width: 20rem;">
                <img src="./asset/img/11404_800x480.jpg" class="card-img-top">
                <div class="card-body" >
                    <h5 class="card-title"><?=$destination[$i]->getLocation()?></h5>
                    <p class="card-text">Some quick example text to build.</p>
                    <a href="<?=$destination[$i]->getLink()?>" class="btn btn-primary">Site web</a>  
                    <form action="" method="post">
                        <input type="text" name="delete" value="<?= $destination[$i]->getId() ?>"  style="display: none;">
                    </form>
                </div>
            </div>
        <?php }?>
    </div>