<?php
    namespace Controllers;

    use DAO\UserDAO as UserDAO;
    use Models\User as User;

    class UserController
    {
        private $userDAO;

        public function __construct()
        {
            $this->userDAO = new UserDAO();
        }

        public function Login($userName=null, $password=null)
        {
            $user = $this->userDAO->GetByUserName($userName);

            if(($user != null) && ($user->getPassword() === $password))
            {
                $_SESSION["loggedUser"] = $user;
                header("Location: " . FRONT_ROOT );
            }
            else
                $this->Logout();
        }
        
        public function Logout()
        {           
            session_destroy();
            require_once(VIEWS_PATH."home.php");  
        }
    }
?>