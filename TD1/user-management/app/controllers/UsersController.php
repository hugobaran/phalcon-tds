<?php

class UsersController extends ControllerBase
{

    public function indexAction($page=1, $sField="firstname", $sens="asc", $filter=NULL)
    {
        $users = User::find();
        $this->view->setVar("users", $users);
    }

    public function formAction($id=NULL)
    {

    }

    public function updateAction($id=NULL)
    {
        $user = User::findFirst($id);
        $this->view->setVar("updateUser", $user);
    }

    public function deleteAction($id)
    {

    }

    public function messageAction()
    {

    }
}

