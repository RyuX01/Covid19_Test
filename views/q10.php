

<form method="post" class="question-form" id="question-form">
    <div class="question">
        <div class="question-header">
            <a href="javascript:history.back()">
                <img src="public/img/icon/icon-chevron-right.svg" alt="Retour à la question
                      précédente">
                &nbsp;
                Question 10 sur 22
            </a>
        </div>
        <p class="question-title">
            Quel est votre âge ? <br> Ceci, afin de calculer un facteur de risque spécifique.
        </p>

        <p class="question-options-indication">Remplissez le champ :</p>

        <div class="question-options">

            <div class="custom-control custom-text">
                <label for="step_age" class="custom-text-label"></label>

                <input id="step_age" class="input-text " type="number" name="step_value" aria-describedby="text-suffix" title="Quel est votre âge ? &lt;br&gt; Ceci, afin de calculer un facteur de risque spécifique." value="" min="1" max="110" required="">

                <div class="custom-text-suffix" id="text-suffix">ans</div>
            </div>
        </div>

        <input type="hidden" name="current_step" value="step_age">
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
                <img src="public/img/icon/Age.svg" alt="Icone age">
            </div>
            <div class="banner-form-informations">
                <p class="banner-form-title">L'âge</p>
                <p>Votre <b>âge</b> peut être un <b>facteur de risque</b>.</p>
                <p>Un facteur de risque est quelque chose</p>
                <p>qui augmente la possibilité d’avoir une maladie.</p>
                <p>Plus votre âge est élevé</p>
                <p>et plus vous êtes fragile.</p>
            </div>
        </div>

        <div class="banner-form-facl-logo">
            <img src="public/img/icon/logo-falc-officiel.svg" alt="logo falc">
        </div>

    </div>

</form>
