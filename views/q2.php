

<form method="post" class="question-form" id="question-form">
    <div class="question">
        <div class="question-header">
            <a href="javascript:history.back()">
                <img src="public/img/icon/icon-chevron-right.svg" alt="Retour à la question
                      précédente">
                &nbsp;
                Question 2 sur 22
            </a>
        </div>




        <p class="question-title">
            Ces derniers jours, avez-vous une toux ou une augmentation de votre toux habituelle ?
        </p>

        <p class="question-options-indication">Sélectionnez une option :</p>

        <div class="question-options">

            <div class="flex-direction-row">
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_cough-on" name="step_value" value="1" required="">
                    <label for="input-radio-step_cough-on">
                        Oui
                        <span class="hover-border"></span>
                    </label>

                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_cough-off" name="step_value" value="0" required="">
                    <label for="input-radio-step_cough-off">
                        Non
                        <span class="hover-border"></span>
                    </label>

                </div>
            </div>


        </div>



        <input type="hidden" name="current_step" value="step_cough">
        <input type="hidden" name="current_sign" value="">
        <input type="hidden" name="current_question_number" value="">




    </div>



    <div class="question-submit">

        <button class="button button-primary">

            Enregistrer et continuer

        </button>

    </div>



    <div class="banner-form">





        <div class="banner-form-row">
            <div class="banner-form-icon">
                <img src="public/img/icon/Toux.svg" alt="Icone toux">
            </div>
            <div class="banner-form-informations">
                <p class="banner-form-title">La toux</p>

                <p>Une augmentation de votre <b>toux</b> veut dire</p>

                <p>que vous toussez plus que d'habitude.</p>

            </div>
        </div>

        <div class="banner-form-facl-logo">
            <img src="public/img/icon/logo-falc-officiel.svg" alt="logo falc">
        </div>

    </div>


</form>
