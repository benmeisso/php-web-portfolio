<?php

$data = require ('data/gallery.php');


/**
 *Trouve une photo par son id.
 *
 * @param $id de la photo recherchée.
 *
 *
 * @return bool/array renvoie le tableau php correspondant a la photo.
 */
function findOneById( $id){
        //importer les infos sur les photos
        global $data;
        //pour chaque photo
        foreach ($data as $photo) {
            // si $id est egale à d'identifiant ('id') de la photo
            if ($id == $photo ['id']) {
                // Renvoyer un tableau correspondant a l'id de la photo
                return $photo;
            }
        }
        //introuvable
        return false;
}
function getCount(){
    global $data;

    foreach ($data as $i => $photo) {
    }
    return $i+1;
}
function findPaged($limit, $offset = 0){
    global $data;

    $i = 0;
    $result = [];
    foreach ($data as $j =>$photo){
        if($j >= $offset){
            if ($i != $limit){
                $result[] = $photo;
                $i++;
            }
        }
    }
    return $result;
}
function AfficherTabDeTab($tabdetab){
    foreach ($tabdetab as $photo)
    {
        foreach ($photo as $info)
        {
            echo "$info\n";
        }
    }
}

function findLatest($limit){
    global $data;

    $i = 0;
    $result = [];
    foreach($data as $key => $value) {
        $date[$key] = $value['date'];
    }
    array_multisort($date, SORT_DESC, $data);
    foreach($data as $photo)
        if($i != $limit){
            $result[] = $photo;
            $i++;
        }
    return $result;
}
?>