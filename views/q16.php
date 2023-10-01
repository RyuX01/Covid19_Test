

<form method="post" class="question-form" id="question-form">
    <div class="question">
        <div class="question-header">
            <a href="javascript:history.back()">
                <img src="public/img/icon/icon-chevron-right.svg" alt="Retour à la question
                      précédente">
                &nbsp;
                Question 16 sur 22
            </a>
        </div>
        <p class="question-title">
            Avez-vous une maladie respiratoire ? <br> Ou êtes-vous suivi par un pneumologue ?
        </p>

        <p class="question-options-indication">Sélectionnez une option :</p>

        <div class="question-options">

            <div class="flex-direction-row">
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_breathing_disease-on" name="step_value" value="1" required="">
                    <label for="input-radio-step_breathing_disease-on">
                        Oui
                        <span class="hover-border"></span>
                    </label>

                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_breathing_disease-off" name="step_value" value="0" required="">
                    <label for="input-radio-step_breathing_disease-off">
                        Non
                        <span class="hover-border"></span>
                    </label>

                </div>
            </div>

        </div>

        <input type="hidden" name="current_step" value="step_breathing_disease">
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
                <img src="public/img/icon/Maladie_respiratoire.svg" alt="Icon maladie respiratoire">
            </div>
            <div class="banner-form-informations">
                <p class="banner-form-title">La maladie respiratoire</p>
                <p>Une <b>maladie respiratoire</b>, c'est une maladie</p>
                <p>qui empêche de bien respirer.</p>
                <p>Cette maladie touche les organes</p>
                <p>qui sont nécessaires pour la respiration</p>
                <p>comme les poumons.</p>
                <p>Par exemple, on est vite essouflé</p>
                <p>quand on fait du sport et on tousse.</p>
            </div>
        </div>

        <div class="banner-form-row">
            <div class="banner-form-icon">
                <img src="public/img/icon/Pneumologue.svg" alt="Icon pneumologue">
            </div>
            <div class="banner-form-informations">
                <p class="banner-form-title">Le pneumologue</p>
                <p>Un <b>pneumologue</b>, c'est le médecin des poumons,</p>
                <p>et des maladies liées aux poumons.</p>
                <p>Quand on a une maladie respiratoire,</p>
                <p>on va voir le pneumologue.</p>
            </div>
        </div>


        <div class="banner-form-facl-logo">
            <img src="public/img/icon/logo-falc-officiel.svg" alt="logo falc">
        </div>

    </div>

</form>
