<?php

class results
{


    public function result_generate($data)
    {


        $result = 0;

        $symtoms = 0;
        $imc = 0;
        $immunity = 0;

        // fever test
        if ($data['step_fever_details'] > 38) $step_fever_details = 1; else $step_fever_details = 0;

        // step_tiredness_detail test
        if (isset($data['step_tiredness_details'])) $step_tiredness_details = 1; else $step_tiredness_details = 0;


        if ($data['step_heart_disease'] == 999) $data['step_heart_disease'] = 0;
        if ($data['step_pregnant'] == 888 || $data['step_pregnant'] == 999) $data['step_pregnant'] = 0;
        if ($data['step_immunocompromised'] == 999) $data['step_immunocompromised'] = 0;
        if ($data['step_immunosuppressant'] == 999) $data['step_immunosuppressant'] = 0;


        //if le tableau est complet /// manquante
        $symtoms = $symtoms + $step_fever_details + $data['step_cough'] + $data['step_smell'] + $data['step_aches'] + $data['step_diarrhea'] + $data['step_tiredness'] + $step_tiredness_details + $data['step_feeding'] + $data['step_breathlessness'] ;

        $immunity = $immunity + $data['step_heart_disease'] + $data['step_diabetes'] + $data['step_cancer'] + $data['step_breathing_disease'] + $data['step_kidney_disease'] + $data['step_liver_disease'] + $data['step_pregnant'] + $data['step_immunocompromised'] + $data['step_immunosuppressant'] ;

        $imc = ($data['step_weight'] / $data['step_height'] )*10000;
/*
        echo ('$symtoms'.$symtoms);
        echo ('$immunity'.$immunity);*/
//        print_r($data) ;

        if ($data['step_fever_details'] < 38 && $symtoms==0) {

            $result = 0;


        }
        else if ($symtoms==1 && $immunity == 0) {

            $result = 1;


        }
        else if (($symtoms > 1 && $symtoms <= 7) || ($symtoms==1 && $immunity > 0)) {

            $result = 2;


        }
        else if ($symtoms > 7)  {

            $result = 3;



        }


        return $result;


    }


}
