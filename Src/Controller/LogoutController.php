<?php

    namespace Src\Controller;


    /**
     * Class LogoutController
     *
     * @package Src\Controller
     */
    class LogoutController extends Controller
    {
        public function __construct()
        {
            parent::__construct();
            if (!isset($_SESSION['is_connected']) OR $_SESSION['is_connected'] !== true){
                die('Die hacker !!!!!!');
            }
        }

        public function destroy(){
            session_destroy();
            header('location: /');
        }
    }