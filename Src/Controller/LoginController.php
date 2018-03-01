<?php

    namespace Src\Controller;


    /**
     * Class LoginController
     *
     * @package Src\Controller
     */
    class LoginController extends Controller
    {
        public function __construct()
        {
            parent::__construct();
            if (isset($_POST)) {
                $this->connect();
            }
        }
            public function connect()
        {
            if (isset($_POST['user']) AND $_POST['user'] ===  "Alex" AND isset($_POST['password']) AND $_POST['password'] === "kangourou") {
                $_SESSION['is_connected'] = true;
                $_SESSION['user'] = $_POST['user'];
                $_SESSION['password'] = $_POST['password'];
                header('location: /?page=logout');
            }
        }
    }