<?php
    include('../php/db.inc'); // On se connecte à la BDD

    $sql = "SELECT * FROM `searchengine` ORDER BY `title` ASC";
    $requete = $bdd->prepare($sql);
    $requete->execute();
    $listEngines = array();

    while ($row = $requete->fetch())
    { 
        $data = array();
        $data['id'] = $row['id'];
        $data['title'] = $row['title'];
        $data['icon'] = 'res/img/motors/' . $row['icon'];
        $data['prefix'] = $row['prefix'];
        $data['suffix'] = $row['suffix'];
        $listEngines[] = $data;
    }

    echo json_encode($listEngines);

?>