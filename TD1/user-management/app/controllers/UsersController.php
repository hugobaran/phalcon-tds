<?php

class UsersController extends ControllerBase
{

    public function indexAction($page = 1, $sField = "firstname", $sens = "asc", $filter = NULL)
    {
        $users = User::find();
        $this->view->setVar("users", $users);
    }

    public function formAction($id = NULL)
    {
        $user = User::findFirst($id);
        $this->view->setVar("updateUser", $user);

        if(isset($_POST["prenom"], $_POST['nom'], $_POST['login'], $_POST['Email'], $_POST['idrole'])) {
            $user->setFirstname($_POST["prenom"]);
            $user->setLastname($_POST["nom"]);
            $user->setLogin($_POST["login"]);
            $user->setEmail($_POST["Email"]);
            $user->setPassword($_POST["mdp"]);
            $user->setIdrole(2);
            $user->save();
        }
    }

    public function updateAction($id = NULL)
    {
        $user = User::findFirst($id);
        $this->view->setVar("updateUser", $user);

        if(isset($_POST["prenom"], $_POST['nom'], $_POST['login'], $_POST['Email'], $_POST['idrole'])) {
            $user->setFirstname($_POST["prenom"]);
            $user->setLastname($_POST["nom"]);
            $user->setLogin($_POST["login"]);
            $user->setEmail($_POST["Email"]);
            $user->setPassword($_POST["mdp"]);
            $user->setIdrole(2);
            $user->save();
        }

    }

    public function showAction($id)
    {
        $user = User::findFirst($id);
        $this->view->setVar("showUser", $user);
    }

    public function messageAction()
    {

    }
}

