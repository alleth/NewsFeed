<?php
    include 'dao/SystemDAO.php';

    session_start();
    $Username = $_SESSION['username'];

    $searchF = $_POST['Firstname'];

    $action = new SystemDAO();
    $action->srchFriends($Username, $searchF);
?>
