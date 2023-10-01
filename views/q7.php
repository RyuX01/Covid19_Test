

<form method="post" class="question-form" id="question-form">
    <div class="question">
        <div class="question-header">
            <a href="javascript:history.back()">
                <img src="public/img/icon/icon-chevron-right.svg" alt="Retour à la question
                      précédente">
                &nbsp;
                Question 7 sur 22
            </a>
        </div>
        <p class="question-title">
            Cette fatigue vous oblige-t-elle à vous reposer plus de la moitié de la journée ?
        </p>

        <p class="question-options-indication">Sélectionnez une option :</p>

        <div class="question-options">

            <div class="flex-direction-row">
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_tiredness_details-on" name="step_value" value="1" required="">
                    <label for="input-radio-step_tiredness_details-on">
                        Oui
                        <span class="hover-border"></span>
                    </label>

                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_tiredness_details-off" name="step_value" value="0" required="">
                    <label for="input-radio-step_tiredness_details-off">
                        Non
                        <span class="hover-border"></span>
                    </label>

                </div>
            </div>
        </div>

        <input type="hidden" name="current_step" value="step_tiredness_details">
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
                <img src="public/img/icon/Repos_journee.svg" alt="Icone repos">
            </div>
            <div class="banner-form-informations">
                <p class="banner-form-title">Le repos</p>
                <p>La <b>fatigue</b> que vous ressentez est tellement importante</p>
                <p>que vous avez besoin de vous <b>reposer</b> souvent.</p>
                <p>Vous vous reposez la moitié de la journée.</p>
            </div>
        </div>

        <div class="banner-form-facl-logo">
            <img src="public/img/icon/logo-falc-officiel.svg" alt="logo falc">
        </div>

    </div>

</form>
