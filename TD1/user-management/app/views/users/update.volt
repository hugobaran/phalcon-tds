<!DOCTYPE html>

<head>
    <title></title>
</head>
<body>

<form class="ui form segment container ">
    <h1>Ajout d'un utilisateur</h1>
    <div class="two fields">
        <div class="field">
            <label>Prénom</label>
            <input placeholder="Prénom" name="prenom" type="text" value="{{ updateUser.getFirstname()}}">
        </div>
        <div class="field">
            <label>Nom</label>
            <input placeholder="Nom" name="nom" type="text" value="{{ updateUser.getLastname()}}">
        </div>
    </div>
    <div class="two fields">
        <div class="field">
            <label>Login *</label>
            <input placeholder="Login" name="login" type="text" value="{{ updateUser.getLogin()}}">
        </div>
        <div class="field">
            <label>Mot de Passe *</label>
            <input name="mdp" placeholder=".........." type="password" value="{{ updateUser.getPassword()}}">
        </div>
    </div>
    <div class="field">
        <label>Email *</label>
        <input name="Email" placeholder="exemple@exemple.com" type="email" value="{{ updateUser.getEmail()}}">
    </div>
    <div class="field">
        <label>Rôle</label>
        <input name="Role" placeholder="User" type="text" value="{{ updateUser.getRole().getName()}}">
    </div>


    <div class="ui two bottom attached buttons">
        <input type="submit" class="ui fluid green submit button" value="Envoyer">
        <input type="reset" class="ui fluid button" value="Reinitialiser">
    </div>

    <div class="ui error message"></div>
</form>

</body>

</html>

