

<form method="post" class="question-form" id="question-form">
    <div class="question">
        <div class="question-header">
            <a href="javascript:history.back()">
                <img src="public/img/icon/icon-chevron-right.svg" alt="Retour à la question
                      précédente">
                &nbsp;
                Question 5 sur 22
            </a>
        </div>
        <p class="question-title">
            Ces dernières 24 heures, avez-vous de la diarrhée ? <br> Avec au moins 3 selles molles.
        </p>

        <p class="question-options-indication">Sélectionnez une option :</p>

        <div class="question-options">

            <div class="flex-direction-row">
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_diarrhea-on" name="step_value" value="1" required="">
                    <label for="input-radio-step_diarrhea-on">
                        Oui
                        <span class="hover-border"></span>
                    </label>

                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_diarrhea-off" name="step_value" value="0" required="">
                    <label for="input-radio-step_diarrhea-off">
                        Non
                        <span class="hover-border"></span>
                    </label>

                </div>
            </div>

        </div>

        <input type="hidden" name="current_step" value="step_diarrhea">
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
                <img src="public/img/icon/Diarrhee.svg" alt="Icone diarrhee">
            </div>
            <div class="banner-form-informations">
                <p class="banner-form-title">La diarrhée</p>
                <p>La <b>diarrhée</b>, c'est aller aux toilettes plus souvent que d'habitude.</p>
                <p>Il faut être allé aux toilettes au moins 3 fois dans la journée.</p>
                <p>La consistance de votre caca est molle ou liquide.</p>
                <p>La quantité est plus importante.</p>
            </div>
        </div>

        <div class="banner-form-facl-logo">
            <img src="public/img/icon/logo-falc-officiel.svg" alt="logo falc">
        </div>

    </div>

</form>
