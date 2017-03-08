<!DOCTYPE html>

<head>
    <title></title>
</head>
<body>
<div class="ui container">


    <div class="ui icon menu">
        {{link_to("users/", "
        <i class='arrow circle left icon'></i>Retour à la liste
        ", 'class': 'item')}}
    </div>

    <table class="ui definition table">

        <tbody>
        <tr>
            <td>Prénom</td>
            <td>{{ showUser.getFirstname()}}</td>
        </tr>
        <tr>
            <td>Nom</td>
            <td>{{ showUser.getLastname()}}</td>
        </tr>
        <tr>
            <td>Login</td>
            <td>{{ showUser.getLogin()}}</td>
        </tr>
        <tr>
            <td>Adresse mail</td>
            <td>{{ showUser.getEmail()}}</td>
        </tr>
        <tr>
            <td>Rôle</td>
            <td>{{ showUser.getRole().getName()}}</td>
        </tr>
        </tbody>
    </table>
</div>
</body>

</html>