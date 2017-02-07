<!DOCTYPE html>
<html>


<head>
    <link rel="stylesheet" href="../../../../../Semantic-UI-CSS-master/semantic.min.css"/>
    <script src="../../../../../Semantic-UI-CSS-master/semantic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body>

    <div class="page-header">
        <h1>Congratulations!</h1>

        <p>You're now flying with Phalcon. Great things are about to happen!</p>

        <p>This page is located at <code>views/index/index.volt</code></p>

        <button class="ui button">Test Semantic</button>
    </div>

<div>
    <p>Affichage des utilisateurs</p>

    <ul>
        <?php foreach ($users as $user) { ?>
            <li><?= $user->getLogin() ?></li>
        <?php } ?>
    </ul>
</div>


</body>

</html>