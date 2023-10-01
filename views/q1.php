
<form method="post" class="question-form" id="question-form">
    <div class="question">
        <div class="question-header">
            <a href="javascript:history.back()">
                <img src="public/img/icon/icon-chevron-right.svg" alt="Retour à la question
                      précédente">
                &nbsp;
                Question 1 sur 22
            </a>
        </div>



        <p class="question-title">
            Ces dernières 48 heures, quelle a été votre température la plus élevée ?
        </p>
        <p class="question-options-indication">Remplissez le champ :</p>
        <div class="question-options">
            <div class="custom-control custom-text">
                <label for="step_fever_details" class="custom-text-label"></label>
                <input id="step_fever_details" class="input-text " type="number" name="step_value" aria-describedby="text-suffix" title="Ces dernières 48 heures, quelle a été votre température la plus élevée ?" value="" min="34" max="42" step="0.1" placeholder="37,0" required="">
                <div class="custom-text-suffix" id="text-suffix">degrés</div>
            </div>
        </div>




        <input type="hidden" name="current_step" value="step_fever_details">
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
                <img src="public/img/icon/Fievre.svg" alt="Icone temperature">
            </div>
            <div class="banner-form-informations">

                <p class="banner-form-title">La température</p>

                <p>La <b>température</b> se mesure avec un thermomètre.</p>

                <p>Le thermomètre indique un nombre,</p>

                <p>c'est la température de votre corps.</p>

            </div>
        </div>


        <div class="banner-form-facl-logo">
            <img src="public/img/icon/logo-falc-officiel.svg" alt="logo falc">
        </div>
    </div>


</form>
