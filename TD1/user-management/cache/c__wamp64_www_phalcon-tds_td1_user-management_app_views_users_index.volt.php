<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title></title>
</head>
<body>

<div class="ui container">
<h2>Liste des utilisateurs</h2>

<div class="ui left icon input loading">
    <button class="ui icon button"><i class="add user icon"><a href=""/></i>Nouvel Utilisateur</button>
</div>

<div class="ui icon input">
    <i class="search icon"></i>
    <input placeholder="Search..." type="text">
</div>

<table class="ui celled table">
    <thead>
        <tr>
            <th><input type="checkbox"></th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Login</th>
            <th>Email</th>
            <th>Rôle</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user) { ?>
        <tr>
            <td><input type="checkbox"></td>
            <td><?= $user->getFirstname() ?></td>
            <td><?= $user->getLastname() ?></td>
            <td><?= $user->getLogin() ?></td>
            <td><?= $user->getEmail() ?></td>
            <td><?= $user->getRole()->getName() ?></td>
            <td>
                <button class="ui icon button"><i class="write icon"></i></button>
                <button class="ui icon button"><i class="red delete icon"></i></button>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</div>
</body>

</html>