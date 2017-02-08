<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>


<h2>Liste des utilisateurs</h2>

<table class="ui celled table">
    <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Login</th>
            <th>Email</th>
            <th>Rôle</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user) { ?>
        <tr>
            <td><?= $user->getFirstname() ?></td>
            <td><?= $user->getLastname() ?></td>
            <td><?= $user->getLogin() ?></td>
            <td><?= $user->getEmail() ?></td>
            <td><?= $user->getIdrole() ?></td>
            <td>
                <button class="ui icon button">Modif</button>
            </td>
            <td>
                <button class="ui icon button">Suppr</button>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>

</body>

</html>