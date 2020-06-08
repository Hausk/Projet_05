<h1>Création de compte</h1>
<form method="POST" action="/Projet_05/login" class="was-validated">

    <div class="form-group">
        <label for="ndc">Pseudo: </label><br>
        <input type="text" class="form-control" placeholder="Votre pseudo" id="pseudo" required>
    </div>
    <div class="form-group">
        <label for="ndc">Nom de compte: </label><br>
        <input type="text" class="form-control" placeholder="Votre nom de compte" id="ndc" required>
    </div>
    <div class="form-group">
        <label for="pwd">Mot de passe:</label>
        <input type="password" class="form-control" placeholder="Votre mot de passe" id="pwd" required>
    </div>
    <div class="form-group">
        <label for="ndc">E-mail: </label><br>
        <input type="email" class="form-control" placeholder="Votre E-mail" id="mail" required>
    </div>
    <div class="form-group form-check">
        <label class="form-check-label">
        <input class="form-check-input" type="checkbox"> Se souvenir de moi
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Se connecter !</button>
</form>