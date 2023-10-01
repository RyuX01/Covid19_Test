

<form method="post" class="question-form" id="question-form">
    <div class="question">
        <div class="question-header">
            <a href="javascript:history.back()">
                <img src="public/img/icon/icon-chevron-right.svg" alt="Retour à la question
                      précédente">
                &nbsp;
                Question 15 sur 22
            </a>
        </div>
        <p class="question-title">
            Avez-vous ou avez-vous eu un cancer ces trois dernières années ?
        </p>

        <p class="question-options-indication">Sélectionnez une option :</p>

        <div class="question-options">

            <div class="flex-direction-row">
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_cancer-on" name="step_value" value="1" required="">
                    <label for="input-radio-step_cancer-on">
                        Oui
                        <span class="hover-border"></span>
                    </label>

                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_cancer-off" name="step_value" value="0" required="">
                    <label for="input-radio-step_cancer-off">
                        Non
                        <span class="hover-border"></span>
                    </label>

                </div>
            </div>
        </div>

        <input type="hidden" name="current_step" value="step_cancer">
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
                <img src="public/img/icon/Cancer.svg" alt="Icon cancer">
            </div>
            <div class="banner-form-informations">
                <p class="banner-form-title">Le cancer</p>
                <p>Le <b>cancer</b>, c'est une maladie</p>
                <p>liée à une trop grande et trop rapide</p>
                <p>multiplication des cellules dans le corps.</p>
                <p>Elles sont donc trop nombreuses</p>
                <p>et inutiles au fonctionnement du corps.</p>
                <p>Elles sont cancéreuses.</p>
                <br>
                <p>Ces cellules cancéreuses peuvent toucher différentes parties du corps,</p>
                <p>par exemple l'estomac, les poumons, les seins, la peau, les os, ...</p>
                <br>
                <p>Il faut répondre oui à cette question,</p>
                <p>si vous avez encore un cancer,</p>
                <p>ou vous avez eu un cancer</p>
                <p>il y a 3 ans maximum.</p>
            </div>
        </div>


        <div class="banner-form-facl-logo">
            <img src="public/img/icon/logo-falc-officiel.svg" alt="logo falc">
        </div>

    </div>

</form>
