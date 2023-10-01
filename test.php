
<?php
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire'); // works
session_start();

//print_r($_SESSION['res']);

//    if ()

//if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if (isset($_SESSION['current_sign'])) // existing seesion
    {

//        print_r($_SESSION);

        if (isset($_POST['current_step']) || isset($_POST['step_value'])) { //step value == reponse patient  // current step == le nom de l'etap

            if ($_POST['current_step'] == 'step_1')
            {
//                session_destroy();
                step_init('q1',null,'step_fever_details',1);

            }
            else if ($_POST['current_step'] == 'step_fever_details')
            {
                $_SESSION['res'][$_POST['current_step']]=$_POST['step_value'];
                step_init('q2',null,'step_cough',1);

            }
            else if ($_POST['current_step'] == 'step_cough')
            {
                $_SESSION['res'][$_POST['current_step']]=$_POST['step_value'];
                step_init('q3',null,'step_smell',1);

            }
            else if ($_POST['current_step'] == 'step_smell')
            {
                $_SESSION['res'][$_POST['current_step']]=$_POST['step_value'];
                step_init('q4',null,'step_aches',1);

            }
            else if ($_POST['current_step'] == 'step_aches')
            {
                $_SESSION['res'][$_POST['current_step']]=$_POST['step_value'];
                step_init('q5',null,'step_diarrhea',1);

            }
            else if ($_POST['current_step'] == 'step_diarrhea')
            {
                $_SESSION['res'][$_POST['current_step']]=$_POST['step_value'];
                step_init('q6',null,'step_tiredness',1);

            }
            else if ($_POST['current_step'] == 'step_tiredness')
            {
                if ($_POST['step_value'] == 1){
                    $_SESSION['res'][$_POST['current_step']]=$_POST['step_value'];
                    step_init('q7',null,'step_tiredness_details',1);
                }
                else {
                    $_SESSION['res'][$_POST['current_step']]=$_POST['step_value'];
                    step_init('q8',null,'step_feeding',1);
                }


            }
            else if ($_POST['current_step'] == 'step_tiredness_details')
            {
                $_SESSION['res'][$_POST['current_step']]=$_POST['step_value'];
                step_init('q8',null,'step_feeding',1);

            }
            else if ($_POST['current_step'] == 'step_feeding')
            {
                $_SESSION['res'][$_POST['current_step']]=$_POST['step_value'];
                step_init('q9',null,'step_breathlessness',1);

            }
            else if ($_POST['current_step'] == 'step_breathlessness')
            {
                $_SESSION['res'][$_POST['current_step']]=$_POST['step_value'];
                step_init('q10',null,'step_age',1);

            }
            else if ($_POST['current_step'] == 'step_age')
            {
                $_SESSION['res'][$_POST['current_step']]=$_POST['step_value'];
                step_init('q11',null,'step_height',1);

            }
            else if ($_POST['current_step'] == 'step_height')
            {
                $_SESSION['res'][$_POST['current_step']]=$_POST['step_value'];
                step_init('q12',null,'step_weight',1);

            }
            else if ($_POST['current_step'] == 'step_weight')
            {
                $_SESSION['res'][$_POST['current_step']]=$_POST['step_value'];
                step_init('q13',null,'step_heart_disease',1);

            }
            else if ($_POST['current_step'] == 'step_heart_disease')
            {
                $_SESSION['res'][$_POST['current_step']]=$_POST['step_value'];
                step_init('q14',null,'step_diabetes',1);

            }
            else if ($_POST['current_step'] == 'step_diabetes')
            {
                $_SESSION['res'][$_POST['current_step']]=$_POST['step_value'];
                step_init('q15',null,'step_cancer',1);

            }
            else if ($_POST['current_step'] == 'step_cancer')
            {
                $_SESSION['res'][$_POST['current_step']]=$_POST['step_value'];
                step_init('q16',null,'step_breathing_disease',1);

            }
            else if ($_POST['current_step'] == 'step_breathing_disease')
            {
                $_SESSION['res'][$_POST['current_step']]=$_POST['step_value'];
                step_init('q17',null,'step_kidney_disease',1);

            }
            else if ($_POST['current_step'] == 'step_kidney_disease')
            {
                $_SESSION['res'][$_POST['current_step']]=$_POST['step_value'];
                step_init('q18',null,'step_liver_disease',1);

            }
            else if ($_POST['current_step'] == 'step_liver_disease')
            {
                $_SESSION['res'][$_POST['current_step']]=$_POST['step_value'];
                step_init('q19',null,'step_pregnant',1);

            }
            else if ($_POST['current_step'] == 'step_pregnant')
            {
                $_SESSION['res'][$_POST['current_step']]=$_POST['step_value'];
                step_init('q20',null,'step_immunocompromised',1);

            }
            else if ($_POST['current_step'] == 'step_immunocompromised')
            {
                $_SESSION['res'][$_POST['current_step']]=$_POST['step_value'];
                step_init('q21',null,'step_immunosuppressant',1);

            }
            else if ($_POST['current_step'] == 'step_immunosuppressant')
            {
                $_SESSION['res'][$_POST['current_step']]=$_POST['step_value'];
                step_init('q22',null,'step_postal_code',1);

            }
            else if ($_POST['current_step'] == 'step_postal_code')
            {
                if ($_POST['step_value'] >= 1000) {
                    $_SESSION['res'][$_POST['current_step']]=$_POST['step_value'];
                }

//                include ('modal/response_saver.php');
                $_SESSION['current_step']='final';
                header("location:modal/response_saver.php");

            }

        }
        else {

            //  echo ("<script>if (confirm('êtes-vous sûr de vouloir quitter le test !')) { } alert('ok');</script>");
            get_content("test_init");


        }

    }
    else // no seesion
    {
        if (isset($_POST['current_step']) || isset($_POST['step_value'])) { //step value == reponse patient  // current step == le nom de l'etap

            if ($_POST['current_step'] == 'step_1')
            {

                $_SESSION['res']=array();

                $current_sign_init = generateRandomString(50);

                $_SESSION['res']['current_sign']="'".$current_sign_init."'";

                step_init('q1',$current_sign_init,'step_fever_details',0);


            }
        }
        else {

            //  echo ("<script>if (confirm('êtes-vous sûr de vouloir quitter le test !')) { } alert('ok');</script>");
            get_content("test_init");


        }

    }

    function generateRandomString($length) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

    function get_content($fcontent) {

        $file = "views/".$fcontent.".php"; //"views/q1.php";


        if (file_exists($file)) {

            include("views/layout/header.php");

            include("views/layout/step2.php");

            include($file);

            include("views/layout/footer.php");

        }
        else {
    //    include("views/error.php");

            echo ("<h2>Page doesn't Exist</h2>");
            echo ("<script>setTimeout(function(){ document.location.href='index'}, 3000);</script>");

        }
    }

    function step_init($fcontent,$current_sign,$current_step,$type) {



        if ($type == 0)
        {
            $_SESSION['current_sign']= $current_sign;
        }


        $_SESSION['current_step']=$current_step;

        get_content($fcontent);

        echo ("<script>document.getElementsByName('current_sign')[0].value='".$_SESSION['current_sign']."'</script>");

    }

/*
    function step_push($step_value) {

        array_push($_SESSION['res'],$step_value);

    }*/


/*
( [res] => Array (
[current_sign] => RKWA84g1CTJOnFZD7eqmkoN9l2hajcSxrb0VBMLwQ3yIz6GUsi
[step_fever_details] => 34.5
[step_cough] => 0
[step_smell] => 0
[step_aches] => 1
[step_diarrhea] => 0
[step_tiredness] => 0
[step_tiredness_details] => 1
[step_feeding] => 0
[step_breathlessness] => 1
[step_age] => 25
[step_height] => 180
[step_weight] => 80
[step_heart_disease] => 999
[step_diabetes] => 1
[step_cancer] => 0
[step_breathing_disease] => 0
[step_kidney_disease] => 1
[step_liver_disease] => 0
[step_pregnant] => 0
[step_immunocompromised] => 1
[step_immunosuppressant] => 0 )
[step_postal_code] => 1000 )*/





