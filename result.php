<?php

session_start();

if ($_SESSION['current_step']=='final') {

    include ('modal/result_generator.php');

    //result_generator object create
    $resultObj = new results();

    $response_array = $_SESSION['res'];

    $result = $resultObj->result_generate($response_array);



    // database connect
    include ("modal/database.php");
    $db = db_connect();

    //user object create
    include ("modal/user.php");
    $patient = new patient_symptoms();

// update result patient_symptoms  ///////////////////////////////////////////////////////////
    $symptoms = $patient->update('result',$result,$_SESSION['current_sign'],$db);


    if ($_SESSION && $result==0) {

        get_result_content('r0');

    }
    else if ($_SESSION && $result==1) // une auto-surveillance.
    {
        get_result_content('r1');
    }
    else if ($_SESSION && $result==2) // avis médical est nécessaire.
    {
        get_result_content('r2');
    }
    else if ($_SESSION && $result==3) // une prise en charge rapide.
    {
        get_result_content('r3');
    }
    else
    {
        header('Location: test_init.php');
    }

//session_destroy();


}else
{
    header('Location: test_init.php');
}


function get_result_content($fcontent) {

    $file = "views/".$fcontent.".php";


    if (file_exists($file)) {

        include("views/layout/header.php");

        include("views/layout/step3.php");

        include($file);

        include("views/layout/footer.php");

    }
    else {

        echo ("<h2>Page doesn't Exist</h2>");
        echo ("<script>setTimeout(function(){ document.location.href='index'}, 3000);</script>");

    }
}



