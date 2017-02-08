<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title></title>
</head>
<body>

<div class="ui container">
<h2>Liste des utilisateurs</h2>

<div class="ui left icon input loading">
    <button class="ui icon button"><i class="add user icon"></i>{{linkTo("users/form", "Nouvel utilisateur")}}</button>
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
    {% for user in users %}
        <tr>
            <td><input type="checkbox"></td>
            <td>{{ user.getFirstname() }}</td>
            <td>{{ user.getLastname() }}</td>
            <td>{{ user.getLogin() }}</td>
            <td>{{ user.getEmail() }}</td>
            <td>{{ user.getRole().getName() }}</td>
            <td>
                <button class="ui icon button">{{linkTo("users/delete", "<i class='write icon'></i>")}}</button>
                <button class="ui icon button">{{linkTo("users/delete", "<i class='red remove icon'></i>")}}</button>
            </td>
        </tr>
    {% endfor %}
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