<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title></title>
</head>
<body>

<div class="ui container">
<h2>Liste des utilisateurs</h2>

<!--<a class="ui left icon button" href="<?= $this->url->get('users/form') ?>">
    <i class="add user icon"></i>Nouvel utilisateur
</a>
<div class="ui icon input">
    <i class="search icon"></i>
    <input placeholder="Search..." type="text">
</div>-->

    <div class="ui icon menu">
        <?= $this->tag->linkTo(['users/form', '
        <i class=\'user add icon icon\'></i>&nbsp;Nouvel utilisateur
        ', 'class' => 'item']) ?>

        <div class="ui category search item">
            <div class="ui transparent icon input">
                <form method="get">
                    <input name="filtre" class="prompt" type="text" placeholder="Rechercher...">
                    <i class="search link icon"></i>
                </form>
            </div>
            <div class="results"></div>
        </div>
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
                <?= $this->tag->linkto('users/update/' . $user->getId(), '<i class=\'bordered grey edit icon\'></i>') ?>
                <?= $this->tag->linkto('users/delete/' . $user->getId(), '<i class=\'bordered red remove icon\'></i>') ?>
                <?= $this->tag->linkto('users/show/' . $user->getId(), '<i class=\'bordered arrow circle right icon\'></i>') ?>
            </td>
        </tr>
    <?php } ?>
    </tbody>
    <tfoot>
    <tr><th colspan="7">
            <div class="ui right floated pagination menu">
                <a class="icon item">
                    <i class="left chevron icon"></i>
                </a>
                <a class="item">1</a>
                <a class="item">2</a>
                <a class="item">3</a>
                <a class="item">4</a>
                <a class="icon item">
                    <i class="right chevron icon"></i>
                </a>
            </div>
        </th>
    </tr></tfoot>
</table>
</div>
</body>

</html>