

<form method="post" class="question-form" id="question-form">
    <div class="question">
        <div class="question-header">
            <a href="javascript:history.back()">
                <img src="public/img/icon/icon-chevron-right.svg" alt="Retour à la question
                      précédente">
                &nbsp;
                Question 11 sur 22
            </a>
        </div>
        <p class="question-title">
            Quel est votre taille ? <br> Afin de calculer l’indice de masse corporelle qui est un facteur influençant le risque de complications de l’infection.
        </p>

        <p class="question-options-indication">Remplissez le champ :</p>

        <div class="question-options">

            <div class="custom-control custom-text">
                <label for="step_height" class="custom-text-label">Votre taille</label>

                <input id="step_height" class="input-text " type="number" name="step_value" aria-describedby="text-suffix" value="" min="80" max="250" required="">


                <div class="custom-text-suffix" id="text-suffix">cm</div>
            </div>

        </div>

        <input type="hidden" name="current_step" value="step_height">
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
                <img src="public/img/icon/Taille.svg" alt="Icone taille">
            </div>
            <div class="banner-form-informations">
                <p class="banner-form-title">La taille</p>
                <p>Vous avez votre <b>taille</b></p>
                <p>en vous mesurant des pieds à la tête.</p>
                <br>
                <p>Votre poids et votre taille sont des facteurs de risque.</p>
                <p>Il faut calculer votre <b>Indice de Masse Corporelle (IMC)</b>.</p>
                <p>L’IMC donne votre corpulence en faisant un calcul</p>
                <p>avec votre poids et votre taille.</p>
                <p>L’IMC permet de dire</p>
                <p>si vous être trop gros ou trop maigre,</p>
                <p>et donc plus ou moins fragile.</p>
            </div>
        </div>

        <div class="banner-form-facl-logo">
            <img src="public/img/icon/logo-falc-officiel.svg" alt="logo falc">
        </div>

    </div>

</form>
