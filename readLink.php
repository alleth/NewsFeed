<?php

    include 'dao/SystemDAO.php';


    $id = $_POST['id'];

    $action = new SystemDAO();
    $action->readLink($id);


?>