<?php

$manager = new Manager($db);

$operatorTour = $manager->getOperatorTour(intval($_GET['idOperator']));

$reviews = $manager->getReview($operatorTour->getId());


?>
    <h1 class="op-name"><?=$operatorTour->getName()?></h1>

    
            <?php
            for ($i=0; $i < count($reviews); $i++) { ?>

        <div class="container-reviews">
            <div class="card text-center col-6 lg-3 m-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $reviews[$i]->getAuthor();?></h5>
                    <p class="card-text"><?= $reviews[$i]->getMessage()?> </p>
                </div>
            </div>
        </div>
        <?php 
        }
        ?>

    