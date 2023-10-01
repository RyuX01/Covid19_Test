

<form method="post" class="question-form" id="question-form">
    <div class="question">
        <div class="question-header">
            <a href="javascript:history.back()">
                <img src="public/img/icon/icon-chevron-right.svg" alt="Retour à la question
                      précédente">
                &nbsp;
                Question 4 sur 22
            </a>
        </div>


        <p class="question-title">
            Ces derniers jours, avez-vous eu un mal de gorge et/ou des douleurs musculaires et/ou des courbatures inhabituelles ?
        </p>


        <p class="question-options-indication">Sélectionnez une option :</p>

        <div class="question-options">

            <div class="flex-direction-row">
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_aches-on" name="step_value" value="1" required="">
                    <label for="input-radio-step_aches-on">
                        Oui
                        <span class="hover-border"></span>
                    </label>

                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_aches-off" name="step_value" value="0" required="">
                    <label for="input-radio-step_aches-off">
                        Non
                        <span class="hover-border"></span>
                    </label>

                </div>
            </div>

        </div>

        <input type="hidden" name="current_step" value="step_aches">
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
                <img src="public/img/icon/Mal_de_gorge.svg" alt="Icone mal de gorge">
            </div>
            <div class="banner-form-informations">
                <p class="banner-form-title">Le mal de gorge</p>
                <p>Un <b>mal de gorge</b>,</p>
                <p>c’est quand vous ressentez un irritation</p>
                <p>ou une gêne au niveau de votre gorge.</p>
            </div>
        </div>

        <div class="banner-form-row">
            <div class="banner-form-icon">
                <img src="public/img/icon/douleur_musculaire.svg" alt="Icone douleur musculaire">
            </div>
            <div class="banner-form-informations">
                <p class="banner-form-title">La courbature</p>
                <p>La <b>courbature</b>, c'est une douleur musculaire.</p>
                <p>On peut ressentir des courbatures</p>
                <p>quand on a fait trop de sport</p>
                <p>ou quand on est malade.</p>
                <p>Les muscles du corps sont fatigués,</p>
                <p>donc ils font mal.</p>
            </div>
        </div>

        <div class="banner-form-facl-logo">
            <img src="public/img/icon/logo-falc-officiel.svg" alt="logo falc">
        </div>

    </div>

</form>
