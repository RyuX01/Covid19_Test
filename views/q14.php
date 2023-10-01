

<form method="post" class="question-form" id="question-form">
    <div class="question">
        <div class="question-header">
            <a href="javascript:history.back()">
                <img src="public/img/icon/icon-chevron-right.svg" alt="Retour à la question
                      précédente">
                &nbsp;
                Question 14 sur 22
            </a>
        </div>
        <p class="question-title">
            Êtes-vous diabétique ?
        </p>

        <p class="question-options-indication">Sélectionnez une option :</p>

        <div class="question-options">

            <div class="flex-direction-row">
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_diabetes-on" name="step_value" value="1" required="">
                    <label for="input-radio-step_diabetes-on">
                        Oui
                        <span class="hover-border"></span>
                    </label>

                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_diabetes-off" name="step_value" value="0" required="">
                    <label for="input-radio-step_diabetes-off">
                        Non
                        <span class="hover-border"></span>
                    </label>

                </div>
            </div>

        </div>

        <input type="hidden" name="current_step" value="step_diabetes">
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
                <img src="public/img/icon/Diabete.svg" alt="Icon diabete">
            </div>
            <div class="banner-form-informations">
                <p class="banner-form-title">Le diabète</p>
                <p>Être <b>diabétique</b> c'est avoir trop de sucre dans le sang.</p>
                <p>Quand vous avez du diabète, c'est que votre corps</p>
                <p>ne sait plus réguler le sucre dans le sang.</p>
                <p>Il a des difficultés à utiliser le sucre consommé.</p>
                <p>Ce n'est pas parce que vous avez mangé trop de sucre.</p>
                <br>
                <p>Le sucre est nécessaire au fonctionnement de votre corps.</p>
                <p>Si votre corps n'utilise pas bien ce sucre,</p>
                <p>il reste dans votre sang.</p>
                <br>
                <p>Le diabète abîme les autres organes</p>
                <p>et on peut avoir des maladies.</p>
            </div>
        </div>

        <div class="banner-form-facl-logo">
            <img src="public/img/icon/logo-falc-officiel.svg" alt="logo falc">
        </div>

    </div>

</form>
