

<form method="post" class="question-form" id="question-form">
    <div class="question">
        <div class="question-header">
            <a href="javascript:history.back()">
                <img src="public/img/icon/icon-chevron-right.svg" alt="Retour à la question
                      précédente">
                &nbsp;
                Question 22 sur 22
            </a>
        </div>
        <p class="question-title">
            Quel est votre code postal ?  <br> Cette information nous permet de réaliser un suivi épidémiologique
        </p>

        <p class="question-options-indication">Remplissez le champ :</p>

        <div class="question-options">

            <div class="custom-control custom-text" style="display: block;">
                <label for="step_postal_code" class="custom-text-label"></label>

                <input id="step_postal_code" class="input-text " type="number" name="step_value" aria-describedby="text-suffix" title="Quel est votre code postal ?  &lt;br&gt; Cette information nous permet de réaliser un suivi épidémiologique" value="" min="1000" max="99999" step="1" required="true">


                <div class="custom-text-suffix" id="text-suffix">Votre code postal</div>
            </div>

            <div class="custom-control custom-checkbox">

                <input type="checkbox" id="input-radio-is-algerie" name="is-algerie" value="0" onchange="if(this.checked){

                    document.getElementById(&#39;step_postal_code&#39;).parentNode.style.display =&#39;none&#39;
                    document.getElementById(&#39;step_postal_code&#39;).removeAttribute(&#39;required&#39;)

                } else {
                    document.getElementById(&#39;step_postal_code&#39;).parentNode.style.display =&#39;block&#39;
                    document.getElementById(&#39;step_postal_code&#39;).setAttribute(&#39;required&#39;,true)
                }

                initForm();">

                <label for="input-radio-is-algerie">
                    Je suis en dehors de
                    l'Algerie ou je ne souhaite pas répondre.
                    <span class="hover-border"></span>
                </label>

            </div>

        </div>

        <input type="hidden" name="current_step" value="step_postal_code">
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
                <img src="public/img/icon/Code_postal.svg" alt="Icon Code postal">
            </div>
            <div class="banner-form-informations">
                <p class="banner-form-title">Le code postal</p>


                <p>Votre code postal est sur votre adresse.</p>



                <p>Il permet d'identifier la ville</p>



                <p>où vous habitez.</p>



                <p>Le code postal est composé de 5 chiffres.</p>



                <p>Par exemple pour Alger centre c'est le 16000 ; pour Oran c'est le 31000.</p>


            </div>
        </div>

        <div class="banner-form-facl-logo">
            <img src="public/img/icon/logo-falc-officiel.svg" alt="logo falc">
        </div>

    </div>

</form>
