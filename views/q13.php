

<form method="post" class="question-form" id="question-form">
    <div class="question">
        <div class="question-header">
            <a href="javascript:history.back()">
                <img src="public/img/icon/icon-chevron-right.svg" alt="Retour à la question
                      précédente">
                &nbsp;
                Question 13 sur 22
            </a>
        </div>
        <p class="question-title">
            Avez-vous de l’hypertension artérielle mal équilibrée ? <br> Ou avez-vous une maladie cardiaque ou vasculaire ? <br> Ou prenez vous un traitement à visée cardiologique ?
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

        <input type="hidden" name="current_step" value="step_heart_disease">
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
                <img src="public/img/icon/Hypertension_arterielle.svg" alt="Icone hypertension arterielle">
            </div>
            <div class="banner-form-informations">
                <p class="banner-form-title">L'hypertension artérielle</p>
                <p>Une <b>hypertension artérielle</b> mal équilibrée,</p>
                <p>c'est une augmentation trop importante de la tension artérielle.</p>
                <p>La circulation du sang est trop rapide,</p>
                <p>donc le sang exerce une trop forte pression sur les artères.</p>
            </div>
        </div>

        <div class="banner-form-row">
            <div class="banner-form-icon">
                <img src="public/img/icon/Maladie_cardiaque_3.svg" alt="Icone maladie cardiaque ou vasculaire">
            </div>
            <div class="banner-form-informations">
                <p class="banner-form-title">La maladie cardiaque ou vasculaire</p>
                <p>L'augmentation de la tension artérielle</p>
                <p>peut entraîner des <b>maladies cardiaques ou vasculaires</b>,</p>
                <p>c'est-à-dire des maladies du cœur.</p>
                <p>Ces maladies sont liées à un mauvais fonctionnement du cœur</p>
                <p>ou des vaisseaux sanguins qui alimentent le cœur.</p>
                <p>Le cœur est un muscle,</p>
                <p>ce muscle devient faible.</p>
                <br>
                <p>Cette maladie nécessite un traitement</p>
                <p>qu'on appelle <b>traitement cardiologique</b>.</p>
            </div>
        </div>

        <div class="banner-form-facl-logo">
            <img src="public/img/icon/logo-falc-officiel.svg" alt="logo falc">
        </div>

    </div>

</form>
