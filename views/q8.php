

<form method="post" class="question-form" id="question-form">
    <div class="question">
        <div class="question-header">
            <a href="javascript:history.back()">
                <img src="public/img/icon/icon-chevron-right.svg" alt="Retour à la question
                      précédente">
                &nbsp;
                Question 8 sur 22
            </a>
        </div>
        <p class="question-title">
            Depuis 24 heures ou plus, êtes-vous dans l'impossibilité de vous alimenter ou de boire ?
        </p>
        <p class="question-options-indication">Sélectionnez une option :</p>

        <div class="question-options">

            <div class="flex-direction-row">
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_feeding-on" name="step_value" value="1" required="">
                    <label for="input-radio-step_feeding-on">
                        Oui
                        <span class="hover-border"></span>
                    </label>

                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_feeding-off" name="step_value" value="0" required="">
                    <label for="input-radio-step_feeding-off">
                        Non
                        <span class="hover-border"></span>
                    </label>

                </div>
            </div>
        </div>

        <input type="hidden" name="current_step" value="step_feeding">
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
                <img src="public/img/icon/Impossibilite_manger_boire_24h.svg" alt="Icone Impossibilite manger ou boire">
            </div>
            <div class="banner-form-informations">
                <p class="banner-form-title">L'impossibilité de manger ou de boire</p>
                <p>Être dans l'<b>impossibilité de manger ou de boire</b>,</p>
                <p>c'est que vous n'arrivez plus à avaler ni nourriture ni boisson.</p>
                <p>Vous ressentez du dégoût quand vous voyez de la nourriture.</p>
            </div>
        </div>

        <div class="banner-form-facl-logo">
            <img src="public/img/icon/logo-falc-officiel.svg" alt="logo falc">
        </div>

    </div>

</form>
