
  <!-- Inscription/Identification renvoi part -->
  <ul>
    <li><a href="http://127.0.0.1:3000/inscription_membres.html">S'inscrire</a></li>
    <li><a href="http://127.0.0.1:3000/inscription.html">Se connecter</a></li>
  </ul>
</nav>
<!-- partie inscription membres -->

  <form method="POST" action="traitement.php">
    <h1>S'inscrire</h1>
    <label for="username">* Pseudo</label>
    <input type="text" id="nom" name="nom" placeholder="Entrez votre username" required="">
    <br>
    <label for="mail">* Adresse email</label>
    <input type="mail" id="email_address" name="email_address" placeholder="Entrez votre adresse email" required="">
    <input type="mail" id="email_address" name="email_address" placeholder="Retappez votre adresse email" required="">
    <br>
    <label for="password">* Mot de passe</label>
    <ol>
      <li> 8 à 72 caractères</li>
      <li> 1 chiffre</li>
      <li> 1 miniscule</li>
    </ol>

    <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required="">
    <input type="password" id="password" name="password" placeholder="Retapez votre mot de passe" required="">

    <br>

    <label>
      <input type="checkbox"> J'ai lu et j'accepte les conditions générales d'utilisation *<br>
      <input type="checkbox"> Je souhaite recevoir la newsletter partenaire (bon plans, préventes...)<br>
      <input type="checkbox"> Je ne souhaite pas recevoir la newsletter éditoriale (news, tests, sorties...)
      <input type="submit" value="M'inscrire" name="ok">
    </label>

      <footer>
        <div>* Informations obligatoires
          <br>
          <br>
          En tant que responsable de traitement, Gamesoft traite vos données personnelles sur le site gamesoft.fr pour vous permettre d’accéder aux services du site gamesoft.fr. Vous disposez d’un droit d’accès, de rectification, d’effacement ou de portabilité de vos données personnelles. Vous pouvez vous opposer ou limiter certains traitements. Vous disposez également du droit de définir des directives relatives au sort de vos données après votre décès. Enfin, vous avez le droit d’introduire une réclamation auprès de la Commission nationale de l’informatique et des libertés. Pour en savoir plus sur la gestion de vos données par Gamesoft et de vos droits sur le site gamesoft.fr, consultez notre Politique de protection des données.</div>
        </div>
      </footer>
    </form>

  </body>
</html>