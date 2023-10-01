

<form method="post" class="question-form" id="question-form">
    <div class="question">
        <div class="question-header">
            <a href="javascript:history.back()">
                <img src="public/img/icon/icon-chevron-right.svg" alt="Retour à la question
                      précédente">
                &nbsp;
                Question 20 sur 22
            </a>
        </div>
        <p class="question-title">
            Avez-vous une maladie connue pour diminuer vos défenses immunitaires ?
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
                <input type="radio" id="input-radio--Ne sait pas" name="step_value" value="999" required="">
                <label for="input-radio--Ne sait pas">
                    Ne sait pas
                    <span class="hover-border"></span>
                </label>

            </div>
        </div>


        <input type="hidden" name="current_step" value="step_immunocompromised">
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
                <img src="public/img/icon/Diminution_defenses_immunitaires.svg" alt="Icon Diminution_defenses_immunitaires">
            </div>
            <div class="banner-form-informations">
                <p class="banner-form-title">Les défenses immunitaires</p>
                <p>Les <b>défenses immunitaires</b>, ce sont les défenses du corps.</p>
                <p>Le corps a un système qui le protège contre</p>
                <p>toutes les infections, des microbes : bactéries, virus, ...</p>
                <p>C'est le système immunitaire.</p>
                <br>
                <p>Si vous avez une maladie qui diminue vos défenses immunitaires,</p>
                <p>vous avez plus de risque de tomber malade,</p>
                <p>car le corps gère déjà une autre infection,</p>
                <p>il a du mal à se protéger.</p>
            </div>
        </div>

        <div class="banner-form-facl-logo">
            <img src="public/img/icon/logo-falc-officiel.svg" alt="logo falc">
        </div>

    </div>

</form>
