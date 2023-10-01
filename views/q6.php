

<form method="post" class="question-form" id="question-form">
    <div class="question">
        <div class="question-header">
            <a href="javascript:history.back()">
                <img src="public/img/icon/icon-chevron-right.svg" alt="Retour à la question
                      précédente">
                &nbsp;
                Question 6 sur 22
            </a>
        </div>
        <p class="question-title">
            Ces derniers jours, avez-vous une fatigue inhabituelle ?
        </p>

        <p class="question-options-indication">Sélectionnez une option :</p>

        <div class="question-options">

            <div class="flex-direction-row">
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_tiredness-on" name="step_value" value="1" required="">
                    <label for="input-radio-step_tiredness-on">
                        Oui
                        <span class="hover-border"></span>
                    </label>

                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_tiredness-off" name="step_value" value="0" required="">
                    <label for="input-radio-step_tiredness-off">
                        Non
                        <span class="hover-border"></span>
                    </label>

                </div>
            </div>

        </div>

        <input type="hidden" name="current_step" value="step_tiredness">
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
                <img src="public/img/icon/Fatigue.svg" alt="Icone fatigue">
            </div>
            <div class="banner-form-informations">
                <p class="banner-form-title">La fatigue inhabituelle</p>
                <p>La <b>fatigue inhabituelle</b>, c'est une forme de fatigue</p>
                <p>que vous n'avez pas l'habitude de ressentir.</p>
                <p>Votre corps est plus faible.</p>
                <p>Les douleurs liées à cette fatigue sont plus importantes.</p>
            </div>
        </div>

        <div class="banner-form-facl-logo">
            <img src="public/img/icon/logo-falc-officiel.svg" alt="logo falc">
        </div>

    </div>

</form>
