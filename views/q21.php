

<form method="post" class="question-form" id="question-form">
    <div class="question">
        <div class="question-header">
            <a href="javascript:history.back()">
                <img src="public/img/icon/icon-chevron-right.svg" alt="Retour à la question
                      précédente">
                &nbsp;
                Question 21 sur 22
            </a>
        </div>
        <p class="question-title">
            Prenez-vous un traitement immunosuppresseur ? <br> C’est un traitement qui diminue vos défenses contre les infections. <br> Voici quelques exemples : corticoïdes, méthotrexate, ciclosporine, tacrolimus, azathioprine, cyclophosphamide (liste non exhaustive).
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


        <input type="hidden" name="current_step" value="step_immunosuppressant">
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
                <img src="public/img/icon/Traitement_immunosuppresseur.svg" alt="Icon Traitement_immunosuppresseur">
            </div>
            <div class="banner-form-informations">
                <p class="banner-form-title">Le traitement immunosuppresseur</p>
                <p>Un <b>traitement immunosuppresseur</b>,</p>
                <p>c'est un traitement qu'on donne pour certaines maladies.</p>
                <p>Ce traitement diminue les défenses immunitaires.</p>
                <p>Par exemple pour les personnes qui ont reçu une greffe d'organe.</p>
                <p>Ce traitement permet au corps</p>
                <p>de ne pas se défendre contre cet organe</p>
                <p>qu'il considère comme étranger.</p>
                <br>
                <p>Ce traitement rend le corps plus faible</p>
                <p>donc il a plus de risque d'attraper un virus.</p>
            </div>
        </div>

        <div class="banner-form-facl-logo">
            <img src="public/img/icon/logo-falc-officiel.svg" alt="logo falc">
        </div>

    </div>

</form>
