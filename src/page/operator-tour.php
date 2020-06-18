
<?php

    $tourOperator =  $_GET['operatorTour'];
    $operatorTour = new Manager($db);
     echo '<br>';
         $test  = $operatorTour->getOperatorTour($tourOperator); 
         $destination = $operatorTour->getListDestination();

?>
 <?php 
    if (isset($_POST['destinationName']) && isset($_POST['destinationPrice']) ) {

        $addDestination = new Destination([  "location" => $_POST['destinationName'], 
                                    "price" => $_POST['destinationPrice'],
                                    "id_tour_operator"=> $test->getId() ]);
                                    
        $operatorTour->addDestination($addDestination);
    }
?>
<div class="compagnies-content text-center">
        
        <h3>Ajouter une destination :</h3>
        <form class="opperateur-input" action="" method="Post">
            <input type="text" name="destinationName" id="destinationName" placeholder="Nom de la destination">
            <br> 
            <input type="number" name="destinationPrice" id="destinationPrice" placeholder="Prix de la destination">
            <br>
                <p>Partager une photo :</p> 
                <input type="file" name="file">  
            <br>
            <button type="submit" class="btn btn-outline-primary">Ajouter</button>
        </form>


    </div>
<div class="text-center">
    <h3><?=$test->getName()?></h3>
</div>

<div class="pub-premium">
    <div class="card-pub">
        <div class="card-body">
            <h5 class="card-title">Formule</h5>
            <p class="card-text">
                <span class="titre-pub">Formule Standard</span>
                <br>
                <ul>
                    <li>Placement de vos annonces en haut de page</li>
                    <li>Assistance 24h/24 en semaine par e-mail ou par téléphone</li>
                    <li>Calendrier synchronisé avec vos autres sites</li>
                </ul>
                <div class="text-pub">
                    <p>29 , 99 € / mois</p>
                </div>
            </p>
            <button type="submit" class="btn btn-outline-primary">Selectionner</button>
        </div>
    </div>

    <div class="pub-premiumx">
        <div class="card-pub">
            <div class="card-body">
                <h5 class="card-title">Formule</h5>
                <p class="card-text">
                <span class="titre-pub">Formule Premium</span>
                    <br>
                    <ul>
                        <li>Placement de vos annonces tête de page</li>
                        <li>Assistance 24h/24 et 7j/7 par e-mail ou par téléphone</li>
                        <li>Calendrier synchronisé avec vos autres sites</li>
                        <li>Placement des annonces dans la liste des recommandation</li>
                    </ul>
                    <div class="text-pub">
                        <p>49 , 99 € / mois</p>
                    </div>
                </p>
                <button type="submit" class="btn btn-outline-primary">Selectionner</button>
            </div>
        </div>
    </div>
</div>

<div class="destinations-cards row">    
    <?php  for ($i=0; $i <count($destination); $i++){?>
        <?php if ($destination[$i]->getIdTourOperator() == $test->getId()) {?>

           <div class="card text-center col-lg-3 m-2" style="width: 20rem;">
            <form method="post">
                <img src="./asset/img/11404_800x480.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?=$destination[$i]->getLocation()?></h5>
                    <p class="card-text"><?=$destination[$i]->getPrice()?>€</p>
                    <a href="<?= $test->getLink()?>" class="btn btn-primary">Site</a>  
                    <input type="text" name="destinationId" value='<?=$destination[$i]->getId() ?>' style="display: none">
                    <button type="submit" class="btn btn-danger">Supprimer</button>  
                </div>
        </form>
        </div> 
        
        
    <?php } }?>
<?php if (isset($_POST['destinationId'])) {
    $operatorTour->deleteDestination($_POST['destinationId']);
}?>
</div>

</div>