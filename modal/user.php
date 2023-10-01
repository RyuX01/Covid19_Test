<?php


class patient_symptoms
{
    private $current_sign;
    private $step_fever_details;
    private $step_cough;
    private $step_smell;
    private $step_aches;
    private $step_diarrhea;
    private $step_tiredness;
    private $step_tiredness_details;
    private $step_feeding;
    private $step_breathlessness;
    private $step_age;
    private $step_height;
    private $step_weight;
    private $step_heart_disease;
    private $step_diabetes;
    private $step_cancer;
    private $step_breathing_disease;
    private $step_kidney_disease;
    private $step_liver_disease;
    private $step_pregnant;
    private $step_immunocompromised;
    private $step_immunosuppressant;
    private $step_postal_code;
    private $result;
    private $datet;

    public function insert($key_insert,$data_insert, $ConnectPdo)
    {
//        $requete = $ConnectPdo->prepare("insert into patient_symptoms :key_insert VALUES :data_insert");

        $requete = $ConnectPdo->prepare("insert into patient_symptoms ".$key_insert." VALUES ".$data_insert);


        /*        $requete->bindvalue(':key_insert', $key_insert);
                $requete->bindvalue(':data_insert', $data_insert);*/


//        $requete = $ConnectPdo->prepare("insert into patient_symptoms (current_sign,step_fever_details,step_cough,step_smell,step_aches,step_diarrhea,step_tiredness,step_tiredness_details,step_feeding,step_breathlessness,step_age,step_height,step_weight,step_heart_disease,step_diabetes,step_cancer,step_breathing_disease,step_kidney_disease,step_liver_disease,step_pregnant,step_immunocompromised,step_immunosuppressant,step_postal_code) values ('RKWA84g1CTJOnFZD7eqmkoN9l2hajcSxrb0VBMLwQ3yIz6GUsi',34.2,0,1,0,1,0,1,0,1,2,80,20,999,0,0,1,1,1,0,999,0,1000)");

        $requete->execute();

//        $data = $requete->fetch();

        return $requete;
    }

    public function listp($patient_symptoms, $ConnectPdo)
    {
        $requete = $ConnectPdo->prepare('select * from patient_symptoms');

        $requete->execute();

        $data = $requete->fetch();

        print json_encode($data);

        return $data;
    }


    public function update($key_update,$data_update,$current_sign, $ConnectPdo)
    {

        $requete = $ConnectPdo->prepare("update patient_symptoms set ".$key_update." = ".$data_update." where current_sign='".$current_sign."'");

        $requete->execute();

        return $requete;
    }


}



