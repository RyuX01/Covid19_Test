

<form method="post" class="question-form" id="question-form">
    <div class="question">
        <div class="question-header">
            <a href="javascript:history.back()">
                <img src="public/img/icon/icon-chevron-right.svg" alt="Retour à la question
                      précédente">
                &nbsp;
                Question 3 sur 22
            </a>
        </div>


        <p class="question-title">
            Ces derniers jours, avez-vous noté une forte diminution ou perte de votre goût ou de votre odorat ?
        </p>

        <p class="question-options-indication">Sélectionnez une option :</p>

        <div class="question-options">

            <div class="flex-direction-row">
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_smell-on" name="step_value" value="1" required="">
                    <label for="input-radio-step_smell-on">
                        Oui
                        <span class="hover-border"></span>
                    </label>

                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_smell-off" name="step_value" value="0" required="">
                    <label for="input-radio-step_smell-off">
                        Non
                        <span class="hover-border"></span>
                    </label>

                </div>
            </div>

        </div>


        <input type="hidden" name="current_step" value="step_smell">
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
                <img src="public/img/icon/Perte_gout.svg" alt="Icone gout">
            </div>
            <div class="banner-form-informations">
                <p class="banner-form-title">La perte du goût</p>

                <p>La <b>perte du goût</b>, c'est quand vous ne pouvez plus reconnaître le goût d'un aliment.</p>

                <p>Par exemple, le poulet a le même goût que le poisson.</p>

            </div>
        </div>

        <div class="banner-form-row">
            <div class="banner-form-icon">
                <img src="public/img/icon/Perte_odorat.svg" alt="Icone odora">
            </div>
            <div class="banner-form-informations">
                <p class="banner-form-title">La perte de l'odorat</p>

                <p>La <b>perte de l'odorat</b>, c'est quand vous ne sentez plus les odeurs.</p>

                <p>Par exemple, vous ne pouvez plus sentir l'odeur du poulet qui sort du four.</p>

            </div>
        </div>

        <div class="banner-form-facl-logo">
            <img src="public/img/icon/logo-falc-officiel.svg" alt="logo falc">
        </div>

    </div>

</form>
