<?php
function list_peu_risque($db) {

        $sql = "select * from patient_symptoms where result = '2' ";
        
        $requete = $db->prepare($sql);
        $requete->execute();
        
        return $requete;
        }


function list_pas_risque($db) {

        $sql = "select * from patient_symptoms where result = '1' ";
            
        $requete = $db->prepare($sql);
        $requete->execute();
            
        return $requete;
    }

    function list_risque($db) {

        $sql = "select * from patient_symptoms where result = '3' ";
            
        $requete = $db->prepare($sql);
        $requete->execute();
            
        return $requete;
    }

    function risque_dernier_mois($db) {

        $sql = " SELECT *
        FROM patient_symptoms
        WHERE (datet BETWEEN '2022-07-01 00:00:00' AND '2022-08-01 00:00:00') and result = '3'";
            
        $requete = $db->prepare($sql);
        $requete->execute();
            
        return $requete;
    }

    function risque_dernier_annee($db) {

        $sql = " SELECT *
        FROM patient_symptoms
        WHERE (datet BETWEEN '2022-01-01 00:00:00' AND '2023-01-01 00:00:00') and result = '3'";
            
        $requete = $db->prepare($sql);
        $requete->execute();
            
        return $requete;
    }