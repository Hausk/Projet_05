<div id="login">
    <h3>Page de connexion</h3>
    <div class="login_page">
        <button type="submit" class="btn btn-dark" id="ha-Google">Se connecter avec Google</button>
        <div class="or_hr">
            <hr>
            <div class="or">Ou</div>
        </div>
        <form method="POST" action="/Projet_05">
            <div class="form-group">
                <label for="ndc">Identifiant ou e-mail</label><br>
                <input type="account" class="form-control" placeholder="Votre nom de compte" id="ndc" required>
            </div>
            <div class="form-group">
                <label for="pwd">Mot de passe</label>
                <input type="password" class="form-control" placeholder="Votre mot de passe" id="pwd" Required>
            </div>
            <div class="bot_login">
                <div class="form-group form-check">
                    <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Se souvenir de moi
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Se connecter !</button>
            </div>
        </form>
    </>
    <div class="login_foot"><br>
        <a href="/Projet_05/login_Creation">Creer un compte</a>
        <a href="/Projet_05/changement_mdp">Mdp oublié</a>
    </div>
</div>