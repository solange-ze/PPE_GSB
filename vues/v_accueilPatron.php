<?php
/**
 * Vue Accueil
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Solange Zerbib
 */
?>
<div id="accueil">
    <h2>
        Gestion des employés <small> - Patron : 
            <?php 
            echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']
            ?></small>
    </h2>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-secondary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span class="glyphicon glyphicon-bookmark"></span>
                    Navigation
                </h3>
            </div><br>
            <div class="panel-secondary">
                <div class="row">
                    <div class="col-xs-12 col-md-12">&nbsp;
                        <a href="index.php?uc=voirComptables&action=afficherComptables"
                           class="btn btn-success btn-lg" role="button">
                            <span class="glyphicon glyphicon-ok"></span>
                            <br>Voir les comptables</a>
                        
                    </div>
                </div><br>
            </div>
        </div>
    </div>
</div>
