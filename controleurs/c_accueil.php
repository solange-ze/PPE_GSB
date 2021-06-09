<?php
/**
 * Gestion de l'accueil
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Solange Zerbib
 */

$estVisiteurConnecte = estVisiteurConnecte();
$estComptableConnecte = estComptableConnecte();
$estPatronConnecte = estPatronConnecte();

if ($estVisiteurConnecte) {
include
   'vues/v_accueilVisiteur.php';
}
 elseif
   ($estComptableConnecte){
    include 'vues/v_accueilComptable.php';
} 
elseif
   ($estPatronConnecte){
    include 'vues/v_accueilPatron.php';
} 
else {
   include 'vues/v_connexion.php';
}