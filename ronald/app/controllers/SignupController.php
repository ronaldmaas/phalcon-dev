<?php

class SignupController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function registerAction()
    {
        $user = new Users();

        $success = $user->save($this->request->getPost(), array('name', 'email'));

        if ($success) {
            echo "Thanks for registering!";
        } else {
            echo "Sorry, the following problems were generatd: ";
            foreach ($user->getMessages() as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }

        $this->view->disable();
    }

}

