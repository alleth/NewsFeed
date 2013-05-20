<?php
    include 'dao/profileDAO.php';

    session_start();
    $Username = $_SESSION['username'];

    $action = new profileDAO();
    $action->viewProfile($Username);

?>