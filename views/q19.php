

<form method="post" class="question-form" id="question-form">
    <div class="question">
        <div class="question-header">
            <a href="javascript:history.back()">
                <img src="public/img/icon/icon-chevron-right.svg" alt="Retour à la question
                      précédente">
                &nbsp;
                Question 19 sur 22
            </a>
        </div>
        <p class="question-title">
            Êtes-vous enceinte ?
        </p>

        <p class="question-options-indication">Sélectionnez une option :</p>

        <div class="question-options">

            <div class="custom-control custom-radio">
                <input type="radio" id="input-radio--Oui" name="step_value" value="1" required="">
                <label for="input-radio--Oui">
                    Oui
                    <span class="hover-border"></span>
                </label>

            </div>

            <div class="custom-control custom-radio">
                <input type="radio" id="input-radio--Non" name="step_value" value="0" required="">
                <label for="input-radio--Non">
                    Non
                    <span class="hover-border"></span>
                </label>

            </div>

            <div class="custom-control custom-radio">
                <input type="radio" id="input-radio--Non applicable" name="step_value" value="888" required="">
                <label for="input-radio--Non applicable">
                    Non applicable
                    <span class="hover-border"></span>
                </label>

            </div>
        </div>

        <input type="hidden" name="current_step" value="step_pregnant">
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
                <img src="public/img/icon/Enceinte.svg" alt="Icon enceinte">
            </div>
            <div class="banner-form-informations">
                <p class="banner-form-title">Enceinte</p>
                <p>Une femme est <b>enceinte</b></p>
                <p>quand elle attend un bébé.</p>
            </div>
        </div>

        <div class="banner-form-facl-logo">
            <img src="public/img/icon/logo-falc-officiel.svg" alt="logo falc">
        </div>

    </div>

</form>
