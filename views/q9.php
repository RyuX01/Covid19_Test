

<form method="post" class="question-form" id="question-form">
    <div class="question">
        <div class="question-header">
            <a href="javascript:history.back()">
                <img src="public/img/icon/icon-chevron-right.svg" alt="Retour à la question
                      précédente">
                &nbsp;
                Question 9 sur 22
            </a>
        </div>
        <p class="question-title">
            Ces dernières 24 heures, avez-vous noté un manque de souffle inhabituel lorsque vous parlez ou faites un petit effort ?
        </p>

        <p class="question-options-indication">Sélectionnez une option :</p>

        <div class="question-options">
            <div class="flex-direction-row">
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_breathlessness-on" name="step_value" value="1" required="">
                    <label for="input-radio-step_breathlessness-on">
                        Oui
                        <span class="hover-border"></span>
                    </label>

                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_breathlessness-off" name="step_value" value="0" required="">
                    <label for="input-radio-step_breathlessness-off">
                        Non
                        <span class="hover-border"></span>
                    </label>

                </div>
            </div>
        </div>

        <input type="hidden" name="current_step" value="step_breathlessness">
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
                <img src="public/img/icon/Manque_souffle.svg" alt="Icone manque de souffle">
            </div>
            <div class="banner-form-informations">
                <p class="banner-form-title">Le manque de souffle</p>
                <p>Un manque de <b>souffle est inhabituel</b>,</p>
                <p>quand vous avez plus de mal à respirer que les autres jours.</p>
                <p>Par exemple vous êtes plus essouflé quand vous parlez</p>
                <p>ou quand vous montez l'escalier.</p>
            </div>
        </div>

        <div class="banner-form-facl-logo">
            <img src="public/img/icon/logo-falc-officiel.svg" alt="logo falc">
        </div>

    </div>

</form>
