<!DOCTYPE html>

<head>
    <title></title>
</head>
<body>

<div class="ui container">




<div class="ui icon menu">
    <?= $this->tag->linkTo(['users/', '
        <i class=\'arrow circle left icon\'></i>Retour à la liste
        ', 'class' => 'item']) ?>
</div>

<form class="ui form segment">
    <h1>Ajout d'un utilisateur</h1>
    <div class="two fields">
        <div class="field">
            <label>Prénom</label>
            <input placeholder="Prénom" name="prenom" type="text" >
        </div>
        <div class="field">
            <label>Nom</label>
            <input placeholder="Nom" name="nom" type="text">
        </div>
    </div>
    <div class="two fields">
        <div class="field required">
            <label>Login</label>
            <input placeholder="Login" name="login" type="text">
        </div>
        <div class="field required">
            <label>Mot de Passe</label>
            <input name="mdp" placeholder=".........." type="password">
        </div>
    </div>
    <div class="field required">
        <label>Email</label>
        <input name="Email" placeholder="exemple@exemple.com" type="email">
    </div>
    <div class="field">
        <label>Rôle</label>
        <input name="Role" placeholder="User" type="text">
    </div>


    <div class="ui two bottom attached buttons">
        <input type="submit" class="ui fluid green submit button" value="Envoyer">
        <input type="reset" class="ui fluid button" value="Reinitialiser">
    </div>

    <div class="ui error message"></div>
</form>
</div>
</body>

</html>

