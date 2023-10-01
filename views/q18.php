

<form method="post" class="question-form" id="question-form">
    <div class="question">
        <div class="question-header">
            <a href="javascript:history.back()">
                <img src="public/img/icon/icon-chevron-right.svg" alt="Retour à la question
                      précédente">
                &nbsp;
                Question 18 sur 22
            </a>
        </div>
        <p class="question-title">
            Avez-vous une maladie chronique du foie ?
        </p>

        <p class="question-options-indication">Sélectionnez une option :</p>

        <div class="question-options">
            <div class="flex-direction-row">
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_liver_disease-on" name="step_value" value="1" required="">
                    <label for="input-radio-step_liver_disease-on">
                        Oui
                        <span class="hover-border"></span>
                    </label>

                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_liver_disease-off" name="step_value" value="0" required="">
                    <label for="input-radio-step_liver_disease-off">
                        Non
                        <span class="hover-border"></span>
                    </label>

                </div>
            </div>
        </div>

        <input type="hidden" name="current_step" value="step_liver_disease">
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
                <img src="public/img/icon/Maladie_foie.svg" alt="Icon maladie foie">
            </div>
            <div class="banner-form-informations">
                <p class="banner-form-title">La maladie chronique du foie</p>
                <p>La <b>maladie chronique du foie</b>,</p>
                <p>c'est lorsque notre foie ou une partie de notre foie</p>
                <p>ne fonctionne plus.</p>
                <br>
                <p>Le foie nettoie le sang et donc le corps,</p>
                <p>et fabrique ce qui est essentiel pour la digestion</p>
                <p>et pour la bonne santé des muscles, de la peau, des os.</p>
                <p>Par exemple quand on boit beaucoup d'alcool</p>
                <p>ça peut abîmer notre foie.</p>
            </div>
        </div>

        <div class="banner-form-facl-logo">
            <img src="public/img/icon/logo-falc-officiel.svg" alt="logo falc">
        </div>

    </div>

</form>
