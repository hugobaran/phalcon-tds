<?php

class UsersController extends ControllerBase
{

    public function indexAction()
    {
        $users = User::find();
        $this->view->setVar("users", $users);
    }

    public function formAction()
    {

    }

    public function updateAction()
    {

    }

    public function deleteAction()
    {

    }

    public function messageAction()
    {

    }
}

