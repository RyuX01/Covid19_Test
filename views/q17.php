

<form method="post" class="question-form" id="question-form">
    <div class="question">
        <div class="question-header">
            <a href="javascript:history.back()">
                <img src="public/img/icon/icon-chevron-right.svg" alt="Retour à la question
                      précédente">
                &nbsp;
                Question 17 sur 22
            </a>
        </div>
        <p class="question-title">
            Avez-vous une insuffisance rénale chronique dialysée ?
        </p>

        <p class="question-options-indication">Sélectionnez une option :</p>

        <div class="question-options">

            <div class="flex-direction-row">
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_kidney_disease-on" name="step_value" value="1" required="">
                    <label for="input-radio-step_kidney_disease-on">
                        Oui
                        <span class="hover-border"></span>
                    </label>

                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="input-radio-step_kidney_disease-off" name="step_value" value="0" required="">
                    <label for="input-radio-step_kidney_disease-off">
                        Non
                        <span class="hover-border"></span>
                    </label>

                </div>
            </div>
        </div>

        <input type="hidden" name="current_step" value="step_kidney_disease">
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
                <img src="public/img/icon/Insuffisance_renale_chronique_diaysee.svg" alt="Icon insuffisance rénale chronique">
            </div>
            <div class="banner-form-informations">
                <p class="banner-form-title">L'insuffisance rénale chronique</p>
                <p>Une <b>insuffisance rénale chronique</b>, c'est une maladie des reins.</p>
                <p>Les reins ne fonctionnent plus correctement,</p>
                <p>ils filtrent mal le sang.</p>
                <p>Les reins n'éliminent plus les déchets qui sont dans le sang.</p>
                <p>Les déchets sont de plus en plus nombreux dans le sang,</p>
                <p>et le corps s'empoisonne.</p>
                <br>
                <p>Ça nécessite un traitement par une <b>dialyse</b>.</p>
                <p>Une dialyse est une machine qui peut filtrer le sang.</p>
                <p>La dialyse filtre le sang</p>
                <p>à la place des reins de la personne.</p>
            </div>
        </div>


        <div class="banner-form-facl-logo">
            <img src="public/img/icon/logo-falc-officiel.svg" alt="logo falc">
        </div>

    </div>

</form>
