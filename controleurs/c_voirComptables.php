<?php

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
switch ($action) {
case 'tableauComptables':
    $pdo->voirComptables();
    include 'vues/v_afficheComptables.php';
     $voirLesComptables=$pdo->voirComptables();
        $lesCles1=array_keys($comptable);
        $comptableASelectionner=$lesCles1[0];
        $lesMois = getLesDouzeDerniersMois($mois);
        $lesCles2=array_keys($lesMois);
        $moisASelectionner=$lesCles2[0];
        if($fichesCL){
            include include 'vues/v_afficheComptables.php';
        }
        else{
            $pdo->clotureFiches($moisPrecedent);
            include 'vues/v_listeVisiteursMois.php';
            
break;
}